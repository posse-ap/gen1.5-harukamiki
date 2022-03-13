<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizyAreaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'area' =>'東京',
        ];
        DB::table('quizy_areas')->insert($param);

        $param = [
            'area' =>'広島',
        ];
        
        DB::table('quizy_areas')->insert($param);
    }
}
