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
                'restaurant_ids' => [9, 10, 11], //GIAPPONESE
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
                'restaurant_ids' => [9, 10, 11], //GIAPPONESE
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
                'restaurant_ids' => [9, 10, 11], //GIAPPONESE
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
                'restaurant_ids' => [9, 10, 11], //GIAPPONESE
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
                'restaurant_ids' => [9, 10, 11], //GIAPPONESE
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
                'restaurant_ids' => [9, 10, 11], //GIAPPONESE
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
                'restaurant_ids' => [9, 10, 11], //GIAPPONESE
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
                'restaurant_ids' => [9, 10, 11], //GIAPPONESE
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
                'restaurant_ids' => [9, 10, 11], //GIAPPONESE
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
                'restaurant_ids' => [9, 10, 11], //GIAPPONESE
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
                'restaurant_ids' => [9, 10, 11], //GIAPPONESE
            ],
            // --------------CUCINA GIAPPONESE FINE------------------------------

            // --------------CUCINA CINESE 33 - 43 - TYPE 4------------
            // PIATTO 33
            [
                'name' => 'Involtini primavera',
                'image' => '',
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
                'image' => '',
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
                'image' => '',
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
                'image' => '',
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
                'image' => '',
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
                'image' => '',
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
                'image' => '',
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
                'image' => '',
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
                'image' => '',
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
                'image' => '',
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
                'image' => '',
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
                'image' => '',
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
                'image' => '',
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
                'image' => '',
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
                'image' => '',
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
                'image' => '',
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
                'image' => '',
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
                'image' => '',
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
                'image' => '',
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
                'image' => '',
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
                'image' => '',
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
                'image' => '',
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
                'image' => '',
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
                'image' => '',
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
                'image' => '',
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
                'image' => '',
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
                'image' => '',
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
                'image' => '',
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
                'image' => '',
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
                'image' => '',
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
                'image' => '',
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
                'image' => '',
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
                'image' => '',
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
                'image' => '',
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
                'image' => '',
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
                'image' => '',
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
                'image' => '',
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
                'image' => '',
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
                'image' => '',
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
                'image' => '',
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
                'image' => '',
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
                'image' => '',
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
                'image' => '',
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
                'image' => '',
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
                'image' => '',
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

            // --------------CUCINA GRECA 97 - 107 - TYPE 9-------------


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
