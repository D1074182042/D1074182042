<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class channelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('channels')->Insert([
            'c_name'      =>'展榮',
            'category'         =>'娛樂類',
            'fans'         =>'325',
            'views'    =>'283.92',
        ]);
    }
}
