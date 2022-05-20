<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insert([
            'name' => 'Lise Meitner',
            'email' => 'lisemeitner@educa.com',
            'description' => "Vinyl keffiyeh gluten-free, health goth stumptown chambray typewriter ugh. McSweeney gastropub cardigan, banjo Thundercats bitters health goth tofu freegan. Pop-up Pinter 90's farm-to-table locavore seitan McSweeney's.",
            'picture' => 'teachers/teacher-1.png',
            'telephone' => '06-666-666',
            'skype' => 'lmeducaskype',
            'role' => 'Math Teacher',
        ]);
        DB::table('teachers')->insert([
            'name' => 'Saskia Noordman',
            'email' => 'saskianoordman@educa.com',
            'description' => "Vinyl keffiyeh gluten-free, health goth stumptown chambray typewriter ugh. McSweeney gastropub cardigan, banjo Thundercats bitters health goth tofu freegan. Pop-up Pinter 90's farm-to-table locavore seitan McSweeney's.",
            'picture' => 'teachers/teacher-2.png',
            'telephone' => '06-666-666',
            'skype' => 'sneducaskype',
            'role' => 'AI Teacher',
        ]);
        DB::table('teachers')->insert([
            'name' => 'Roger De Vries',
            'email' => 'rogerdevries@educa.com',
            'description' => "Vinyl keffiyeh gluten-free, health goth stumptown chambray typewriter ugh. McSweeney gastropub cardigan, banjo Thundercats bitters health goth tofu freegan. Pop-up Pinter 90's farm-to-table locavore seitan McSweeney's.",
            'picture' => 'teachers/teacher-3.png',
            'telephone' => '06-666-666',
            'skype' => 'rdveducaskype',
            'role' => 'Finance Teacher',
        ]);
        DB::table('teachers')->insert([
            'name' => 'Simon Bolivar',
            'email' => 'simonbolivar@educa.com',
            'description' => "Vinyl keffiyeh gluten-free, health goth stumptown chambray typewriter ugh. McSweeney gastropub cardigan, banjo Thundercats bitters health goth tofu freegan. Pop-up Pinter 90's farm-to-table locavore seitan McSweeney's.",
            'picture' => 'teachers/teacher-4.png',
            'telephone' => '06-666-666',
            'skype' => 'sbeducaskype',
            'role' => 'Engineering Teacher',
        ]);
        DB::table('teachers')->insert([
            'name' => 'Noah Siskind',
            'email' => 'noahsiskingr@educa.com',
            'description' => "Vinyl keffiyeh gluten-free, health goth stumptown chambray typewriter ugh. McSweeney gastropub cardigan, banjo Thundercats bitters health goth tofu freegan. Pop-up Pinter 90's farm-to-table locavore seitan McSweeney's.",
            'picture' => 'teachers/teacher-5.png',
            'telephone' => '06-666-666',
            'skype' => 'nseducaskype',
            'role' => 'Finance Teacher',
        ]);
        DB::table('teachers')->insert([
            'name' => 'Louise Léonard',
            'email' => 'louiseleonard@educa.com',
            'description' => "Vinyl keffiyeh gluten-free, health goth stumptown chambray typewriter ugh. McSweeney gastropub cardigan, banjo Thundercats bitters health goth tofu freegan. Pop-up Pinter 90's farm-to-table locavore seitan McSweeney's.",
            'picture' => 'teachers/teacher-6.png',
            'telephone' => '06-666-666',
            'skype' => 'lleducaskype',
            'role' => 'Arts Teacher',
        ]);
        DB::table('teachers')->insert([
            'name' => 'Karl Yvon-Sommer',
            'email' => 'karlyvonsommer@educa.com',
            'description' => "Vinyl keffiyeh gluten-free, health goth stumptown chambray typewriter ugh. McSweeney gastropub cardigan, banjo Thundercats bitters health goth tofu freegan. Pop-up Pinter 90's farm-to-table locavore seitan McSweeney's.",
            'picture' => 'teachers/teacher-7.png',
            'telephone' => '06-666-666',
            'skype' => 'kyseducaskype',
            'role' => 'Business Teacher',
        ]);
        DB::table('teachers')->insert([
            'name' => 'Patricia Fonseca',
            'email' => 'patriciafonseca@educa.com',
            'description' => "Vinyl keffiyeh gluten-free, health goth stumptown chambray typewriter ugh. McSweeney gastropub cardigan, banjo Thundercats bitters health goth tofu freegan. Pop-up Pinter 90's farm-to-table locavore seitan McSweeney's.",
            'picture' => 'teachers/teacher-8.png',
            'telephone' => '06-666-666',
            'skype' => 'pfeducaskype',
            'role' => 'Engineering Teacher',
        ]);
        DB::table('teachers')->insert([
            'name' => 'Marie-Claude Dufour',
            'email' => 'mariedufour@educa.com',
            'description' => "Vinyl keffiyeh gluten-free, health goth stumptown chambray typewriter ugh. McSweeney gastropub cardigan, banjo Thundercats bitters health goth tofu freegan. Pop-up Pinter 90's farm-to-table locavore seitan McSweeney's.",
            'picture' => 'teachers/teacher-9.png',
            'telephone' => '06-666-666',
            'skype' => 'mcdeducaskype',
            'role' => 'AI Teacher',
        ]);
        DB::table('teachers')->insert([
            'name' => 'Cristina Marquez',
            'email' => 'cristinamarquez@educa.com',
            'description' => "Vinyl keffiyeh gluten-free, health goth stumptown chambray typewriter ugh. McSweeney gastropub cardigan, banjo Thundercats bitters health goth tofu freegan. Pop-up Pinter 90's farm-to-table locavore seitan McSweeney's.",
            'picture' => 'teachers/teacher-10.png',
            'telephone' => '06-666-666',
            'skype' => 'cmeducaskype',
            'role' => 'Finance Teacher',
        ]);
    }
}
