<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Http;

class Recaptcha implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        // Якщо токен порожній (наприклад, збій JS)
        if (empty($value)) {
            $fail('Помилка безпеки: токен капчі відсутній.');
            return;
        }

        // НАДВАЖЛИВО: використовуємо точний повний URL сервісу Google для перевірки v3
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret'   => config('services.recaptcha.secret'),
            'response' => $value,
            'remoteip' => request()->ip(),
        ]);

        if ($response->failed()) {
            $fail('Не вдалося зв’язатися з сервером перевірки безпеки.');
            return;
        }

        $data = $response->json();

        // Якщо Google відхилив токен або повернув помилку
        if (!($data['success'] ?? false)) {
            $fail('Капча не пройшла перевірку. Спробуйте ще раз.');
            return;
        }

        // Перевірка рейтингу користувача. Для reCAPTCHA v3 поріг 0.5 є стандартом.
        if (isset($data['score']) && $data['score'] < 0.5) {
            $fail('Система зафіксувала підозрілу активність. Спробуйте оновити сторінку.');
        }
    }
}
