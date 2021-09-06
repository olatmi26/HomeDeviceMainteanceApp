<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\CompanyAssets\Vehicle;
use App\Models\OilFilter;
use App\Models\User;

class OilFilterFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OilFilter::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'vehicle_id' => Vehicle::factory(),
            'WhenFIlterChanged' => $this->faker->dateTime(),
            'ExpectedNextChange' => $this->faker->dateTime(),
            'ChangedBy' => User::factory(),
        ];
    }
}
