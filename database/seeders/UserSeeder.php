<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use App\Models\Type;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Helpers
use Faker\Generator as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // getting all types:
        $types = Type::all();

        // ADMIN ACCOUNT
        // USER CREATION
        $user = User::create([
            'name' => 'admin',
            'surname' => 'admin',
            'email' => 'admin@admin',
            'password' => bcrypt('password'),
        ]);

        // RESTAURANT CREATION
        $restaurant = Restaurant::create([
            'name' => 'Pizza Kebab',
            'image' => null,
            'address' => 'Via Roma, 10',
            'PIVA' => '12345678911',
            'user_id' => $user->id,
        ]);
        
        $restaurant->types()->attach([1, 11, 13]);

        // -------------------------------------------------
        // 20 random users
        for ($i = 0; $i < 20; $i++) {
            // USER KEYS assignment
            $user_name = $faker->firstName();
            $user_surname = $faker->lastName();
            $user_email = $faker->unique()->email(50);
            $user_password = bcrypt('password');
            // Proper password for later
            // $user_password = bcrypt($faker->password()); 


            // USER CREATION
            $user = User::create([
                'name' => $user_name,
                'surname' => $user_surname,
                'email' => $user_email,
                'password' => $user_password,
            ]);

            // RESTAURANT KEYS assignment
            $restaurant_name = $faker->company();
            $restaurant_address = $faker->address();
            // generates a string with numbers between 0 - 9, with exaclty 11 length.
            $restaurant_PIVA = $faker->unique()->regexify('[0-9]{11}');
            $restaurant_image = null; // Commented out for now

            // RESTAURANT CREATION
            $restaurant = Restaurant::create([
                'name' => $restaurant_name,
                'image' => $restaurant_image,
                'address' => $restaurant_address,
                'PIVA' => $restaurant_PIVA,
                'user_id' => $user->id,
            ]);

            // randomly select a number of types for this restaurant
            $num_types = rand(1, count($types));
            $restaurant_types = $types->random($num_types);

            // attach the selected types to the restaurant
            $restaurant->types()->attach($restaurant_types);
        }
    }
}
