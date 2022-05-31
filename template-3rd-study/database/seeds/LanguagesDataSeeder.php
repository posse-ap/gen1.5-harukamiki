<?php

use Illuminate\Database\Seeder;
use App\LanguagesData;

class LanguagesDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $language_data = LanguagesData::create([
            'input_data_id'    => 1,
            'language_id' => 1,
            'length' => 10,
        ]);

        $language_data = LanguagesData::create([
            'input_data_id'    => 2,
            'language_id' => 2,
            'length' => 10,
        ]);

        $language_data = LanguagesData::create([
            'input_data_id'    => 3,
            'language_id' => 3,
            'length' => 6,
        ]);
    }
}
