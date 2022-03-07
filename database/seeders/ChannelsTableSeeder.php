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
        $channels = ['Laravel 6.2', 'React 16.2', 'Typescript 3.7', 'Node.js 13.6'];

        foreach ($channels as $channel) {
            Channel::create([
                'name' => $channel,
                'slug' => Str::slug($channel)
            ]);
        }
    }
}
