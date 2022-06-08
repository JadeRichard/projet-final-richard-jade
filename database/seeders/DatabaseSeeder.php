<?php

namespace Database\Seeders;

use App\Models\ArticleCategory;
use App\Models\ArticleTag;
use App\Models\CategoryCourse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            RoleSeeder::class,
            RoleUserSeeder::class,
            ArticleSeeder::class,
            CourseSeeder::class,
            TeacherSeeder::class,
            EventSeeder::class,
            ServiceSeeder::class,
            BannerSeeder::class,
            PictureSeeder::class,
            CategorySeeder::class,
            TagSeeder::class,
            CommentSeeder::class,
            MapSeeder::class,
        ]);

        // call the ArticleCategoryFactory
        ArticleCategory::factory(20)->create();
        ArticleTag::factory(20)->create();
        CategoryCourse::factory(25)->create();
        

    }
}
