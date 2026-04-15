<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FeedbackFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->optional()->name(),
            'contact' => fake()->optional()->randomElement([
                fake()->phoneNumber(),
                fake()->email(),
            ]),
            'company' => fake()->optional()->company(),
            'text' => fake()->text(),
            'show' => fake()->boolean(),
        ];
    }
}
