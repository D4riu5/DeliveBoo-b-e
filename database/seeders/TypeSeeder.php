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
            ['name' => 'Americana', 'description' => "La cucina americana è molto variegata e influenzata da numerose tradizioni culinarie provenienti da tutto il mondo. È caratterizzata dall'uso di grandi porzioni, dalle preparazioni alla griglia, dal fumo e dalla marinatura della carne, dall'uso abbondante di condimenti come il ketchup, il senape, la maionese e la salsa barbecue."],
            ['name' => 'Araba', 'description' => "La cucina araba offre un'esperienza culinaria di sapori intensi e speziati. Si caratterizza per l'uso di ingredienti come il grano, il riso, le spezie, le erbe aromatiche e la carne di agnello e pollo."],
            ['name' => 'Celiaca', 'description' => "La cucina celiaca prevede l'uso di ingredienti naturali e privi di glutine come riso, mais, quinoa, patate, legumi, carne, pesce, verdure e frutta. La cucina celiaca può essere gustosa e varia, ma richiede una precisa attenzione e cura nella scelta degli ingredienti e nella preparazione dei piatti."],
            ['name' => 'Cinese', 'description' => "La cucina cinese è ricca di sapori e ingredienti, con una grande varietà di piatti regionali. I piatti sono spesso a base di riso, noodle, carne, pesce, verdure e spezie come lo zenzero, l'aglio e la cipolla. Il dim sum, il ma po tofu, il kung pao chicken e il mapo doufu sono piatti tipici che si accompagnano con il tè. La cucina cinese è un'esperienza gustativa unica"],
            ['name' => 'Coreana', 'description' => "Se sei un estimatore della cucina orientale, ordina cibo Coreano e potrai sperimentare come anche questo Paese si caratterizzi per ricette stuzzicanti. Dal menù di un ristorante Coreano potrai scegliere una porzione di Bibimbap, ossia riso con macinato di manzo, verdure miste e tuorlo crudo, oppure il Bulgogi, composto da straccetti di manzo marinati con salsa di soya e saltati in padella con verdure miste. Potrai anche optare per il pollo fritto, sia nella versione agropiccante che in quella agrodolce"],
            ['name' => 'Francese', 'description' => "La cucina francese è rinomata in tutto il mondo per la sua raffinatezza e la sua varietà. Si basa sull'uso di ingredienti freschi e di alta qualità, come carne, pesce, verdure, frutti di mare, formaggi e vini pregiati. In generale, la cucina francese si distingue per l'attenzione al dettaglio e alla presentazione dei piatti, che rappresentano un'esperienza per i sensi."],
            ['name' => 'Giapponese', 'description' => "La cucina giapponese è nota per la sua attenzione alla presentazione e alla qualità degli ingredienti. I piatti sono spesso a base di riso, pesce crudo, alghe, soia e verdure. Il sushi, il sashimi, il ramen e il tempura sono alcuni dei piatti più noti. La cucina giapponese è un'arte culinaria che celebra la bellezza e il gusto"],
            ['name' => 'Greco', 'description' => "La cucina greca ha una lunga storia culinaria, influenzata dalle culture greche antiche, Bizantine, Ottomane e Mediterranee. La cucina greca è caratterizzata dall'uso di ingredienti freschi, come olive, frutta e verdura, carne di agnello e pesce fresco. La cucina greca è una delle culinarie più amate in tutto il mondo per la sua semplicità, freschezza e sapore intenso."],
            ['name' => 'Hamburger', 'description' => "L'hamburger è un vero comfort food e ormai esiste in svariate versioni, dal classico panino in stile americano agli hamburger gourmet creati con ingredienti d'eccellenza. Se non mangi la carne puoi comunque optare per un hamburger vegetariano."],
            ['name' => 'Indiana', 'description' => "Ti è venuta voglia di uno squisito pollo al curry? Ti piacerebbe mettere in tavola un'autentica cena indiana con zero sforzo? Le migliori pietanze speziate dei maraja saranno a casa tua in pochi minuti! Non raggiungerai il nirvana… ma probabilmente l'estasi, grazie alla possibilità di avere cibo indiano a domicilio tutte le volte che vorrai!"],
            ['name' => 'Italiana', 'description' => "La cucina italiana è rinomata per la sua semplicità ed eleganza. I piatti sono preparati con ingredienti freschi e di qualità, come pasta fatta in casa, pomodori maturi, olio d'oliva, formaggi e salumi. I sapori sono intensi e bilanciati, e spesso accompagnati da vino. La cucina italiana è un'esperienza culinaria indimenticabile"],
            ['name' => 'Kebab', 'description' => "Carne succulenta, cipolle, pomodori, insalata e tante verdure, rese gustose da salsa yogurt o piccante. Tutto racchiuso in una piadina, in un panino oppure, se lo preferisci, nella versione piatto, accompagnata da una focaccia."],
            ['name' => 'Messicana', 'description' => "La cucina messicana è una miscela di sapori piccanti e intensi. I piatti sono spesso a base di mais, fagioli, peperoncino, pomodori, avocado, coriandolo e limone. I tacos, i burritos, le enchiladas e i nachos sono piatti tipici che si accompagnano con margaritas, tequila e birra. La cucina messicana è una festa di sapori, colori e spezie"],
            ['name' => 'Peruviana', 'description' => "Se ami provare nuovi sapori, potrai assaporare il meglio del cibo peruviano. La cucina di questo Paese dell' America Latina, oltre che deliziosa, si distingue per la grande varierà. In un menù peruviano troverai piatti tipici come il lomo saltado, ricetta a base di carne di manzo, pomodori, cipolla e patate fritte, arricchito da peperoncino giallo e coriandolo e servito con riso bianco. Oppure gusta il ceviche, piatto di pesce marinato accompagnato da pannocchie, camote e mais."],
            ['name' => 'Vegana', 'description' => "Il cibo vegano sta diventando sempre più popolare perché è salutare, sostenibile e molto più gustoso di quanto tu possa credere. I suoi capisaldi sono verdure, cereali, formaggi vegetali e sostituti della carne (come seitan e tempeh). Il tutto arricchito da spezie e condimenti saporiti che lo valorizzano al meglio."],
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
