<?php

use App\BranchCourse;
use Illuminate\Database\Seeder;

class BranchCoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BranchCourse::create([
            'branch_id' => 1,
            'course_id' => 1,
            'price' => 10000.00,
            'added_by' => 1
        ]);

        BranchCourse::create([
            'branch_id' => 1,
            'course_id' => 2,
            'price' => 10000.00,
            'added_by' => 1
        ]);

        BranchCourse::create([
            'branch_id' => 2,
            'course_id' => 1,
            'price' => 10000.00,
            'added_by' => 1
        ]);

        BranchCourse::create([
            'branch_id' => 2,
            'course_id' => 2,
            'price' => 10000.00,
            'added_by' => 1
        ]);

        BranchCourse::create([
            'branch_id' => 3,
            'course_id' => 1,
            'price' => 10000.00,
            'added_by' => 1
        ]);

        BranchCourse::create([
            'branch_id' => 3,
            'course_id' => 2,
            'price' => 10000.00,
            'added_by' => 1
        ]);

        BranchCourse::create([
            'branch_id' => 4,
            'course_id' => 1,
            'price' => 10000.00,
            'added_by' => 1
        ]);

        BranchCourse::create([
            'branch_id' => 4,
            'course_id' => 2,
            'price' => 10000.00,
            'added_by' => 1
        ]);

        BranchCourse::create([
            'branch_id' => 5,
            'course_id' => 1,
            'price' => 10000.00,
            'added_by' => 1
        ]);

        BranchCourse::create([
            'branch_id' => 5,
            'course_id' => 2,
            'price' => 10000.00,
            'added_by' => 1
        ]);
    }
}
