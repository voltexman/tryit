<?php

namespace App\Livewire;

use App\Livewire\Forms\OrderForm;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\WithFileUploads;

class Order extends Component
{
    use WithFileUploads;

    public OrderForm $order;

    public function save()
    {
        $order = $this->order->store();

        // foreach ($this->order->images as $image) {
        //     $image->storeAs(
        //         path: "images/{$order->id}",
        //         name: now()->timestamp . '_' . uniqid() . '.' . $image->extension()
        //     );
        // }

        Mail::to(env('ADMIN_MAIL'))
            ->send(new OrderShipped($this->order));

        session()->flash('success');
    }

    public function render()
    {
        return view('livewire.order');
    }
}
