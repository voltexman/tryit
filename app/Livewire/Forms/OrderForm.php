<?php

namespace App\Livewire\Forms;

use App\Models\Order;
use App\Rules\Recaptcha;
use Livewire\Attributes\Validate;
use Livewire\Form;

class OrderForm extends Form
{
    // Основні поля
    #[Validate('required', message: 'Вкажіть як до Вас звертатись')]
    #[Validate('min:2', message: 'Занадто мало символів')]
    public string $name = '';

    #[Validate('required', message: 'Вкажіть будь-який контакт')]
    #[Validate('min:5', message: 'Занадто мало символів')]
    public string $contact = '';

    #[Validate('required', message: 'Необхідно обрати послугу')]
    public string $service = '';

    #[Validate('required', message: 'Вкажіть адресу')]
    #[Validate('min:5', message: 'Занадто коротка адреса')]
    public string $address = '';

    // Додаткові поля для клінінгової компанії
    public ?int $square_area = null;

    public ?int $room_count = null;

    public ?int $floor_count = null;

    public ?bool $has_elevator = null;

    public ?bool $has_water = null;

    public ?bool $has_parking = null;

    #[Validate('required', message: 'Оберіть рівень забруднення')]
    #[Validate('numeric', message: 'Невірне значення')]
    #[Validate('between:1,5', message: 'Значення повинно бути від 1 до 5')]
    public int $contamination_level = 3;

    #[Validate('boolean')]
    public bool $is_urgent = false;

    #[Validate('max:1200', message: 'Занадто багато символів')]
    public string $text = '';

    public function store($images = [], $recaptchaToken = null)
    {
        $this->withValidator(function ($validator) use ($recaptchaToken) {
            $validator->after(function ($validator) use ($recaptchaToken) {
                $recaptchaRule = new Recaptcha;
                $recaptchaRule->validate('recaptcha', $recaptchaToken, function ($message) use ($validator) {
                    $validator->errors()->add('recaptcha', $message);
                });
            });
        });

        $this->validate();

        $order = Order::create($this->all());

        foreach ($images as $image) {
            $order->addMedia($image->getRealPath())
                ->usingFileName($image->getClientOriginalName())
                ->toMediaCollection('orders');
        }

        return $order;
    }
}
