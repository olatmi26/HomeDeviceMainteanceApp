<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Admin;

class AdminFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Admin::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firstName' => $this->faker->word,
            'lastName' => $this->faker->word,
            'phoneN0' => $this->faker->word,
            'email' => $this->faker->safeEmail,
            'profilePicture' => $this->faker->text,
            'password' => $this->faker->password,
        ];
    }
}
