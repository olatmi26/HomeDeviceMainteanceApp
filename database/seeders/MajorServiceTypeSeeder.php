<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MajorServiceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $majortypes=[
            'Popular Services',
            'General Maintenance',
            'Scheduled Maintenance',
            'Brakes',
            'Engine',
            'Clutch & Transmission',
            'Heating & AC',
            'Suspension & Steering',
            'Exterior & Interior',
            'Electrical',
        ];
    }
}
