<?php

namespace App\Livewire\Forms;

use App\Models\Order;
use Livewire\Attributes\Session;
use Livewire\Attributes\Validate;
use Livewire\Form;

class OrderForm extends Form
{
    #[Session]
    #[Validate('string|min:2|max:50')]
    public $name = '';

    #[Session]
    #[Validate('required|min:5|max:100')]
    public $contact = '';

    #[Session]
    #[Validate('string|min:5|max:200')]
    public $address = '';

    // #[Validate('')]
    public $service = '';

    #[Session]
    #[Validate('string|min:5|max:1500')]
    public $text = '';

    #[Validate(['photos.*' => 'image|max:1024'])]
    public $photos = [];

    // #[Validate('')]
    public $options = [
        'clean_type' => null,
        'office_type' => null,
        'rope_type' => null,
        'building_type' => null,
        'surface_type' => null,
        'facade_access' => null,
    ];

    public function store()
    {
        $this->validate();

        // Order::create($this);
    }
}
