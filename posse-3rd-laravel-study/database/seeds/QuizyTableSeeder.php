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
            "image1" => 'image1-1.png'
        ];
        DB::table('questions')->insert($param);
        
        $param = [
            'area' => 1,
            "image1" => 'image1-2.png'
        ];
        DB::table('questions')->insert($param);

        $param = [
            'area' => 1,
            "image1" => 'image1-3.png'
        ];
        DB::table('questions')->insert($param);

        $param = [
            'area' => 1,
            "image1" => 'image1-4.png'
        ];
        DB::table('questions')->insert($param);

        $param = [
            'area' => 1,
            "image1" => 'image1-5.png'
        ];
        DB::table('questions')->insert($param);

        $param = [
            'area' => 1,
            "image1" => 'image1-6.png'
        ];
        DB::table('questions')->insert($param);

        $param = [
            'area' => 1,
            "image1" => 'image1-7.png'
        ];
        DB::table('questions')->insert($param);

        $param = [
            'area' => 1,
            "image1" => 'image1-8.png'
        ];
        DB::table('questions')->insert($param);
        $param = [
            'area' => 1,
            "image1" => 'image1-9.png'
        ];
        DB::table('questions')->insert($param);
        $param = [
            'area' => 1,
            "image1" => 'image1-10.png'
        ];
        DB::table('questions')->insert($param);
        
        /////////////////////////////////////// 広島ページのレコード///////////////////////
        $param = [
            'area' => 2,
            "image1" => 'image2-1.png'
        ];
        DB::table('questions')->insert($param);
        
        $param = [
            'area' => 2,
            "image1" => 'image2-2.png'
        ];
        DB::table('questions')->insert($param);
        
        $param = [
            'area' => 2,
            "image1" => 'image2-3.png'
        ];
        DB::table('questions')->insert($param);

        $param = [
            'area' => 2,
            "image1" => 'image2-4.png'
        ];
        DB::table('questions')->insert($param);
        
        $param = [
            'area' => 2,
            "image1" => 'image2-5.png'
        ];
        DB::table('questions')->insert($param);
        
        $param = [
            'area' => 2,
            "image1" => 'image2-6.png'
        ];
        DB::table('questions')->insert($param);
        
        $param = [
            'area' => 2,
            "image1" => 'image2-7.png'
        ];
        DB::table('questions')->insert($param);
        
        $param = [
            'area' => 2,
            "image1" => 'image2-8.png'
        ];
        DB::table('questions')->insert($param);
        
        $param = [
            'area' => 2,
            "image1" => 'image2-9.png'
        ];
        DB::table('questions')->insert($param);
        
        $param = [
            'area' => 2,
            "image1" => 'image2-10.png'
        ];
        DB::table('questions')->insert($param);
    }
}
