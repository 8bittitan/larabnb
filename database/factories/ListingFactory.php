<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->words(3, true),
            'description' => $this->faker->paragraphs(3, true),
            'address_street' => $this->faker->streetAddress,
            'address_city' => $this->faker->city,
            'address_state' => $this->faker->stateAbbr,
            'address_zip' => $this->faker->postcode,
            'location_human' => $this->faker->words(3, true),
            'price_per_night' => $this->faker->numberBetween(10000, 50000),
            'cleaning_fee' => $this->faker->numberBetween(1000, 5000),
            'pet_fee' => $this->faker->numberBetween(1000, 5000),
            'check_in_time' => $this->faker->time(),
            'check_out_time' => $this->faker->time(),
            'max_guests' => $this->faker->numberBetween(1, 10),
            'bedrooms' => $this->faker->numberBetween(1, 10),
            'beds' => $this->faker->numberBetween(1, 10),
            'bathrooms' => $this->faker->randomFloat(1, 1, 5),
            'has_self_check_in' => $this->faker->boolean,
            'has_office' => $this->faker->boolean,
            'has_lakeview' => $this->faker->boolean,
            'has_kitchen' => $this->faker->boolean,
            'has_beach_access' => $this->faker->boolean,
            'has_wifi' => $this->faker->boolean,
            'has_free_parking' => $this->faker->boolean,
            'has_hot_tub' => $this->faker->boolean,
            'has_pool' => $this->faker->boolean,
            'has_pets_allowed' => $this->faker->boolean,
            'has_wheelchair_accessible' => $this->faker->boolean,
            'has_smoking_allowed' => $this->faker->boolean,
        ];
    }
}
