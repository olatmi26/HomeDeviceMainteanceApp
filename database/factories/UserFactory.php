<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Department;
use App\Models\User;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Firstname' => $this->faker->regexify('[A-Za-z0-9]{20}'),
            'Lastname' => $this->faker->regexify('[A-Za-z0-9]{20}'),
            'Othername' => $this->faker->regexify('[A-Za-z0-9]{20}'),
            'department_id' => Department::factory(),
            'MobileN01' => $this->faker->regexify('[A-Za-z0-9]{11}'),
            'MobileN02' => $this->faker->regexify('[A-Za-z0-9]{11}'),
            'MobileN03' => $this->faker->regexify('[A-Za-z0-9]{11}'),
            'ProfilePhoto' => $this->faker->word,
            'ResidentialAddress' => $this->faker->text,
            'City' => $this->faker->word,
            'DOB' => $this->faker->date(),
            'email' => $this->faker->safeEmail,
            'email_verified_at' => $this->faker->dateTime(),
            'password' => $this->faker->password,
        ];
    }
}
