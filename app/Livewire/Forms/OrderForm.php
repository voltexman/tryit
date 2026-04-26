<?php

namespace App\Livewire\Forms;

use App\Models\Order;
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
    public $service = '';

    #[Validate('required', message: 'Вкажіть адресу')]
    #[Validate('min:5', message: 'Занадто коротка адреса')]
    public string $address = '';

    // Додаткові поля для клінінгової компанії
    #[Validate('required', message: 'Вкажіть площу приміщення')]
    public $square_area = '';

    #[Validate('nullable', message: 'Невірне значення')]
    public $has_elevator = '';

    #[Validate('nullable', message: 'Невірне значення')]
    public $has_water = '';

    #[Validate('nullable', message: 'Невірне значення')]
    public $has_parking = '';

    #[Validate('nullable', message: 'Невірне значення')]
    public $room_count = '';

    #[Validate('nullable', message: 'Невірне значення')]
    public $floor_count = '';

    #[Validate('required', message: 'Оберіть рівень забруднення')]
    #[Validate('numeric', message: 'Невірне значення')]
    #[Validate('between:1,5', message: 'Значення повинно бути від 1 до 5')]
    public $contamination_level = '3';

    #[Validate('nullable', message: 'Невірне значення')]
    public $is_urgent = '';

    #[Validate('max:1200', message: 'Занадто багато символів')]
    public $text = '';

    public function store()
    {
        $this->validate();

        return Order::create($this->all());
    }
}
