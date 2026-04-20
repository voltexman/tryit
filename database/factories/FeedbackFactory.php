<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FeedbackFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->optional()->name(),
            'contact' => fake()->randomElement([
                fake()->email(),
                fake()->phoneNumber(),
            ]),
            'text' => fake()->text(),
        ];
    }
}
