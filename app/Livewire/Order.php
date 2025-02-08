<?php

namespace App\Livewire;

use App\Livewire\Forms\OrderForm;
use Livewire\Component;

class Order extends Component
{
    public OrderForm $form;

    public function save()
    {
        $this->form->store();

        session()->flash('success');
    }

    public function render()
    {
        return view('livewire.order');
    }
}
