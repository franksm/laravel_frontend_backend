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
        $this->call(WebsiteSeeder::class);
        $this->call(HomeSeeder::class);
        $this->call(AboutSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(StoreSeeder::class);
    }
}
