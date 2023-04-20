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

        $foods = [

            // --------------CUCINA ITALIANA 1- 10 - TYPE 1-----------------

            // PIATTO 1
            [
                'name' => 'Saltimbocca alla Romana',
                'image' => '/food/1.jpg',
                'description' => 'fettine di vitello con prosciutto crudo e salvia',
                'price' => 25,
                'course' => 'Secondo',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => true,
                'kcal' => 800,
                'restaurant_ids' => [1, 2, 3, 4], //ITALIANA
            ],
            // PIATTO 2
            [
                'name' => 'Tagliatelle alla Bolognese',
                'image' => '/food/2.jpg',
                'description' => 'tagliatelle fatte in casa con ragù alla Bolognese',
                'price' => 18,
                'course' => 'Primo',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => false,
                'kcal' => 600,
                'restaurant_ids' => [1, 2, 3, 4], //ITALIANA
            ],
            // PIATTO 3
            [
                'name' => 'Crocchette di patate piccanti',
                'image' => '/food/3.jpg',
                'description' => 'Crocchette di patate cremose e piccanti',
                'price' => 20,
                'course' => 'Primo',
                'is_available' => true,
                'spicy' => true,
                'gluten_free' => false,
                'kcal' => 700,
                'restaurant_ids' => [1, 2, 3, 4, 16], //ITALIANA - VEGETARIANA
            ],
            // PIATTO 4
            [
                'name' => 'Risotto ai funghi porcini',
                'image' => '/food/4.jpg',
                'description' => 'risotto cremoso con funghi porcini freschi',
                'price' => 20,
                'course' => 'Primo',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => true,
                'kcal' => 700,
                'restaurant_ids' => [1, 2, 3, 4, 16] //ITALIANA - VEGETARIANA
            ],
            // PIATTO 5
            [
                'name' => 'Cotoletta alla Milanese',
                'image' => '/food/5.jpg',
                'description' => 'cotoletta di vitello impanata e fritta',
                'price' => 22,
                'course' => 'Secondo',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => false,
                'kcal' => 900,
                'restaurant_ids' => [1, 2, 3, 4], //ITALIANA
            ],
            // PIATTO 6
            [
                'name' => 'Tiramisù',
                'image' => '/food/6.jpg',
                'description' => 'dolce al cucchiaio con savoiardi, caffè, mascarpone e cacao',
                'price' => 8,
                'course' => 'Dolce',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => false,
                'kcal' => 500,
                'restaurant_ids' => [1, 2, 3, 4], //ITALIANA
            ],
            // PIATTO 7
            [
                'name' => 'Bruschetta al pomodoro',
                'image' => '/food/7.jpg',
                'description' => 'fette di pane abbrustolite con pomodori freschi, aglio e basilico',
                'price' => 10,
                'course' => 'Antipasto',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => false,
                'kcal' => 300,
                'restaurant_ids' => [1, 2, 3, 4, 16], //ITALIANA - VEGETARIANA
            ],
            // PIATTO 8
            [
                'name' => 'Panna cotta',
                'image' => '/food/8.jpg',
                'description' => 'dolce al cucchiaio con panna, zucchero e vaniglia',
                'price' => 6,
                'course' => 'Dolce',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => true,
                'kcal' => 400,
                'restaurant_ids' => [1, 2, 3, 4], //ITALIANA
            ],
            // PIATTO 9
            [
                'name' => 'Chianti Classico',
                'image' => '/food/9.jpg',
                'description' => 'vino rosso toscano a denominazione di origine controllata e garantita',
                'price' => 28,
                'course' => 'Bevanda',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => true,
                'kcal' => 500,
                'restaurant_ids' => [1, 2, 3, 4, 16], //ITALIANA - VEGETARIANA
            ],
            // PIATTO 10
            [
                'name' => 'Insalata Caprese',
                'image' => '/food/10.jpg',
                'description' => 'insalata fresca con mozzarella di bufala, pomodori e basilico',
                'price' => 12,
                'course' => 'Antipasto',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => true,
                'kcal' => 200,
                'restaurant_ids' => [1, 2, 3, 4, 16], //ITALIANA - VEGETARIANA
            ],
            // --------------CUCINA ITALIANA FINE------------------------------

            //-------------- CUCINA MESSICANA  11 - 21- TYPE 2----------------- 
            // PIATTO 11
            [
                'name' => 'Taco al pastor',
                'image' => '/food/11.jpg',
                'description' => 'Gustoso taco con carne al pastor, cipolla, coriandolo e salsa piccante',
                'price' => 12,
                'course' => 'Primo',
                'is_available' => true,
                'spicy' => true,
                'gluten_free' => false,
                'kcal' => 500,
                'restaurant_ids' => [1, 5, 6, 7] // MESSICANA
            ],
            // PIATTO 12
            [
                'name' => 'Enchiladas verdes',
                'image' => '/food/12.jpg',
                'description' => 'Enchiladas ripiene di pollo con salsa verde, formaggio e panna acida',
                'price' => 18,
                'course' => 'Primo',
                'is_available' => true,
                'spicy' => true,
                'gluten_free' => false,
                'kcal' => 700,
                'restaurant_ids' => [1, 5, 6, 7], // MESSICANA
            ],
            // PIATTO 13
            [
                'name' => 'Chili con carne',
                'image' => '/food/13.jpg',
                'description' => 'Speziato chili con carne di manzo, fagioli e peperoncino',
                'price' => 20,
                'course' => 'Secondo',
                'is_available' => true,
                'spicy' => true,
                'gluten_free' => true,
                'kcal' => 900,
                'restaurant_ids' => [1, 5, 6, 7], // MESSICANA
            ],
            // PIATTO 14
            [
                'name' => 'Quesadillas',
                'image' => '/food/14.jpg',
                'description' => 'Tortilla di farina ripiena di formaggio fuso e carne, servita con guacamole e pico de gallo.',
                'price' => 12,
                'course' => 'Secondo',
                'is_available' => true,
                'spicy' => true,
                'gluten_free' => false,
                'kcal' => 850,
                'restaurant_ids' => [1, 5, 6, 7], // MESSICANA
            ],
            // PIATTO 15
            [
                'name' => 'Churros con cioccolato',
                'image' => '/food/15.jpg',
                'description' => 'Churros fritti con zucchero a velo e salsa al cioccolato',
                'price' => 8,
                'course' => 'Dolce',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => false,
                'kcal' => 400,
                'restaurant_ids' => [1, 5, 6, 7, 8, 16], //MESSICANA - VEGETARIANA
            ],
            // PIATTO 16
            [
                'name' => 'Tres Leches',
                'image' => '/food/16.jpg',
                'description' => 'Dolce di pan di spagna inzuppato in tre tipi di latte',
                'price' => 9,
                'course' => 'Dolce',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => false,
                'kcal' => 500,
                'restaurant_ids' => [1, 5, 6, 7, 8, 16], //MESSICANA - VEGETARIANA
            ],
            // PIATTO 17
            [
                'name' => 'Nachos con guacamole',
                'image' => '/food/17.jpg',
                'description' => 'Nachos croccanti serviti con guacamole fatto in casa',
                'price' => 12,
                'course' => 'Antipasto',
                'is_available' => true,
                'spicy' => true,
                'gluten_free' => false,
                'kcal' => 600,
                'restaurant_ids' => [1, 5, 6, 7, 8, 16], //MESSICANA - VEGETARIANA
            ],
            // PIATTO 18
            [
                'name' => 'Quesadillas con pollo',
                'image' => '/food/18.jpg',
                'description' => 'Quesadillas di formaggio e pollo con guacamole e pico de gallo',
                'price' => 14,
                'course' => 'Antipasto',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => false,
                'kcal' => 550,
                'restaurant_ids' => [1, 5, 6, 7], //MESSICANA
            ],
            // PIATTO 19
            [
                'name' => 'Nebbiolo',
                'image' => '/food/19.jpg',
                'description' => 'Un vino rosso secco e corposo, prodotto nella regione di Baja California',
                'price' => 14,
                'course' => 'Bevanda',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => false,
                'kcal' => 550,
                'restaurant_ids' => [1, 5, 6, 7, 8, 16], //MESSICANA - VEGETARIANA
            ],
            // PIATTO 20
            [
                'name' => 'Grenache',
                'image' => '/food/20.jpg',
                'description' => 'Un vino rosso secco e leggero, prodotto principalmente nella regione di Queretaro.',
                'price' => 14,
                'course' => 'Bevanda',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => false,
                'kcal' => 550,
                'restaurant_ids' => [1, 5, 6, 7, 8, 16], //MESSICANA - VEGETARIANA
            ],
            // PIATTO 21
            [
                'name' => 'Tecate',
                'image' => '/food/21.jpg',
                'description' => 'una birra chiara e secca, spesso servita con una fetta di limone',
                'price' => 14,
                'course' => 'Bevanda',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => false,
                'kcal' => 550,
                'restaurant_ids' => [1, 5, 6, 7, 8, 16], //MESSICANA - VEGETARIANA
            ],
            // --------------CUCINA MESSICANA FINE------------------------------

            // --------------CUCINA GIAPPONESE  22 - 32 - TYPE 3----------------
            // PIATTO 22
            [
                'name' => 'Gyoza',
                'image' => '',
                'description' => 'Ravioli giapponesi ripieni di carne o verdure',
                'price' => 6.50,
                'course' => 'Antipasto',
                'is_available' => true,
                'spicy' => true,
                'gluten_free' => false,
                'kcal' => 290,
                'restaurant_ids' => [9, 10, 11],
            ],
            // PIATTO 23
            [
                'name' => 'Edamame',
                'image' => '',
                'description' => 'Soia bollita e salata, tipica inizio pasto giapponese',
                'price' => 3.50,
                'course' => 'Antipasto',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => true,
                'kcal' => 125,
                'restaurant_ids' => [9, 10, 11],
            ],
            // PIATTO 24
            [
                'name' => 'Ramen',
                'image' => '',
                'description' => 'Noodle giapponese servito in brodo di carne o pesce, solitamente condito con carne di maiale, uova e verdure',
                'price' => 9.50,
                'course' => 'Primo',
                'is_available' => true,
                'spicy' => true,
                'gluten_free' => false,
                'kcal' => 500,
                'restaurant_ids' => [9, 10, 11],
            ],
            // PIATTO 25
            [
                'name' => 'Udon',
                'image' => '',
                'description' => 'Noodle giapponese spesso e morbido servito in brodo o saltato con carne, verdure e salsa di soia',
                'price' => 8.70,
                'course' => 'Primo',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => false,
                'kcal' => 600,
                'restaurant_ids' => [9, 10, 11],
            ],
            // PIATTO 26
            [
                'name' => 'Tonkatsu',
                'image' => '',
                'description' => 'Cotoletta di maiale impanata e fritta',
                'price' => 15,
                'course' => 'Secondo',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => false,
                'kcal' => 500,
                'restaurant_ids' => [9, 10, 11],
            ],
            // PIATTO 27
            [
                'name' => 'Gyudon',
                'image' => '',
                'description' => 'Riso e carne di manzo cotta lentamente insieme in una ciotola calda, accompagnata da molti condimenti gustosi come cipolla, zenzero e shichimi togarashi.',
                'price' => 13.50,
                'course' => 'Secondo',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => false,
                'kcal' => 610,
                'restaurant_ids' => [9, 10, 11],
            ],
            // PIATTO 28
            [
                'name' => 'Salmone alla griglia',
                'image' => '',
                'description' => 'Filetto di salmone grigliato con salsa teriyaki e verdure saltate',
                'price' => 12,
                'course' => 'Secondo',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => false,
                'kcal' => 800,
                'restaurant_ids' => [9, 10, 11],
            ],
            // PIATTO 29
            [
                'name' => 'Dorayaki',
                'image' => '',
                'description' => 'Pancake giapponese con ripieno di pasta di fagioli dolci',
                'price' => 3,
                'course' => 'Dolce',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => false,
                'kcal' => 200,
                'restaurant_ids' => [9, 10, 11],
            ],
            // PIATTO 30
            [
                'name' => 'Anmitsu',
                'image' => '',
                'description' => 'Dolce tradizionale giapponese con gelatina di agar-agar, frutta e sciroppo dolce',
                'price' => 5.50,
                'course' => 'Dolce',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => true,
                'kcal' => 200,
                'restaurant_ids' => [9, 10, 11],
            ],
            // PIATTO 31
            [
                'name' => 'Sake Daiginjo',
                'image' => '',
                'description' => 'Delicato e leggermente fruttato, dal gusto equilibrato e persistente.',
                'price' => 30,
                'course' => 'Bevanda',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => true,
                'kcal' => 120,
                'restaurant_ids' => [9, 10, 11],
            ],
            // PIATTO 32
            [
                'name' => 'Matcha latte',
                'image' => '',
                'description' => 'Tè verde in polvere macinato con latte caldo. Ricco di antiossidanti e perfetto per un momento di relax.',
                'price' => 4.50,
                'course' => 'Bevanda',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => true,
                'kcal' => 150,
                'restaurant_ids' => [9, 10, 11],
            ],
            // --------------CUCINA MESSICANA FINE------------------------------
            // PIATTO NUMERO
            // [
            //     'name' => nome prodotto cucina giapponese
            //     'image' => 
            //     'description' => 10 parole sul relativo prodotto
            //     'price' => prezzo del relativo prodotto
            //     'course' => primo
            //     'is_available' => true
            //     'spicy' => 
            //     'gluten_free' => 
            //     'kcal' => 
            //     'restaurant_ids' => [],
            // ],
            // --------------CUCINA GIAPPONESE FINE------------------------------

            // --------------CUCINA PLACEHOLDER  num - num - TYPE num------------
            // --------------CUCINA PLACEHOLDER FINE-----------------------------

        ];

        // ERRORE FAKE DI VSC
        foreach ($foods as $food) {
            $restaurant_ids = $food['restaurant_ids'];
            // ERRORE FAKE DI VSC
            foreach ($restaurant_ids as $restaurant_id) {
                $new_food = new Food;
                $new_food->name = $food['name'];
                $new_food->image = $food['image'];
                $new_food->description = $food['description'];
                $new_food->price = $food['price'];
                $new_food->course = $food['course'];
                $new_food->is_available = $food['is_available'];
                $new_food->restaurant_id = $restaurant_id;
                $new_food->save();
        
                $new_food_detail = new Food_detail;
                $new_food_detail->spicy = $food['spicy'];
                $new_food_detail->gluten_free = $food['gluten_free'];
                $new_food_detail->kcal = $food['kcal'];
                $new_food_detail->food_id = $new_food->id;
                $new_food_detail->save();
            }
        };
        
    }
}
