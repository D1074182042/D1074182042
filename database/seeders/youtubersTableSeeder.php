<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class youtubersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('youtubers')->Insert([
            'yt_name'      =>'展榮',
            'd_ID'         =>'1',
            'year'         =>'32',
            'education'    =>'國立台灣戲曲學院',
            'country'      =>'台灣'
        ]);
    }
}
