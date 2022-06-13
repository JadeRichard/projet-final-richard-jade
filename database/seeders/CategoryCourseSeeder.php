<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_course')->insert([
            'course_id' => 1,
            "category_id" => 11,
        ]);
        DB::table('category_course')->insert([
            'course_id' => 1,
            "category_id" => 2,
        ]);DB::table('category_course')->insert([
            'course_id' => 1,
            "category_id" => 4,
        ]);
        DB::table('category_course')->insert([
            'course_id' => 2,
            "category_id" => 9,
        ]);DB::table('category_course')->insert([
            'course_id' => 2,
            "category_id" => 10,
        ]);
        DB::table('category_course')->insert([
            'course_id' => 3,
            "category_id" => 11,
        ]);DB::table('category_course')->insert([
            'course_id' => 2,
            "category_id" => 2,
        ]);
        DB::table('category_course')->insert([
            'course_id' => 3,
            "category_id" => 1,
        ]);DB::table('category_course')->insert([
            'course_id' => 3,
            "category_id" => 5,
        ]);
        DB::table('category_course')->insert([
            'course_id' => 4,
            "category_id" => 7,
        ]);DB::table('category_course')->insert([
            'course_id' => 5,
            "category_id" => 8,
        ]);
        DB::table('category_course')->insert([
            'course_id' => 6,
            "category_id" => 9,
        ]);
        DB::table('category_course')->insert([
            'course_id' => 6,
            "category_id" => 11,
        ]);DB::table('category_course')->insert([
            'course_id' => 5,
            "category_id" => 1,
        ]);
        DB::table('category_course')->insert([
            'course_id' => 5,
            "category_id" => 2,
        ]);
        DB::table('category_course')->insert([
            'course_id' => 7,
            "category_id" => 8,
        ]);DB::table('category_course')->insert([
            'course_id' => 7,
            "category_id" => 9,
        ]);
        DB::table('category_course')->insert([
            'course_id' => 7,
            "category_id" => 11,
        ]);DB::table('category_course')->insert([
            'course_id' => 7,
            "category_id" => 1,
        ]);
        DB::table('category_course')->insert([
            'course_id' => 8,
            "category_id" => 2,
        ]);
        DB::table('category_course')->insert([
            'course_id' => 9,
            "category_id" => 3,
        ]);DB::table('category_course')->insert([
            'course_id' => 9,
            "category_id" => 4,
        ]);
        DB::table('category_course')->insert([
            'course_id' => 9,
            "category_id" => 6,
        ]);DB::table('category_course')->insert([
            'course_id' => 10,
            "category_id" => 10,
        ]);
        DB::table('category_course')->insert([
            'course_id' => 11,
            "category_id" => 3,
        ]);DB::table('category_course')->insert([
            'course_id' => 11,
            "category_id" => 2,
        ]);
        DB::table('category_course')->insert([
            'course_id' => 12,
            "category_id" => 2,
        ]);DB::table('category_course')->insert([
            'course_id' => 12,
            "category_id" => 9,
        ]);
    }
}
