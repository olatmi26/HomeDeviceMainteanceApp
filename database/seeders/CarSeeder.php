<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cars = [
            'Maruti Suzuki',
            'Hyundai',
            'Honda',
            'Tata',
            'Nissan',
            'Renault',
            'Chevrolet',
            'Toyota',
            'Mahindra',
            'Ford',
            'Volkswagen',
        ];
        foreach ($cars as $key => $car) {
            Car::create(['name' => $car]);
        }
    }
}
