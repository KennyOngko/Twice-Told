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
            ["product_name"=>'KAWALA DRESS', "description"=>
            'Featuring high collar, belt, and earthtone color. Try our pretty Kawala Dress Teracotta & Dusty Pink Color',
            'gambar'=>'img/slider cewe 0.png','price'=>279000,'material'=>'Tencel & Cotton','size_guide'=>'Top Length / Width / Shoulder'],

            ["product_name"=>'KOALA TOP', "description"=>
            'Featuring cuban collar, belt, and earthtone color. Suitable for casual or hangout usage. Try our Koala Top Pebble Grey & Forest Color',
            'gambar'=>'img/slider cowo 0.png','price'=>269000,'material'=>'Tencel & Cotton','size_guide'=>'Top Length / Width / Shoulder'],
        ]);
    }
}
