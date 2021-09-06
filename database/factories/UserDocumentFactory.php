<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\UserDocument;

class UserDocumentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserDocument::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->randomNumber(),
            'IdCard' => $this->faker->word,
            'PassportDocument' => $this->faker->word,
            'LegalPapersUploaded' => $this->faker->word,
            'OtherDocsHandPrint' => $this->faker->word,
        ];
    }
}
