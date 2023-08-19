<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BookLoan>
 */
class BookLoanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fk_member_id' => random_int(1,10),
            'fk_stock_id' => random_int(1,10),
            'loan_date' => $this->faker->dateTimeThisCentury($max = 'now', $timezone = null),
            'return_date' => $this->faker->dateTimeThisCentury($max = 'now', $timezone = null),
        ];
    }
}
