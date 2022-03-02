<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ["product_name"=>'BAJU LV', "description"=>'Baju Yang sangat baik dengan qualitas oke','gambar'=>'img/test.jpg','price'=>1000000],
            ["product_name"=>'BAJU LV', "description"=>'Baju Yang sangat baik dengan qualitas oke','gambar'=>'img/test.jpg','price'=>1000000],
            ["product_name"=>'BAJU LV', "description"=>'Baju Yang sangat baik dengan qualitas oke','gambar'=>'img/test.jpg','price'=>1000000],
        ]);
    }
}
