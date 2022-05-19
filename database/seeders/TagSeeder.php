<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'name' => 'Photography',
        ]);
        DB::table('tags')->insert([
            'name' => 'Arts',
        ]);
        DB::table('tags')->insert([
            'name' => 'Education',
        ]);
        DB::table('tags')->insert([
            'name' => 'Finance',
        ]);
        DB::table('tags')->insert([
            'name' => 'Marketing',
        ]);
        DB::table('tags')->insert([
            'name' => 'Cooking',
        ]);
        DB::table('tags')->insert([
            'name' => 'Mechanic',
        ]);
        DB::table('tags')->insert([
            'name' => 'International',
        ]);
        DB::table('tags')->insert([
            'name' => 'News',
        ]);
    }
}
