<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Super Admin',
            'email' => 'admin@admin.admin',
            'password' => Hash::make('123456'),
            'picture' => 'admin.png',
        ]);
        DB::table('users')->insert([
            'name' => 'Tired Teacher',
            'email' => 'teacher@teacher.teacher',
            'password' => Hash::make('123456'),
            'picture' => 'teacher.png',
        ]);
        DB::table('users')->insert([
            'name' => 'Ultra Redactor',
            'email' => 'redactor@redactor.redactor',
            'password' => Hash::make('123456'),
            'picture' => 'redactor.png',
        ]);
        DB::table('users')->insert([
            'name' => 'Simple Member',
            'email' => 'member@member.member',
            'password' => Hash::make('123456'),
            'picture' => 'member.png',
        ]);
        DB::table('users')->insert([
            'name' => 'Lise Meitner',
            'email' => 'lisemeitner@educa.com',
            'password' => Hash::make('123456'),
            'picture' => 'teachers/teacher-1.png',
        ]);
        DB::table('users')->insert([
            'name' => 'Saskia Noordman',
            'email' => 'saskianoordman@educa.com',
            'password' => Hash::make('123456'),
            'picture' => 'teachers/teacher-2.png',
        ]);
        DB::table('users')->insert([
            'name' => 'Roger De Vries',
            'email' => 'rogerdevries@educa.com',
            'password' => Hash::make('123456'),
            'picture' => 'teachers/teacher-3.png',
        ]);
        DB::table('users')->insert([
            'name' => 'Simon Bolivar',
            'email' => 'simonbolivar@educa.com',
            'password' => Hash::make('123456'),
            'picture' => 'teachers/teacher-4.png',
        ]);
        DB::table('users')->insert([
            'name' => 'Noah Siskind',
            'email' => 'noahsiskind@educa.com',
            'password' => Hash::make('123456'),
            'picture' => 'teachers/teacher-5.png',
        ]);
        DB::table('users')->insert([
            'name' => 'Louise Léonard',
            'email' => 'louiseleonard@educa.com',
            'password' => Hash::make('123456'),
            'picture' => 'teachers/teacher-6.png',
        ]);
        DB::table('users')->insert([
            'name' => 'Karl Yvon-Sommer',
            'email' => 'karlyvonsommer@educa.com',
            'password' => Hash::make('123456'),
            'picture' => 'teachers/teacher-7.png',
        ]);
        DB::table('users')->insert([
            'name' => 'Patricia Fonseca',
            'email' => 'patriciafonseca@educa.com',
            'password' => Hash::make('123456'),
            'picture' => 'teachers/teacher-8.png',
        ]);
        DB::table('users')->insert([
            'name' => 'Marie-Claude Dufour',
            'email' => 'mariedufour@educa.com',
            'password' => Hash::make('123456'),
            'picture' => 'teachers/teacher-9.png',
        ]);
        DB::table('users')->insert([
            'name' => 'Cristina Marquez',
            'email' => 'cristinamarquez@educa.com',
            'password' => Hash::make('123456'),
            'picture' => 'teachers/teacher-10.png',
        ]);
        
    }
}
