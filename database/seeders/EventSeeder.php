<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            'title' => 'Nice Event',
            "description" => "This is a nice event",
            "date" => "Monday 8am - 12am",
            "picture" => "events/event-1.png",
            "start_time" => "Dec 18",
            "end_time" => "Dec 28",
            "location" => "Johnny Lane Milwaukee WI 532",
        ]);
    }
}
