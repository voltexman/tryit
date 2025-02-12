<?php

namespace App\Livewire;

use App\Livewire\Forms\OrderForm;
use Livewire\Component;

class Order extends Component
{
    public OrderForm $order;

    public function save()
    {
        $this->order->store();

        session()->flash('success');
    }

    public function render()
    {
        return view('livewire.order');
    }
}
