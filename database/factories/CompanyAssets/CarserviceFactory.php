<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\CompanyAssets\Carservice;
use App\Models\CompanyAssets\Partfault;
use App\Models\Customer;
use App\Models\User;

class CarserviceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Carservice::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'vehicle_id' => $this->faker->randomNumber(),
            'isCustomerCar' => $this->faker->boolean,
            'customer_id' => Customer::factory(),
            'isCompanyCar' => $this->faker->boolean,
            'partfault_id' => Partfault::factory(),
            'fualtyCOmponentPicture' => $this->faker->word,
            'RepairCost' => $this->faker->numberBetween(-10000, 10000),
            'TotalCost' => $this->faker->numberBetween(-10000, 10000),
            'ServiceBy' => User::factory(),
            'DateService' => $this->faker->dateTime(),
        ];
    }
}
