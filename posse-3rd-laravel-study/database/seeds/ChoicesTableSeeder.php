<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'question_id' => 1,
            'validation' => 1,
            "name" => 'たかなわ'
        ];
        DB::table('choices')->insert($param);
        
        $param = [
            'question_id' => 1,
            'validation' => 0,
            "name" => 'たかわ'
        ];
        DB::table('choices')->insert($param);


        $param = [
            'question_id' => 1,
            'validation' => 0,
            "name" => 'こうわ'
        ];
        DB::table('choices')->insert($param);


        $param = [
            'question_id' => 2,
            'validation' => 1,
            "name" => 'かめいど'
        ];
        DB::table('choices')->insert($param);



        $param = [
            'question_id' => 2,
            'validation' => 0,
            "name" => 'かめと'
        ];
        DB::table('choices')->insert($param);



        $param = [
            'question_id' => 2,
            'validation' => 0,
            "name" => 'かめど'
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 3,
            'validation' => 1,
            "name" => 'こうじまち'
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 3,
            'validation' => 0,
            "name" => 'かゆまち'
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 3,
            'validation' => 0,
            "name" => 'おかちまち'
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 4,
            'validation' => 1,
            "name" => 'おなりもん'
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 4,
            'validation' => 0,
            "name" => 'おかどもん'
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 4,
            'validation' => 0,
            "name" => 'ごせいもん'
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 5,
            'validation' => 1,
            "name" => 'とどろき'
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 5,
            'validation' => 0,
            "name" => 'たたりき'
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 5,
            'validation' => 0,
            "name" => 'たたら'
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 6,
            'validation' => 1,
            "name" => 'しゃくじい'
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 6,
            'validation' => 0,
            "name" => 'せきこうい'
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 6,
            'validation' => 0,
            "name" => 'いじい'
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 7,
            'validation' => 1,
            "name" => 'ぞうしき'
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 7,
            'validation' => 0,
            "name" => 'ぞうしき'
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 7,
            'validation' => 0,
            "name" => 'ざっしょく'
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 8,
            'validation' => 1,
            "name" => 'おかちまち'
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 8,
            'validation' => 0,
            "name" => 'ごしろちょう'
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 8,
            'validation' => 0,
            "name" => 'みとちょう'
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 9,
            'validation' => 1,
            "name" => 'ししぼね'
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 9,
            'validation' => 0,
            "name" => 'ろっこつ'
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 9,
            'validation' => 0,
            "name" => 'しこね'
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 10,
            'validation' => 1,
            "name" => 'こぐれ'
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 10,
            'validation' => 0,
            "name" => 'こしゃく'
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 10,
            'validation' => 0,
            "name" => 'こばく'
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 11,
            'validation' => 1,
            "name" => 'むかいなだ'
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 11,
            'validation' => 0,
            "name" => 'むこうひら'
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 11,
            'validation' => 0,
            "name" => 'むきひら'
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 12,
            'validation' => 1,
            "name" => 'みつぎ'
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 12,
            'validation' => 0,
            "name" => 'みよし'
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 12,
            'validation' => 0,
            "name" => 'おしらべ'
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 13,
            'validation' => 1,
            "name" => 'かなやま'
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 13,
            'validation' => 0,
            "name" => 'きやま'
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 13,
            'validation' => 0,
            "name" => 'ぎんざん'
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 14,
            'validation' => 1,
            "name" => 'とよひ'
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 14,
            'validation' => 0,
            "name" => 'としか'
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 14,
            'validation' => 0,
            "name" => 'とよか'
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 15,
            'validation' => 1,
            "name" => 'いしぐろ'
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 15,
            'validation' => 0,
            "name" => 'いしあぜ'
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 15,
            'validation' => 0,
            "name" => 'しゃくぜ'
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 16,
            'validation' => 1,
            "name" => 'みよし'
        ];
        DB::table('choices')->insert($param);


        $param = [
            'question_id' => 16,
            'validation' => 0,
            "name" => 'みつぎ'
        ];
        DB::table('choices')->insert($param);


        $param = [
            'question_id' => 16,
            'validation' => 0,
            "name" => 'みかた'
        ];
        DB::table('choices')->insert($param);


        $param = [
            'question_id' => 17,
            'validation' => 1,
            "name" => 'うずい'
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 17,
            'validation' => 0,
            "name" => 'もみち'
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 17,
            'validation' => 0,
            "name" => 'くもおり'
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 18,
            'validation' => 1,
            "name" => 'すもも'
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 18,
            'validation' => 0,
            "name" => 'ぽんかん'
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 18,
            'validation' => 0,
            "name" => 'でこぽん'
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 19,
            'validation' => 1,
            "name" => 'おおちごとうげ'
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 19,
            'validation' => 0,
            "name" => 'おおちごえとうげ'
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 19,
            'validation' => 0,
            "name" => 'おうちごとうげ'
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 20,
            'validation' => 1,
            "name" => 'よおろほよばら'
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 20,
            'validation' => 0,
            "name" => 'てっぽよばら'
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 20,
            'validation' => 0,
            "name" => 'ていぼよはら'
        ];
        DB::table('choices')->insert($param);

    }
}
