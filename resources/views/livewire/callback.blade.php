<?php

use function Livewire\Volt\{state, rules};
use Illuminate\Support\Facades\Notification;
use App\Notifications\CallbackSent;

state(['phone']);

rules([
    'phone' => 'required|min:5|max:20',
])->messages([
    'phone.required' => 'Вкажіть номер телефону',
]);

$send = function () {
    $validated = $this->validate();

    Notification::route('telegram', env('TELEGRAM_CHAT_ID'))->notify(new CallbackSent((object) $validated));

    session()->flash('callback-success');
};
?>

@session('callback-success')
    <div class="flex gap-2.5">
        <div><x-lucide-info class="size-10 stroke-white" stroke-width="1.5" /></div>
        <div class="grid">
            <span class="text-white font-bold">Номер відправлено менеджеру</span>
            <span class="text-gray-200 text-sm">Очікуйте на дзвінок найближчим часом</span>
        </div>
    </div>
@else
    <form wire:submit="send" class="max-w-lg w-full">
        <div class="relative">
            <x-forms.input variant="light" size="lg" icon="phone" x-mask="+380 (99) 999-99-99" wire:model="phone"
                wire:loading.attr="disabled" placeholder="Номер телефону" class="" />
            <button type="submit" variant="ogange" size="icon"
                class="absolute top-1/2 -translate-y-1/2 right-3 size-10 bg-tryit-orange rounded-full flex justify-center items-center cursor-pointer">
                <x-lucide-bell-ring wire:loading.remove class="size-5 stroke-white" />
                <x-lucide-loader-2 wire:loading class="size-5 animate-spin stroke-white" />
            </button>
        </div>
        @error('phone')
            <x-forms.error :message="$message" />
        @enderror
    </form>
@endsession
