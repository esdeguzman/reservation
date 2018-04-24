<?php

use \App\Branch;
use Illuminate\Database\Seeder;

class BranchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Branch::create([
            'code' => 'BCD',
            'name' => 'Bacolod',
            'added_by' => 'System',
        ]);

        Branch::create([
            'code' => 'CEB',
            'name' => 'Cebu',
            'added_by' => 'System',
        ]);

        Branch::create([
            'code' => 'DAV',
            'name' => 'Davao',
            'added_by' => 'System',
        ]);

        Branch::create([
            'code' => 'ILO',
            'name' => 'Ilo-ilo',
            'added_by' => 'System',
        ]);

        Branch::create([
            'code' => 'MKT',
            'name' => 'Makati',
            'added_by' => 'System',
        ]);
    }
}
