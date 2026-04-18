<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->words(4, true),
            'price' => fake()->optional()->numberBetween(0, 900),
            'count' => fake()->numberBetween(0, 10),
            'description' => fake()->optional()->text(),
            // 'status' => fake(),
        ];
    }
}
