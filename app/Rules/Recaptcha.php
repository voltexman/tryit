<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Http;
use Illuminate\Translation\PotentiallyTranslatedString;

class Recaptcha implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  Closure(string, ?string=): PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (empty($value)) {
            $fail('Помилка безпеки: токен капчі відсутній.');

            return;
        }

        // Запит до серверів Google для верифікації токена
        $response = Http::asForm()->post('google.com', [
            'secret' => config('services.recaptcha.secret'),
            'response' => $value,
            'remoteip' => request()->ip(),
        ]);

        $data = $response->json();

        // Перевіряємо успішність та оцінку (score). Менше 0.5 — зазвичай бот.
        if (! ($data['success'] ?? false) || ($data['score'] ?? 0) < 0.5) {
            $fail('Система безпеки заблокувала запит. Спробуйте ще раз.');
        }
    }
}
