<?php

namespace App\Livewire\Forms;

use App\Models\Order;
use Livewire\Attributes\Validate;
use Livewire\Form;

class OrderForm extends Form
{
    #[Validate('required', message: 'Вкажіть як до Вас звертатись')]
    #[Validate('min:2', message: 'Занадто мало символів')]
    public $name = '';

    #[Validate('required', message: 'Вкажіть будь-який контакт')]
    #[Validate('min:5', message: 'Занадто мало символів')]
    public $contact = '';

    #[Validate('required', message: 'Необхідно вказати послугу')]
    public $service = '';

    #[Validate('max:1200', message: 'Занадто багато символів')]
    public $text = '';

    public function store()
    {
        $this->validate();

        Order::create($this->all());
    }
}
