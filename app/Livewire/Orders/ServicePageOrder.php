<?php

namespace App\Livewire\Orders;

use App\Livewire\Forms\OrderForm;
use App\Notifications\OrderSent;
use Illuminate\Support\Facades\Notification;
use Livewire\Component;
use Livewire\WithFileUploads;

class ServicePageOrder extends Component
{
    use WithFileUploads;

    public $page;

    public OrderForm $form;

    // public function updatedPhotos()
    // {
    //     // Перевірка або логіка при додаванні файлів
    // }

    public function isMaxPhotos()
    {
        return count($this->form->photos) >= 8;
    }

    public function removePhoto($index)
    {
        unset($this->form->photos[$index]);
        $this->form->photos = array_values($this->form->photos);
    }

    public function save()
    {
        dd($this->form);
        $created = $this->form->store();

        Notification::routes([
            'mail' => env('ADMIN_EMAIL'),
            'telegram' => env('TELEGRAM_CHAT_ID'),
        ])->notify(new OrderSent((object) $created));

        session()->flash('order-success');
    }

    public function render()
    {
        return view('livewire.orders.service-page-order');
    }
}
