<?php

namespace Database\Seeders;

use App\Models\CompanyAssets\VehicleDocument;
use Illuminate\Database\Seeder;

class VehicleDocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VehicleDocument::factory()->count(5)->create();
    }
}
