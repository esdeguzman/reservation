<?php

use App\Trainee;
use App\User;
use Illuminate\Database\Seeder;

class TraineesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email' => 'email1@test.com',
            'username' => 'trainee1',
            'password' => bcrypt('root')
        ]);

        Trainee::create([
            'user_id' => 1,
            'first_name' => 'Elmer',
            'middle_name' => 'Barrios',
            'last_name' => 'de Guzman',
            'mobile_number' => '09182815569',
            'rank' => 'Cadet',
        ]);

        User::create([
            'email' => 'email2@test.com',
            'username' => 'trainee2',
            'password' => bcrypt('root')
        ]);

        Trainee::create([
            'user_id' => 2,
            'first_name' => 'Manuel',
            'middle_name' => 'Biyernes',
            'last_name' => 'Sabado',
            'mobile_number' => '091824565569',
            'rank' => 'Firstmate',
        ]);

        User::create([
            'email' => 'email3@test.com',
            'username' => 'trainee3',
            'password' => bcrypt('root')
        ]);

        Trainee::create([
            'user_id' => 3,
            'first_name' => 'Bob',
            'middle_name' => 'Almesa',
            'last_name' => 'Delgado',
            'mobile_number' => '09182820969',
            'rank' => 'Master Chef',
        ]);
    }
}
