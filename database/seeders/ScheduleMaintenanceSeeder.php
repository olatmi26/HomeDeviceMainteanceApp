<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ScheduleMaintenanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $schuleLists=[
            'Timing Belt Replacement',
            'Change Oil and Filter',
            'Check Cooling System',
            'Check Throttle Cable'
        ];
    }
}
