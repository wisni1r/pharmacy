<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Item;
use App\Models\Location;
use App\Models\Prescriber;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PrescriptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_id' => Customer::inRandomOrder()->first()->id,
            'prescriber_id' => Prescriber::inRandomOrder()->first()->id,
            'location_id' => Location::inRandomOrder()->first()->id,
            'item_id' => Item::inRandomOrder()->first()->id,
            'quantity' => fake()->randomElement([30, 60, 90])
        ];
    }
}
