<?php

use Illuminate\Database\Seeder;
use App\ContentsData;

class ContentsDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contents_data = ContentsData::create([
            'input_data_id'    => 1,
            'content_id' => 1,
            'length' => 10,
        ]);

        $contents_data = ContentsData::create([
            'input_data_id'    => 2,
            'content_id' => 2,
            'length' => 10,
        ]);
        $contents_data = ContentsData::create([
            'input_data_id'    => 3,
            'content_id' => 3,
            'length' => 6,
        ]);
    }
}
