<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'area' => 1,
            'choice1' =>'たかなわ',
            'choice2' =>'たかわ',
            'choice3' =>'こうわ',
        ];
        DB::table('questions')->insert($param);
        
        $param = [
            'area' => 1,
            'choice1' =>'かめいど',
            'choice2' =>'かめと',
            'choice3' =>'かめど'
        ];
        DB::table('questions')->insert($param);

        $param = [
            'area' => 1,
            'choice1' =>'こうじまち',
            'choice2' =>'かゆまち',
            'choice3' =>'おかちまち'
        ];
        DB::table('questions')->insert($param);

        $param = [
            'area' => 1,
            'choice1' =>'おなりもん',
            'choice2' =>'おかどもん',
            'choice3' =>'ごせいもん'
        ];
        DB::table('questions')->insert($param);

        $param = [
            'area' => 1,
            'choice1' =>'とどろき',
            'choice2' =>'たたりき',
            'choice3' =>'たたら'
        ];
        DB::table('questions')->insert($param);

        $param = [
            'area' => 1,
            'choice1' =>'しゃくじい',
            'choice2' =>'せきこうい',
            'choice3' => 'いじい'
        ];
        DB::table('questions')->insert($param);
        $param = [
            'area' => 1,
            'choice1' => 'ぞうしき',
            'choice2' => 'ぞうしき',
            'choice3' => 'ざっしょく'
        ];
        DB::table('questions')->insert($param);
        $param = [
            'area' => 1,
            'choice1' =>'おかちまち',
            'choice2' =>'ごしろちょう',
            'choice3' =>'みとちょう'
        ];
        DB::table('questions')->insert($param);
        $param = [
            'area' => 1,
            'choice1' =>'ししぼね',
            'choice2' =>'ろっこつ',
            'choice3' => 'しこね'
        ];
        DB::table('questions')->insert($param);
        $param = [
            'area' => 1,
            'choice1' =>'こぐれ',
            'choice2' =>'こしゃく',
            'choice3' =>'こばく'
        ];
        DB::table('questions')->insert($param);

    }
}
