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
            ["product_id"=>'1','size'=>'S','size_old'=>'(5-6 yo) ','size_detail'=>'18.00 cm / 59.00 cm / 35.50 cm / 30.00 cm','size_name'=>'Small ' ],
            ["product_id"=>'1','size'=>'M','size_old'=>'(7-8 yo) ','size_detail'=>'19.00 cm / 61.00 cm / 37.00 cm / 31.00 cm','size_name'=>'Medium' ],
            ["product_id"=>'1','size'=>'L','size_old'=>'(9-10 yo)','size_detail'=>'20.00 cm / 63.00 cm / 38.50 cm / 32.00 cm','size_name'=>'Large ' ],

            ["product_id"=>'2','size'=>'S','size_old'=>'(5-6 yo) ','size_detail'=>'51.00 cm / 39.50 cm / 36.00 cm','size_name'=>'Small '  ],
            ["product_id"=>'2','size'=>'M','size_old'=>'(7-8 yo) ','size_detail'=>'54.00 cm / 42.50 cm / 37.50 cm','size_name'=>'Medium'  ],
            ["product_id"=>'2','size'=>'L','size_old'=>'(9-10 yo)','size_detail'=>'57.00 cm / 45.50 cm / 39.00 cm','size_name'=>'Large '  ],
            

        ]);
    }
}








