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
        $this->call(QuizyTableSeeder::class);
        $this->call(QuizyAreaTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(ChoicesTableSeeder::class);
    }
}
