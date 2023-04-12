<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $types = [
            ['name' => 'Italiana', 'description' => "La cucina italiana è rinomata per la sua semplicità ed eleganza. I piatti sono preparati con ingredienti freschi e di qualità, come pasta fatta in casa, pomodori maturi, olio d'oliva, formaggi e salumi. I sapori sono intensi e bilanciati, e spesso accompagnati da vino. La cucina italiana è un'esperienza culinaria indimenticabile"],
            ['name' => 'Messicana', 'description' => "La cucina messicana è una miscela di sapori piccanti e intensi. I piatti sono spesso a base di mais, fagioli, peperoncino, pomodori, avocado, coriandolo e limone. I tacos, i burritos, le enchiladas e i nachos sono piatti tipici che si accompagnano con margaritas, tequila e birra. La cucina messicana è una festa di sapori, colori e spezie"],
            ['name' => 'Giapponese', 'description' => "La cucina giapponese è nota per la sua attenzione alla presentazione e alla qualità degli ingredienti. I piatti sono spesso a base di riso, pesce crudo, alghe, soia e verdure. Il sushi, il sashimi, il ramen e il tempura sono alcuni dei piatti più noti. La cucina giapponese è un'arte culinaria che celebra la bellezza e il gusto"],
            ['name' => 'Cinese', 'description' => "La cucina cinese è ricca di sapori e ingredienti, con una grande varietà di piatti regionali. I piatti sono spesso a base di riso, noodle, carne, pesce, verdure e spezie come lo zenzero, l'aglio e la cipolla. Il dim sum, il ma po tofu, il kung pao chicken e il mapo doufu sono piatti tipici che si accompagnano con il tè. La cucina cinese è un'esperienza gustativa unica"],
            ['name' => 'Vegetariana', 'description' => "La cucina vegetariana si basa sull'utilizzo di ingredienti vegetali come cereali, legumi, verdure, frutta, noci e semi. I piatti sono spesso colorati, gustosi e ricchi di nutrienti. La cucina vegetariana offre una vasta gamma di piatti come le zuppe, le insalate, i curry e i burger vegani. Questa cucina è una scelta sana ed ecologica che celebra i sapori naturali degli ingredienti"],
        ];

        foreach ($types as $type) {
            $newType = Type::create([
                'name' => $type['name'],
                'description' => $type['description']
            ]);
        }
    }
};
