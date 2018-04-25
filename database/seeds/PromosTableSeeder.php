<?php

use App\Promo;
use Illuminate\Database\Seeder;

class PromosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Promo::create([
            'schedule_id' => 1,
            'discount' => .50,
            'price' => 5000.00,
            'added_by' => 1
        ]);

        Promo::create([
            'schedule_id' => 2,
            'discount' => .40,
            'price' => 6000.00,
            'added_by' => 1
        ]);

        Promo::create([
            'schedule_id' => 3,
            'discount' => .50,
            'price' => 5000.00,
            'added_by' => 1
        ]);

        Promo::create([
            'schedule_id' => 4,
            'discount' => .40,
            'price' => 6000.00,
            'added_by' => 1
        ]);

        Promo::create([
            'schedule_id' => 5,
            'discount' => .50,
            'price' => 5000.00,
            'added_by' => 1
        ]);

        Promo::create([
            'schedule_id' => 6,
            'discount' => .40,
            'price' => 6000.00,
            'added_by' => 1
        ]);

        Promo::create([
            'schedule_id' => 7,
            'discount' => .50,
            'price' => 5000.00,
            'added_by' => 1
        ]);

        Promo::create([
            'schedule_id' => 8,
            'discount' => .40,
            'price' => 6000.00,
            'added_by' => 1
        ]);
    }
}
