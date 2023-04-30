<?php

namespace Database\Seeders;

use App\Models\Food;
use App\Models\Order;
use App\Models\Restaurant;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Helpers
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $faker->locale('it_IT'); // set the locale to Italian

        // GET ALL RESTAURANTS
        $restaurants = Restaurant::all(); // get all restaurants
        $restaurant_count = count($restaurants);

        $orders = [];
        for ($i = 0; $i < 2400; $i++) { // example loop to generate 10 orders

            // RESTAURANT
            $restaurant_id = random_int(1, $restaurant_count); // assign a random restaurant_id between 1 and $restaurant_count
            $foods = Food::where('restaurant_id', $restaurant_id)->get(); // get every food that has that restaurant_id

            // Get the delivery cost for the selected restaurant
            $restaurant = Restaurant::find($restaurant_id);
            $prezzo_spedizione = $restaurant->prezzo_spedizione;

            // FOODS
            $max_foods_per_order = 4; // Set maximum number of foods per order
            $num_foods = random_int(1, $max_foods_per_order); // num_foods = how many foods i got in my order


            // -----DONT READ THIS (only check if error in --seed)-----
            // // Select a random set of food items from the retrieved list of foods for the selected restaurant
            // $order_foods = $foods->random($num_foods);
            // -----DONT READ THIS-----


            // Add quantity between 1-5 to each food item
            // This code basically creates $order_foods with a random number of foods given by $num_foods, and adds a 'quantity' key to each food (with a value between 1 and 5)
            $order_foods = $foods->random($num_foods)->map(function ($food) use ($faker) {
                $quantity = random_int(1, 5); // set a random quantity for each food item
                $food['quantity'] = $quantity;
                return $food;
            });

            // Calculate total price based on the foods in the order
            $total_price = 0;
            foreach ($order_foods as $food) {
                $total_price += $food->price * $food->quantity;
            }

            // Add delivery cost to the total price
            $total_price += $prezzo_spedizione;

            // GENERATE A RANDOM STATUS based on a 85% chance of being consegnato and 15% cancellato, if cancellato rating = null
            $status = (rand(0, 99) < 85) ? 'Consegnato' : 'Cancellato'; // generate random status
            $rating = ($status == 'Cancellato') ? null : random_int(1, 10); // set rating based on status

            // -----------------DELIVERY CONTACT START-----------------
            $carrier_codes = [
                '327', '328', '329', // TIM
                '330', '331', '333', '334', '335', '336', '337', '338', '339', // Vodafone Italia
                '340', '341', '342', '343', '344', '345', '346', '347', '348', '349', // Wind Tre
                '350', '351', '352', '353', '354', '355', '356', '357', '358', '359' // Iliad Italia
            ];

            $carrier_code = $faker->randomElement($carrier_codes); // Get one random 3 digit from carrier_codes
            $random_digits = $faker->numerify('#######'); // generates 7 random digits
            // -----------------DELIVERY CONTACT END-----------------


            $order = [
                'total_price' => $total_price,
                'status' => $status,
                'rating' => $rating,
                'delivery_address' => $faker->streetAddress,
                'delivery_contact' =>  $carrier_code . $random_digits, // add $carrier_code and $random_digits to get a full number
                'costumer_name' => $faker->name(),
                'foods' => $order_foods,
                'order_date' => \DateTime::createFromFormat('d-m-Y H:i:s', $faker->dateTimeBetween('-1 years', 'now')->format('d-m-Y H:i:s')),
                'rate_token' => $faker->unique()->uuid, // add a unique rate token for each order
            ];

            $orders[] = $order;
        }

        // NEW ORDE INSTANCE
        foreach ($orders as $orderData) {
            $order = new Order();
            $order->total_price = $orderData['total_price'];
            $order->status = $orderData['status'];
            $order->rating = $orderData['rating'];
            $order->delivery_address = $orderData['delivery_address'];
            $order->delivery_contact = $orderData['delivery_contact'];
            $order->costumer_name = $orderData['costumer_name'];
            $order->order_date = $orderData['order_date'];
            $order->rate_token = $orderData['rate_token'];
            $order->save();

            foreach ($orderData['foods'] as $food) {
                $order->foods()->attach($food['id'], ['quantity' => $food['quantity']]);
            }
        }
    }
}
