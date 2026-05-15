<?php

namespace Database\Factories;

use App\Enums\FeedbackTopicEnum;
use App\Enums\ServiceEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

class FeedbackFactory extends Factory
{
    public function definition(): array
    {
        $topic = fake()->randomElement(FeedbackTopicEnum::cases());
        $rating = $topic === FeedbackTopicEnum::GRATITUDE ? fake()->numberBetween(3, 5) : null;

        return [
            'name' => fake()->optional(0.8)->name(),
            'contact' => fake()->optional(0.8)->randomElement([
                fake()->email(),
                fake()->phoneNumber(),
            ]),
            'topic' => $topic->value,
            'service' => fake()->optional(0.5)->randomElement(ServiceEnum::cases())?->value,
            'text' => fake()->realText(200),
            'is_visible_on_homepage' => fake()->boolean(80),
            'rating' => $rating,
        ];
    }
}
