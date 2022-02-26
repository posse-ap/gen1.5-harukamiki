<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'mkp',
            "email" => 'mkp@mkp',
            'password' =>'password',
        ];
        DB::table('users')->insert($param);
    }
}
