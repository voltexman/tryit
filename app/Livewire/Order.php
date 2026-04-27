<?php

namespace App\Livewire;

use App\Livewire\Forms\OrderForm;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithFileUploads;

class Order extends Component
{
    use WithFileUploads;

    public OrderForm $order;

    public $images = [];

    public function updatedImages()
    {
        $this->validate([
            'images.*' => 'image|max:5120', // 5MB max
        ]);
    }

    public function removeImage($index)
    {
        array_splice($this->images, $index, 1);
    }

    #[On('setService')]
    public function setService($service)
    {
        $this->order->service = $service;
    }

    public function save()
    {
        $this->order->store($this->images);

        $this->images = [];
        $this->order->reset();
        session()->flash('success', 'Ваше замовлення успішно відправлено!');
    }

    public function render()
    {
        return view('livewire.order');
    }
}
