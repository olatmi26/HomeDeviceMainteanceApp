<?php

namespace Database\Seeders;

use App\Models\CompanyAssets\CarFuelling;
use Illuminate\Database\Seeder;

class CarFuellingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CarFuelling::factory()->count(5)->create();
    }
}
