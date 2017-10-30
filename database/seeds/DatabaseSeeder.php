<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        Eloquent::unguard();

        $this->call(UsersTableSeeder::class);
        $this->call(ListTableSeeder::class);
        $this->call(ItemsTableSeeder::class);
    }
}
