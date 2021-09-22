<?php

namespace Database\Seeders;

use App\Models\CustomerType;
use Illuminate\Database\Seeder;

class CustomerTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cs=['Individual', 'Cooperate Company', 'Executive'];

        foreach ($cs as $key => $value) {
            CustomerType::create(['Type' => $value]);
        }
    }
}
