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
    }
}
