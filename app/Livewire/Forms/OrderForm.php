<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class OrderForm extends Form
{
    #[Validate('required|min:5')]
    public $name = '';

    #[Validate('required|min:5')]
    public $contact = '';

    #[Validate('required|min:5')]
    public $service = '';

    #[Validate('required|min:5')]
    public $text = '';

    public function store()
    {
        $this->validate();

        // Post::create($this->all());
    }
}
