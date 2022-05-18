<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'title' => 'Graduated steps',
            'description' => 'Photo booth Banksy YOLO mixtape post-ironic they sold out all.',
            'icon' => '<i class="fa fa-graduation-cap"></i>',
        ]);
        DB::table('services')->insert([
            'title' => 'Global Interested',
            'description' => 'Photo booth Banksy YOLO mixtape post-ironic they sold out all.',
            'icon' => '<i class="fa fa-globe"></i>',
        ]);
        DB::table('services')->insert([
            'title' => 'Circular Clock',
            'description' => 'Photo booth Banksy YOLO mixtape post-ironic they sold out all.',
            'icon' => '<i class="fa fa-clock-o"></i>',
        ]);
        DB::table('services')->insert([
            'title' => 'Open Book',
            'description' => 'Photo booth Banksy YOLO mixtape post-ironic they sold out all.',
            'icon' => '<i class="fa fa-book"></i>',
        ]);
    }
}
