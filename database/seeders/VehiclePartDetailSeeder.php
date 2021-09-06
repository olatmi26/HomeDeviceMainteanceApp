<?php

namespace Database\Seeders;

use App\Models\CompanyAssets\VehiclePartDetail;
use Illuminate\Database\Seeder;

class VehiclePartDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VehiclePartDetail::factory()->count(5)->create();
    }
}
