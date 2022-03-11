<?php

namespace Database\Seeders;
use App\Models\Channel;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $channels = ['PRICE', 'SIZE', 'SHIPPING', 'RERTUN POLICY'];

        foreach ($channels as $channel) {
            Channel::create([
                'name' => $channel,
                'slug' => Str::slug($channel)
            ]);
        }
    }
}
