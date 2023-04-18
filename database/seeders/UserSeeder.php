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

        // USER 1
        $user1 = User::create([
            'name' => 'admin',
            'surname' => 'admin',
            'email' => 'admin@admin',
            'password' => bcrypt('password'),
        ]);

        // RESTAURANT 1 - ITALIANO - MESSICANO
        $restaurant1 = Restaurant::create([
            'name' => 'El Baffo Criminal',
            'image' => null,
            'address' => 'Via dei Sentieri, 10',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'user_id' => $user1->id,
        ]);
        
        $restaurant1->types()->attach([1, 2]);

        // USER 2

        $user2 = User::create([
            'name' => 'admin',
            'surname' => 'admin',
            'email' => 'admin2@admin2',
            'password' => bcrypt('password'),
        ]);

        // RESTAURANT 2 - ITALIANO - VEGETARIANO
        $restaurant2 = Restaurant::create([
            'name' => 'La Foglia',
            'image' => null,
            'address' => 'Via del legname, 12',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'user_id' => $user2->id,
        ]);
        
        $restaurant2->types()->attach([1, 5]);

        // USER 3
        $user3 = User::create([
            'name' => 'admin',
            'surname' => 'admin',
            'email' => 'admin3@admin3',
            'password' => bcrypt('password'),
        ]);

        // RESTAURANT 3 - MESSICANO
        $restaurant3 = Restaurant::create([
            'name' => 'Chupitòn',
            'image' => null,
            'address' => 'Via del deserto, 13',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'user_id' => $user3->id,
        ]);
        
        $restaurant3->types()->attach([2]);

        // USER 4

        $user4 = User::create([
            'name' => 'admin',
            'surname' => 'admin',
            'email' => 'admin4@admin4S',
            'password' => bcrypt('password'),
        ]);

        // RESTAURANT 4 - GIAPPONESE
        $restaurant4 = Restaurant::create([
            'name' => 'Gohan',
            'image' => null,
            'address' => 'Via dei Chicchi di Riso, 12',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'user_id' => $user4->id,
        ]);
        
        $restaurant4->types()->attach([3]);

        // USER 5

        $user5 = User::create([
            'name' => 'admin',
            'surname' => 'admin',
            'email' => 'admin5@admin5',
            'password' => bcrypt('password'),
        ]);

        // RESTAURANT 5 - GIAPPONESE - CINESE
        $restaurant5 = Restaurant::create([
            'name' => 'Skylin',
            'image' => null,
            'address' => 'Via Tokyo, 12',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'user_id' => $user5->id,
        ]);
        
        $restaurant5->types()->attach([3, 4]);

        // USER 6

        $user6 = User::create([
            'name' => 'admin',
            'surname' => 'admin',
            'email' => 'admin6@admin6',
            'password' => bcrypt('password'),
        ]);

        // RESTAURANT 6 - CINESE
        $restaurant6 = Restaurant::create([
            'name' => 'Feng-Shan',
            'image' => null,
            'address' => 'Via della Seta, 12',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'user_id' => $user6->id,
        ]);
        
        $restaurant6->types()->attach([4]);

        // USER 7

        $user7 = User::create([
            'name' => 'admin',
            'surname' => 'admin',
            'email' => 'admin7@admin7',
            'password' => bcrypt('password'),
        ]);

        // RESTAURANT 7 - AMERICANA - HAMBURGER
        $restaurant7 = Restaurant::create([
            'name' => 'Hustler Pub',
            'image' => null,
            'address' => 'Via dei Pub, 12',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'user_id' => $user7->id,
        ]);
        
        $restaurant7->types()->attach([6, 11]);

        // USER 8

        $user8 = User::create([
            'name' => 'admin',
            'surname' => 'admin',
            'email' => 'admin8@admin8',
            'password' => bcrypt('password'),
        ]);

        // RESTAURANT 8 - ARABA - KEBAB
        $restaurant8 = Restaurant::create([
            'name' => 'Kebab da Frank',
            'image' => null,
            'address' => 'Via Impero Ottomano, 12',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'user_id' => $user8->id,
        ]);
        
        $restaurant8->types()->attach([7, 13]);

        // USER 9

        $user9 = User::create([
            'name' => 'admin',
            'surname' => 'admin',
            'email' => 'admin9@admin9',
            'password' => bcrypt('password'),
        ]);

        // RESTAURANT 9 - COREANA - CINESE
        $restaurant9 = Restaurant::create([
            'name' => 'JPOP',
            'image' => null,
            'address' => 'Via dei cantanti, 12',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'user_id' => $user9->id,
        ]);
        
        $restaurant9->types()->attach([8, 4]);

        // USER 10

        $user10 = User::create([
            'name' => 'admin',
            'surname' => 'admin',
            'email' => 'admin10@admin10',
            'password' => bcrypt('password'),
        ]);

        // RESTAURANT 10 - FRANCESE
        $restaurant10 = Restaurant::create([
            'name' => 'La Parigina',
            'image' => null,
            'address' => 'Via dei Parigini, 12',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'user_id' => $user10->id,
        ]);
        
        $restaurant10->types()->attach([9]);

        // USER 11

        $user11 = User::create([
            'name' => 'admin',
            'surname' => 'admin',
            'email' => 'admin11@admin11',
            'password' => bcrypt('password'),
        ]);

        // RESTAURANT 11 - GRECA - VEGETARIANA
        $restaurant11 = Restaurant::create([
            'name' => 'GreenGyros',
            'image' => null,
            'address' => 'Via degli Ortodossi, 12',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'user_id' => $user11->id,
        ]);
        
        $restaurant11->types()->attach([5, 10]);

        // USER 12

        $user12 = User::create([
            'name' => 'admin',
            'surname' => 'admin',
            'email' => 'admin12@admin12',
            'password' => bcrypt('password'),
        ]);

        // RESTAURANT 12 - INDIANA
        $restaurant12 = Restaurant::create([
            'name' => 'Rajehsh',
            'image' => null,
            'address' => 'Via delle Caste, 12',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'user_id' => $user12->id,
        ]);
        
        $restaurant12->types()->attach([12]);

        // USER 13

        $user13 = User::create([
            'name' => 'admin',
            'surname' => 'admin',
            'email' => 'admin13@admin13',
            'password' => bcrypt('password'),
        ]);

        // RESTAURANT 13 - KEBAB
        $restaurant13 = Restaurant::create([
            'name' => 'PitaClubKebab',
            'image' => null,
            'address' => 'Via del Sacro Romano Impero, 12',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'user_id' => $user13->id,
        ]);
        
        $restaurant13->types()->attach([13]);

        // USER 14

        $user14 = User::create([
            'name' => 'admin',
            'surname' => 'admin',
            'email' => 'admin14@admin14',
            'password' => bcrypt('password'),
        ]);

        // RESTAURANT 14 PERUVIANA
        $restaurant14 = Restaurant::create([
            'name' => 'da Brandon',
            'image' => null,
            'address' => 'Via Milano, 12',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'user_id' => $user14->id,
        ]);
        
        $restaurant14->types()->attach([14]);

        // USER 15

        $user15 = User::create([
            'name' => 'admin',
            'surname' => 'admin',
            'email' => 'admin15@admin15',
            'password' => bcrypt('password'),
        ]);

        // RESTAURANT 15 - INDIANA - VEGETARIANA
        $restaurant15 = Restaurant::create([
            'name' => 'BellyBhudda',
            'image' => null,
            'address' => 'Via del Curry, 12',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'user_id' => $user15->id,
        ]);
        
        $restaurant15->types()->attach([12, 5]);

        // USER 16

        $user16 = User::create([
            'name' => 'admin',
            'surname' => 'admin',
            'email' => 'admin16@admin16',
            'password' => bcrypt('password'),
        ]);

        // RESTAURANT 16 - VEGETARIANA
        $restaurant16 = Restaurant::create([
            'name' => 'Patate normanne',
            'image' => null,
            'address' => 'Via dei Pentiti, 12',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'user_id' => $user16->id,
        ]);
        
        $restaurant16->types()->attach([5]);

        



        
       

        // // -------------------------------------------------
        // // 20 random users
        // for ($i = 0; $i < 20; $i++) {
        //     // USER KEYS assignment
        //     $user_name = $faker->firstName();
        //     $user_surname = $faker->lastName();
        //     $user_email = $faker->unique()->email(50);
        //     $user_password = bcrypt('password');
        //     // Proper password for later
        //     // $user_password = bcrypt($faker->password()); 


        //     // USER CREATION
        //     $user = User::create([
        //         'name' => $user_name,
        //         'surname' => $user_surname,
        //         'email' => $user_email,
        //         'password' => $user_password,
        //     ]);

        //     // RESTAURANT KEYS assignment
        //     $restaurant_name = $faker->company();
        //     $restaurant_address = $faker->address();
        //     // generates a string with numbers between 0 - 9, with exaclty 11 length.
        //     $restaurant_PIVA = $faker->unique()->regexify('[0-9]{11}');
        //     $restaurant_image = null; // Commented out for now

        //     // RESTAURANT CREATION
        //     $restaurant = Restaurant::create([
        //         'name' => $restaurant_name,
        //         'image' => $restaurant_image,
        //         'address' => $restaurant_address,
        //         'PIVA' => $restaurant_PIVA,
        //         'user_id' => $user->id,
        //     ]);

        //     // randomly select a number of types for this restaurant
        //     $num_types = rand(1, count($types));
        //     $restaurant_types = $types->random($num_types);

        //     // attach the selected types to the restaurant
        //     $restaurant->types()->attach($restaurant_types);
        // }
    }
}
