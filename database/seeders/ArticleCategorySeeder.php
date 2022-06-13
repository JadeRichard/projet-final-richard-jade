<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('article_category')->insert([
            'article_id' => 1,
            "category_id" => 11,
        ]);
        DB::table('article_category')->insert([
            'article_id' => 1,
            "category_id" => 2,
        ]);DB::table('article_category')->insert([
            'article_id' => 1,
            "category_id" => 4,
        ]);
        DB::table('article_category')->insert([
            'article_id' => 2,
            "category_id" => 9,
        ]);DB::table('article_category')->insert([
            'article_id' => 2,
            "category_id" => 10,
        ]);
        DB::table('article_category')->insert([
            'article_id' => 3,
            "category_id" => 11,
        ]);DB::table('article_category')->insert([
            'article_id' => 2,
            "category_id" => 2,
        ]);
        DB::table('article_category')->insert([
            'article_id' => 3,
            "category_id" => 1,
        ]);DB::table('article_category')->insert([
            'article_id' => 3,
            "category_id" => 5,
        ]);
        DB::table('article_category')->insert([
            'article_id' => 4,
            "category_id" => 7,
        ]);DB::table('article_category')->insert([
            'article_id' => 5,
            "category_id" => 8,
        ]);
        DB::table('article_category')->insert([
            'article_id' => 6,
            "category_id" => 8,
        ]);DB::table('article_category')->insert([
            'article_id' => 6,
            "category_id" => 9,
        ]);
        DB::table('article_category')->insert([
            'article_id' => 6,
            "category_id" => 11,
        ]);DB::table('article_category')->insert([
            'article_id' => 5,
            "category_id" => 1,
        ]);
        DB::table('article_category')->insert([
            'article_id' => 5,
            "category_id" => 2,
        ]);
    }
}
