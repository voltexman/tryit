<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    public function run(): void
    {
        $tags = [
            ['name' => 'Поради', 'color' => '#10b981'],
            ['name' => 'Новини', 'color' => '#3b82f6'],
            ['name' => 'Офіс', 'color' => '#f59e0b'],
            ['name' => 'Еко', 'color' => '#84cc16'],
            ['name' => 'Хімчистка', 'color' => '#fc4c02'],
        ];

        foreach ($tags as $tagData) {
            Tag::firstOrCreate(
                ['slug' => Str::slug($tagData['name'])],
                ['name' => $tagData['name'], 'color' => $tagData['color']]
            );
        }

        $allTags = Tag::all();
        Post::all()->each(function ($post) use ($allTags) {
            $post->tags()->sync($allTags->random(rand(1, 2))->pluck('id'));
        });
    }
}
