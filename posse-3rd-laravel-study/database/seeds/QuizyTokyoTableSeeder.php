<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizyTokyoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'choice1' =>'たかなわ',
            'choice2' =>'たかわ',
            'choice3' =>'こうわ'
        ];
        DB::table('quizy')->insert($param);
        
        $param = [
            'choice1' =>'かめいど',
            'choice2' =>'かめと',
            'choice3' =>'かめど'
        ];
        DB::table('quizy')->insert($param);

        $param = [
            'choice1' =>'こうじまち',
            'choice2' =>'かゆまち',
            'choice3' =>'おかちまち'
        ];
        DB::table('quizy')->insert($param);

        $param = [
            'choice1' =>'おなりもん',
            'choice2' =>'おかどもん',
            'choice3' =>'ごせいもん'
        ];
        DB::table('quizy')->insert($param);

        $param = [
            'choice1' =>'とどろき',
            'choice2' =>'たたりき',
            'choice3' =>'たたら'
        ];
        DB::table('quizy')->insert($param);

        $param = [
            'choice1' =>'しゃくじい',
            'choice2' =>'せきこうい',
            'choice3' => 'いじい'
        ];
        DB::table('quizy')->insert($param);
        $param = [
            'choice1' => 'ぞうしき',
            'choice2' => 'ぞうしき',
            'choice3' => 'ざっしょく'
        ];
        DB::table('quizy')->insert($param);
        $param = [
            'choice1' =>'おかちまち',
            'choice2' =>'ごしろちょう',
            'choice3' =>'みとちょう'
        ];
        DB::table('quizy')->insert($param);
        $param = [
            'choice1' =>'ししぼね',
            'choice2' =>'ろっこつ',
            'choice3' => 'しこね'
        ];
        DB::table('quizy')->insert($param);
        $param = [
            'choice1' =>'こぐれ',
            'choice2' =>'こしゃく',
            'choice3' =>'こばく'
        ];
        DB::table('quizy')->insert($param);

    }
}
