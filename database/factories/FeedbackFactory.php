<?php

namespace Database\Factories;

use App\Models\Feedback;
use Illuminate\Database\Eloquent\Factories\Factory;

class FeedbackFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->optional()->name(),
            'text' => fake()->text(),
        ];
    }
}
