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
        $restaurants = Restaurant::all();
        // random number between # and #
        $num_of_foods = rand(5, 20);

        foreach ($restaurants as $restaurant) {

            for ($i = 0; $i < $num_of_foods; $i++) {
                $food_name = $faker->word();
                $food_image = null; // Commented out for now
                $food_description = $faker->sentence();
                $food_price = $faker->randomFloat(2, 5, 50);
                $food_course = $faker->randomElement(['Antipasto', 'Primo', 'Secondo', 'Contorno', 'Dolce', 'Bevanda']);
                $food_is_available = true;
    
                // Food 
                $food = Food::create([
                    'name' => $food_name,
                    'image' => $food_image,
                    'description' => $food_description,
                    'price' => $food_price,
                    'course' => $food_course,
                    'is_available' => $food_is_available,
                    'restaurant_id' => $restaurant->id,
                ]);
    
                // Food_detail
                $food_details = Food_detail::create([
                    'spicy' => $faker->boolean(),
                    'gluten_free' => $faker->boolean(),
                    'kcal' => $faker->numberBetween(100, 2000),
                    'food_id' => $food->id,
                ]);
            }
        }
    }
}
