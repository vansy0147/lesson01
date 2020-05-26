<?php

use App\Order;
use App\Users;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersSeeder::class);
        $this->call(OrdersSeeder::class);
        $this->call(OrderDetailsSeeder::class);
        $this->call(ProductsSeeder::class);
        $this->call(ProductBrandSeeder::class);

    }
}
