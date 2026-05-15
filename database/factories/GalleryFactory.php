<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GalleryFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(),
            'alt' => $this->faker->words(3, true),
            'meta_title' => $this->faker->words(4, true),
            'sort_order' => $this->faker->numberBetween(0, 100),
            'is_visible_on_slideshow' => $this->faker->boolean(80),
        ];
    }
}
