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
            'email' => 'admin@admin.com',
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
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'lafoglia@admin.com',
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
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' =>'ilmulino@admin.com',
            'password' => bcrypt('password'),
        ]);

        // RESTAURANT 3 - ITALIANO - AMERICANO
        $restaurant3 = Restaurant::create([
            'name' => 'Il Mulino New York',
            'image' => null,
            'address' => 'Via Brera, 13',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'user_id' => $user3->id,
        ]);

        $restaurant3->types()->attach([1, 6]);

        // USER 4
        $user4 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' =>'osteriamorini@admin.com',
            'password' => bcrypt('password'),
        ]);
        
        // RESTAURANT 4 - ITALIANO
        $restaurant4 = Restaurant::create([
            'name' => 'Osteria Morini',
            'image' => null,
            'address' => 'Via Brignano, 15',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'user_id' => $user4->id,
        ]);
        
        $restaurant4->types()->attach([1]);

        // USER 5
        $user5 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'chupiton@admin.com',
            'password' => bcrypt('password'),
        ]);

        // RESTAURANT 5 - MESSICANO
        $restaurant5 = Restaurant::create([
            'name' => 'Chupitòn',
            'image' => null,
            'address' => 'Via del deserto, 13',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'user_id' => $user5->id,
        ]);
        
        $restaurant5->types()->attach([2]);

        // USER 6
        $user6 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'elcharro@admin.com',
            'password' => bcrypt('password'),
        ]);

        // RESTAURANT 6 - MESSICANO
        $restaurant6 = Restaurant::create([
            'name' => 'El Charro',
            'image' => null,
            'address' => 'Via del Carmine, 11',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'user_id' => $user6->id,
        ]);
        
        $restaurant6->types()->attach([2]);

        // USER 7
        $user7 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'lacasitamexicana@admin.com',
            'password' => bcrypt('password'),
        ]);

        // RESTAURANT 7 - MESSICANO - HAMBURGER
        $restaurant7 = Restaurant::create([
            'name' => 'La Casita Mexicana',
            'image' => null,
            'address' => 'Via Pellegrino Rossi, 93',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'user_id' => $user7->id,
        ]);
        
        $restaurant7->types()->attach([2, 11]);

        // USER 8
        $user8 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'elreydeltacovegano@admin.com',
            'password' => bcrypt('password'),
        ]);

        // RESTAURANT 8 - MESSICANO - VEGETARIANO
        $restaurant8 = Restaurant::create([
            'name' => 'El Rey del Taco Vegano',
            'image' => null,
            'address' => 'Corso di Porta Ticinese, 91',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'user_id' => $user8->id,
        ]);
        
        $restaurant8->types()->attach([2, 5]);

        // USER 9
        $user9 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'matsuri@admin.com',
            'password' => bcrypt('password'),
        ]);

        // RESTAURANT 9 - GIAPPONESE
        $restaurant9 = Restaurant::create([
            'name' => 'Matsuri',
            'image' => null,
            'address' => 'Piazza Santa Maria Beltrade, 5',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'user_id' => $user9->id,
        ]);
        
        $restaurant9->types()->attach([3]);

        // USER 10
        $user10 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'katsuya@admin.com',
            'password' => bcrypt('password'),
        ]);
        
        // RESTAURANT 10 - GIAPPONESE
        $restaurant10 = Restaurant::create([
            'name' => 'Katsuya',
            'image' => null,
            'address' => 'Via S. Calimero, 61',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'user_id' => $user10->id,
        ]);
                
        $restaurant10->types()->attach([3]);

        // USER 11
        $user11 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'skylin@admin.com',
            'password' => bcrypt('password'),
        ]);

        // RESTAURANT 11 - GIAPPONESE - CINESE
        $restaurant11 = Restaurant::create([
            'name' => 'Skylin',
            'image' => null,
            'address' => 'Via Monte Napoleone, 65',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'user_id' => $user11->id,
        ]);
        
        $restaurant11->types()->attach([3, 4]);

        // USER 12
        $user12 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'fengshan@admin.com',
            'password' => bcrypt('password'),
        ]);

        // RESTAURANT 12 - CINESE
        $restaurant12 = Restaurant::create([
            'name' => 'Feng-Shan',
            'image' => null,
            'address' => 'Piazzale Guglielmo Marconi, 58',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'user_id' => $user12->id,
        ]);
        
        $restaurant12->types()->attach([4]);

        // USER 13
        $user13 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'trattoriagiada@admin.com',
            'password' => bcrypt('password'),
        ]);

        // RESTAURANT 13 - CINESE - PERUVIANA
        $restaurant13 = Restaurant::create([
            'name' => 'Trattoria Giada',
            'image' => null,
            'address' => 'Via Cesare Correnti, 19',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'user_id' => $user13->id,
        ]);
        
        $restaurant13->types()->attach([4, 14]);

        // USER 14
        $user14 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'hustler_pub@admin.com',
            'password' => bcrypt('password'),
        ]);

        // RESTAURANT 14 - AMERICANA - HAMBURGER
        $restaurant14 = Restaurant::create([
            'name' => 'Hustler Pub',
            'image' => null,
            'address' => 'Via Lorenteggio, 56',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'user_id' => $user14->id,
        ]);
        
        $restaurant14->types()->attach([6, 11]);

        // USER 15
        $user15 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'kebab_da_frank@admin.com',
            'password' => bcrypt('password'),
        ]);

        // RESTAURANT 15 - ARABA - KEBAB
        $restaurant15 = Restaurant::create([
            'name' => 'Kebab da Frank',
            'image' => null,
            'address' => 'Piazza del Carmine, 50',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'user_id' => $user15->id,
        ]);
        
        $restaurant15->types()->attach([7, 13]);

        // USER 16
        $user16 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'aladdinseatery@admin.com',
            'password' => bcrypt('password'),
        ]);

        // RESTAURANT 16 - ARABA
        $restaurant16 = Restaurant::create([
            'name' => 'Aladdin s Eatery',
            'image' => null,
            'address' => 'Piazza del Liberty, 63',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'user_id' => $user16->id,
        ]);
        
        $restaurant16->types()->attach([7]);

        // USER 17
        $user17 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'jpop@admin.com',
            'password' => bcrypt('password'),
        ]);

        // RESTAURANT 17 - COREANA - CINESE
        $restaurant17 = Restaurant::create([
            'name' => 'JPOP',
            'image' => null,
            'address' => 'Via Molino delle Armi, 12',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'user_id' => $user17->id,
        ]);
        
        $restaurant17->types()->attach([8, 4]);

        // USER 18
        $user18 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'oseyo@admin.com',
            'password' => bcrypt('password'),
        ]);

        // RESTAURANT 18 - COREANA
        $restaurant18 = Restaurant::create([
            'name' => 'Oseyo',
            'image' => null,
            'address' => 'Piazza Leonardo da Vinci, 72',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'user_id' => $user18->id,
        ]);
        
        $restaurant18->types()->attach([8]);

        // USER 19
        $user19 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'la_parigina@admin.com',
            'password' => bcrypt('password'),
        ]);

        // RESTAURANT 19 - FRANCESE
        $restaurant19 = Restaurant::create([
            'name' => 'La Parigina',
            'image' => null,
            'address' => 'Via Filippo Turati, 46',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'user_id' => $user19->id,
        ]);
        
        $restaurant19->types()->attach([9]);

        // USER 20
        $user20 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'le_bernardin@admin.com',
            'password' => bcrypt('password'),
        ]);

        // RESTAURANT 20 - FRANCESE
        $restaurant20 = Restaurant::create([
            'name' => 'Le Bernardin',
            'image' => null,
            'address' => 'Piazza Castello, 90',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'user_id' => $user20->id,
        ]);
        
        $restaurant20->types()->attach([9]);

        // USER 21
        $user21 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'green_gyros@admin.com',
            'password' => bcrypt('password'),
        ]);

        // RESTAURANT 21 - GRECA - VEGETARIANA
        $restaurant21 = Restaurant::create([
            'name' => 'GreenGyros',
            'image' => null,
            'address' => 'Corso di Porta Ticinese, 77',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'user_id' => $user21->id,
        ]);
        
        $restaurant21->types()->attach([10, 5]);

        // USER 22
        $user22 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'erythraia@admin.com',
            'password' => bcrypt('password'),
        ]);

        // RESTAURANT 22 - GRECA - VEGETARIANA
        $restaurant22 = Restaurant::create([
            'name' => 'Erythraia',
            'image' => null,
            'address' => 'Via Solferino, 75',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'user_id' => $user22->id,
        ]);
        
        $restaurant22->types()->attach([10]);

        // USER 23
        $user23 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'chompies_burgers@admin.com',
            'password' => bcrypt('password'),
        ]);
        
        // RESTAURANT 23 - HAMBURGER
        $restaurant23 = Restaurant::create([
            'name' => 'Chompies Burgers',
            'image' => null,
            'address' => 'Via Papa Gregorio XIV, 29',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'user_id' => $user23->id,
        ]);
                
        $restaurant23->types()->attach([11]);
        

        // USER 24
        $user24 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'rajehsh@admin.com',
            'password' => bcrypt('password'),
        ]);

        // RESTAURANT 24 - INDIANA
        $restaurant24 = Restaurant::create([
            'name' => 'Rajehsh',
            'image' => null,
            'address' => 'P.za Parmigiani, 13',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'user_id' => $user24->id,
        ]);
        
        $restaurant24->types()->attach([12]);
        
        // USER 25
        $user25 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'bombay_bistro@admin.com',
            'password' => bcrypt('password'),
        ]);

        // RESTAURANT 25 - INDIANA
        $restaurant25 = Restaurant::create([
            'name' => 'Bombay Bistro',
            'image' => null,
            'address' => 'Via Filippo Argelati, 80',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'user_id' => $user25->id,
        ]);
        
        $restaurant25->types()->attach([12]);

        // USER 26
        $user26 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'pita_club_kebab@admin.com',
            'password' => bcrypt('password'),
        ]);

        // RESTAURANT 26 - KEBAB
        $restaurant26 = Restaurant::create([
            'name' => 'Pita Club Kebab',
            'image' => null,
            'address' => 'Via S. Calimero, 61',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'user_id' => $user26->id,
        ]);
        
        $restaurant26->types()->attach([13]);

        // USER 27
        $user27 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'ali_baba_kebab@admin.com',
            'password' => bcrypt('password'),
        ]);

        // RESTAURANT 27 - KEBAB
        $restaurant27 = Restaurant::create([
            'name' => 'Ali Baba Kebab',
            'image' => null,
            'address' => 'Via Bologna, 73',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'user_id' => $user27->id,
        ]);
        
        $restaurant27->types()->attach([13]);

        // USER 28
        $user28 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'do_re_mi@admin.com',
            'password' => bcrypt('password'),
        ]);

        // RESTAURANT 28 PERUVIANA
        $restaurant28 = Restaurant::create([
            'name' => 'Do Re Mi',
            'image' => null,
            'address' => 'Via Milano, 12',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'user_id' => $user28->id,
        ]);
        
        $restaurant28->types()->attach([14]);

        // USER 29
        $user29 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'el_chorrillano@admin.com',
            'password' => bcrypt('password'),
        ]);

        // RESTAURANT 29 PERUVIANA
        $restaurant29 = Restaurant::create([
            'name' => 'El Chorrillano',
            'image' => null,
            'address' => 'Via Santa Radegonda, 90',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'user_id' => $user29->id,
        ]);
        
        $restaurant29->types()->attach([14]);

        // USER 30
        $user30 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'belly_bhudda@admin.com',
            'password' => bcrypt('password'),
        ]);

        // RESTAURANT 30 - INDIANA - VEGETARIANA
        $restaurant30 = Restaurant::create([
            'name' => 'Belly Bhudda',
            'image' => null,
            'address' => 'Via Ferrante Aporti, 19',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'user_id' => $user30->id,
        ]);
        
        $restaurant30->types()->attach([12, 5]);

        // USER 31
        $user31 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'patate_normanne@admin.com',
            'password' => bcrypt('password'),
        ]);

        // RESTAURANT 31 - VEGETARIANA
        $restaurant31 = Restaurant::create([
            'name' => 'Patate normanne',
            'image' => null,
            'address' => 'Via dei Pentiti, 12',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'user_id' => $user31->id,
        ]);
        
        $restaurant31->types()->attach([5]);

        



        
       

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
