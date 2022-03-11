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
            ["product_id"=>'1', "color_name"=>'dusty pink','color_code'=>'#c86d4a'],
            ["product_id"=>'1', "color_name"=>' terracotta','color_code'=>'#cca8a4'],


            ["product_id"=>'2', "color_name"=>'pebble grey','color_code'=>'#64693c'],
            ["product_id"=>'2', "color_name"=>'forest','color_code'=>'#898272'],



        ]);
    }
}
