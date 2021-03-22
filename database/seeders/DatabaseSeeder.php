<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(5)->create();
        \App\Models\Order::factory(3)->create();
        \App\Models\Supplier::factory(3)->create();

        $this->call(ProductTableSeeder::class);
        $this->call(UserTableSeeder::class);

    }
}
