<?php

use \App\Department;
use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::create([
            'code' => 'IT',
            'name' => 'Information Technology',
            'added_by' => 'System'
        ]);

        Department::create([
            'code' => 'REG',
            'name' => 'Registration',
            'added_by' => 'System'
        ]);

        Department::create([
            'code' => 'TRNG',
            'name' => 'Training',
            'added_by' => 'System'
        ]);

        Department::create([
            'code' => 'MKTNG',
            'name' => 'Marketing',
            'added_by' => 'System'
        ]);

        Department::create([
            'code' => 'HR',
            'name' => 'Human Resources',
            'added_by' => 'System'
        ]);
    }
}
