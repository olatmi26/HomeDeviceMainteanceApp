<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\PartFault;
use App\Models\Stock;

class PartFaultFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PartFault::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'partFualty' => $this->faker->word,
            'ExactFualt' => $this->faker->text,
            'PartReplacewith' => Stock::factory(),
            'PartChanged' => Stock::factory(),
            'fualtyCOmponentPicture' => $this->faker->word,
        ];
    }
}
