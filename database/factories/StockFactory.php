<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Stock;

class StockFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Stock::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'partTrackN0' => $this->faker->word,
            'category_id' => Category::factory(),
            'partName' => $this->faker->word,
            'UnitCost' => $this->faker->randomNumber(),
            'Maker' => $this->faker->word,
            'ModelNo' => $this->faker->word,
            'DateStock' => $this->faker->dateTime(),
            'Type' => $this->faker->word,
            'QtyInstock' => $this->faker->randomNumber(),
            'Availability' => $this->faker->randomNumber(),
            'status' => $this->faker->word,
            'stockBy' => $this->faker->randomNumber(),
        ];
    }
}
