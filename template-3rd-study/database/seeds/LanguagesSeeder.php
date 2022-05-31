<?php

use Illuminate\Database\Seeder;
use App\Languages;

class LanguagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages = Languages::create([
            'language' => 'JavaScript',
            'language_color' => '1854EF',
        ]);

        $languages = Languages::create([
            'language' => 'CSS',
            'language_color' => '0F71BD',
        ]);

        $languages = Languages::create([
            'language' => 'HTML',
            'language_color' => '3DCEFE',
        ]);

        $languages = Languages::create([
            'language' => 'Laravel',
            'language_color' => 'B39FF2',
        ]);

        $languages = Languages::create([
            'language' => 'SQL',
            'language_color' => '6D46EC',
        ]);

        $languages = Languages::create([
            'language' => 'SHELL',
            'language_color' => '4A17F0',
        ]);

        $languages = Languages::create([
            'language' => '情報システム基礎知識(その他)',
            'language_color' => '3104C0',
        ]);


    }
}
