<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    public function definition(): array
    {
        $titles = [
            'Як правильно мити вікна без розводів: поради від професіоналів',
            'Топ-5 помилок при самостійному прибиранні офісу',
            'Чому варто довірити генеральне прибирання професіоналам',
            'Екологічне прибирання: що це та чому це важливо',
            'Як підготувати квартиру до генерального прибирання',
            'Секрети чистоти: як підтримувати порядок між прибираннями',
            'Промисловий альпінізм: безпека та технології миття фасадів',
            'Що входить у післябудівельне прибирання: повний чек-лист',
            'Хімчистка меблів: коли потрібна та як проходить',
            'Сонячні панелі: чому важливо їх регулярно мити',
        ];

        $title = fake()->unique()->randomElement($titles);

        $paragraphs = fake()->paragraphs(rand(6, 12));
        $body = implode("\n\n", array_map(fn ($p) => '<p>'.$p.'</p>', $paragraphs));

        $coverImages = [
            'https://images.unsplash.com/photo-1581578731548-c64695cc6952?w=1200',
            'https://images.unsplash.com/photo-1527515637462-cff94eecc1ac?w=1200',
            'https://images.unsplash.com/photo-1558618666-fcd25c85f82e?w=1200',
            'https://images.unsplash.com/photo-1563453392212-326f5e854473?w=1200',
            'https://images.unsplash.com/photo-1628177142898-93e36e4e3a50?w=1200',
        ];

        $publishedAt = fake()->dateTimeBetween('-6 months', 'now');

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'excerpt' => fake()->sentence(20),
            'body' => $body,
            'cover_image' => fake()->randomElement($coverImages),
            'is_published' => true,
            'published_at' => $publishedAt,
        ];
    }
}
