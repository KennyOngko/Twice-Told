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
            ["product_name"=>'BAJU LV', "description"=>'Baju Yang sangat baik dengan qualitas oke','gambar'=>'img/baju1.jpg','price'=>1000000],
            ["product_name"=>'BAJU ANJAY', "description"=>'Baju Yang sangat baik dengan qualitas oke','gambar'=>'img/baju1.jpg','price'=>3000000],
            ["product_name"=>'BAJU WAKANDA', "description"=>'Baju Yang sangat baik dengan qualitas oke','gambar'=>'img/baju1.jpg','price'=>2000000],
        ]);
    }
}
