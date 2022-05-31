<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'title' => 'Really interesting article',
            "description_1" => "Articles are a great way to share your knowledge with your audience. You can use them to share your thoughts, ideas, or anything else you want.",
            "description_2" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio pariatur perspiciatis, recusandae quia eum voluptatibus laudantium et consectetur itaque! Repellendus adipisci dolore quidem libero eos vel eaque dolor architecto? Incidunt sint impedit, id inventore dolorum debitis. Facilis provident quae laudantium odit magni praesentium adipisci optio atque minus. Exercitationem amet repudiandae quisquam laudantium? Minus sint accusamus ipsa, temporibus quisquam earum eum?",
            "date" => "10 mai 2018",
            "picture" => "news/news-1.png",
            "user_id" => 3,
        ]);
        DB::table('articles')->insert([
            'title' => 'Really interesting article',
            "description_1" => "Articles aren't a great way to share your knowledge with your audience. You can use them to share your thoughts, ideas, or anything else you want.",
            "description_2" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio pariatur perspiciatis, recusandae quia eum voluptatibus laudantium et consectetur itaque! Repellendus adipisci dolore quidem libero eos vel eaque dolor architecto? Incidunt sint impedit, id inventore dolorum debitis. Facilis provident quae laudantium odit magni praesentium adipisci optio atque minus. Exercitationem amet repudiandae quisquam laudantium? Minus sint accusamus ipsa, temporibus quisquam earum eum?",
            "date" => "10 mai 2018",
            "picture" => "news/news-2.png",
            "user_id" => 3,
        ]);
        DB::table('articles')->insert([
            'title' => 'Really interesting article',
            "description_1" => "Articles are a great way to share your knowledge with your audience. You can use them to share your thoughts, ideas, or anything else you want.",
            "description_2" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio pariatur perspiciatis, recusandae quia eum voluptatibus laudantium et consectetur itaque! Repellendus adipisci dolore quidem libero eos vel eaque dolor architecto? Incidunt sint impedit, id inventore dolorum debitis. Facilis provident quae laudantium odit magni praesentium adipisci optio atque minus. Exercitationem amet repudiandae quisquam laudantium? Minus sint accusamus ipsa, temporibus quisquam earum eum?",
            "date" => "10 mai 2018",
            "picture" => "news/news-3.png",
            "user_id" => 3,
        ]);
        DB::table('articles')->insert([
            'title' => 'Really interesting article',
            "description_1" => "Articles are a great way to share your knowledge with your audience. You can use them to share your thoughts, ideas, or anything else you want.",
            "description_2" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio pariatur perspiciatis, recusandae quia eum voluptatibus laudantium et consectetur itaque! Repellendus adipisci dolore quidem libero eos vel eaque dolor architecto? Incidunt sint impedit, id inventore dolorum debitis. Facilis provident quae laudantium odit magni praesentium adipisci optio atque minus. Exercitationem amet repudiandae quisquam laudantium? Minus sint accusamus ipsa, temporibus quisquam earum eum?",
            "date" => "10 mai 2018",
            "picture" => "news/news-4.png",
            "user_id" => 3,
        ]);
        DB::table('articles')->insert([
            'title' => 'Really interesting article',
            "description_1" => "Articles are a great way to share your knowledge with your audience. You can use them to share your thoughts, ideas, or anything else you want.",
            "description_2" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio pariatur perspiciatis, recusandae quia eum voluptatibus laudantium et consectetur itaque! Repellendus adipisci dolore quidem libero eos vel eaque dolor architecto? Incidunt sint impedit, id inventore dolorum debitis. Facilis provident quae laudantium odit magni praesentium adipisci optio atque minus. Exercitationem amet repudiandae quisquam laudantium? Minus sint accusamus ipsa, temporibus quisquam earum eum?",
            "date" => "10 mai 2018",
            "picture" => "news/news-2.png",
            "user_id" => 3,
        ]);
        DB::table('articles')->insert([
            'title' => 'Really interesting article',
            "description_1" => "Articles are a great way to share your knowledge with your audience. You can use them to share your thoughts, ideas, or anything else you want.",
            "description_2" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio pariatur perspiciatis, recusandae quia eum voluptatibus laudantium et consectetur itaque! Repellendus adipisci dolore quidem libero eos vel eaque dolor architecto? Incidunt sint impedit, id inventore dolorum debitis. Facilis provident quae laudantium odit magni praesentium adipisci optio atque minus. Exercitationem amet repudiandae quisquam laudantium? Minus sint accusamus ipsa, temporibus quisquam earum eum?",
            "date" => "10 mai 2018",
            "picture" => "news/news-3.png",
            "user_id" => 3,
        ]);
    }
}
