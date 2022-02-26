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
        //////////////////////////////////////// 東京ページのレコード//////////////////////////
        $param = [
            'area' => 1,
            "image1" => 'image1-1.png',
            'choice1' =>'たかなわ',
            'choice2' =>'たかわ',
            'choice3' =>'こうわ',
        ];
        DB::table('questions')->insert($param);
        
        $param = [
            'area' => 1,
            "image1" => 'image1-2.png',
            'choice1' =>'かめいど',
            'choice2' =>'かめと',
            'choice3' =>'かめど'
        ];
        DB::table('questions')->insert($param);

        $param = [
            'area' => 1,
            "image1" => 'image1-3.png',
            'choice1' =>'こうじまち',
            'choice2' =>'かゆまち',
            'choice3' =>'おかちまち'
        ];
        DB::table('questions')->insert($param);

        $param = [
            'area' => 1,
            "image1" => 'image1-4.png',
            'choice1' =>'おなりもん',
            'choice2' =>'おかどもん',
            'choice3' =>'ごせいもん'
        ];
        DB::table('questions')->insert($param);

        $param = [
            'area' => 1,
            "image1" => 'image1-5.png',
            'choice1' =>'とどろき',
            'choice2' =>'たたりき',
            'choice3' =>'たたら'
        ];
        DB::table('questions')->insert($param);

        $param = [
            'area' => 1,
            "image1" => 'image1-6.png',
            'choice1' =>'しゃくじい',
            'choice2' =>'せきこうい',
            'choice3' => 'いじい'
        ];
        DB::table('questions')->insert($param);
        $param = [
            'area' => 1,
            "image1" => 'image1-7.png',
            'choice1' => 'ぞうしき',
            'choice2' => 'ぞうしき',
            'choice3' => 'ざっしょく'
        ];
        DB::table('questions')->insert($param);
        $param = [
            'area' => 1,
            "image1" => 'image1-8.png',
            'choice1' =>'おかちまち',
            'choice2' =>'ごしろちょう',
            'choice3' =>'みとちょう'
        ];
        DB::table('questions')->insert($param);
        $param = [
            'area' => 1,
            "image1" => 'image1-9.png',
            'choice1' =>'ししぼね',
            'choice2' =>'ろっこつ',
            'choice3' => 'しこね'
        ];
        DB::table('questions')->insert($param);
        $param = [
            'area' => 1,
            "image1" => 'image1-10.png',
            'choice1' =>'こぐれ',
            'choice2' =>'こしゃく',
            'choice3' =>'こばく'
        ];
        DB::table('questions')->insert($param);
        
        /////////////////////////////////////// 広島ページのレコード///////////////////////
        $param = [
            'area' => 2,
            "image1" => 'image2-1.png',
            'choice1' =>'むかいなだ',
            'choice2' =>'むこうひら',
            'choice3' =>'むきひら',
        ];
        DB::table('questions')->insert($param);
        
        $param = [
            'area' => 2,
            "image1" => 'image2-2.png',
            'choice1' =>'みつぎ',
            'choice2' =>'みよし',
            'choice3' =>'おしらべ',
        ];
        DB::table('questions')->insert($param);
        
        $param = [
            'area' => 2,
            "image1" => 'image2-3.png',
            'choice1' =>'かなやま',
            'choice2' =>'きやま',
            'choice3' =>'ぎんざん',
        ];
        DB::table('questions')->insert($param);

        $param = [
            'area' => 2,
            "image1" => 'image2-4.png',
            'choice1' =>'とよひ',
            'choice2' =>'としか',
            'choice3' =>'とよか',
        ];
        DB::table('questions')->insert($param);
        
        $param = [
            'area' => 2,
            "image1" => 'image2-5.png',
            'choice1' =>'いしぐろ',
            'choice2' =>'いしあぜ',
            'choice3' =>'しゃくぜ',
        ];
        DB::table('questions')->insert($param);
        
        $param = [
            'area' => 2,
            "image1" => 'image2-6.png',
            'choice1' =>'みよし',
            'choice2' =>'みつぎ',
            'choice3' =>'みかた',
        ];
        DB::table('questions')->insert($param);
        
        $param = [
            'area' => 2,
            "image1" => 'image2-7.png',
            'choice1' =>'うずい',
            'choice2' =>'もみち',
            'choice3' =>'くもおり',
        ];
        DB::table('questions')->insert($param);
        
        $param = [
            'area' => 2,
            "image1" => 'image2-8.png',
            'choice1' =>'すもも',
            'choice2' =>'ぽんかん',
            'choice3' =>'でこぽん',
        ];
        DB::table('questions')->insert($param);
        
        $param = [
            'area' => 2,
            "image1" => 'image2-9.png',
            'choice1' =>'おおちごとうげ',
            'choice2' =>'おおちごえとうげ',
            'choice3' =>'おうちごとうげ',
        ];
        DB::table('questions')->insert($param);
        
        $param = [
            'area' => 2,
            "image1" => 'image2-10.png',
            'choice1' =>'よおろほよばら',
            'choice2' =>'てっぽよばら',
            'choice3' =>'ていぼよはら',
        ];
        DB::table('questions')->insert($param);
    }
}
