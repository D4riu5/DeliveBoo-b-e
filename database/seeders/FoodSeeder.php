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
                'image' => '/food/23.jpg',
                'description' => 'Ravioli giapponesi ripieni di carne o verdure',
                'price' => 6.50,
                'course' => 'Antipasto',
                'is_available' => true,
                'spicy' => true,
                'gluten_free' => false,
                'kcal' => 290,
                'restaurant_ids' => [9, 10, 11], //GIAPPONESE
            ],
            // PIATTO 23
            [
                'name' => 'Edamame',
                'image' => '/food/24.jpg',
                'description' => 'Soia bollita e salata, tipica inizio pasto giapponese',
                'price' => 3.50,
                'course' => 'Antipasto',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => true,
                'kcal' => 125,
                'restaurant_ids' => [9, 10, 11], //GIAPPONESE
            ],
            // PIATTO 24
            [
                'name' => 'Ramen',
                'image' => '/food/25.jpg',
                'description' => 'Noodle giapponese servito in brodo di carne o pesce, solitamente condito con carne di maiale, uova e verdure',
                'price' => 9.50,
                'course' => 'Primo',
                'is_available' => true,
                'spicy' => true,
                'gluten_free' => false,
                'kcal' => 500,
                'restaurant_ids' => [9, 10, 11], //GIAPPONESE
            ],
            // PIATTO 25
            [
                'name' => 'Udon',
                'image' => '/food/26.jpg',
                'description' => 'Noodle giapponese spesso e morbido servito in brodo o saltato con carne, verdure e salsa di soia',
                'price' => 8.70,
                'course' => 'Primo',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => false,
                'kcal' => 600,
                'restaurant_ids' => [9, 10, 11], //GIAPPONESE
            ],
            // PIATTO 26
            [
                'name' => 'Tonkatsu',
                'image' => '/food/27.jpg',
                'description' => 'Cotoletta di maiale impanata e fritta',
                'price' => 15,
                'course' => 'Secondo',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => false,
                'kcal' => 500,
                'restaurant_ids' => [9, 10, 11], //GIAPPONESE
            ],
            // PIATTO 27
            [
                'name' => 'Gyudon',
                'image' => '/food/28.jpg',
                'description' => 'Riso e carne di manzo cotta lentamente insieme in una ciotola calda, accompagnata da molti condimenti gustosi come cipolla, zenzero e shichimi togarashi.',
                'price' => 13.50,
                'course' => 'Secondo',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => false,
                'kcal' => 610,
                'restaurant_ids' => [9, 10, 11], //GIAPPONESE
            ],
            // PIATTO 28
            [
                'name' => 'Salmone alla griglia',
                'image' => '/food/29.jpg',
                'description' => 'Filetto di salmone grigliato con salsa teriyaki e verdure saltate',
                'price' => 12,
                'course' => 'Secondo',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => false,
                'kcal' => 800,
                'restaurant_ids' => [9, 10, 11], //GIAPPONESE
            ],
            // PIATTO 29
            [
                'name' => 'Dorayaki',
                'image' => '/food/30.jpg',
                'description' => 'Pancake giapponese con ripieno di pasta di fagioli dolci',
                'price' => 3,
                'course' => 'Dolce',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => false,
                'kcal' => 200,
                'restaurant_ids' => [9, 10, 11], //GIAPPONESE
            ],
            // PIATTO 30
            [
                'name' => 'Anmitsu',
                'image' => '/food/31.jpg',
                'description' => 'Dolce tradizionale giapponese con gelatina di agar-agar, frutta e sciroppo dolce',
                'price' => 5.50,
                'course' => 'Dolce',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => true,
                'kcal' => 200,
                'restaurant_ids' => [9, 10, 11], //GIAPPONESE
            ],
            // PIATTO 31
            [
                'name' => 'Sake Daiginjo',
                'image' => '/food/32.jpg',
                'description' => 'Delicato e leggermente fruttato, dal gusto equilibrato e persistente.',
                'price' => 30,
                'course' => 'Bevanda',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => true,
                'kcal' => 120,
                'restaurant_ids' => [9, 10, 11], //GIAPPONESE
            ],
            // PIATTO 32
            [
                'name' => 'Matcha latte',
                'image' => '/food/33.jpg',
                'description' => 'Tè verde in polvere macinato con latte caldo. Ricco di antiossidanti e perfetto per un momento di relax.',
                'price' => 4.50,
                'course' => 'Bevanda',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => true,
                'kcal' => 150,
                'restaurant_ids' => [9, 10, 11], //GIAPPONESE
            ],
            // --------------CUCINA GIAPPONESE FINE------------------------------

            // --------------CUCINA CINESE 33 - 43 - TYPE 4------------
            // PIATTO 33
            [
                'name' => 'Involtini primavera',
                'image' => '/food/34.jpg',
                'description' => 'Croccanti involtini ripieni di verdure e carne, fritti e serviti con salsa agrodolce.',
                'price' => 4,
                'course' => 'Antipasto',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => false,
                'kcal' => 150,
                'restaurant_ids' => [12, 13, 14], //CINESE
            ],
            // PIATTO 34
            [
                'name' => 'Insalata di alghe',
                'image' => '/food/35.jpg',
                'description' => 'Fresca insalata di alghe croccanti, condita con olio di sesamo e aceto di riso.',
                'price' => 6,
                'course' => 'Antipasto',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => true,
                'kcal' => 100,
                'restaurant_ids' => [12, 13, 14], //CINESE
            ],
            // PIATTO 35
            [
                'name' => 'Zuppa di noodles',
                'image' => '/food/36.jpg',
                'description' => 'Una deliziosa zuppa di noodles di grano con carne di maiale e verdure fresche',
                'price' => 8,50,
                'course' => 'Primo',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => false,
                'kcal' => 350,
                'restaurant_ids' => [12, 13, 14], //CINESE
            ],
            // PIATTO 36
            [
                'name' => 'Ravioli cinesi al vapore',
                'image' => '/food/37.jpg',
                'description' => 'Ravioli di pasta fresca ripieni di carne e verdure, delicatamente cotti al vapore',
                'price' => 9,90,
                'course' => 'Primo',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => false,
                'kcal' => 250,
                'restaurant_ids' => [12, 13, 14], //CINESE
            ],
            // PIATTO 37
            [
                'name' => 'Ma Po Tofu',
                'image' => '/food/38.jpg',
                'description' => 'Una miscela perfetta di sapori piccanti, dolci e salati.',
                'price' => 12.99,
                'course' => 'Secondo',
                'is_available' => true,   
                'spicy' => true,
                'gluten_free' => false,
                'kcal' => 250,
                'restaurant_ids' => [12, 13, 14], //CINESE
            ],
            // PIATTO 38
            [
                'name' => 'Chow Mein di Pollo',
                'image' => '/food/39.jpg',
                'description' => 'Un piatto croccante e saporito perfetto per il pranzo sullo sfizio.',
                'price' => 10.99,
                'course' => 'Secondo',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => false,
                'kcal' => 300,
                'restaurant_ids' => [12, 13, 14], //CINESE
            ],
            // PIATTO 39
            [
                'name' => 'Kung Pao Chicken',
                'image' => '/food/40.jpg',
                'description' => 'Il pollo Kung Pao è un piatto classico e tradizionale che offre una combinazione di sapori unici e speziati.',
                'price' => 14.99,
                'course' => 'Secondo',
                'is_available' => true,
                'spicy' => true,
                'gluten_free' => false,
                'kcal' => 350,
                'restaurant_ids' => [12, 13, 14], //CINESE
            ],
            // PIATTO 40
            [
                'name' => 'Mooncake al sesamo',
                'image' => '/food/41.jpg',
                'description' => 'Delizioso dolce ripieno di pasta di fagioli rossi e semi di sesamo croccanti',
                'price' => 4.50,
                'course' => 'Dolce',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => false,
                'kcal' => 250,
                'restaurant_ids' => [12, 13, 14], //CINESE
            ],
            // PIATTO 41
            [
                'name' => 'Torta di ananas e cocco',
                'image' => '/food/42.jpg',
                'description' => 'Morbida torta con ananas caramellati e cocco grattugiato, perfetta per concludere un pasto in bellezza',
                'price' => 5.90,
                'course' => 'Dolce',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => true,
                'kcal' => 300,
                'restaurant_ids' => [12, 13, 14], //CINESE
            ],
            // PIATTO 42
            [
                'name' => 'Great Wall Shiraz',
                'image' => '/food/43.jpg',
                'description' => 'Vino rosso ricco e corposo con note di frutti di bosco e spezie, abbinamento perfetto con piatti della cucina cinese.',
                'price' => 20,
                'course' => 'Bevanda',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => true,
                'kcal' => 120,
                'restaurant_ids' => [12, 13, 14], //CINESE
            ],
            // PIATTO 43
            [
                'name' => 'Tè verde',
                'image' => '/food/44.jpg',
                'description' => 'Una bevanda salutare e dissetante ricca di antiossidanti e proprietà benefiche per l organismo',
                'price' => 2.50,
                'course' => 'Bevanda',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => true,
                'kcal' => 0,
                'restaurant_ids' => [12, 13, 14], //CINESE
            ],
            // --------------CUCINA CINESE FINE------------------------------

            // --------------CUCINA VEGETARIANA 44 - 52 - TYPE 5-------------
            // PIATTO 44
            [
                'name' => 'Bruschetta ai pomodorini',
                'image' => '/food/45.jpg',
                'description' => 'Deliziosa bruschetta con pomodorini freschi e basilico',
                'price' => 5.50,
                'course' => 'Antipasto',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => true,
                'kcal' => 250,
                'restaurant_ids' => [], //VEGETARIANA
            ],
            // PIATTO 45
            [
                'name' => 'Insalata di quinoa',
                'image' => '/food/46.jpg',
                'description' => 'Insalata fresca con quinoa, verdure e mandorle tostate',
                'price' => 7,
                'course' => 'Antipasto',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => true,
                'kcal' => 300,
                'restaurant_ids' => [], //VEGETARIANA
            ],
            // PIATTO 46
            [
                'name' => 'Spaghetti alla chitarra con pomodoro e basilico',
                'image' => '/food/47.jpg',
                'description' => 'Classici spaghetti con salsa di pomodoro fresco e basilico',
                'price' => 8.50,
                'course' => 'Primo',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => true,
                'kcal' => 350,
                'restaurant_ids' => [], //VEGETARIANA
            ],
            // PIATTO 47
            [
                'name' => 'Risotto ai funghi',
                'image' => '/food/48.jpg',
                'description' => 'Risotto cremoso con funghi porcini e parmigiano',
                'price' => 9.50,
                'course' => 'Primo',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => false,
                'kcal' => 400,
                'restaurant_ids' => [], //VEGETARIANA
            ],
            // PIATTO 48
            [
                'name' => 'Polpette di lenticchie',
                'image' => '/food/49.jpg',
                'description' => 'Polpette di lenticchie con spezie aromatiche e salsa di pomodoro fresco.',
                'price' => 8,
                'course' => 'Secondo',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => true,
                'kcal' => 300,
                'restaurant_ids' => [], //VEGETARIANA
            ],
            // PIATTO 49
            [
                'name' => 'Burger di quinoa e verdure',
                'image' => '/food/50.jpg',
                'description' => 'Burger di quinoa con verdure grigliate, insalata di avocado e hummus.',
                'price' => 9,
                'course' => 'Secondo',
                'is_available' => true,
                'spicy' => true,
                'gluten_free' => true,
                'kcal' => 350,
                'restaurant_ids' => [], //VEGETARIANA
            ],
            // PIATTO 50
            [
                'name' => 'Ratatouille alla provenzale',
                'image' => '/food/51.jpg',
                'description' => 'Questa gustosa ratatouille è un classico della cucina francese a base di zucchine, melanzane, peperoni e pomodori.',
                'price' => 8.50,
                'course' => 'Secondo',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => true,
                'kcal' => 250,
                'restaurant_ids' => [], //VEGETARIANA
            ],
            // PIATTO 51
            [
                'name' => 'Torta di mele vegana',
                'image' => '/food/52.jpg',
                'description' => 'Deliziosa torta di mele a base di ingredienti completamente vegetali',
                'price' => 15,
                'course' => 'Dolce',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => true,
                'kcal' => 350,
                'restaurant_ids' => [], //VEGETARIANA
            ],
            // PIATTO 52
            [
                'name' => 'Tiramisù al cocco senza uova',
                'image' => '/food/53.jpg',
                'description' => 'Un classico tiramisù rivisitato in chiave vegana e gluten-free',
                'price' => 12,
                'course' => 'Dolce',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => true,
                'kcal' => 300,
                'restaurant_ids' => [], //VEGETARIANA
            ],
            // --------------CUCINA VEGETARIANA FINE------------------------------

            // --------------CUCINA AMERICANA 53 - 63 - TYPE 6-------------
            // PIATTO 53
            [
                'name' => 'Buffalo Wings',
                'image' => '/food/54.jpg',
                'description' => 'Ali di pollo piccanti immersi in salsa buffalo, serviti con salsa ranch cremosa.',
                'price' => 8.99,
                'course' => 'Antipasto',
                'is_available' => true,
                'spicy' => true,
                'gluten_free' => false,
                'kcal' => 650,
                'restaurant_ids' => [14], //AMERICANA
            ],
            // PIATTO 54
            [
                'name' => 'Jalapeno Poppers',
                'image' => '/food/55.jpg',
                'description' => 'Peperoncini jalapeno ripieni di formaggio cremoso,fritti in pastella di birra.',
                'price' => 7.99,
                'course' => 'Antipasto',
                'is_available' => true,
                'spicy' => true,
                'gluten_free' => false,
                'kcal' => 450,
                'restaurant_ids' => [14], //AMERICANA
            ],
            // PIATTO 55
            [
                'name' => 'Mac and Cheese',
                'image' => '/food/56.jpg',
                'description' => 'Più che un primo piatto, un simbolo della cucina americana: pasta e formaggio cremosi, dorati al forno.',
                'price' => 11,
                'course' => 'Primo',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => false,
                'kcal' => 550,
                'restaurant_ids' => [14], //AMERICANA
            ],
            // PIATTO 56
            [
                'name' => 'Jambalaya',
                'image' => '/food/57.jpg',
                'description' => 'Piatto tipico della Louisiana, simile alla paella spagnola ma con riso rosso, spezie e (a scelta) carne di maiale, pollo o gamberetti.',
                'price' => 15,
                'course' => 'Primo',
                'is_available' => true,
                'spicy' => true,
                'gluten_free' => false,
                'kcal' => 580,
                'restaurant_ids' => [14], //AMERICANA
            ],
            // PIATTO 57
            [
                'name' => 'BBQ Ribs',
                'image' => '/food/58.jpg',
                'description' => 'Deliziose costine di maiale in salsa BBQ, cotte a bassa temperatura',
                'price' => 25.99,
                'course' => 'Secondo',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => true,
                'kcal' => 850,
                'restaurant_ids' => [14], //AMERICANA
            ],
            // PIATTO 58
            [
                'name' => 'Fried Chicken',
                'image' => '/food/59.jpg',
                'description' => 'Pezzi di pollo fritti, croccanti fuori e succosi dentro',
                'price' => 19,
                'course' => 'Secondo',
                'is_available' => true,
                'spicy' => true,
                'gluten_free' => false,
                'kcal' => 950,
                'restaurant_ids' => [14], //AMERICANA
            ],
            // PIATTO 59
            [
                'name' => 'Steak',
                'image' => '/food/60.jpg',
                'description' => 'Bistecca di manzo cotta alla perfezione, servita con patate al forno',
                'price' => 29.50,
                'course' => 'Secondo',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => true,
                'kcal' => 1200,
                'restaurant_ids' => [14], //AMERICANA
            ],
            // PIATTO 60
            [
                'name' => 'Red Velvet Cake',
                'image' => '/food/61.jpg',
                'description' => 'Delizioso dolce al cacao con una nota di vaniglia, decorato con frosting al formaggio',
                'price' => 25.50,
                'course' => 'Dolce',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => false,
                'kcal' => 400,
                'restaurant_ids' => [14], //AMERICANA
            ],
            // PIATTO 61
            [
                'name' => 'Chocolate Chip Cookies',
                'image' => '/food/62.jpg',
                'description' => 'Biscotti americani classici al cioccolato fondente e noci pecan croccanti',
                'price' => 13,
                'course' => 'Dolce',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => false,
                'kcal' => 200,
                'restaurant_ids' => [14], //AMERICANA
            ],
            // PIATTO 62
            [
                'name' => 'Coca-Cola',
                'image' => '/food/63.jpg',
                'description' => 'La classica bevanda gassata americana, dal sapore unico e inconfondibile',
                'price' => 2.5,
                'course' => 'Bevanda',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => true,
                'kcal' => 140,
                'restaurant_ids' => [14], //AMERICANA
            ],
            // PIATTO 63
            [
                'name' => 'Iced Tea',
                'image' => '/food/64.jpg',
                'description' => 'Bicchiere di tè freddo zuccherato, tipico drink americano per l estate',
                'price' => 3,
                'course' => 'Bevanda',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => true,
                'kcal' => 90,
                'restaurant_ids' => [14], //AMERICANA
            ],
            // --------------CUCINA AMERICANA FINE------------------------------

            // --------------CUCINA ARABA 64 - 74 - TYPE 7-------------
            // PIATTO 64
            [
                'name' => 'Falafel',
                'image' => '/food/65.jpg',
                'description' => 'Crocchette di ceci aromatizzate con spezie mediorientali, ottime con salse',
                'price' => 5,
                'course' => 'Antipasto',
                'is_available' => true,
                'spicy' => true,
                'gluten_free' => true,
                'kcal' => 250,
                'restaurant_ids' => [15, 16], //ARABA
            ],
            // PIATTO 65
            [
                'name' => 'Hummus',
                'image' => '/food/66.jpg',
                'description' => 'Crema di ceci condita con olio e paprika, ottimo con pane arabo',
                'price' => 4,
                'course' => 'Antipasto',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => true,
                'kcal' => 175,
                'restaurant_ids' => [15, 16], //ARABA
            ],
            // PIATTO 66
            [
                'name' => 'Mansaf',
                'image' => '/food/67.jpg',
                'description' => 'Riso con carne di agnello e salsa di yogurt',
                'price' => 12.50,
                'course' => 'Primo',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => true,
                'kcal' => 500,
                'restaurant_ids' => [15, 16], //ARABA
            ],
            // PIATTO 67
            [
                'name' => 'Tabbouleh',
                'image' => '/food/68.jpg',
                'description' => 'Insalata di prezzemolo, pomodori, cipolle e bulgur',
                'price' => 8.50,
                'course' => 'Primo',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => true,
                'kcal' => 250,
                'restaurant_ids' => [15, 16], //ARABA
            ],
            // PIATTO 68
            [
                'name' => 'Shish taouk',
                'image' => '/food/69.jpg',
                'description' => 'Pollo marinato con spezie mediorientali servito con riso basmati',
                'price' => 12.50,
                'course' => 'Secondo',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => true,
                'kcal' => 400,
                'restaurant_ids' => [15, 16], //ARABA
            ],
            // PIATTO 69
            [
                'name' => 'Maqluba',
                'image' => '/food/70.jpg',
                'description' => 'Riso, melanzane e carne di agnello stufati e serviti capovolti',
                'price' => 15,
                'course' => 'Secondo',
                'is_available' => true,
                'spicy' => true,
                'gluten_free' => false,
                'kcal' => 550,
                'restaurant_ids' => [15, 16], //ARABA
            ],
            // PIATTO 70
            [
                'name' => 'Kofta',
                'image' => '/food/71.jpg',
                'description' => 'Polpette di manzo e agnello speziate, grigliate e servite con insalata di pomodori e cetrioli',
                'price' => 10,
                'course' => 'Secondo',
                'is_available' => true,
                'spicy' => true,
                'gluten_free' => true,
                'kcal' => 450,
                'restaurant_ids' => [15, 16], //ARABA
            ],
            // PIATTO 71
            [
                'name' => 'Baklava',
                'image' => '/food/72.jpg',
                'description' => 'Dolce arabo a base di pasta fillo, noci e sciroppo di zucchero. Soffice e croccante al tempo stesso.',
                'price' => 5.50,
                'course' => 'Dolce',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => false,
                'kcal' => 250,
                'restaurant_ids' => [15, 16], //ARABA
            ],
            // PIATTO 72
            [
                'name' => 'Kanafeh',
                'image' => '/food/73.jpg',
                'description' => 'Dolce composto da pane arabo, formaggio fresco ricoperto da sciroppo di zucchero. Croccante fuori e morbido dentro.',
                'price' => 7,
                'course' => 'Dolce',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => false,
                'kcal' => 400,
                'restaurant_ids' => [15, 16], //ARABA
            ],
            // PIATTO 73
            [
                'name' => 'Shiraz',
                'image' => '/food/74.jpg',
                'description' => 'Vino rosso arabo dal sapore intenso e speziato',
                'price' => 8.00,
                'course' => 'Bevanda',
                'is_available' => true,
                'spicy' => true,
                'gluten_free' => true,
                'kcal' => 160,
                'restaurant_ids' => [15, 16], //ARABA
            ],
            // PIATTO 74
            [
                'name' => 'Sahlab',
                'image' => '/food/75.jpg',
                'description' => 'Bevanda calda a base di polvere di tuberi di orchidee, aromatizzata alla cannella e alla noce moscata',
                'price' => 3.50,
                'course' => 'Bevanda',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => true,
                'kcal' => 150,
                'restaurant_ids' => [15, 16], //ARABA
            ],
            // --------------CUCINA ARABA FINE------------------------------

            // --------------CUCINA COREANA 75 - 85 - TYPE 8-------------
            // PIATTO 75
            [
                'name' => 'Kimchi',
                'image' => '/food/76.jpg',
                'description' => 'Piatto a base di verdure fermentate con spezie e peperoncino. Piccante e saporito.',
                'price' => 5,
                'course' => 'Antipasto',
                'is_available' => true,
                'spicy' => true,
                'gluten_free' => true,
                'kcal' => 50,
                'restaurant_ids' => [17, 18], //COREANA
            ],
            // PIATTO 76
            [
                'name' => 'Pancake di gamberi',
                'image' => '/food/77.jpg',
                'description' => 'Crepes salate farcite con gamberi e verdure, servite con salsa di soia.',
                'price' => 7,
                'course' => 'Antipasto',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => false,
                'kcal' => 150,
                'restaurant_ids' => [17, 18], //COREANA
            ],
            // PIATTO 77
            [
                'name' => 'Bibimbap',
                'image' => '/food/78.jpg',
                'description' => 'Riso servito in una ciotola a cui si aggiungono carne, verdure e uova prima di essere mescolato. Saporito e croccante.',
                'price' => 10,
                'course' => 'Primo',
                'is_available' => true,
                'spicy' => true,
                'gluten_free' => true,
                'kcal' => 450,
                'restaurant_ids' => [17, 18], //COREANA
            ],
            // PIATTO 78
            [
                'name' => 'Japchae',
                'image' => '',
                'description' => 'Piatto di vermicelli di patate conditi con carne e verdure. Sapore dolce e aromi di sesamo e soia.',
                'price' => 12,
                'course' => 'Primo',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => true,
                'kcal' => 350,
                'restaurant_ids' => [17, 18], //COREANA
            ],
            // PIATTO 79
            [
                'name' => 'Bulgogi',
                'image' => '',
                'description' => 'Strisce di carne marinata e grigliata, tipiche della cucina coreana',
                'price' => 10,
                'course' => 'Secondo',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => true,
                'kcal' => 450,
                'restaurant_ids' => [17, 18], //COREANA
            ],
            // PIATTO 80
            [
                'name' => 'Dakgalbi',
                'image' => '',
                'description' => 'Pollo marinato e speziato, cucinato in padella con patate dolci e verdure',
                'price' => 12,
                'course' => 'Secondo',
                'is_available' => true,
                'spicy' => true,
                'gluten_free' => true,
                'kcal' => 550,
                'restaurant_ids' => [17, 18], //COREANA
            ],
            // PIATTO 81
            [
                'name' => 'Dak Gui',
                'image' => '',
                'description' => 'Pollo succoso alla griglia con sapore piccante',
                'price' => 10.75,
                'course' => 'Secondo',
                'is_available' => true,
                'spicy' => true,
                'gluten_free' => true,
                'kcal' => 250,
                'restaurant_ids' => [17, 18], //COREANA
            ],
            // PIATTO 82
            [
                'name' => 'Patbingsu',
                'image' => '',
                'description' => 'Un dolce estivo a base di fiocchi di ghiaccio, fagioli dolci e frutta fresca.',
                'price' => 5.50,
                'course' => 'Dolce',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => true,
                'kcal' => 400,
                'restaurant_ids' => [17, 18], //COREANA
            ],
            // PIATTO 83
            [
                'name' => 'Hotteok',
                'image' => '',
                'description' => 'Un pancake dolce ripieno di pasta di fagioli dolci e spezie.',
                'price' => 3,
                'course' => 'Dolce',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => false,
                'kcal' => 300,
                'restaurant_ids' => [17, 18], //COREANA
            ],
            // PIATTO 84
            [
                'name' => 'Makgeolli',
                'image' => '',
                'description' => 'Tipico vino di riso coreano dal gusto dolce e leggermente carbonato.',
                'price' => 8,
                'course' => 'Bevanda',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => true,
                'kcal' => 150,
                'restaurant_ids' => [17, 18], //COREANA
            ],
            // PIATTO 85
            [
                'name' => 'Bori-cha',
                'image' => '',
                'description' => 'Bevanda dissetante a base di orzo tostato',
                'price' => 3.50,
                'course' => 'Bevanda',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => false,
                'kcal' => 50,
                'restaurant_ids' => [17, 18], //COREANA
            ],
            // --------------CUCINA COREANA FINE------------------------------

            // --------------CUCINA FRANCESE 86 - 96 - TYPE 9-------------
            // PIATTO 86
            [
                'name' => 'Escargots de Bourgogne',
                'image' => '',
                'description' => 'Classico antipasto francese. Lumache di vigna cotte e servite con burro all’aglio e prezzemolo.',
                'price' => 12,
                'course' => 'Antipasto',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => false,
                'kcal' => 200,
                'restaurant_ids' => [19, 20], //FRANCESE
            ],
            // PIATTO 87
            [
                'name' => 'Terrine de Foie Gras',
                'image' => '',
                'description' => 'Terrina di fegato grasso d’oca con confettura di cipolle rosse al porto e pane tostato.',
                'price' => 15,
                'course' => 'Antipasto',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => false,
                'kcal' => 350,
                'restaurant_ids' => [19, 20], //FRANCESE
            ],
            // PIATTO 88
            [
                'name' => 'Coq au Vin',
                'image' => '',
                'description' => 'Un piatto di pollo cotto nel vino rosso con funghi, pancetta e cipolla, tipico della cucina francese.',
                'price' => 16.50,
                'course' => 'Primo',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => false,
                'kcal' => 550,
                'restaurant_ids' => [19, 20], //FRANCESE
            ],
            // PIATTO 89
            [
                'name' => 'Soupe à l oignon',
                'image' => '',
                'description' => 'Zuppa cremosa di cipolle caramellate in brodo di manzo con pane croccante e formaggio grattugiato',
                'price' => 8.50,
                'course' => 'Primo',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => false,
                'kcal' => 250,
                'restaurant_ids' => [19, 20], //FRANCESE
            ],
            // PIATTO 90
            [
                'name' => 'Salmone alla provenzale',
                'image' => '',
                'description' => 'Un piatto di pesce alla provenzale, ricco di sapori mediterranei',
                'price' => 18.50,
                'course' => 'Secondo',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => true,
                'kcal' => 320,
                'restaurant_ids' => [19, 20], //FRANCESE
            ],
            // PIATTO 91
            [
                'name' => 'Coniglio alla senape',
                'image' => '',
                'description' => 'Un piatto tradizionale della cucina francese che unisce sapori dolci e pungenti',
                'price' => 16,
                'course' => 'Secondo',
                'is_available' => true,
                'spicy' => true,
                'gluten_free' => true,
                'kcal' => 400,
                'restaurant_ids' => [19, 20], //FRANCESE
            ],
            // PIATTO 92
            [
                'name' => 'Cassolette di frutti di mare',
                'image' => '',
                'description' => 'Una deliziosa cassolette di frutti di mare, un piatto tipico della Bretagna',
                'price' => 22.00,
                'course' => 'Secondo',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => false,
                'kcal' => 450,
                'restaurant_ids' => [19, 20], //FRANCESE
            ],
            // PIATTO 93
            [
                'name' => 'Macarons',
                'image' => '',
                'description' => 'Biscotti francesi con base di mandorle e ripieno dolce serviti in vari gusti e colori.',
                'price' => 5.50,
                'course' => 'Dolce',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => true,
                'kcal' => 80,
                'restaurant_ids' => [19, 20], //FRANCESE
            ],
            // PIATTO 94
            [
                'name' => 'Crème Brûlée',
                'image' => '',
                'description' => 'Dessert a base di crema aromatizzata alla vaniglia e croccante caramello sulla superficie.',
                'price' => 6.50,
                'course' => 'Dolce',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => false,
                'kcal' => 320,
                'restaurant_ids' => [19, 20], //FRANCESE
            ],
            // PIATTO 95
            [
                'name' => 'Château Margaux',
                'image' => '',
                'description' => 'Affinato in botte di rovere francese, questo vino Bordeaux è caratterizzato da note di frutta nera e una texture morbida e setosa.',
                'price' => 150,
                'course' => 'Bevanda',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => true,
                'kcal' => 123,
                'restaurant_ids' => [19, 20], //FRANCESE
            ],
            // PIATTO 96
            [
                'name' => 'Kir Royal',
                'image' => '',
                'description' => 'Aperitivo a base di Champagne e Crème de Cassis',
                'price' => 7.50,
                'course' => 'Bevanda',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => true,
                'kcal' => 128,
                'restaurant_ids' => [19, 20], //FRANCESE
            ],
            // --------------CUCINA FRANCESE FINE------------------------------

            // --------------CUCINA GRECA 97 - 107 - TYPE 10-------------
            // PIATTO 97
            [
                'name' => 'Spanakopita',
                'image' => '',
                'description' => 'Sfoglia ripiena di spinaci, feta e erbe aromatiche',
                'price' => 6.50,
                'course' => 'Antipasto',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => false,
                'kcal' => 180,
                'restaurant_ids' => [21, 22], //GRECA
            ],
            // PIATTO 98
            [
                'name' => 'Dolmades',
                'image' => '',
                'description' => 'Foglie di vite ripiene di riso, erbe aromatiche, limone e pinoli',
                'price' => 5.50,
                'course' => 'Antipasto',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => true,
                'kcal' => 150,
                'restaurant_ids' => [21, 22], //GRECA
            ],
            // PIATTO 99
            [
                'name' => 'Moussaka',
                'image' => '',
                'description' => 'Piatto saporito con melanzane, carne macinata e salsa di pomodoro',
                'price' => 9.50,
                'course' => 'Primo',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => false,
                'kcal' => 480,
                'restaurant_ids' => [21, 22], //GRECA
            ],
            // PIATTO 100
            [
                'name' => 'Spanakopita',
                'image' => '',
                'description' => 'Delizioso piatto salato a base di spinaci freschi, formaggio feta e pasta fillo croccante.',
                'price' => 8,
                'course' => 'Primo',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => false,
                'kcal' => 350,
                'restaurant_ids' => [21, 22], //GRECA
            ],
            // PIATTO 101
            [
                'name' => 'Souvlaki di pollo',
                'image' => '',
                'description' => 'Spiedini di pollo marinati con olive nere e feta',
                'price' => 10,
                'course' => 'Secondo',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => true,
                'kcal' => 350,
                'restaurant_ids' => [21, 22], //GRECA
            ],
            // PIATTO 102
            [
                'name' => 'Keftédes',
                'image' => '',
                'description' => 'Polpette di carne aromatizzate con aglio, origano e menta',
                'price' => 8,
                'course' => 'Secondo',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => false,
                'kcal' => 280,
                'restaurant_ids' => [21, 22], //GRECA
            ],
            // PIATTO 103
            [
                'name' => 'Gyro',
                'image' => '',
                'description' => 'Piatto greco tipico di carne di maiale tagliata e condita con salsa tzatziki, servita su pane pita',
                'price' => 10.50,
                'course' => 'Secondo',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => false,
                'kcal' => 350,
                'restaurant_ids' => [21, 22], //GRECA
            ],
            // PIATTO 104
            [
                'name' => 'Loukoumades',
                'image' => '',
                'description' => 'Gocce dolci fritte di pasta lievitata, servite con sciroppo di miele e noci tritate',
                'price' => 5.50,
                'course' => 'Dolce',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => false,
                'kcal' => 300,
                'restaurant_ids' => [21, 22], //GRECA
            ],
            // PIATTO 105
            [
                'name' => 'Galaktoboureko',
                'image' => '',
                'description' => 'Torta di semolino avvolta in pasta filo croccante, inzuppata di sciroppo di miele',
                'price' => 6.50,
                'course' => 'Dolce',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => false,
                'kcal' => 450,
                'restaurant_ids' => [21, 22], //GRECA
            ],
            // PIATTO 106
            [
                'name' => 'Samos',
                'image' => '',
                'description' => 'Vino bianco secco della isola di Samo con note fruttate e minerale.',
                'price' => 20,
                'course' => 'Bevanda',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => true,
                'kcal' => 120,
                'restaurant_ids' => [21, 22], //GRECA
            ],
            // PIATTO 107
            [
                'name' => 'Frappe freddo',
                'image' => '',
                'description' => 'Caffè freddo battuto con ghiaccio e servito in un bicchiere alto',
                'price' => 2.50,
                'course' => 'Bevanda',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => true,
                'kcal' => 50,
                'restaurant_ids' => [21, 22], //GRECA
            ],
            // --------------CUCINA GRECA FINE------------------------------

            // --------------HAMBURGER 108 - 113 - TYPE 11-------------
            // PIATTO 108
            [
                'name' => 'Hamburger classico',
                'image' => '',
                'description' => 'Hamburger di manzo con formaggio, lattuga, pomodoro e salsa speciale',
                'price' => 8.50,
                'course' => 'Secondo',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => false,
                'kcal' => 600,
                'restaurant_ids' => [23], //HAMBURGER
            ],
            // PIATTO 109
            [
                'name' => 'Hamburger di pollo',
                'image' => '',
                'description' => 'Hamburger di pollo con bacon croccante, insalata e salsa al miele e senape',
                'price' => 9.50,
                'course' => 'Secondo',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => false,
                'kcal' => 500,
                'restaurant_ids' => [23], //HAMBURGER
            ],
            // PIATTO 110
            [
                'name' => 'Hamburger vegetariano',
                'image' => '',
                'description' => 'Hamburger di verdure con formaggio di capra, lattuga, pomodoro e salsa yogurt',
                'price' => 7.50,
                'course' => 'Secondo',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => true,
                'kcal' => 450,
                'restaurant_ids' => [23], //HAMBURGER
            ],
            // PIATTO 111
            [
                'name' => 'Hamburger piccante',
                'image' => '',
                'description' => 'Hamburger di manzo con formaggio piccante, lattuga, pomodoro e salsa ai peperoni',
                'price' => 9,
                'course' => 'Secondo',
                'is_available' => true,
                'spicy' => true,
                'gluten_free' => false,
                'kcal' => 650,
                'restaurant_ids' => [23], //HAMBURGER
            ],
            // PIATTO 112
            [
                'name' => 'Hamburger con funghi',
                'image' => '',
                'description' => 'Hamburger di manzo con funghi, formaggio gorgonzola, lattuga e pomodoro',
                'price' => 10.50,
                'course' => 'Secondo',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => false,
                'kcal' => 700,
                'restaurant_ids' => [23], //HAMBURGER
            ],
            // PIATTO 113
            [
                'name' => 'Hamburger al salmone',
                'image' => '',
                'description' => 'Hamburger di salmone con insalata, salsa alla menta e limone',
                'price' => 12,
                'course' => 'Secondo',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => true,
                'kcal' => 500,
                'restaurant_ids' => [23], //HAMBURGER
            ],
            // --------------HAMBURGER FINE------------------------------

            // --------------CUCINA INDIANA 114 - 124 - TYPE 12-------------
            // PIATTO 114
            [
                'name' => 'Samosa',
                'image' => '',
                'description' => 'Croccante triangolo fritto ripieno di patate speziate e piselli',
                'price' => 3.50,
                'course' => 'Antipasto',
                'is_available' => true,
                'spicy' => true,
                'gluten_free' => false,
                'kcal' => 250,
                'restaurant_ids' => [24, 25], //INDIANA
            ],
            // PIATTO 115
            [
                'name' => 'Tandoori chicken',
                'image' => '',
                'description' => 'Pollo marinato con spezie e yogurt, poi cotto alla brace',
                'price' => 6.50,
                'course' => 'Antipasto',
                'is_available' => true,
                'spicy' => true,
                'gluten_free' => true,
                'kcal' => 300,
                'restaurant_ids' => [24, 25], //INDIANA
            ],
            // PIATTO 116
            [
                'name' => 'Chana Masala',
                'image' => '',
                'description' => 'Un piatto vegetariano, preparato con ceci cotti in una miscela di spezie e pomodoro.',
                'price' => 8.50,
                'course' => 'Primo',
                'is_available' => true,
                'spicy' => true,
                'gluten_free' => true,
                'kcal' => 450,
                'restaurant_ids' => [24, 25], //INDIANA
            ],
            // PIATTO 117
            [
                'name' => 'Chicken Tikka Masala',
                'image' => '',
                'description' => 'Un classico piatto indiano, con pezzi di pollo marinati e cotti in una salsa cremosa di pomodoro e spezie.',
                'price' => 11.50,
                'course' => 'Primo',
                'is_available' => true,
                'spicy' => true,
                'gluten_free' => false,
                'kcal' => 550,
                'restaurant_ids' => [24, 25], //INDIANA
            ],
            // PIATTO 118
            [
                'name' => 'Saag Paneer',
                'image' => '',
                'description' => 'Formaggio tradizionale indiano fatto in casa in salsa di spinaci aromatica. Vegan su richiesta.',
                'price' => 9,
                'course' => 'Secondo',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => true,
                'kcal' => 350,
                'restaurant_ids' => [24, 25], //INDIANA
            ],
            // PIATTO 119
            [
                'name' => 'Biryani di Agnello',
                'image' => '',
                'description' => 'Riso basmati speziato con agnello aromatizzato, cotto nel tradizionale biryani. Servito con raita e sottaceti.',
                'price' => 12,
                'course' => 'Secondo',
                'is_available' => true,
                'spicy' => true,
                'gluten_free' => false,
                'kcal' => 550,
                'restaurant_ids' => [24, 25], //INDIANA
            ],
            // PIATTO 120
            [
                'name' => 'Butter Chicken',
                'image' => '',
                'description' => 'Pollo cotto con spezie, pomodori e burro, servito con riso basmati.',
                'price' => 12.50,
                'course' => 'Secondo',
                'is_available' => true,
                'spicy' => true,
                'gluten_free' => false,
                'kcal' => 400,
                'restaurant_ids' => [24, 25], //INDIANA
            ],
            // PIATTO 121
            [
                'name' => 'Gulab jamun',
                'image' => '',
                'description' => 'Deliziosi dolcetti fritti a base di latte in sciroppo di zucchero e rosmarino',
                'price' => 4.50,
                'course' => 'Dolce',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => false,
                'kcal' => 400,
                'restaurant_ids' => [24, 25], //INDIANA
            ],
            // PIATTO 122
            [
                'name' => 'Rasgulla',
                'image' => '',
                'description' => 'Sfere dolci fatte di formaggio di latte, bollite in uno sciroppo di zucchero aromatizzato con rose',
                'price' => 5,
                'course' => 'Dolce',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => true,
                'kcal' => 300,
                'restaurant_ids' => [24, 25], //INDIANA
            ],
            // PIATTO 123
            [
                'name' => 'Lassi alla fragola',
                'image' => '',
                'description' => 'Bibita cremosa e dolce a base di yoghurt, fragole e spezie',
                'price' => 4.50,
                'course' => 'Bevanda',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => true,
                'kcal' => 150,
                'restaurant_ids' => [24, 25], //INDIANA
            ],
            // PIATTO 124
            [
                'name' => 'Masala Chai',
                'image' => '',
                'description' => 'Bevanda calda e speziata a base di latte, tè nero e spezie',
                'price' => 3.50,
                'course' => 'Bevanda',
                'is_available' => true,
                'spicy' => true,
                'gluten_free' => true,
                'kcal' => 90,
                'restaurant_ids' => [24, 25], //INDIANA
            ],
            // --------------CUCINA INDIANA FINE------------------------------

            // --------------KEBAB 125 - 130 - TYPE 13-------------
            // CUCINA 125
            [
                'name' => 'Kebab misto',
                'image' => '',
                'description' => 'Un mix di carne di pollo e di manzo tagliata finemente, servito con verdure fresche e salsa tahini',
                'price' => 6,50,
                'course' => 'Secondo',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => false,
                'kcal' => 690,
                'restaurant_ids' => [26, 27], //KEBAB
            ],
            // CUCINA 126
            [
                'name' => 'Kebab vegetariano',
                'image' => '',
                'description' => 'Kebab vegetariano con falafel croccanti, verdure miste e salsa tzatziki',
                'price' => 5,50,
                'course' => 'Secondo',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => true,
                'kcal' => 580,
                'restaurant_ids' => [26, 27], //KEBAB

            ],
            // CUCINA 127
            [
                'name' => 'Kebab al formaggio',
                'image' => '',
                'description' => 'Kebab di carne di pollo o manzo con formaggio fuso, verdure fresche e salsa piccante',
                'price' => 7,
                'course' => 'Secondo',
                'is_available' => true,
                'spicy' => true,
                'gluten_free' => false,
                'kcal' => 720,
                'restaurant_ids' => [26, 27], //KEBAB
            ],
            // CUCINA 128
            [
                'name' => 'Kebab al curry',
                'image' => '',
                'description' => 'Kebab di pollo con curry, verdure miste e salsa allo yogurt',
                'price' => 6,
                'course' => 'Secondo',
                'is_available' => true,
                'spicy' => true,
                'gluten_free' => true,
                'kcal' => 530,
                'restaurant_ids' => [26, 27], //KEBAB
            ],
            // CUCINA 129
            [
                'name' => 'Kebab di agnello',
                'image' => '',
                'description' => 'Tagliata di agnello marinata, verdure fresche e salsa all aglio',
                'price' => 8,50,
                'course' => 'Secondo',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => true,
                'kcal' => 800,
                'restaurant_ids' => [26, 27], //KEBAB
            ],
            // CUCINA 130
            [
                'name' => 'Kebab di tacchino',
                'image' => '',
                'description' => 'Kebab di tacchino con pita calda, verdure miste e salsa ardente',
                'price' => 6,50,
                'course' => 'Secondo',
                'is_available' => true,
                'spicy' => true,
                'gluten_free' => false,
                'kcal' => 620,
                'restaurant_ids' => [26, 27], //KEBAB
            ],
            // --------------KEBAB FINE------------------------------

            // --------------CUCINA PERUVIANA 131 - 141 - TYPE 14-------------
            // PIATTO 131
            [
                'name' => 'Causa Rellena',
                'image' => '',
                'description' => 'Purè di patate condito con limone e olio, ripieno di pollo e servito con peperoni e olive.',
                'price' => 6.50,
                'course' => 'Antipasto',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => true,
                'kcal' => 250,
                'restaurant_ids' => [28, 29], //PERUVIANA
            ],
            // PIATTO 132
            [
                'name' => 'Anticuchos',
                'image' => '',
                'description' => 'Spiedini di cuore di manzo marinati e grigliati, serviti con salsa di peperoncino.',
                'price' => 7.50,
                'course' => 'Antipasto',
                'is_available' => true,
                'spicy' => true,
                'gluten_free' => true,
                'kcal' => 300,
                'restaurant_ids' => [28, 29], //PERUVIANA
            ],
            // PIATTO 133
            [
                'name' => 'Ceviche',
                'image' => '',
                'description' => 'Piatto di pesce crudo marinato in limone e leche de tigre',
                'price' => 12,
                'course' => 'Primo',
                'is_available' => true,
                'spicy' => true,
                'gluten_free' => true,
                'kcal' => 220,
                'restaurant_ids' => [28, 29], //PERUVIANA
            ],
            // PIATTO 134
            [
                'name' => 'Papa a la Huancaína',
                'image' => '',
                'description' => 'Patate con salsa cremosa di peperoncini, formaggio, latte e cracker',
                'price' => 10,
                'course' => 'Primo',
                'is_available' => true,
                'spicy' => true,
                'gluten_free' => false,
                'kcal' => 370,
                'restaurant_ids' => [28, 29], //PERUVIANA
            ],
            // PIATTO 135
            [
                'name' => 'Lomo Saltado',
                'image' => '',
                'description' => 'Una deliziosa miscela di manzo saltato, cipolle, pomodori e patate in una salsa di soia e olio, servito con riso',
                'price' => 12.50,
                'course' => 'Secondo',
                'is_available' => true,
                'spicy' => true,
                'gluten_free' => true,
                'kcal' => 480,
                'restaurant_ids' => [28, 29], //PERUVIANA
            ],
            // PIATTO 136
            [
                'name' => 'Seco de Cordero',
                'image' => '',
                'description' => 'Spezzatino di agnello in un delizioso sugo di coriandolo con fagioli, riso e patate',
                'price' => 14.50,
                'course' => 'Secondo',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => true,
                'kcal' => 590,
                'restaurant_ids' => [28, 29], //PERUVIANA
            ],
            // PIATTO 137
            [
                'name' => 'Ají de Gallina',
                'image' => '',
                'description' => 'Ricco stufato di pollo in una crema di peperoncino giallo e noci, servito con riso e patate',
                'price' => 11.50,
                'course' => 'Secondo',
                'is_available' => true,
                'spicy' => true,
                'gluten_free' => true,
                'kcal' => 570,
                'restaurant_ids' => [28, 29], //PERUVIANA
            ],
            // PIATTO 138
            [
                'name' => 'Suspiro de limeña',
                'image' => '',
                'description' => 'Dolce cremoso dal sapore di caramello con meringa sopra',
                'price' => 5.50,
                'course' => 'Dolce',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => true,
                'kcal' => 350,
                'restaurant_ids' => [28, 29], //PERUVIANA
            ],
            // PIATTO 139
            [
                'name' => 'Picarones',
                'image' => '',
                'description' => 'Frittelle dolci fatte con zucca e zucchero di canna, servite con sciroppo di chancaca',
                'price' => 4,
                'course' => 'Dolce',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => false,
                'kcal' => 250,
                'restaurant_ids' => [28, 29], //PERUVIANA
            ],
            // PIATTO 140
            [
                'name' => 'Pisco Sour',
                'image' => '',
                'description' => 'Un cocktail tradizionale peruviano a base di Pisco, lime, sciroppo di zucchero, albume d uovo e amaro',
                'price' => 8.50,
                'course' => 'Bevanda',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => true,
                'kcal' => 200,
                'restaurant_ids' => [28, 29], //PERUVIANA
            ],
            // PIATTO 141
            [
                'name' => 'Chicha Morada',
                'image' => '',
                'description' => 'Bevanda analcolica tradizionale peruviana a base di mais viola, ananas e cannella, dal sapore dolce e speziato',
                'price' => 3.50,
                'course' => 'Bevanda',
                'is_available' => true,
                'spicy' => false,
                'gluten_free' => true,
                'kcal' => 150,
                'restaurant_ids' => [28, 29], //PERUVIANA
            ],
            // --------------CUCINA PERUVIANA FINE------------------------------


            // PIATTO NUMERO
            // [
            //     'name' => 'nome prodotto cucina *inserire nome cucina*',
            //     'image' => '',
            //     'description' => '10 parole sul relativo prodotto',
            //     'price' => prezzo del relativo prodotto,
            //     'course' => '*portata*',
            //     'is_available' => true,
            //     'spicy' => true o false,
            //     'gluten_free' => true o false,
            //     'kcal' => inserire numero kcal,
            //     'restaurant_ids' => [],
            // ],

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
