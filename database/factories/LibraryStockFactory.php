<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LibraryStock>
 */
class LibraryStockFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fk_library_id' => random_int(1,10),
            'fk_book_id' => random_int(1,10), // TODO Use the book ISBN instead?
            'no_copies' => random_int(1, 20),
            'date_added' => $this->faker->dateTimeThisCentury($max = 'now', $timezone = null),
        ];
    }
}
