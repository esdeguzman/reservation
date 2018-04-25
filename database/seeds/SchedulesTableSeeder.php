<?php

use App\Schedule;
use Illuminate\Database\Seeder;

class SchedulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schedule::create([
        'branch_course_id' => 1,
        'added_by' => 1,
        'start_date' => '12/01/2018',
        'end_date' => '12/03/2018',
        'days' => 3,
        'start_time' => '06:00',
        'end_time' => '09:00',
        'minutes' => 180,
        'learning_station' => 1,
    ]);

        Schedule::create([
            'branch_course_id' => 2,
            'added_by' => 1,
            'start_date' => '12/01/2018',
            'end_date' => '12/03/2018',
            'days' => 2,
            'start_time' => '06:00',
            'end_time' => '09:00',
            'minutes' => 180,
            'learning_station' => 2,
        ]);

        Schedule::create([
            'branch_course_id' => 3,
            'added_by' => 1,
            'start_date' => '11/01/2018',
            'end_date' => '11/03/2018',
            'days' => 3,
            'start_time' => '06:00',
            'end_time' => '09:00',
            'minutes' => 180,
            'learning_station' => 1,
        ]);

        Schedule::create([
            'branch_course_id' => 4,
            'added_by' => 1,
            'start_date' => '11/01/2018',
            'end_date' => '11/03/2018',
            'days' => 2,
            'start_time' => '06:00',
            'end_time' => '09:00',
            'minutes' => 180,
            'learning_station' => 2,
        ]);

        Schedule::create([
            'branch_course_id' => 5,
            'added_by' => 1,
            'start_date' => '12/01/2018',
            'end_date' => '12/03/2018',
            'days' => 3,
            'start_time' => '06:00',
            'end_time' => '09:00',
            'minutes' => 180,
            'learning_station' => 1,
        ]);

        Schedule::create([
            'branch_course_id' => 6,
            'added_by' => 1,
            'start_date' => '12/01/2018',
            'end_date' => '12/03/2018',
            'days' => 2,
            'start_time' => '06:00',
            'end_time' => '09:00',
            'minutes' => 180,
            'learning_station' => 2,
        ]);

        Schedule::create([
            'branch_course_id' => 7,
            'added_by' => 1,
            'start_date' => '11/01/2018',
            'end_date' => '11/03/2018',
            'days' => 3,
            'start_time' => '06:00',
            'end_time' => '09:00',
            'minutes' => 180,
            'learning_station' => 1,
        ]);

        Schedule::create([
            'branch_course_id' => 8,
            'added_by' => 1,
            'start_date' => '11/01/2018',
            'end_date' => '11/03/2018',
            'days' => 2,
            'start_time' => '06:00',
            'end_time' => '09:00',
            'minutes' => 180,
            'learning_station' => 2,
        ]);
    }
}