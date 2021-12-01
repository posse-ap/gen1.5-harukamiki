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
        $this->call(QuizyTokyoTableSeeder::class);
    }
}

// seederを登録したいが登録にエラーでる