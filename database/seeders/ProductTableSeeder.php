<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Product::create([
            'name' => 'Televison',
             'description' =>'One televion',
            'quantity' => '1'
        ]);

        Product::create([
            'name' => 'Speaker',
             'description' =>'12 bluetooth speaker',
            'quantity' => '12'
        ]);

        Product::create([
            'name' => 'Fridge',
             'description' =>'Two Quality Fridges Ordered',
            'quantity' => '2'
        ]);

    
    }
}
