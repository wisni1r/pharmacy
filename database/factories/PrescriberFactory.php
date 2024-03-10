<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Prescriber>
 */
class PrescriberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->lastName.', '.fake()->firstName,
            'address' => fake()->streetAddress,
            'city' => fake()->city,
            'state' => fake()->state,
            'zip' => fake()->postcode,
            'phone' => fake()->numerify('(###) ###-####'),
            'fax' => fake()->numerify('(###) ###-####'),
            'dea' => fake()->unique()->regexify('[A-Z]{2}[0-9]{7}'),
        ];
    }
}
