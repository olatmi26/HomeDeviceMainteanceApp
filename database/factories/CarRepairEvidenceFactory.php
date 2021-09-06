<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\CarRepairEvidence;
use App\Models\Orderassignto;

class CarRepairEvidenceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CarRepairEvidence::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'orderassignto_id' => Orderassignto::factory(),
            'FaultyComponentPictures' => $this->faker->word,
            'VoiceRecord' => $this->faker->word,
        ];
    }
}
