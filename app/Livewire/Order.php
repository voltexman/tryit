<?php

namespace App\Livewire;

use App\Livewire\Forms\OrderForm;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Order extends Component
{
    public OrderForm $order;

    public function save()
    {
        $this->order->store();

        Mail::to(env('ADMIN_MAIL'))
            ->send(new OrderShipped($this->order));

        session()->flash('success');
    }

    public function render()
    {
        return view('livewire.order');
    }
}
