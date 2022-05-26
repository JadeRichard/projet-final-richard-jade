<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Design',
        ]);
        DB::table('categories')->insert([
            'name' => 'International',
        ]);
        DB::table('categories')->insert([
            'name' => 'Learning',
        ]);
        DB::table('categories')->insert([
            'name' => 'Read',
        ]);
        DB::table('categories')->insert([
            'name' => 'Digital',
        ]);
        DB::table('categories')->insert([
            'name' => 'Education',
        ]);
        DB::table('categories')->insert([
            'name' => 'Finance',
        ]);
        DB::table('categories')->insert([
            'name' => 'Arts',
        ]);
        DB::table('categories')->insert([
            'name' => 'Account',
        ]);
        DB::table('categories')->insert([
            'name' => 'Marketing',
        ]);
        DB::table('categories')->insert([
            'name' => 'Internet',
        ]);
    }
}
