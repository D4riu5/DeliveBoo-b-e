<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // SEEDER IMPOSTATO PER TESTARE IL FUNZIONAMENTO DELLE CRUDE DI ORDERS 
        
        $orders = [
            ['total_price' => '15.22',
            'status' => 'In Preparazione',
            'rating' => '10',
            'delivery_address' =>'Via Pietra, 1',
            'delivery_contact' => '3518238900',
            'costumer_name' => 'Massimo giletti'
        ],
        ];

        foreach ($orders as $order) {
            $newOrder = Order::create([
                'total_price' => $order['total_price'],
                'status' => $order['status'],
                'rating' => $order['rating'],
                'delivery_address' => $order['delivery_address'],
                'delivery_contact' => $order['delivery_contact'],
                'costumer_name' => $order['costumer_name'],
            ]);
        }
    }
}
