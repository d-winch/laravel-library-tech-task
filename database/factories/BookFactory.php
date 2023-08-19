<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'isbn' => $this->faker->randomNumber($nbDigits = 9, $strict = false),
            'title' => $this->faker->sentence(4),
            'fk_category_id' => random_int(1,10),
            'published_date' => $this->faker->dateTimeThisCentury($max = 'now', $timezone = null),
        ];
    }
}
