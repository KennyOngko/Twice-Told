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
            ["product_id"=>'1', "color_name"=>'white','color_code'=>''],
            ["product_id"=>'1', "color_name"=>'blue','color_code'=>''],
            ["product_id"=>'1', "color_name"=>'red' ,'color_code'=>''],
            ["product_id"=>'1', "color_name"=>'black' ,'color_code'=>''],

            ["product_id"=>'2', "color_name"=>'yellow','color_code'=>''],
            ["product_id"=>'2', "color_name"=>'blue','color_code'=>''],
            ["product_id"=>'2', "color_name"=>'red' ,'color_code'=>''],


            ["product_id"=>'3', "color_name"=>'pink','color_code'=>''],
            ["product_id"=>'3', "color_name"=>'blue','color_code'=>''],
            ["product_id"=>'3', "color_name"=>'red' ,'color_code'=>''],
        ]);
    }
}
