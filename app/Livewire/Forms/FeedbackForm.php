<?php

namespace App\Livewire\Forms;

use App\Models\Feedback;
use Livewire\Attributes\Validate;
use Livewire\Form;

class FeedbackForm extends Form
{
    #[Validate('min:2', message: 'Занадто мало символів')]
    public $name = '';

    #[Validate('required', message: 'Напишіть листа')]
    #[Validate('max:1500', message: 'Занадто багато символів')]
    public $text = '';

    public function store()
    {
        $this->validate();

        Feedback::create($this->all());
    }
}
