<?php

namespace App\Livewire\Forms;

use App\Enums\FeedbackTopicEnum;
use App\Models\Feedback;
use App\Notifications\FeedbackSubmitted;
use App\Rules\Recaptcha;
use Illuminate\Support\Facades\Notification;
use Livewire\Attributes\Validate;
use Livewire\Form;

class FeedbackForm extends Form
{
    #[Validate('min:2', message: 'Занадто мало символів')]
    public string $name = '';

    #[Validate('min:2', message: 'Занадто мало символів')]
    public string $contact = '';

    #[Validate('required', message: 'Напишіть листа')]
    #[Validate('max:1500', message: 'Занадто багато символів')]
    public string $text = '';

    #[Validate('required', message: 'Оберіть тему')]
    public string $topic = '';

    public string|null $service = null;

    public int|null $rating = null;

    public function store($images = [], $recaptchaToken = null)
    {
        if ($this->topic === FeedbackTopicEnum::GRATITUDE->value) {
            $this->validate([
                'rating' => 'required|integer|min:1|max:5',
            ], [
                'rating.required' => 'Будь ласка, залиште оцінку',
            ]);
        } else {
            $this->rating = null;
        }

        $this->withValidator(function ($validator) use ($recaptchaToken) {
            $validator->after(function ($validator) use ($recaptchaToken) {
                $recaptchaRule = new Recaptcha;
                $recaptchaRule->validate('recaptcha', $recaptchaToken, function ($message) use ($validator) {
                    $validator->errors()->add('recaptcha', $message);
                });
            });
        });

        $this->validate();

        $feedback = Feedback::create($this->all());

        foreach ($images as $image) {
            $feedback->addMedia($image->getRealPath())
                ->usingFileName($image->getClientOriginalName())
                ->toMediaCollection('feedback');
        }

        return $feedback;
    }
}
