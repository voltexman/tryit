<?php

namespace App\Livewire;

use App\Livewire\Forms\OrderForm;
use Livewire\Component;
use Livewire\WithFileUploads;

class Order extends Component
{
    use WithFileUploads;

    public OrderForm $order;

    public function save()
    {
        $this->order->store();

        $this->order->reset();
        session()->flash('success', 'Ваше замовлення успішно відправлено!');
    }

    public function render()
    {
        return view('livewire.order');
    }
}
