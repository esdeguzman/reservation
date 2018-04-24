<?php

use \App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'payment-confirmation',
            'added_by' => 'System'
        ]);

        Role::create([
            'name' => 'trainee-registration',
            'added_by' => 'System'
        ]);
    }
}
