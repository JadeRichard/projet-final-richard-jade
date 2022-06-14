<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'title' => 'How to become a powerful speaker',
            "description" => "Courses are a great way to learn new things. This course will teach you how to use Laravel to build a simple blog application.",
            "picture" => "courses/courses-1.png",
            "picture_2" => "courses/courses-2.png",
            "picture_3" => "courses/courses-3.png",
            "picture_4" => "courses/courses-4.png",
            "date" => "28 juillet 2022",
            "duration" => "1 year",
            "price" => 20,
            "study_level" => "Master",
            "discipline" => "Artificial Intelligence",
            "is_popular" => true,
            "user_id" => 2,
        ]);
        DB::table('courses')->insert([
            'title' => 'Electrical Engineering',
            "description" => "Courses are a great way to learn new things. This course will teach you how to use Laravel to build a simple blog application.",
            "picture" => "courses/courses-2.png",
            "picture_2" => "courses/courses-1.png",
            "picture_3" => "courses/courses-3.png",
            "picture_4" => "courses/courses-4.png",
            "date" => "22 juillet 2022",
            "duration" => "2 months",
            "price" => 50,
            "study_level" => "Bachelor",
            "discipline" => "Electrical Engineering",
            "is_popular" => true,
            "user_id" => 5,
        ]);
        DB::table('courses')->insert([
            'title' => 'What can you do with a business degree ?',
            "description" => "Courses are a great way to learn new things. This course will teach you how to use Laravel to build a simple blog application.",
            "picture" => "courses/courses-3.png",
            "picture_2" => "courses/courses-2.png",
            "picture_3" => "courses/courses-1.png",
            "picture_4" => "courses/courses-4.png",
            "date" => "17 september 2022",
            "duration" => "6 months",
            "price" => 48.99,
            "study_level" => "Business Degree",
            "discipline" => "Finance",
            "is_popular" => true,
            "user_id" => 2,
        ]);
        DB::table('courses')->insert([
            'title' => 'Electrical Engineering',
            "description" => "Courses are a great way to learn new things. This course will teach you how to use Laravel to build a simple blog application.",
            "picture" => "courses/courses-4.png",
            "picture_2" => "courses/courses-2.png",
            "picture_3" => "courses/courses-3.png",
            "picture_4" => "courses/courses-1.png",
            "date" => "22 juillet 2022",
            "duration" => "2 months",
            "price" => 0,
            "study_level" => "Bachelor",
            "discipline" => "Electrical Engineering",
            "is_popular" => true,
            "user_id" => 6,
        ]);
        DB::table('courses')->insert([
            'title' => 'How to become a powerful speaker',
            "description" => "Courses are a great way to learn new things. This course will teach you how to use Laravel to build a simple blog application.",
            "picture" => "courses/courses-5.png",
            "picture_2" => "courses/courses-2.png",
            "picture_3" => "courses/courses-3.png",
            "picture_4" => "courses/courses-4.png",
            "date" => "28 juillet 2022",
            "duration" => "1 year",
            "price" => 20,
            "study_level" => "Master",
            "discipline" => "Artificial Intelligence",
            "is_popular" => true,
            "user_id" => 2,
        ]);
        DB::table('courses')->insert([
            'title' => 'Electrical Engineering',
            "description" => "Courses are a great way to learn new things. This course will teach you how to use Laravel to build a simple blog application.",
            "picture" => "courses/courses-6.png",
            "picture_2" => "courses/courses-2.png",
            "picture_3" => "courses/courses-3.png",
            "picture_4" => "courses/courses-4.png",
            "date" => "22 juillet 2022",
            "duration" => "2 months",
            "price" => 0,
            "study_level" => "Bachelor",
            "discipline" => "Electrical Engineering",
            "is_popular" => true,
            "user_id" => 7,
        ]);
        DB::table('courses')->insert([
            'title' => 'How to become a powerful speaker',
            "description" => "Courses are a great way to learn new things. This course will teach you how to use Laravel to build a simple blog application.",
            "picture" => "courses/courses-1.png",
            "picture_2" => "courses/courses-2.png",
            "picture_3" => "courses/courses-3.png",
            "picture_4" => "courses/courses-4.png",
            "date" => "28 juillet 2022",
            "duration" => "1 year",
            "price" => 20,
            "study_level" => "Master",
            "discipline" => "Artificial Intelligence",
            "is_popular" => true,
            "user_id" => 8,
        ]);
        DB::table('courses')->insert([
            'title' => 'Electrical Engineering',
            "description" => "Courses are a great way to learn new things. This course will teach you how to use Laravel to build a simple blog application.",
            "picture" => "courses/courses-2.png",
            "picture_2" => "courses/courses-1.png",
            "picture_3" => "courses/courses-3.png",
            "picture_4" => "courses/courses-4.png",
            "date" => "22 juillet 2022",
            "duration" => "2 months",
            "price" => 50,
            "study_level" => "Bachelor",
            "discipline" => "Electrical Engineering",
            "is_popular" => false,
            "user_id" => 2,
        ]);
        DB::table('courses')->insert([
            'title' => 'What can you do with a business degree ?',
            "description" => "Courses are a great way to learn new things. This course will teach you how to use Laravel to build a simple blog application.",
            "picture" => "courses/courses-3.png",
            "picture_2" => "courses/courses-2.png",
            "picture_3" => "courses/courses-1.png",
            "picture_4" => "courses/courses-4.png",
            "date" => "17 september 2022",
            "duration" => "6 months",
            "price" => 48.99,
            "study_level" => "Business Degree",
            "discipline" => "Finance",
            "is_popular" => false,
            "user_id" => 2,
        ]);
        DB::table('courses')->insert([
            'title' => 'Electrical Engineering',
            "description" => "Courses are a great way to learn new things. This course will teach you how to use Laravel to build a simple blog application.",
            "picture" => "courses/courses-4.png",
            "picture_2" => "courses/courses-2.png",
            "picture_3" => "courses/courses-3.png",
            "picture_4" => "courses/courses-1.png",
            "date" => "22 juillet 2022",
            "duration" => "2 months",
            "price" => 0,
            "study_level" => "Bachelor",
            "discipline" => "Electrical Engineering",
            "is_popular" => false,
            "user_id" => 9,
        ]);
        DB::table('courses')->insert([
            'title' => 'How to become a powerful speaker',
            "description" => "Courses are a great way to learn new things. This course will teach you how to use Laravel to build a simple blog application.",
            "picture" => "courses/courses-5.png",
            "picture_2" => "courses/courses-2.png",
            "picture_3" => "courses/courses-3.png",
            "picture_4" => "courses/courses-4.png",
            "date" => "28 juillet 2022",
            "duration" => "1 year",
            "price" => 20,
            "study_level" => "Master",
            "discipline" => "Artificial Intelligence",
            "is_popular" => false,
            "user_id" => 2,
        ]);
        DB::table('courses')->insert([
            'title' => 'Electrical Engineering',
            "description" => "Courses are a great way to learn new things. This course will teach you how to use Laravel to build a simple blog application.",
            "picture" => "courses/courses-6.png",
            "picture_2" => "courses/courses-2.png",
            "picture_3" => "courses/courses-3.png",
            "picture_4" => "courses/courses-4.png",
            "date" => "22 juillet 2022",
            "duration" => "2 months",
            "price" => 0,
            "study_level" => "Bachelor",
            "discipline" => "Electrical Engineering",
            "is_popular" => false,
            "user_id" => 10,
        ]);
    }
}
