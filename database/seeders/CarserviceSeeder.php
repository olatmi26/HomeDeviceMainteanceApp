<?php

namespace Database\Seeders;

use App\Models\CompanyAssets\Carservice;
use Illuminate\Database\Seeder;

class CarserviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Carservice::factory()->count(5)->create();
    }
}
