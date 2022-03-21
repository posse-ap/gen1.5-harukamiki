<?php

use Illuminate\Database\Seeder;
use App\InputData;

class InputDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $input_data = InputData::create([
            'user_id' => 1,
            'studied_on' => '2022-3-19',
            'length' => 10,
        ]);
        
        $input_data = InputData::create([
            'user_id' => 1,
            'studied_on' => '2022-3-20',
            'length' => 10,
        ]);
        $input_data = InputData::create([
            'user_id' => 1,
            'studied_on' => '2022-3-19',
            'length' => 6,
        ]);
        $input_data = InputData::create([
            'user_id' => 1,
            'studied_on' => '2022-3-21',
            'length' => 3,
        ]);
        $input_data = InputData::create([
            'user_id' => 1,
            'studied_on' => '2022-3-22',
            'length' => 4,
        ]);
        $input_data = InputData::create([
            'user_id' => 1,
            'studied_on' => '2022-3-23',
            'length' => 4,
        ]);

    }
}
