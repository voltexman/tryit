<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    protected $model = Post::class;

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
            'Як вибрати клінінгову компанію: головні критерії',
            'Особливості прибирання після ремонту',
            'Миття вітрин: як залучити клієнтів чистотою',
            'Дезінфекція приміщень у сучасному офісі',
            'Догляд за твердим покриттям підлоги: поради',
        ];

        $baseTitle = fake()->randomElement($titles);
        $title = $baseTitle . (fake()->boolean(30) ? ' ' . fake()->words(1, true) : '');
        $title = Str::ucfirst(trim($title));

        $slug = Str::slug($title) . '-' . fake()->unique()->numberBetween(1, 9999);

        $paragraphs = fake()->paragraphs(rand(6, 10));
        $body = collect($paragraphs)->map(fn($p) => "<p>{$p}</p>")->implode("\n");

        $coverImage = "https://picsum.photos/seed/{$slug}/1200/800";

        return [
            'title' => $title,
            'slug' => $slug,
            'excerpt' => fake()->realText(150),
            'body' => $body,
            'cover_image' => $coverImage,
            'is_published' => true,
            'published_at' => fake()->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
