<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BranchesTableSeeder::class);
        $this->call(DepartmentsTableSeeder::class);
        $this->call(PositionsTableSeeder::class);
        $this->call(RolesTableSeeder::class);

        $user = \App\User::create([
            'email' => 'deguzman.esmeraldo@gmail.com',
            'username' => 'esme',
            'password' => bcrypt('root'),
        ]);

        \App\Admin::create([
            'user_id' => $user->id,
            'employee_id' => '0624853',
            'full_name' => 'Esmeraldo de Guzman Jr',
            'branch' => 'Makati',
            'position' => 'IT Jr Programmer',
            'department' => 'IT'
        ]);
    }
}
