<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_images')->insert([
            ["product_id"=>'1','product_detail_picture'=>'img/baju2.jpg' ],
            ["product_id"=>'1','product_detail_picture'=>'img/baju2.jpg' ],
            ["product_id"=>'1','product_detail_picture'=>'img/baju2.jpg' ],
            

            ["product_id"=>'3','product_detail_picture'=>'img/baju2.jpg' ],
            ["product_id"=>'3','product_detail_picture'=>'img/baju2.jpg' ],
            ["product_id"=>'3','product_detail_picture'=>'img/baju2.jpg' ],
        ]);
    }
}
