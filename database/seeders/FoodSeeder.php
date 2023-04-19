<?php

namespace Database\Seeders;

use App\Models\Food;
use App\Models\Food_detail;
use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Helpers
use Faker\Generator as Faker;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        // CUCINA ITALIANA 1- 10 - TYPE 1

        $food1 = [
            'name' => 'Saltimbocca alla Romana',
            'image' => null,
            'description' => 'fettine di vitello con prosciutto crudo e salvia',
            'price' =>  25,
            'course' => 'Secondo',
            'is_available' => true,
        ];

        // Define the dish details
        $food_details1 = [
            'spicy' => false,
            'gluten_free' => true,
            'kcal' => 800,
        ];

        // Define the list of restaurant IDs
        $restaurant_ids = [1, 2]; //RISTORANTI ITALIANI

        // Loop through the restaurant IDs and create a new dish instance for each one
        foreach ($restaurant_ids as $restaurant_id) {
            // Create the dish instance for this restaurant
            $food = Food::create([
                'name' => $food1['name'],
                'image' => $food1['image'],
                'description' => $food1['description'],
                'price' => $food1['price'],
                'course' => $food1['course'],
                'is_available' => $food1['is_available'],
                'restaurant_id' => $restaurant_id,
            ]);

            // Create the dish details instance for this dish
            $food_details = Food_detail::create([
                'spicy' => $food_details1['spicy'],
                'gluten_free' => $food_details1['gluten_free'],
                'kcal' => $food_details1['kcal'],
                'food_id' => $food->id,
            ]);
        }


        // PIATTO 2
        // Define the dish
        $food2 = [
            'name' => 'Tagliatelle alla Bolognese',
            'image' => null,
            'description' => 'tagliatelle fatte in casa con ragù alla Bolognese',
            'price' =>  18,
            'course' => 'Primo',
            'is_available' => true,
        ];

        // Define the dish details
        $food_details2 = [
            'spicy' => false,
            'gluten_free' => false,
            'kcal' => 600,
        ];

        // Define the list of restaurant IDs
        $restaurant_ids = [1, 2];  //RISTORANTI ITALIANI

        // Loop through the restaurant IDs and create a new dish instance for each one
        foreach ($restaurant_ids as $restaurant_id) {
            // Create the dish instance for this restaurant
            $food = Food::create([
                'name' => $food2['name'],
                'image' => $food2['image'],
                'description' => $food2['description'],
                'price' => $food2['price'],
                'course' => $food2['course'],
                'is_available' => $food2['is_available'],
                'restaurant_id' => $restaurant_id,
            ]);

            // Create the dish details instance for this dish
            $food_details = Food_detail::create([
                'spicy' => $food_details2['spicy'],
                'gluten_free' => $food_details2['gluten_free'],
                'kcal' => $food_details2['kcal'],
                'food_id' => $food->id,
            ]);
        }

        // PIATTO 3
        $food3 = [
            'name' => 'Crocchette di patate piccanti',
            'image' => null,
            'description' => 'Crocchette di patate cremose e piccanti',
            'price' => 20,
            'course' => 'Primo',
            'is_available' => true,
        ];

        // Define the dish details
        $food_details3 = [
            'spicy' => true,
            'gluten_free' => false,
            'kcal' => 700,
        ];

        // Define the list of restaurant IDs
        $restaurant_ids = [1, 2, 16];  //RISTORANTI ITALIANI + VEGETARIANI

        // Loop through the restaurant IDs and create a new dish instance for each one
        foreach ($restaurant_ids as $restaurant_id) {
            // Create the dish instance for this restaurant
            $food = Food::create([
                'name' => $food3['name'],
                'image' => $food3['image'],
                'description' => $food3['description'],
                'price' => $food3['price'],
                'course' => $food3['course'],
                'is_available' => $food3['is_available'],
                'restaurant_id' => $restaurant_id,
            ]);

            // Create the dish details instance for this dish
            $food_details = Food_detail::create([
                'spicy' => $food_details3['spicy'],
                'gluten_free' => $food_details3['gluten_free'],
                'kcal' => $food_details3['kcal'],
                'food_id' => $food->id,
            ]);
        }

        // PIATTO 4

        // Define the properties for the food item
        $food4 = [
            'name' => 'Risotto ai funghi porcini',
            'image' => null,
            'description' => 'risotto cremoso con funghi porcini freschi',
            'price' => 20,
            'course' => 'Primo',
            'is_available' => true,
        ];

        // Define the dietary details for the dish
        $food_details4 = [
            'spicy' => false,
            'gluten_free' => true,
            'kcal' => 700,
        ];

        // Define the list of restaurant IDs
        $restaurant_ids = [1, 2, 16];  //RISTORANTI ITALIANI + VEGETARIANI

        // Loop through the restaurant IDs and create a new dish instance for each one
        foreach ($restaurant_ids as $restaurant_id) {
            // Create the dish instance for this restaurant
            $food = Food::create([
                'name' => $food4['name'],
                'image' => $food4['image'],
                'description' => $food4['description'],
                'price' => $food4['price'],
                'course' => $food4['course'],
                'is_available' => $food4['is_available'],
                'restaurant_id' => $restaurant_id,
            ]);

            // Create the dish details instance for this dish
            $food_details = Food_detail::create([
                'spicy' => $food_details4['spicy'],
                'gluten_free' => $food_details4['gluten_free'],
                'kcal' => $food_details4['kcal'],
                'food_id' => $food->id,
            ]);
        }

        // PIATTO 5

        $food5 = [
            'name' => 'Cotoletta alla Milanese',
            'image' => null,
            'description' => 'cotoletta di vitello impanata e fritta',
            'price' =>  22,
            'course' => 'Secondo',
            'is_available' => true,
        ];

        // Define the dish details
        $food_details5 = [
            'spicy' => false,
            'gluten_free' => false,
            'kcal' => 900,
        ];

        // Define the list of restaurant IDs
        $restaurant_ids = [1, 2];

        // Loop through the restaurant IDs and create a new dish instance for each one
        foreach ($restaurant_ids as $restaurant_id) {
            // Create the dish instance for this restaurant
            $food = Food::create([
                'name' => $food5['name'],
                'image' => $food5['image'],
                'description' => $food5['description'],
                'price' => $food5['price'],
                'course' => $food5['course'],
                'is_available' => $food5['is_available'],
                'restaurant_id' => $restaurant_id,
            ]);

            // Create the dish details instance for this dish
            $food_details = Food_detail::create([
                'spicy' => $food_details5['spicy'],
                'gluten_free' => $food_details5['gluten_free'],
                'kcal' => $food_details5['kcal'],
                'food_id' => $food->id,
            ]);
        }

        // PIATTO 6

        $food6 = [
            'name' => 'Tiramisù',
            'image' => null,
            'description' => 'dolce al cucchiaio con savoiardi, caffè, mascarpone e cacao',
            'price' => 8,
            'course' => 'Dolce',
            'is_available' => true,
        ];

        // Define the dish details
        $food_details6 = [
            'spicy' => false,
            'gluten_free' => false,
            'kcal' => 500,
        ];

        // Define the list of restaurant IDs
        $restaurant_ids = [1, 2];

        // Loop through the restaurant IDs and create a new dish instance for each one
        foreach ($restaurant_ids as $restaurant_id) {
            // Create the dish instance for this restaurant
            $food = Food::create([
                'name' => $food6['name'],
                'image' => $food6['image'],
                'description' => $food6['description'],
                'price' => $food6['price'],
                'course' => $food6['course'],
                'is_available' => $food6['is_available'],
                'restaurant_id' => $restaurant_id,
            ]);

            // Create the dish details instance for this dish
            $food_details = Food_detail::create([
                'spicy' => $food_details6['spicy'],
                'gluten_free' => $food_details6['gluten_free'],
                'kcal' => $food_details6['kcal'],
                'food_id' => $food->id,
            ]);
        }


        // PIATTO 7
        $food7 = [
            'name' => 'Bruschetta al pomodoro',
            'image' => null,
            'description' => 'fette di pane abbrustolite con pomodori freschi, aglio e basilico',
            'price' => 10,
            'course' => 'Antipasto',
            'is_available' => true,
        ];

        // Define the dish details
        $food_details7 = [
            'spicy' => false,
            'gluten_free' => false,
            'kcal' => 300,
        ];

        // Define the list of restaurant IDs
        $restaurant_ids = [1, 2, 5];

        // Loop through the restaurant IDs and create a new dish instance for each one
        foreach ($restaurant_ids as $restaurant_id) {
            // Create the dish instance for this restaurant
            $food = Food::create([
                'name' => $food7['name'],
                'image' => $food7['image'],
                'description' => $food7['description'],
                'price' => $food7['price'],
                'course' => $food7['course'],
                'is_available' => $food7['is_available'],
                'restaurant_id' => $restaurant_id,
            ]);

            // Create the dish details instance for this dish
            $food_details = Food_detail::create([
                'spicy' => $food_details7['spicy'],
                'gluten_free' => $food_details7['gluten_free'],
                'kcal' => $food_details7['kcal'],
                'food_id' => $food->id,
            ]);
        }

        // PIATTO 8

        // Define the dish details
        $food8 = [
            'name' => 'Panna cotta',
            'image' => null,
            'description' => 'dolce al cucchiaio con panna, zucchero e vaniglia',
            'price' => 6,
            'course' => 'Dolce',
            'is_available' => true,
        ];

        // Define the dish details
        $food_details8 = [
            'spicy' => false,
            'gluten_free' => true,
            'kcal' => 400,
        ];

        // Define the list of restaurant IDs
        $restaurant_ids = [1, 2];

        // Loop through the restaurant IDs and create a new dish instance for each one
        foreach ($restaurant_ids as $restaurant_id) {
            // Create the dish instance for this restaurant
            $food = Food::create([
                'name' => $food8['name'],
                'image' => $food8['image'],
                'description' => $food8['description'],
                'price' => $food8['price'],
                'course' => $food8['course'],
                'is_available' => $food8['is_available'],
                'restaurant_id' => $restaurant_id,
            ]);

            // Create the dish details instance for this dish
            $food_details = Food_detail::create([
                'spicy' => $food_details8['spicy'],
                'gluten_free' => $food_details8['gluten_free'],
                'kcal' => $food_details8['kcal'],
                'food_id' => $food->id,
            ]);
        }

        // PIATTO 9
        $food9 = [
            'name' => 'Chianti Classico',
            'image' => null,
            'description' => 'vino rosso toscano a denominazione di origine controllata e garantita',
            'price' => 28,
            'course' => 'Bevanda',
            'is_available' => true,
        ];

        $food_details9 = [
            'spicy' => false,
            'gluten_free' => true,
            'kcal' => 500,
        ];

        $restaurant_ids = [1, 2];

        foreach ($restaurant_ids as $restaurant_id) {
            $food = Food::create([
                'name' => $food9['name'],
                'image' => $food9['image'],
                'description' => $food9['description'],
                'price' => $food9['price'],
                'course' => $food9['course'],
                'is_available' => $food9['is_available'],
                'restaurant_id' => $restaurant_id,
            ]);

            $food_details = Food_detail::create([
                'spicy' => $food_details9['spicy'],
                'gluten_free' => $food_details9['gluten_free'],
                'kcal' => $food_details9['kcal'],
                'food_id' => $food->id,
            ]);
        }

        // PIATTO 10
        $food10 = [
            'name' => 'Insalata Caprese',
            'image' => null,
            'description' => 'insalata fresca con mozzarella di bufala, pomodori e basilico',
            'price' => 12,
            'course' => 'Antipasto',
            'is_available' => true,
        ];

        // Define the dish details
        $food_details10 = [
            'spicy' => false,
            'gluten_free' => true,
            'kcal' => 200,
        ];

        // Define the list of restaurant IDs
        $restaurant_ids = [1, 2];

        // Loop through the restaurant IDs and create a new dish instance for each one
        foreach ($restaurant_ids as $restaurant_id) {
            // Create the dish instance for this restaurant
            $food = Food::create([
                'name' => $food10['name'],
                'image' => $food10['image'],
                'description' => $food10['description'],
                'price' => $food10['price'],
                'course' => $food10['course'],
                'is_available' => $food10['is_available'],
                'restaurant_id' => $restaurant_id,
            ]);

            // Create the dish details instance for this dish
            $food_details = Food_detail::create([
                'spicy' => $food_details10['spicy'],
                'gluten_free' => $food_details10['gluten_free'],
                'kcal' => $food_details10['kcal'],
                'food_id' => $food->id,
            ]);
        }

        // CUCINA MESSICANA  11 - 21- TYPE 2 

        // PIATTO 11
        // Define the properties for the food item
        $food11 = [
            'name' => 'Taco al pastor',
            'image' => null,
            'description' => 'Gustoso taco con carne al pastor, cipolla, coriandolo e salsa piccante',
            'price' => 12,
            'course' => 'Primo',
            'is_available' => true,
        ];

        // Define the dietary details for the dish
        $food_details11 = [
            'spicy' => true,
            'gluten_free' => false,
            'kcal' => 500,
        ];

        // Define the list of restaurant IDs
        $restaurant_ids = [1];

        // Loop through the restaurant IDs and create a new dish instance for each one
        foreach ($restaurant_ids as $restaurant_id) {
            // Create the dish instance for this restaurant
            $food = Food::create([
                'name' => $food11['name'],
                'image' => $food11['image'],
                'description' => $food11['description'],
                'price' => $food11['price'],
                'course' => $food11['course'],
                'is_available' => $food11['is_available'],
                'restaurant_id' => $restaurant_id,
            ]);

            // Create the dish details instance for this dish
            $food_details = Food_detail::create([
                'spicy' => $food_details11['spicy'],
                'gluten_free' => $food_details11['gluten_free'],
                'kcal' => $food_details11['kcal'],
                'food_id' => $food->id,
            ]);
        }

        // PIATTO 12
        // Define the properties for the food item
        $food12 = [
            'name' => 'Enchiladas verdes',
            'image' => null,
            'description' => 'Enchiladas ripiene di pollo con salsa verde, formaggio e panna acida',
            'price' => 18,
            'course' => 'Primo',
            'is_available' => true,
        ];

        // Define the dietary details for the dish
        $food_details12 = [
            'spicy' => true,
            'gluten_free' => false,
            'kcal' => 700,
        ];

        // Define the list of restaurant IDs
        $restaurant_ids = [1];

        // Loop through the restaurant IDs and create a new dish instance for each one
        foreach ($restaurant_ids as $restaurant_id) {
            // Create the dish instance for this restaurant
            $food = Food::create([
                'name' => $food12['name'],
                'image' => $food12['image'],
                'description' => $food12['description'],
                'price' => $food12['price'],
                'course' => $food12['course'],
                'is_available' => $food12['is_available'],
                'restaurant_id' => $restaurant_id,
            ]);

            // Create the dish details instance for this dish
            $food_details = Food_detail::create([
                'spicy' => $food_details12['spicy'],
                'gluten_free' => $food_details12['gluten_free'],
                'kcal' => $food_details12['kcal'],
                'food_id' => $food->id,
            ]);
        }

        // PIATTO 13
        // Define the properties for the food item
        $food13 = [
            'name' => 'Chili con carne',
            'image' => null,
            'description' => 'Speziato chili con carne di manzo, fagioli e peperoncino',
            'price' => 20,
            'course' => 'Secondo',
            'is_available' => true,
        ];

        // Define the dietary details for the dish
        $food_details13 = [
            'spicy' => true,
            'gluten_free' => true,
            'kcal' => 900,
        ];

        // Define the list of restaurant IDs
        $restaurant_ids = [1];

        // Loop through the restaurant IDs and create a new dish instance for each one
        foreach ($restaurant_ids as $restaurant_id) {
            // Create the dish instance for this restaurant
            $food = Food::create([
                'name' => $food13['name'],
                'image' => $food13['image'],
                'description' => $food13['description'],
                'price' => $food13['price'],
                'course' => $food13['course'],
                'is_available' => $food13['is_available'],
                'restaurant_id' => $restaurant_id,
            ]);

            // Create the dish details instance for this dish
            $food_details = Food_detail::create([
                'spicy' => $food_details13['spicy'],
                'gluten_free' => $food_details13['gluten_free'],
                'kcal' => $food_details13['kcal'],
                'food_id' => $food->id,
            ]);
        }

        // PIATTO 14
        // Define the properties for the food item
        $food14 = [
            'name' => 'Tacos al pastor',
            'image' => null,
            'description' => 'Tacos di maiale allo spiedo con cipolle e coriandolo',
            'price' => 22,
            'course' => 'Secondo',
            'is_available' => true,
        ];

        // Define the dietary details for the dish
        $food_details14 = [
            'spicy' => true,
            'gluten_free' => false,
            'kcal' => 850,
        ];

        // Define the list of restaurant IDs
        $restaurant_ids = [1];

        // Loop through the restaurant IDs and create a new dish instance for each one
        foreach ($restaurant_ids as $restaurant_id) {
            // Create the dish instance for this restaurant
            $food = Food::create([
                'name' => $food14['name'],
                'image' => $food14['image'],
                'description' => $food14['description'],
                'price' => $food14['price'],
                'course' => $food14['course'],
                'is_available' => $food14['is_available'],
                'restaurant_id' => $restaurant_id,
            ]);

            // Create the dish details instance for this dish
            $food_details = Food_detail::create([
                'spicy' => $food_details14['spicy'],
                'gluten_free' => $food_details14['gluten_free'],
                'kcal' => $food_details14['kcal'],
                'food_id' => $food->id,
            ]);
        }

        // PIATTO 15
        // Define the properties for the food item
        $food15 = [
            'name' => 'Churros con cioccolato',
            'image' => null,
            'description' => 'Churros fritti con zucchero a velo e salsa al cioccolato',
            'price' => 8,
            'course' => 'Dolce',
            'is_available' => true,
        ];

        // Define the dietary details for the dish
        $food_details15 = [
            'spicy' => false,
            'gluten_free' => false,
            'kcal' => 400,
        ];

        // Define the list of restaurant IDs
        $restaurant_ids = [1];

        // Loop through the restaurant IDs and create a new dish instance for each one
        foreach ($restaurant_ids as $restaurant_id) {
            // Create the dish instance for this restaurant
            $food = Food::create([
                'name' => $food15['name'],
                'image' => $food15['image'],
                'description' => $food15['description'],
                'price' => $food15['price'],
                'course' => $food15['course'],
                'is_available' => $food15['is_available'],
                'restaurant_id' => $restaurant_id,
            ]);

            // Create the dish details instance for this dish
            $food_details = Food_detail::create([
                'spicy' => $food_details15['spicy'],
                'gluten_free' => $food_details15['gluten_free'],
                'kcal' => $food_details15['kcal'],
                'food_id' => $food->id,
            ]);
        }

        // PIATTO 16
        // Define the properties for the food item
        $food16 = [
            'name' => 'Tres Leches',
            'image' => null,
            'description' => 'Dolce di pan di spagna inzuppato in tre tipi di latte',
            'price' => 9,
            'course' => 'Dolce',
            'is_available' => true,
        ];

        // Define the dietary details for the dish
        $food_details16 = [
            'spicy' => false,
            'gluten_free' => false,
            'kcal' => 500,
        ];

        // Define the list of restaurant IDs
        $restaurant_ids = [1];

        // Loop through the restaurant IDs and create a new dish instance for each one
        foreach ($restaurant_ids as $restaurant_id) {
            // Create the dish instance for this restaurant
            $food = Food::create([
                'name' => $food16['name'],
                'image' => $food16['image'],
                'description' => $food16['description'],
                'price' => $food16['price'],
                'course' => $food16['course'],
                'is_available' => $food16['is_available'],
                'restaurant_id' => $restaurant_id,
            ]);

            // Create the dish details instance for this dish
            $food_details = Food_detail::create([
                'spicy' => $food_details16['spicy'],
                'gluten_free' => $food_details16['gluten_free'],
                'kcal' => $food_details16['kcal'],
                'food_id' => $food->id,
            ]);
        }

        // PIATTO 17
        // Define the properties for the food item
        $food17 = [
            'name' => 'Nachos con guacamole',
            'image' => null,
            'description' => 'Nachos croccanti serviti con guacamole fatto in casa',
            'price' => 12,
            'course' => 'Antipasto',
            'is_available' => true,
        ];

        // Define the dietary details for the dish
        $food_details17 = [
            'spicy' => true,
            'gluten_free' => false,
            'kcal' => 600,
        ];

        // Define the list of restaurant IDs
        $restaurant_ids = [1];

        // Loop through the restaurant IDs and create a new dish instance for each one
        foreach ($restaurant_ids as $restaurant_id) {
            // Create the dish instance for this restaurant
            $food = Food::create([
                'name' => $food17['name'],
                'image' => $food17['image'],
                'description' => $food17['description'],
                'price' => $food17['price'],
                'course' => $food17['course'],
                'is_available' => $food17['is_available'],
                'restaurant_id' => $restaurant_id,
            ]);

            // Create the dish details instance for this dish
            $food_details = Food_detail::create([
                'spicy' => $food_details17['spicy'],
                'gluten_free' => $food_details17['gluten_free'],
                'kcal' => $food_details17['kcal'],
                'food_id' => $food->id,
            ]);
        }

        // PIATTO 18
        // Define the properties for the food item
        $food18 = [
            'name' => 'Quesadillas con pollo',
            'image' => null,
            'description' => 'Quesadillas di formaggio e pollo con guacamole e pico de gallo',
            'price' => 14,
            'course' => 'Antipasto',
            'is_available' => true,
        ];

        // Define the dietary details for the dish
        $food_details18 = [
            'spicy' => false,
            'gluten_free' => false,
            'kcal' => 550,
        ];

        // Define the list of restaurant IDs
        $restaurant_ids = [1];

        // Loop through the restaurant IDs and create a new dish instance for each one
        foreach ($restaurant_ids as $restaurant_id) {
            // Create the dish instance for this restaurant
            $food = Food::create([
                'name' => $food18['name'],
                'image' => $food18['image'],
                'description' => $food18['description'],
                'price' => $food18['price'],
                'course' => $food18['course'],
                'is_available' => $food18['is_available'],
                'restaurant_id' => $restaurant_id,
            ]);

            // Create the dish details instance for this dish
            $food_details = Food_detail::create([
                'spicy' => $food_details18['spicy'],
                'gluten_free' => $food_details18['gluten_free'],
                'kcal' => $food_details18['kcal'],
                'food_id' => $food->id,
            ]);
        }


        // PIATTO 19
        // Define the properties for the food item
        $food19 = [
            'name' => 'Nebbiolo',
            'image' => null,
            'description' => 'Un vino rosso secco e corposo, prodotto nella regione di Baja California',
            'price' => 14,
            'course' => 'Bevanda',
            'is_available' => true,
        ];

        // Define the dietary details for the dish
        $food_details19 = [
            'spicy' => false,
            'gluten_free' => false,
            'kcal' => 550,
        ];

        // Define the list of restaurant IDs
        $restaurant_ids = [1];

        // Loop through the restaurant IDs and create a new dish instance for each one
        foreach ($restaurant_ids as $restaurant_id) {
            // Create the dish instance for this restaurant
            $food = Food::create([
                'name' => $food19['name'],
                'image' => $food19['image'],
                'description' => $food19['description'],
                'price' => $food19['price'],
                'course' => $food19['course'],
                'is_available' => $food19['is_available'],
                'restaurant_id' => $restaurant_id,
            ]);

            // Create the dish details instance for this dish
            $food_details = Food_detail::create([
                'spicy' => $food_details19['spicy'],
                'gluten_free' => $food_details19['gluten_free'],
                'kcal' => $food_details19['kcal'],
                'food_id' => $food->id,
            ]);
        }



        // PIATTO 20
        // Define the properties for the food item
        $food20 = [
            'name' => 'Grenache',
            'image' => null,
            'description' => 'Un vino rosso secco e leggero, prodotto principalmente nella regione di Queretaro.',
            'price' => 14,
            'course' => 'Bevanda',
            'is_available' => true,
        ];

        // Define the dietary details for the dish
        $food_details20 = [
            'spicy' => false,
            'gluten_free' => false,
            'kcal' => 550,
        ];

        // Define the list of restaurant IDs
        $restaurant_ids = [1];

        // Loop through the restaurant IDs and create a new dish instance for each one
        foreach ($restaurant_ids as $restaurant_id) {
            // Create the dish instance for this restaurant
            $food = Food::create([
                'name' => $food20['name'],
                'image' => $food20['image'],
                'description' => $food20['description'],
                'price' => $food20['price'],
                'course' => $food20['course'],
                'is_available' => $food20['is_available'],
                'restaurant_id' => $restaurant_id,
            ]);

            // Create the dish details instance for this dish
            $food_details = Food_detail::create([
                'spicy' => $food_details20['spicy'],
                'gluten_free' => $food_details20['gluten_free'],
                'kcal' => $food_details20['kcal'],
                'food_id' => $food->id,
            ]);
        }

        // PIATTO 21
        $food21 = [
            'name' => 'Tecate',
            'image' => null,
            'description' => 'una birra chiara e secca, spesso servita con una fetta di limone',
            'price' => 14,
            'course' => 'Bevanda',
            'is_available' => true,
        ];

        // Define the dietary details for the dish
        $food_details21 = [
            'spicy' => false,
            'gluten_free' => false,
            'kcal' => 550,
        ];

        // Define the list of restaurant IDs
        $restaurant_ids = [1];

        // Loop through the restaurant IDs and create a new dish instance for each one
        foreach ($restaurant_ids as $restaurant_id) {
            // Create the dish instance for this restaurant
            $food = Food::create([
                'name' => $food21['name'],
                'image' => $food21['image'],
                'description' => $food21['description'],
                'price' => $food21['price'],
                'course' => $food21['course'],
                'is_available' => $food21['is_available'],
                'restaurant_id' => $restaurant_id,
            ]);

            // Create the dish details instance for this dish
            $food_details = Food_detail::create([
                'spicy' => $food_details21['spicy'],
                'gluten_free' => $food_details21['gluten_free'],
                'kcal' => $food_details21['kcal'],
                'food_id' => $food->id,
            ]);
        }



        // CUCINA GIAPPONESE  22 - 33 - TYPE 3 



    }
}
