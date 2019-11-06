<?php

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
        $this->call(CitiesTableSeeder::class);
         $this->call(UsersTableSeeder::class);
         $this->call(ClientsTableSeeder::class);
         $this->call(VatTableSeeder::class);
         $this->call(ItemsTableSeeder::class);
    }
}
