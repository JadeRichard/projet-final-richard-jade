<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PictureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pictures')->insert([
            'title' => 'Heading',
            "picture" => "heading.png",
        ]);
        DB::table('pictures')->insert([
            'title' => 'Footer',
            "picture" => "footer-bg.png",
        ]);
    }
}
