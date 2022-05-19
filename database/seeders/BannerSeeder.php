<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banners')->insert([
            'title' => 'Next year more interesting ! <br> Check next',
            'accent' => 'Features',
            'description' => 'Nunc eget tempor neque. Aenean non ex sed nibh euismod ornare. Nam congue nisi purus, sed luctus risus.',
            'button' => 'Buy Now',
            'picture' => 'banner/banner-1.png',
        ]);
        DB::table('banners')->insert([
            'title' => 'Are you ready to study ? <br> We have the',
            'accent' => 'Solution',
            'description' => 'Nunc eget tempor neque. Aenean non ex sed nibh euismod ornare. Nam congue nisi purus, sed luctus risus.',
            'button' => 'Buy Now',
            'picture' => 'banner/banner-2.png',
        ]);
    }
}
