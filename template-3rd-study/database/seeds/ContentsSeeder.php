<?php

use Illuminate\Database\Seeder;
use App\Contents;

class ContentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contents = Contents::create([
            'content' => 'POSSE課題',
            'content_color' => '20BDDE',
        ]);

        $contents = Contents::create([
            'content' => 'N予備校',
            'content_color' => '0F71BD',
        ]);

        $contents = Contents::create([
            'content' => 'ドットインストール',
            'content_color' => '1854EF',
        ]);
    }
}