<?php

namespace Database\Seeders;

use App\Models\Food_detail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FoodDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // SEEDER IMPOSTATO PER TESTARE IL FUNZIONAMENTO DELLE CRUDE DI food_details 
        
        $food_details = [
            ['spicy' => true,
            'gluten_free' => false,
            'kcal' => 1500,
        ],
        ];

        foreach ($food_details as $food_detail) {
            $newfood_detail = Food_detail::create([
                'spicy' => $food_detail['total_price'],
                'gluten_free' => $food_detail['status'],
                'kcal' => $food_detail['rating'],
            ]);
        }
    }
}
