<?php

namespace Database\Seeders;

use App\Models\Sparepart;
use Illuminate\Database\Seeder;

class SparepartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sparts=['Headlights & Lighting',
            'Interior Parts',
            'Switches & Relays',
            'Tires & Wheels',
            'Tools & Garage',
            'Clutches',
            'Fuel Systems',
            'Steering',
            'Suspension',
            'Body Parts',
            'Transmission',
            'Air Filters',
        ];

        foreach ($sparts as $part) {
            Sparepart::create([
                'name'=>$part
            ]);
        }
    }
}
