<?php

use App\Course;
use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::create([
            'code' => 'BT',
            'name' => 'Basic Training',
            'added_by' => 1
        ]);

        Course::create([
            'code' => 'SSATSDSD',
            'name' => 'Ship Security Awareness Training and Seafarer with Designated Security Duties',
            'added_by' => 1
        ]);
    }
}
