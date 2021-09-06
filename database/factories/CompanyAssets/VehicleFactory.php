<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\CompanyAssets\Vehicle;
use App\Models\User;

class VehicleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vehicle::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'type' => $this->faker->word,
            'Model' => $this->faker->word,
            'YearMake' => $this->faker->date(),
            'YearPurchased' => $this->faker->date(),
            'ChassisN0' => $this->faker->word,
            'AssignedDriver' => User::factory(),
        ];
    }
}
