<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\CompanyAssets\CarFuelling;
use App\Models\User;

class CarFuellingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CarFuelling::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'vehicle_id' => $this->faker->randomNumber(),
            'department_id' => $this->faker->randomNumber(),
            'FuelLiter' => $this->faker->numberBetween(-10000, 10000),
            'UnitCost' => $this->faker->randomNumber(),
            'DateFuelled' => $this->faker->dateTime(),
            'RefilledBy' => User::factory(),
        ];
    }
}
