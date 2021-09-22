<?php

namespace Database\Seeders;

use App\Models\CarMakerYear;
use Illuminate\Database\Seeder;

class CarYearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $years = [
            '2010',
            '2011',
            '2012',
            '2013',
            '2014',
            '2015',
            '2016',
            '2017',
            '2018',
            '2019',
            '2020',
        ];
        CarMakerYear::truncate();
        foreach ($years as $year) {
            CarMakerYear::create(['Year' => date_format('Y',$year)]);
        }
    }
}
