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
    }
}
