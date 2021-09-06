<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Customer;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'FirstName' => $this->faker->regexify('[A-Za-z0-9]{20}'),
            'LastName' => $this->faker->regexify('[A-Za-z0-9]{20}'),
            'OtherName' => $this->faker->regexify('[A-Za-z0-9]{25}'),
            'PhoneNo' => $this->faker->regexify('[A-Za-z0-9]{11}'),
            'PhoneNo2' => $this->faker->regexify('[A-Za-z0-9]{11}'),
            'ProfileImage' => $this->faker->word,
            'email' => $this->faker->safeEmail,
            'Address' => $this->faker->text,
            'city_id' => $this->faker->randomNumber(),
            'state_id' => $this->faker->randomNumber(),
            'password' => $this->faker->password,
            'CurrentGpsLocationLong' => $this->faker->randomFloat(8, 0, 99.99999999),
            'CurrentGpsLocationLat' => $this->faker->randomFloat(8, 0, 99.99999999),
            'CustomerStatus' => $this->faker->boolean,
            'email_verified_at' => $this->faker->dateTime(),
        ];
    }
}
