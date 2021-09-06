<?php

namespace Database\Seeders;

use App\Models\OrderAssignTo;
use Illuminate\Database\Seeder;

class OrderAssignToSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrderAssignTo::factory()->count(5)->create();
    }
}
