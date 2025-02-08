<?php

namespace App\Livewire;

use App\Livewire\Forms\OrderForm;
use App\Models\Order as ModelsOrder;
use Livewire\Component;

class Order extends Component
{
    public OrderForm $form;

    public function save()
    {
        $this->validate();

        // ModelsOrder::create(
        //     $this->form->all()
        // );

        return $this->redirect('/');
    }

    public function render()
    {
        return view('livewire.order');
    }
}
