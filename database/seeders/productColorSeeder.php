<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class productColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_colors')->insert([
            ["product_id"=>'1', "color"=>'white'],
            ["product_id"=>'1', "color"=>'blue' ],
            ["product_id"=>'1', "color"=>'red'  ],
        ]);
    }
}
