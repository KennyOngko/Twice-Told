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
            ["product_id"=>'1','product_detail_picture'=>'img/slider cewe 2.png' ],
            ["product_id"=>'1','product_detail_picture'=>'img/slider cewe 3.jpg' ],
            ["product_id"=>'1','product_detail_picture'=>'img/slider cewe 5.jpg' ],
            

            ["product_id"=>'2','product_detail_picture'=>'img/slider cowo 1.png' ],
            ["product_id"=>'2','product_detail_picture'=>'img/slider cowo 2.png' ],
        ]);
    }
}
