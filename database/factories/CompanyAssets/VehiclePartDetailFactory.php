<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\CompanyAssets\VehiclePartDetail;

class VehiclePartDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = VehiclePartDetail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'vehicle_id' => $this->faker->randomNumber(),
            'OilType' => $this->faker->word,
            'OilMeter' => $this->faker->numberBetween(-10000, 10000),
            'OilfilterGuaged' => $this->faker->boolean,
            'BatteryUsed' => $this->faker->word,
            'ACCondition' => $this->faker->boolean,
        ];
    }
}
