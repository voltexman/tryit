<?php

use function Livewire\Volt\{state, rules};
use Illuminate\Support\Facades\Notification;
use App\Models\Subscriber;

state(['email']);

rules([
    'email' => 'required|email|min:5|max:255',
])->messages([
    'email.email' => 'Вкажіть поштову адресу коректно',
    'email.required' => 'Вкажіть поштову адресу',
]);

$save = function () {
    $validated = $this->validate();

    Subscriber::create($validated);

    session()->flash('subscribe-success');
};
?>

@session('subscribe-success')
    <div class="flex flex-col items-center">
        <div class="text-white text-lg">Дякуємо!</div>
        <div class="text-gray-300 text-sm">Ви підписались</div>
    </div>
@else
    <form wire:submit="save" class="flex flex-col md:flex-row gap-5 w-full">
        <div class="w-full">
            <x-forms.input variant="light" size="lg" wire:model="email" icon="mail"
                placeholder="Адреса електронної пошти..." />
            @error('email')
                <x-forms.error :message="$message" />
            @enderror
        </div>
        <x-button type="submit" variant="green" size="lg" wire:target="save" icon class="mx-auto">
            <span wire:target="save" wire:loading.remove>Підписатись</span>
            <span wire:target="save" wire:loading>Відправка</span>
        </x-button>
    </form>
@endsession
