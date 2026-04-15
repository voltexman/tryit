<?php

namespace Database\Factories;

use App\Models\Gallery;
use Illuminate\Database\Eloquent\Factories\Factory;

class GalleryFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => fake()->optional()->words(5, true),
            'description' => fake()->optional()->text(),
        ];
    }

    public function configure(): static
    {
        return $this->afterMaking(function (Gallery $gallery) {
            $gallery->addMediaFromUrl('https://placehold.co/1024x768.png')
                ->toMediaCollection('gallery');
        });
    }
}
