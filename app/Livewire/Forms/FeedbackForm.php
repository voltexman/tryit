<?php

namespace App\Livewire\Forms;

use App\Enums\FeedbackTopicEnum;
use App\Models\Feedback;
use App\Rules\Recaptcha;
use Livewire\Attributes\Validate;
use Livewire\Form;

class FeedbackForm extends Form
{
    #[Validate('min:2', message: 'Занадто мало символів')]
    public string $name = '';

    #[Validate('min:2', message: 'Занадто мало символів')]
    public string $contact = '';

    #[Validate('required|min:5|max:1500', message: [
        'required' => 'Напишіть листа',
        'min' => 'Занадто мало символів',
        'max' => 'Занадто багато символів',
    ])]
    public string $text = '';

    #[Validate('required', message: 'Оберіть тему звернення')]
    public string $topic = '';

    public ?string $service = null;

    #[Validate(
        [
            'nullable',
            'integer',
            'min:1',
            'max:5',
            'required_if:topic,'.FeedbackTopicEnum::GRATITUDE->value,
        ],
        message: [
            'required_if' => 'Будь ласка, залиште оцінку',
        ]
    )]
    public ?int $rating = null;

    public function store($images = [], $recaptchaToken = null)
    {
        validator(
            ['captcha' => $recaptchaToken],
            ['captcha' => ['required', new Recaptcha]],
            [
                'captcha.required' => 'Помилка перевірки безпеки. Спробуйте ще раз.',
            ]
        )->validate();

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
