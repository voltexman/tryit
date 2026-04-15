<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => fake()->sentence,
            'slug' => fake()->unique()->slug,
            'content' => fake()->paragraphs(3, true),
            'is_published' => fake()->boolean,
        ];
    }

    public function configure(): static
    {
        return $this->afterCreating(function (Post $post) {
            $post->addMediaFromUrl('https://picsum.photos/1024/768')
                ->toMediaCollection('posts');

            $tags = Tag::factory(rand(2, 3))->create();
            $post->tags()->attach($tags);
        });
    }
}
