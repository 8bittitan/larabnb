<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ListingRoom>
 */
class ListingRoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'king_beds' => $this->faker->numberBetween(0, 2),
            'queen_beds' => $this->faker->numberBetween(0, 2),
            'full_beds' => $this->faker->numberBetween(0, 2),
            'twin_beds' => $this->faker->numberBetween(0, 2),
            'bunk_beds' => $this->faker->numberBetween(0, 2),
            'futons' => $this->faker->numberBetween(0, 2),
            'sofas' => $this->faker->numberBetween(0, 2),
        ];
    }
}
