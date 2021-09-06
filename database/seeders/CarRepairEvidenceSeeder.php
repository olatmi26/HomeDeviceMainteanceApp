<?php

namespace Database\Seeders;

use App\Models\CarRepairEvidence;
use Illuminate\Database\Seeder;

class CarRepairEvidenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CarRepairEvidence::factory()->count(5)->create();
    }
}
