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
            'Featuring high collar, belt, and earthtone color. Try our pretty Kawala Dress Teracotta & Dusty Pink Color

            Material : Tencel & Cotton
            Size Guide : Top Length / Width / Shoulder
            (5-6 yo)    Small      : 18.00 cm / 59.00 cm / 35.50 cm / 30.00 cm
            (7-8 yo)    Medium  : 19.00 cm / 61.00 cm / 37.00 cm / 31.00 cm
            (9-10 yo)  Large      : 20.00 cm / 63.00 cm / 38.50 cm / 32.00 cm
            
            *Free reuseable pouch for every purchases',
            'gambar'=>'img/slider cewe 0.png','price'=>279000],

            ["product_name"=>'KOALA TOP', "description"=>
            'Featuring cuban collar, belt, and earthtone color. Suitable for casual or hangout usage. Try our Koala Top Pebble Grey & Forest Color 

            Material : Tencel & Cotton
            Size Guide : Top Length / Width / Shoulder
            (5-6 yo)    Small      : 51.00 cm / 39.50 cm / 36.00 cm
            (7-8 yo)    Medium  : 54.00 cm / 42.50 cm / 37.50 cm
            (9-10 yo)  Large      : 57.00 cm / 45.50 cm / 39.00 cm
            
            *Free reuseable pouch for every purchases','gambar'=>'img/slider cowo 0.png','price'=>269000],
        ]);
    }
}
