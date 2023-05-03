<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use App\Models\Type;
use App\Models\User;
use Carbon\Carbon;
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
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 1 - ITALIANO - MESSICANO
        $restaurant1 = Restaurant::create([
            'name' => 'El Baffo Criminal',
            'image' => '/restaurant/1.jpg',
            'address' => 'Via dei Sentieri, 10',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 2.99,
            'user_id' => $user1->id,
        ]);

        $restaurant1->types()->attach([1, 2]);

        // USER 2
        $user2 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'lafoglia@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 2 - ITALIANO - VEGETARIANO
        $restaurant2 = Restaurant::create([
            'name' => 'La Foglia',
            'image' => '/restaurant/2.jpg',
            'address' => 'Via del legname, 12',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 1.99,
            'user_id' => $user2->id,
        ]);

        $restaurant2->types()->attach([1, 5]);

        // USER 3
        $user3 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'ilmulino@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 3 - ITALIANO - AMERICANO
        $restaurant3 = Restaurant::create([
            'name' => 'Il Mulino New York',
            'image' => '/restaurant/3.jpg',
            'address' => 'Via Brera, 13',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 1.89,
            'user_id' => $user3->id,
        ]);

        $restaurant3->types()->attach([1, 6]);

        // USER 4
        $user4 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'osteriamorini@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 4 - ITALIANO
        $restaurant4 = Restaurant::create([
            'name' => 'Osteria Morini',
            'image' => '/restaurant/4.jpg',
            'address' => 'Via Brignano, 15',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 0,
            'user_id' => $user4->id,
        ]);

        $restaurant4->types()->attach([1]);

        // USER 5
        $user5 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'chupiton@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 5 - MESSICANO
        $restaurant5 = Restaurant::create([
            'name' => 'Chupitòn',
            'image' => '/restaurant/5.jpg',
            'address' => 'Via del deserto, 13',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 3.99,
            'user_id' => $user5->id,
        ]);

        $restaurant5->types()->attach([2]);

        // USER 6
        $user6 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'elcharro@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 6 - MESSICANO
        $restaurant6 = Restaurant::create([
            'name' => 'El Charro',
            'image' => '/restaurant/6.jpg',
            'address' => 'Via del Carmine, 11',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 0,
            'user_id' => $user6->id,
        ]);

        $restaurant6->types()->attach([2]);

        // USER 7
        $user7 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'lacasitamexicana@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 7 - MESSICANO - HAMBURGER
        $restaurant7 = Restaurant::create([
            'name' => 'La Casita Mexicana',
            'image' => '/restaurant/7.jpg',
            'address' => 'Via Pellegrino Rossi, 93',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 1.99,
            'user_id' => $user7->id,
        ]);

        $restaurant7->types()->attach([2, 11]);

        // USER 8
        $user8 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'elreydeltacovegano@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 8 - MESSICANO - VEGETARIANO
        $restaurant8 = Restaurant::create([
            'name' => 'El Rey del Taco Vegano',
            'image' => '/restaurant/8.jpg',
            'address' => 'Corso di Porta Ticinese, 91',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 2.99,
            'user_id' => $user8->id,
        ]);

        $restaurant8->types()->attach([2, 5]);

        // USER 9
        $user9 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'matsuri@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 9 - GIAPPONESE
        $restaurant9 = Restaurant::create([
            'name' => 'Matsuri',
            'image' => '/restaurant/9.jpg',
            'address' => 'Piazza Santa Maria Beltrade, 5',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 2.89,
            'user_id' => $user9->id,
        ]);

        $restaurant9->types()->attach([3]);

        // USER 10
        $user10 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'katsuya@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 10 - GIAPPONESE
        $restaurant10 = Restaurant::create([
            'name' => 'Katsuya',
            'image' => '/restaurant/10.jpg',
            'address' => 'Via S. Calimero, 61',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 0,
            'user_id' => $user10->id,
        ]);

        $restaurant10->types()->attach([3]);

        // USER 11
        $user11 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'skylin@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 11 - GIAPPONESE - CINESE
        $restaurant11 = Restaurant::create([
            'name' => 'Skylin',
            'image' => '/restaurant/11.jpg',
            'address' => 'Via Monte Napoleone, 65',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 0.49,
            'user_id' => $user11->id,
        ]);

        $restaurant11->types()->attach([3, 4]);

        // USER 12
        $user12 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'fengshan@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 12 - CINESE
        $restaurant12 = Restaurant::create([
            'name' => 'Feng-Shan',
            'image' => '/restaurant/12.jpg',
            'address' => 'Piazzale Guglielmo Marconi, 58',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 1.79,
            'user_id' => $user12->id,
        ]);

        $restaurant12->types()->attach([4]);

        // USER 13
        $user13 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'trattoriagiada@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 13 - CINESE - PERUVIANA
        $restaurant13 = Restaurant::create([
            'name' => 'Trattoria Giada',
            'image' => '/restaurant/13.jpg',
            'address' => 'Via Cesare Correnti, 19',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 0,
            'user_id' => $user13->id,
        ]);

        $restaurant13->types()->attach([4, 14]);

        // USER 14
        $user14 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'hustler_pub@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 14 - AMERICANA - HAMBURGER
        $restaurant14 = Restaurant::create([
            'name' => 'Hustler Pub',
            'image' => '/restaurant/14.jpg',
            'address' => 'Via Lorenteggio, 56',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 1,
            'user_id' => $user14->id,
        ]);

        $restaurant14->types()->attach([6, 11]);

        // USER 15
        $user15 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'kebab_da_frank@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 15 - ARABA - KEBAB
        $restaurant15 = Restaurant::create([
            'name' => 'Kebab da Frank',
            'image' => '/restaurant/15.jpg',
            'address' => 'Piazza del Carmine, 50',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 0,
            'user_id' => $user15->id,
        ]);

        $restaurant15->types()->attach([7, 13]);

        // USER 16
        $user16 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'aladdinseatery@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 16 - ARABA
        $restaurant16 = Restaurant::create([
            'name' => 'Aladdin s Eatery',
            'image' => '/restaurant/16.jpg',
            'address' => 'Piazza del Liberty, 63',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 0,
            'user_id' => $user16->id,
        ]);

        $restaurant16->types()->attach([7]);

        // USER 17
        $user17 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'jpop@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 17 - COREANA - CINESE
        $restaurant17 = Restaurant::create([
            'name' => 'JPOP',
            'image' => '/restaurant/17.jpg',
            'address' => 'Via Molino delle Armi, 12',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 3.99,
            'user_id' => $user17->id,
        ]);

        $restaurant17->types()->attach([8, 4]);

        // USER 18
        $user18 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'oseyo@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 18 - COREANA
        $restaurant18 = Restaurant::create([
            'name' => 'Oseyo',
            'image' => '/restaurant/18.jpg',
            'address' => 'Piazza Leonardo da Vinci, 72',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 1.59,
            'user_id' => $user18->id,
        ]);

        $restaurant18->types()->attach([8]);

        // USER 19
        $user19 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'la_parigina@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 19 - FRANCESE
        $restaurant19 = Restaurant::create([
            'name' => 'La Parigina',
            'image' => '/restaurant/19.jpg',
            'address' => 'Via Filippo Turati, 46',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 4.99,
            'user_id' => $user19->id,
        ]);

        $restaurant19->types()->attach([9]);

        // USER 20
        $user20 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'le_bernardin@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 20 - FRANCESE
        $restaurant20 = Restaurant::create([
            'name' => 'Le Bernardin',
            'image' => '/restaurant/20.jpg',
            'address' => 'Piazza Castello, 90',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 0,
            'user_id' => $user20->id,
        ]);

        $restaurant20->types()->attach([9]);

        // USER 21
        $user21 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'green_gyros@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 21 - GRECA - VEGETARIANA
        $restaurant21 = Restaurant::create([
            'name' => 'GreenGyros',
            'image' => '/restaurant/21.jpg',
            'address' => 'Corso di Porta Ticinese, 77',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 2.99,
            'user_id' => $user21->id,
        ]);

        $restaurant21->types()->attach([10, 5]);

        // USER 22
        $user22 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'erythraia@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 22 - GRECA - VEGETARIANA
        $restaurant22 = Restaurant::create([
            'name' => 'Erythraia',
            'image' => '/restaurant/22.jpg',
            'address' => 'Via Solferino, 75',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 2.49,
            'user_id' => $user22->id,
        ]);

        $restaurant22->types()->attach([5, 10]);

        // USER 23
        $user23 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'chompies_burgers@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 23 - HAMBURGER
        $restaurant23 = Restaurant::create([
            'name' => 'Chompies Burgers',
            'image' => '/restaurant/23.jpg',
            'address' => 'Via Papa Gregorio XIV, 29',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 1.49,
            'user_id' => $user23->id,
        ]);

        $restaurant23->types()->attach([11]);


        // USER 24
        $user24 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'rajehsh@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 24 - INDIANA
        $restaurant24 = Restaurant::create([
            'name' => 'Rajehsh',
            'image' => '/restaurant/24.jpg',
            'address' => 'P.za Parmigiani, 13',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 0.89,
            'user_id' => $user24->id,
        ]);

        $restaurant24->types()->attach([12]);

        // USER 25
        $user25 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'bombay_bistro@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 25 - INDIANA
        $restaurant25 = Restaurant::create([
            'name' => 'Bombay Bistro',
            'image' => '/restaurant/25.jpg',
            'address' => 'Via Filippo Argelati, 80',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 0.79,
            'user_id' => $user25->id,
        ]);

        $restaurant25->types()->attach([12]);

        // USER 26
        $user26 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'pita_club_kebab@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 26 - KEBAB
        $restaurant26 = Restaurant::create([
            'name' => 'Pita Club Kebab',
            'image' => '/restaurant/26.jpg',
            'address' => 'Via S. Calimero, 61',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 1.79,
            'user_id' => $user26->id,
        ]);

        $restaurant26->types()->attach([13]);

        // USER 27
        $user27 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'ali_baba_kebab@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 27 - KEBAB
        $restaurant27 = Restaurant::create([
            'name' => 'Ali Baba Kebab',
            'image' => '/restaurant/27.jpg',
            'address' => 'Via Bologna, 73',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 1.99,
            'user_id' => $user27->id,
        ]);

        $restaurant27->types()->attach([13]);

        // USER 28
        $user28 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'do_re_mi@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 28 PERUVIANA
        $restaurant28 = Restaurant::create([
            'name' => 'Do Re Mi',
            'image' => '/restaurant/28.jpg',
            'address' => 'Via Milano, 12',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 2.99,
            'user_id' => $user28->id,
        ]);

        $restaurant28->types()->attach([14]);

        // USER 29
        $user29 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'el_chorrillano@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 29 PERUVIANA
        $restaurant29 = Restaurant::create([
            'name' => 'El Chorrillano',
            'image' => '/restaurant/29.jpg',
            'address' => 'Via Santa Radegonda, 90',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 1.99,
            'user_id' => $user29->id,
        ]);

        $restaurant29->types()->attach([14]);

        // USER 30
        $user30 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'belly_bhudda@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 30 - INDIANA - VEGETARIANA
        $restaurant30 = Restaurant::create([
            'name' => 'Belly Bhudda',
            'image' => '/restaurant/30.jpg',
            'address' => 'Via Ferrante Aporti, 19',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 2.99,
            'user_id' => $user30->id,
        ]);

        $restaurant30->types()->attach([12, 5]);

        // USER 31
        $user31 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'patate_normanne@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 31 - VEGETARIANA
        $restaurant31 = Restaurant::create([
            'name' => 'Patate normanne',
            'image' => '/restaurant/31.jpg',
            'address' => 'Via dei Pentiti, 12',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 0.89,
            'user_id' => $user31->id,
        ]);

        $restaurant31->types()->attach([5]);

        // USER 32
        $user32 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'Bella_Cucina@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 32 - ITALIANA
        $restaurant32 = Restaurant::create([
            'name' => 'Bella Cucina',
            'image' => '/restaurant/32.jpg',
            'address' => 'Via Dante Alighieri, 12',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 2.99,
            'user_id' => $user32->id,
        ]);

        $restaurant32->types()->attach([1]);

        // USER 33
        $user33 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'Fuego_Mexicano@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 33 - MESSICANA
        $restaurant33 = Restaurant::create([
            'name' => 'Fuego Mexicano',
            'image' => '/restaurant/33.jpg',
            'address' => 'Via Francesco Sforza, 15',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 0.89,
            'user_id' => $user33->id,
        ]);

        $restaurant33->types()->attach([2]);

        // USER 34
        $user34 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'Sakura_Sushi@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 34 - GIAPPONESE
        $restaurant34 = Restaurant::create([
            'name' => 'Sakura Sushi',
            'image' => '/restaurant/34.jpg',
            'address' => 'Via Piero della Francesca, 5',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 1.89,
            'user_id' => $user34->id,
        ]);

        $restaurant34->types()->attach([3]);

        // USER 35
        $user35 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'Silk_Route@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 35 - CINESE
        $restaurant35 = Restaurant::create([
            'name' => 'Silk Route',
            'image' => '/restaurant/35.jpg',
            'address' => 'Via Vitruvio, 20',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 0.89,
            'user_id' => $user35->id,
        ]);

        $restaurant35->types()->attach([4]);

        // USER 36
        $user36 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'Beijing_Bistro@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 36 - VEGETARIANA
        $restaurant36 = Restaurant::create([
            'name' => 'Beijing Bistro',
            'image' => '/restaurant/36.jpg',
            'address' => 'Via Alessandro Volta, 8',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 0.89,
            'user_id' => $user36->id,
        ]);

        $restaurant36->types()->attach([5]);

        // USER 37
        $user37 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'All_American_Diner@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 37 - AMERICANA
        $restaurant37 = Restaurant::create([
            'name' => 'All-American Diner',
            'image' => '/restaurant/37.jpg',
            'address' => 'Piazza Duca, 9',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 1.99,
            'user_id' => $user37->id,
        ]);

        $restaurant37->types()->attach([6]);

        // USER 38 - ITALIANA -  (solo dolci)
        $user38 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'PazziPerIDolci@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 38 - ITALIANA - CINESE (solo dolci)
        $restaurant38 = Restaurant::create([
            'name' => 'Pazzi per i dolci',
            'image' => '/restaurant/38.jpg',
            'address' => 'Piazza dei dolci, 9',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 1.99,
            'user_id' => $user38->id,
        ]);

        $restaurant38->types()->attach([1, 4]);

        // USER 39 - MESSICANO - PERUVIANO
        $user39 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'southCentralAmerica@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 39 - MESSICANO - PERUVIANO
        $restaurant39 = Restaurant::create([
            'name' => 'Center&South',
            'image' => '/restaurant/39.jpg',
            'address' => 'Via dei narcos, 19',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 3.99,
            'user_id' => $user39->id,
        ]);

        $restaurant39->types()->attach([2, 14]);

        // USER 40 - ARABA - AMERICA
        $user40 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'Arabasata@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 40 - ARABA - AMERICANA
        $restaurant40 = Restaurant::create([
            'name' => 'Arabasta',
            'image' => '/restaurant/40.jpg',
            'address' => 'Via dei pirati, 29',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 2.99,
            'user_id' => $user40->id,
        ]);

        $restaurant40->types()->attach([6, 7]);

        // USER 41 - ITALIANA - CINESE
        $user41 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'littleitaly@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 41 -  ITALIANA - CINESE
        $restaurant41 = Restaurant::create([
            'name' => 'Little Italy',
            'image' => '/restaurant/41.jpg',
            'address' => 'Via dei cinesi italiani, 39',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 0,
            'user_id' => $user41->id,
        ]);

        $restaurant41->types()->attach([1, 4]);

        // USER 42 - AMERICANA - COREANA
        $user42 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'koreusa@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 42 -  AMERICANA - COREANA
        $restaurant42 = Restaurant::create([
            'name' => 'Koreusa',
            'image' => '/restaurant/42.jpg',
            'address' => 'Via dei Jpop, 29',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 1.99,
            'user_id' => $user42->id,
        ]);

        $restaurant42->types()->attach([6, 8]);

        // USER 43 - PERUVIANA - COREANA
        $user43 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'coruviana@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 43 -  PERUVIANA - COREANA
        $restaurant43 = Restaurant::create([
            'name' => 'Coruviana',
            'image' => '/restaurant/43.jpg',
            'address' => 'Via del Sole, 19',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 0,
            'user_id' => $user43->id,
        ]);

        $restaurant43->types()->attach([14, 8]);

        // USER 44 - FRANCESE - ARABA
        $user44 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'marsigliese@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 44 -  FRANCESE - ARABA
        $restaurant44 = Restaurant::create([
            'name' => "Saudi's",
            'image' => '/restaurant/44.jpg',
            'address' => 'Via del Mare, 32',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 0.67,
            'user_id' => $user44->id,
        ]);

        $restaurant44->types()->attach([9, 7]);

        // USER 45 - FRANCESE - ARABA
        $user45 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'serbonia@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 45 -  FRANCESE - ARABA
        $restaurant45 = Restaurant::create([
            'name' => 'Serbonia',
            'image' => '/restaurant/45.jpg',
            'address' => 'Via dei Caduti, 1',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 0,
            'user_id' => $user45->id,
        ]);

        $restaurant45->types()->attach([9, 7]);

        // USER 46 - GRECO - INDIANO
        $user46 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'rajesh.greco@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 46 -  GRECO - INDIANO
        $restaurant46 = Restaurant::create([
            'name' => 'Delhi Greek',
            'image' => '/restaurant/46.jpg',
            'address' => 'Via Sparta, 23',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 2.99,
            'user_id' => $user46->id,
        ]);

        $restaurant46->types()->attach([10, 12]);


        // USER 47 - GRECO - INDIANO
        $user47 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'indiaatehns@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 47 -  GRECO - INDIANO
        $restaurant47 = Restaurant::create([
            'name' => "India's Athens",
            'image' => '/restaurant/47.jpg',
            'address' => 'Via Mikonos, 11',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 1.99,
            'user_id' => $user47->id,
        ]);

        $restaurant47->types()->attach([10, 12]);


        // USER 48 - GRECO - INDIANO
        $user48 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'greekbombay@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 48 -  GRECO - INDIANO
        $restaurant48 = Restaurant::create([
            'name' => 'Greek Bombay',
            'image' => '/restaurant/48.jpg',
            'address' => 'Via della Creta, 13',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 0.99,
            'user_id' => $user48->id,
        ]);

        $restaurant48->types()->attach([10, 12]);

        // USER 49 - GRECO - KEBAB
        $user49 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'greekkebab@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 49 -  GRECO - KEBAB
        $restaurant49 = Restaurant::create([
            'name' => 'Greek Kebab',
            'image' => '/restaurant/49.jpg',
            'address' => 'Via dei kebab, 12',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 1.99,
            'user_id' => $user49->id,
        ]);

        $restaurant49->types()->attach([10, 13]);

        // USER 50 - GRECO - KEBAB
        $user50 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'pitagyros@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 50 -  GRECO - KEBAB
        $restaurant50 = Restaurant::create([
            'name' => 'Pita Gyros',
            'image' => '/restaurant/50.jpg',
            'address' => 'Via della carne, 10',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 3.99,
            'user_id' => $user50->id,
        ]);

        $restaurant50->types()->attach([10, 13]);

        // USER 51 - GRECO - KEBAB
        $user51 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'hallumi@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 51 -  GRECO - KEBAB
        $restaurant51 = Restaurant::create([
            'name' => 'Hallumi',
            'image' => '/restaurant/51.jpg',
            'address' => 'Via delle polpette , 20',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 2.99,
            'user_id' => $user51->id,
        ]);

        $restaurant51->types()->attach([10, 13]);

        // USER 52 - GRECO - KEBAB
        $user52 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'souvlaki@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 52 -  GRECO - KEBAB
        $restaurant52 = Restaurant::create([
            'name' => 'Souvlaki',
            'image' => '/restaurant/52.jpg',
            'address' => 'Via delle zingare , 20',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 1.99,
            'user_id' => $user52->id,
        ]);

        $restaurant52->types()->attach([10, 13]);

        // USER 53 - GRECO - KEBAB
        $user53 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'daangelos@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 53 -  GRECO - KEBAB
        $restaurant53 = Restaurant::create([
            'name' => 'da Angelos',
            'image' => '/restaurant/53.jpg',
            'address' => 'Via delle scarpe, 23',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 0,
            'user_id' => $user53->id,
        ]);

        $restaurant53->types()->attach([10, 13]);

        // USER 54 - GRECO - KEBAB
        $user54 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'daMiquelos@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 54 -  GRECO - KEBAB
        $restaurant54 = Restaurant::create([
            'name' => 'da Miquelos',
            'image' => '/restaurant/54.jpg',
            'address' => 'Via Spagna, 21',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 0.99,
            'user_id' => $user54->id,
        ]);

        $restaurant54->types()->attach([10, 13]);

        // USER 55 - GRECO - KEBAB
        $user55 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'lefkada@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 55 -  GRECO - KEBAB
        $restaurant55 = Restaurant::create([
            'name' => 'Lefkada Kebab',
            'image' => '/restaurant/55.jpg',
            'address' => 'Via Parco, 20',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 1.99,
            'user_id' => $user55->id,
        ]);

        $restaurant55->types()->attach([10, 13]);

        // USER 56 - FRANCESE - COREANA
        $user56 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'frenchcorea@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 56 -  FRANCESE - COREANA
        $restaurant56 = Restaurant::create([
            'name' => 'K Paris',
            'image' => '/restaurant/56.jpg',
            'address' => 'Via delle sirne, 81',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 1.99,
            'user_id' => $user56->id,
        ]);

        $restaurant56->types()->attach([9, 8]);

        // USER 57 - FRANCESE - COREANA
        $user57 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'boulangerie-kimbap@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 57 -  FRANCESE - COREANA
        $restaurant57 = Restaurant::create([
            'name' => 'Boulangerie-Kimbap',
            'image' => '/restaurant/57.jpg',
            'address' => 'Via delle baguette, 21',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 1.99,
            'user_id' => $user57->id,
        ]);

        $restaurant57->types()->attach([9, 8]);

        // USER 58 - FRANCESE - COREANA
        $user58 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'kimchi@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 58 -  FRANCESE - COREANA
        $restaurant58 = Restaurant::create([
            'name' => 'Croissant Kimchi',
            'image' => '/restaurant/58.jpg',
            'address' => 'Via delle poste, 44',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 0,
            'user_id' => $user58->id,
        ]);

        $restaurant58->types()->attach([9, 8]);

        // USER 59 - FRANCESE - COREANA
        $user59 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'baguette-bibimbap@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 59 -  FRANCESE - COREANA
        $restaurant59 = Restaurant::create([
            'name' => 'Baguette-Bibimbap',
            'image' => '/restaurant/59.jpg',
            'address' => 'Via delle poste, 44',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 0,
            'user_id' => $user59->id,
        ]);

        $restaurant59->types()->attach([9, 8]);

        // USER 60 - FRANCESE - COREANA
        $user60 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'fromage-kimchi@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 60 -  FRANCESE - COREANA
        $restaurant60 = Restaurant::create([
            'name' => 'Fromage&Kimchi',
            'image' => '/restaurant/60.jpg',
            'address' => 'Via delle stanze, 34',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 1.99,
            'user_id' => $user60->id,
        ]);

        $restaurant60->types()->attach([9, 8]);

        // USER 61 - FRANCESE - COREANA
        $user61 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'escargot-banchan@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 61 -  FRANCESE - COREANA
        $restaurant61 = Restaurant::create([
            'name' => 'Escargot Banchan',
            'image' => '/restaurant/61.jpg',
            'address' => 'Via dei profitti, 34',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 0.99,
            'user_id' => $user61->id,
        ]);

        $restaurant61->types()->attach([9, 8]);

        // USER 62 - FRANCESE - COREANA
        $user62 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'quiche-japchae@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 62 -  FRANCESE - COREANA
        $restaurant62 = Restaurant::create([
            'name' => 'Quiche Japchae',
            'image' => '/restaurant/62.jpg',
            'address' => 'Via dei profitti, 34',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 0,
            'user_id' => $user62->id,
        ]);

        $restaurant62->types()->attach([9, 8]);

        // USER 63 - FRANCESE - COREANA
        $user63 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'creme-Soondubu@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 63 -  FRANCESE - COREANA
        $restaurant63 = Restaurant::create([
            'name' => 'Crème-Soondubu',
            'image' => '/restaurant/63.jpg',
            'address' => 'Via dei delitti, 12',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 0,
            'user_id' => $user63->id,
        ]);

        $restaurant63->types()->attach([9, 8]);

        // USER 64 - FRANCESE - COREANA
        $user64 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'macaron-kimbap@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 64 -  FRANCESE - COREANA
        $restaurant64 = Restaurant::create([
            'name' => 'Macaron&Kimbap',
            'image' => '/restaurant/64.jpg',
            'address' => 'Via Turi, 94',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 0,
            'user_id' => $user64->id,
        ]);

        $restaurant64->types()->attach([9, 8]);

        // USER 65 - FRANCESE - COREANA
        $user65 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'tartinejeyukbokkeum@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 65 -  FRANCESE - COREANA
        $restaurant65 = Restaurant::create([
            'name' => 'Tartine-Jeyuk Bokkeum',
            'image' => '/restaurant/65.jpg',
            'address' => 'Via Turistello, 24',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 0,
            'user_id' => $user65->id,
        ]);

        $restaurant65->types()->attach([9, 8]);

        // USER 66 - FRANCESE - COREANA
        $user66 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'paindemiegimbap@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 66 -  FRANCESE - COREANA
        $restaurant66 = Restaurant::create([
            'name' => 'Pain de mie-Gimbap',
            'image' => '/restaurant/66.jpg',
            'address' => 'Via Castellucci, 56',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 0,
            'user_id' => $user66->id,
        ]);

        $restaurant66->types()->attach([9, 8]);

        // USER 67 - FRANCESE - COREANA
        $user67 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'brie-japchae@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 67 -  FRANCESE - COREANA
        $restaurant67 = Restaurant::create([
            'name' => 'Brie-Japchae',
            'image' => '/restaurant/67.jpg',
            'address' => 'Via Cestello, 23',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 0,
            'user_id' => $user67->id,
        ]);

        $restaurant67->types()->attach([9, 8]);

        // USER 68 - FRANCESE - COREANA
        $user68 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'eclair-tteokbokki@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 68 -  FRANCESE - COREANA
        $restaurant68 = Restaurant::create([
            'name' => 'Éclair-Tteokbokki',
            'image' => '/restaurant/68.jpg',
            'address' => 'Via Milano, 22',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 0,
            'user_id' => $user68->id,
        ]);

        $restaurant68->types()->attach([9, 8]);

        // USER 69 - FRANCESE - COREANA
        $user69 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'beurre-Kalguksu@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 69 -  FRANCESE - COREANA
        $restaurant69 = Restaurant::create([
            'name' => 'Beurre-Kalguksu',
            'image' => '/restaurant/69.jpg',
            'address' => 'Via Cina, 23',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 0,
            'user_id' => $user69->id,
        ]);

        $restaurant69->types()->attach([9, 8]);

        // USER 70 - FRANCESE - COREANA
        $user70 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'pate-jjajangmyeon@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 70 -  FRANCESE - COREANA
        $restaurant70 = Restaurant::create([
            'name' => 'Pâté-Jjajangmyeon',
            'image' => '/restaurant/70.jpg',
            'address' => 'Via dei Preti, 123',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 0,
            'user_id' => $user70->id,
        ]);

        $restaurant70->types()->attach([9, 8]);

        // USER 71 - FRANCESE - COREANA
        $user71 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'ratatouille-japchae@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 71 -  FRANCESE - COREANA
        $restaurant71 = Restaurant::create([
            'name' => 'Ratatouille-Japchae',
            'image' => '/restaurant/71.jpg',
            'address' => 'Via dei Cantanti, 22',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 1.99,
            'user_id' => $user71->id,
        ]);

        $restaurant71->types()->attach([9, 8]);

        // USER 72 - FRANCESE - COREANA
        $user72 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'foiegras-yukgaejang@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 72 -  FRANCESE - COREANA
        $restaurant72 = Restaurant::create([
            'name' => 'Foie gras-Yukgaejang',
            'image' => '/restaurant/72.jpg',
            'address' => 'Via delle Cascate, 24',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 1.99,
            'user_id' => $user72->id,
        ]);

        $restaurant72->types()->attach([9, 8]);

        // USER 73 - FRANCESE - COREANA
        $user73 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'baguette-jajangbap@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 73 -  FRANCESE - COREANA
        $restaurant73 = Restaurant::create([
            'name' => 'Baguette-Jajangbap',
            'image' => '/restaurant/73.jpg',
            'address' => 'Traversa Via Turi, 34',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 2.99,
            'user_id' => $user73->id,
        ]);

        $restaurant73->types()->attach([9, 8]);

        // USER 74 - FRANCESE - COREANA
        $user74 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'cassoulet-kimchi@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 74 -  FRANCESE - COREANA
        $restaurant74 = Restaurant::create([
            'name' => 'Cassoulet-Kimchi',
            'image' => '/restaurant/74.jpg',
            'address' => 'Traversa Via Spada, 76',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 2.99,
            'user_id' => $user74->id,
        ]);

        $restaurant74->types()->attach([9, 8]);

        // USER 75 - FRANCESE - COREANA
        $user75 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'coqauvin-eopbap@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 75 -  FRANCESE - COREANA
        $restaurant75 = Restaurant::create([
            'name' => 'Coq au vin-Jeyuk',
            'image' => '/restaurant/75.jpg',
            'address' => 'Contrada Montrone, 16',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 2.99,
            'user_id' => $user75->id,
        ]);

        $restaurant75->types()->attach([9, 8]);

        // USER 76 - FRANCESE - COREANA
        $user76 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'gateau-korean@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 76 -  FRANCESE - COREANA
        $restaurant76 = Restaurant::create([
            'name' => 'Gâteau&Korean&Chicken',
            'image' => '/restaurant/76.jpg',
            'address' => 'Strada dei salti, 19',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 0.99,
            'user_id' => $user76->id,
        ]);

        $restaurant76->types()->attach([9, 8]);

        // USER 77 - AMERICANA - INDIANA
        $user77 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'Naan-taco@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 77 -  AMERICANA - INDIANA
        $restaurant77 = Restaurant::create([
            'name' => 'Naan-taco',
            'image' => '/restaurant/77.jpg',
            'address' => 'Strada dei pazzi, 22',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 0.99,
            'user_id' => $user77->id,
        ]);

        $restaurant77->types()->attach([6, 12]);

        // USER 78 - AMERICANA - INDIANA
        $user78 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'curry-burger@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 78 -  AMERICANA - INDIANA
        $restaurant78 = Restaurant::create([
            'name' => 'Curry-burger',
            'image' => '/restaurant/78.jpg',
            'address' => 'Via Passeri, 11',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 0.99,
            'user_id' => $user78->id,
        ]);

        $restaurant78->types()->attach([6, 12]);

        // USER 79 - AMERICANA - INDIANA
        $user79 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'mmsala-dog@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 79 -  AMERICANA - INDIANA
        $restaurant79 = Restaurant::create([
            'name' => 'Masala-dog',
            'image' => '/restaurant/79.jpg',
            'address' => 'Via degli Squali, 121',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 0.99,
            'user_id' => $user79->id,
        ]);

        $restaurant79->types()->attach([6, 12]);

        // USER 80 - AMERICANA - INDIANA
        $user80 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'vada-pizza@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 80 -  AMERICANA - INDIANA
        $restaurant80 = Restaurant::create([
            'name' => 'Vada-pizza',
            'image' => '/restaurant/80.jpg',
            'address' => 'Via degli Scorpioni, 11',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 1.99,
            'user_id' => $user80->id,
        ]);

        $restaurant80->types()->attach([6, 12]);

        // USER 81 - AMERICANA - INDIANA
        $user81 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'tandoori-chicken@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 81 -  AMERICANA - INDIANA
        $restaurant81 = Restaurant::create([
            'name' => 'Tandoori-chicken wings',
            'image' => '/restaurant/81.jpg',
            'address' => 'Via dello Spettacolo, 3',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 1.99,
            'user_id' => $user81->id,
        ]);

        $restaurant81->types()->attach([6, 12]);


        // USER 82 - AMERICANA - INDIANA
        $user82 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'chaat-burrito@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 82 -  AMERICANA - INDIANA
        $restaurant82 = Restaurant::create([
            'name' => 'Chaat&burrito',
            'image' => '/restaurant/82.jpg',
            'address' => 'Via dello Sport, 123',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 2.99,
            'user_id' => $user82->id,
        ]);

        $restaurant82->types()->attach([6, 12]);

        // USER 83 - AMERICANA - INDIANA
        $user83 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'dosa-taco@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 83 -  AMERICANA - INDIANA
        $restaurant83 = Restaurant::create([
            'name' => 'Dosa-taco',
            'image' => '/restaurant/83.jpg',
            'address' => 'Via dello Sport, 123',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 3.99,
            'user_id' => $user83->id,
        ]);

        $restaurant83->types()->attach([6, 12]);

        // USER 84 - AMERICANA - INDIANA
        $user84 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'biryani-bowl@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 84 -  AMERICANA - INDIANA
        $restaurant84 = Restaurant::create([
            'name' => 'Biryani&bowl',
            'image' => '/restaurant/84.jpg',
            'address' => 'Via dello Scorrazzo, 1',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 1.99,
            'user_id' => $user84->id,
        ]);

        $restaurant84->types()->attach([6, 12]);

        // USER 85 - AMERICANA - INDIANA
        $user85 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'gulabjamun@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 85 -  AMERICANA - INDIANA
        $restaurant85 = Restaurant::create([
            'name' => 'Gulab&Jamun',
            'image' => '/restaurant/85.jpg',
            'address' => 'Contrada Roma, 21',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 1.99,
            'user_id' => $user85->id,
        ]);

        $restaurant85->types()->attach([6, 12]);

        // USER 86 - AMERICANA - INDIANA
        $user86 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'roti-pita@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 86 -  AMERICANA - INDIANA
        $restaurant86 = Restaurant::create([
            'name' => 'Roti-pita',
            'image' => '/restaurant/86.jpg',
            'address' => 'Contrada Napoli, 21',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 1.99,
            'user_id' => $user86->id,
        ]);

        $restaurant86->types()->attach([6, 12]);

        // USER 87 - AMERICANA - INDIANA
        $user87 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'paneer-sliders@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 87 -  AMERICANA - INDIANA
        $restaurant87 = Restaurant::create([
            'name' => 'Paneer-sliders',
            'image' => '/restaurant/87.jpg',
            'address' => 'Contrada Salerno, 51',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 1.99,
            'user_id' => $user87->id,
        ]);

        $restaurant87->types()->attach([6, 12]);

        // USER 88 - AMERICANA - INDIANA
        $user88 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'papadum-tostadas@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 88 -  AMERICANA - INDIANA
        $restaurant88 = Restaurant::create([
            'name' => 'Papadum-tostadas',
            'image' => '/restaurant/88.jpg',
            'address' => 'Via Temporale, 28',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 1.99,
            'user_id' => $user88->id,
        ]);

        $restaurant88->types()->attach([6, 12]);

        // USER 89 - AMERICANA - INDIANA
        $user89 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'cha-bagel-idi@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 89 -  AMERICANA - INDIANA
        $restaurant89 = Restaurant::create([
            'name' => 'Cha-Bagel',
            'image' => '/restaurant/89.jpg',
            'address' => 'Via Tropicana, 21',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 1.99,
            'user_id' => $user89->id,
        ]);

        $restaurant89->types()->attach([6, 12]);

        // USER 90 - AMERICANA - INDIANA
        $user90 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'idli-bagel@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 90 -  AMERICANA - INDIANA
        $restaurant90 = Restaurant::create([
            'name' => 'Idli&bagel',
            'image' => '/restaurant/90.jpg',
            'address' => 'Via Terrestre, 34',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 2.99,
            'user_id' => $user90->id,
        ]);

        $restaurant90->types()->attach([6, 12]);

        // USER 91 - AMERICANA - INDIANA
        $user91 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'mango-salsa-grill@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 91 -  AMERICANA - INDIANA
        $restaurant91 = Restaurant::create([
            'name' => 'Mango-salsa&Grill',
            'image' => '/restaurant/91.jpg',
            'address' => 'Via Andalusia, 11',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 0,
            'user_id' => $user91->id,
        ]);

        $restaurant91->types()->attach([6, 12]);

        // USER 92 - AMERICANA - INDIANA
        $user92 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'paratha-wrap@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 92 -  AMERICANA - INDIANA
        $restaurant92 = Restaurant::create([
            'name' => 'Paratha-wrap',
            'image' => '/restaurant/92.jpg',
            'address' => 'Via Sentenza, 31',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 0,
            'user_id' => $user92->id,
        ]);

        $restaurant92->types()->attach([6, 12]);

        // USER 93 - AMERICANA - INDIANA
        $user93 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'vhelpuri-buffalo@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 93 -  AMERICANA - INDIANA
        $restaurant93 = Restaurant::create([
            'name' => 'Bhelpuri-buffalo',
            'image' => '/restaurant/93.jpg',
            'address' => 'Via San Ciro, 67',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 0,
            'user_id' => $user93->id,
        ]);

        $restaurant93->types()->attach([6, 12]);

        // USER 94 - AMERICANA - INDIANA
        $user94 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'alootikki-tacos@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 94 -  AMERICANA - INDIANA
        $restaurant94 = Restaurant::create([
            'name' => 'Aloo Tikki-tacos',
            'image' => '/restaurant/94.jpg',
            'address' => 'Via Germania, 167',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 0,
            'user_id' => $user94->id,
        ]);

        $restaurant94->types()->attach([6, 12]);

        // USER 95 - AMERICANA - INDIANA
        $user95 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'biryani-burrito@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 95 -  AMERICANA - INDIANA
        $restaurant95 = Restaurant::create([
            'name' => 'Biryani-burrito',
            'image' => '/restaurant/95.jpg',
            'address' => 'Via Cesare Pavese, 127',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 0,
            'user_id' => $user95->id,
        ]);

        $restaurant95->types()->attach([6, 12]);

        // USER 96 - AMERICANA - INDIANA
        $user96 = User::create([
            'name' => $faker->firstName(),
            'surname' => $faker->lastName(),
            'email' => 'naanwich@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subYear(),
        ]);

        // RESTAURANT 96 -  AMERICANA - INDIANA
        $restaurant96 = Restaurant::create([
            'name' => 'Naan wich',
            'image' => '/restaurant/96.jpg',
            'address' => 'Via Cesare Savonese, 17',
            'PIVA' => $faker->unique()->regexify('[0-9]{11}'),
            'prezzo_spedizione' => 0,
            'user_id' => $user96->id,
        ]);

        $restaurant96->types()->attach([6, 12]);



















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
