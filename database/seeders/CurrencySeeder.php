<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Currency::truncate();
        
        Currency::create([
            'currency'=> 'EG£ Egypy Great Pounds',
            'symbol'=>'EG£',
            'value'=>'1572'
        ]);
        Currency::create([
            'currency'=> 'USD',
            'symbol'=>'$',
            'value'=>1
        ]);
    }
}
