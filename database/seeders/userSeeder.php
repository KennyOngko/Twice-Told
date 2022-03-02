<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ["name"=>'Admin', "email"=>'admin@gmail.com','password'=>bcrypt('admin123'), 'role'=>'admin'],
        ]);
    }
}
