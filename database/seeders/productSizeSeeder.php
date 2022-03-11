<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class productSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_sizes')->insert([
            ["product_id"=>'1','size'=>'S' ],
            ["product_id"=>'1','size'=>'M' ],
            ["product_id"=>'1','size'=>'L' ],

            ["product_id"=>'2','size'=>'S' ],
            ["product_id"=>'2','size'=>'M' ],
            ["product_id"=>'2','size'=>'L' ],
        ]);
    }
}








