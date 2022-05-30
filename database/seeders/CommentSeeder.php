<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'user_id' => 1,
            'article_id' => 1,
            'name' => 'John Doe',
            'email' => 'johndoe@johndoe.fr',
            'picture' => 'courses-icon.png',
            'content' => 'Blue Bottle occupy fanny pack hashtag, cronut brunch PBR Odd Future. Brooklyn cray fap Meggings quinoa 8-bit, blog actually roof party master cleanse iPhone four dollar toast.Tofu dreamcatcher 90s letterpress vinyl megging',
            'time' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('comments')->insert([
            'user_id' => 1,
            'article_id' => 2,
            'name' => 'John Doe',
            'email' => 'johndoe@johndoe.fr',
            'picture' => 'courses-icon',
            'content' => 'Blue Bottle occupy fanny pack hashtag, cronut brunch PBR Odd Future. Brooklyn cray fap Meggings quinoa 8-bit, blog actually roof party master cleanse iPhone four dollar toast.Tofu dreamcatcher 90s letterpress vinyl megging',
            'time' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('comments')->insert([
            'user_id' => 1,
            'article_id' => 3,
            'name' => 'John Doe',
            'email' => 'johndoe@johndoe.fr',
            'picture' => 'courses-icon',
            'content' => 'Blue Bottle occupy fanny pack hashtag, cronut brunch PBR Odd Future. Brooklyn cray fap Meggings quinoa 8-bit, blog actually roof party master cleanse iPhone four dollar toast.Tofu dreamcatcher 90s letterpress vinyl megging',
            'time' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('comments')->insert([
            'user_id' => 1,
            'article_id' => 4,
            'name' => 'John Doe',
            'email' => 'johndoe@johndoe.fr',
            'picture' => 'courses-icon',
            'content' => 'Blue Bottle occupy fanny pack hashtag, cronut brunch PBR Odd Future. Brooklyn cray fap Meggings quinoa 8-bit, blog actually roof party master cleanse iPhone four dollar toast.Tofu dreamcatcher 90s letterpress vinyl megging',
            'time' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('comments')->insert([
            'user_id' => 1,
            'article_id' => 5,
            'name' => 'John Doe',
            'email' => 'johndoe@johndoe.fr',
            'picture' => 'courses-icon',
            'content' => 'Blue Bottle occupy fanny pack hashtag, cronut brunch PBR Odd Future. Brooklyn cray fap Meggings quinoa 8-bit, blog actually roof party master cleanse iPhone four dollar toast.Tofu dreamcatcher 90s letterpress vinyl megging',
            'time' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('comments')->insert([
            'user_id' => 1,
            'article_id' => 6,
            'name' => 'John Doe',
            'email' => 'johndoe@johndoe.fr',
            'picture' => 'courses-icon',
            'content' => 'Blue Bottle occupy fanny pack hashtag, cronut brunch PBR Odd Future. Brooklyn cray fap Meggings quinoa 8-bit, blog actually roof party master cleanse iPhone four dollar toast.Tofu dreamcatcher 90s letterpress vinyl megging',
            'time' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

    }
}
