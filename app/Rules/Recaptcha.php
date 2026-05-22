<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Http;

class Recaptcha implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (empty($value)) {
            $fail('Помилка безпеки: токен капчі відсутній.');

            return;
        }

        $response = Http::asForm()->post(
            'https://www.google.com/recaptcha/api/siteverify',
            [
                'secret' => config('services.recaptcha.secret'),
                'response' => $value,
            ]
        );

        if ($response->failed()) {
            $fail('Не вдалося зв’язатися з сервером перевірки безпеки.');

            return;
        }

        $data = $response->json();

        if (! ($data['success'] ?? false)) {

            logger()->warning('Recaptcha verification failed', [
                'response' => $data,
            ]);

            $fail('Капча не пройшла перевірку. Спробуйте ще раз.');

            return;
        }

        if (($data['action'] ?? null) !== 'submit') {
            $fail('Некоректна дія reCAPTCHA.');

            return;
        }

        if (($data['score'] ?? 0) < 0.5) {
            $fail('Система зафіксувала підозрілу активність. Спробуйте оновити сторінку.');
        }
    }
}
