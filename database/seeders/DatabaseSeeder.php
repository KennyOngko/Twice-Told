<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(userSeeder::class);
        $this->call(productSeeder::class);
        $this->call(productDetailsSeeder::class);
        $this->call(productColorSeeder::class);
        $this->call(productSizeSeeder::class);
        $this->call(ProductImageSeeder::class);
        $this->call(ChannelsTableSeeder::class);
        
    }
}
