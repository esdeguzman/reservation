<?php

use \App\Position;
use Illuminate\Database\Seeder;

class PositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Position::create([
            'name' => 'IT Jr Programmer',
            'added_by' => 'System',
        ]);

        Position::create([
            'name' => 'Chief IT Officer',
            'added_by' => 'System',
        ]);

        Position::create([
            'name' => 'Chief Marketing Officer',
            'added_by' => 'System',
        ]);

        Position::create([
            'name' => 'Chief Training Officer',
            'added_by' => 'System',
        ]);

        Position::create([
            'name' => 'Chief Accounting Officer',
            'added_by' => 'System',
        ]);
    }
}
