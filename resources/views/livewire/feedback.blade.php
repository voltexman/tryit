<?php

use function Livewire\Volt\{state, rules};
use Illuminate\Support\Facades\Notification;
use App\Notifications\FeedbackSent;

state(['name', 'contact', 'company', 'text']);

rules([
    'name' => 'nullable|min:2|max:60',
    'contact' => 'nullable|min:2|max:60',
    'company' => 'nullable|min:2|max:60',
    'text' => 'required|min:10|max:1500',
])->messages([
    'name.min' => '',
    'text.required' => 'Вкажіть повідомлення',
    'text.min' => 'Занадто коротке повідомлення',
]);

$send = function () {
    $validated = $this->validate();

    Notification::routes([
        'mail' => env('ADMIN_EMAIL'),
        'telegram' => env('TELEGRAM_CHAT_ID'),
    ])->notify(new FeedbackSent((object) $validated));

    session()->flash('feedback-success');
};
?>

@session('feedback-success')
    <div class="h-96 flex items-center justify-center">
        <div class="flex flex-col items-center">
            <x-lucide-circle-check class="size-24 stroke-1 text-tryit-green mb-5" />
            <span class="font-[Oswald] text-xl text-white font-semibold">Дякуємо Вам</span>
            <span class="text-sm font-normal text-gray-300">Повідомлення відправлено</span>
        </div>
    </div>
@else
    <form wire:submit="send" class="space-y-5">
        <div>
            <x-forms.input variant="soft" wire:model="name" icon="user" placeholder="Ваше ім'я" />
            @error('name')
                <x-forms.error :message="$message" />
            @enderror
        </div>

        <div>
            <x-forms.input variant="soft" wire:model="contact" icon="notebook-text" placeholder="Пошта або телефон" />
            <x-forms.hint text="Якщо необхідно відповісти вам" />
            @error('contact')
                <x-forms.error :message="$message" />
            @enderror
        </div>

        <div>
            <x-forms.input variant="soft" wire:model="company" icon="building" placeholder="Компанія або заклад" />
            <x-forms.hint text="Якщо ви користувались нашими послугами" />
            @error('company')
                <x-forms.error :message="$message" />
            @enderror
        </div>

        <div>
            <x-forms.textarea variant="soft" wire:model="text" rows="6" placeholder="Напишіть повідомлення"
                required />
            @error('text')
                <x-forms.error :message="$message" />
            @enderror
        </div>

        <x-button type="submit" wire:target="send" wire:loading.attr="disabled" icon class="flex items-center gap-x-1.5">
            <span wire:target="send" wire:loading.remove>Надіслати</span>
            <span wire:target="send" wire:loading>Відправка</span>
        </x-button>
    </form>
@endsession
