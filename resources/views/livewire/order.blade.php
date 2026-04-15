<?php

use function Livewire\Volt\{form};
use App\Livewire\Forms\OrderForm;
use Illuminate\Support\Facades\Notification;
use App\Notifications\OrderSent;
use App\Enums\ServiceEnum;

form(OrderForm::class);

$save = function () {
    dd($this);
    $validated = $this->validate();

    Notification::routes([
        'mail' => env('ADMIN_EMAIL'),
        'telegram' => env('TELEGRAM_CHAT_ID'),
    ])->notify(new OrderSent((object) $validated));

    session()->flash('order-success');
};
?>

@session('order-success')
    <div class="h-96 flex items-center justify-center">
        <div class="flex flex-col items-center">
            <x-lucide-circle-check class="size-24 stroke-1 text-tryit-orange mb-5" />
            <span class="font-semibold">Дякуємо, заявка відправлена</span>
            <span class="text-sm font-medium">Ми зв'яжемось з Вами найближчим часом</span>
        </div>
    </div>
@else
    <form wire:submit.prevent="save" class="flex-col space-y-5">
        <span class="font-[Oswald] text-2xl text-white block text-center -mt-5">Замовити послугу</span>
        <div>
            <x-forms.input variant="dark" wire:model.trim.blur="form.name" icon="user" maxLength="40"
                placeholder="Ваше ім'я" wire:target="save" wire:loading.attr="disabled" />
            @error('name')
                <x-forms.error :message="$message" />
            @enderror
        </div>

        <div>
            <x-forms.input variant="dark" wire:model.trim.blur="form.contact" icon="notebook" maxLength="40"
                placeholder="Пошта або телефон" wire:target="save" wire:loading.attr="disabled" required />
            @error('contact')
                <x-forms.error :message="$message" />
            @enderror
        </div>

        <div>
            <x-forms.input variant="dark" wire:model.trim.blur="form.address" icon="map-pin" maxLength="40"
                placeholder="Адреса об’єкту" wire:target="save" wire:loading.attr="disabled" />
            @error('address')
                <x-forms.error :message="$message" />
            @enderror
        </div>

        <div>
            <x-forms.textarea variant="dark" wire:model="form.text" placeholder="Вкажіть додатково опис" wire:target="save"
                wire:loading.attr="disabled" rows="5" />
            @error('text')
                <x-forms.error maxLength="1200" :message="$message" />
            @enderror
        </div>

        <x-button variant="green" size="sm" type="submit" wire:target="save" icon wire:loading.attr="disabled"
            class="ms-auto flex items-center gap-x-1.5">
            <span wire:target="save" wire:loading.remove>Замовити</span>
            <span wire:target="save" wire:loading>Відправка</span>
        </x-button>
    </form>
@endsession
