<?php

use Livewire\Attributes\Lazy;
use Livewire\Component;
use App\Notifications\CallbackSubmitted;
use Illuminate\Support\Facades\Notification;

new #[Lazy] class extends Component {
    public string $phone = '';
    public bool $submitted = false;

    public function save(): void
    {
        $this->validate(
            [
                'phone' => 'required|string|min:10',
            ],
            [
                'phone.required' => 'Будь ласка, введіть номер телефону',
                'phone.min' => 'Некоректний номер телефону',
            ],
        );

        Notification::route('telegram', config('services.telegram-bot-api.chat_id'))->notify(new CallbackSubmitted($this->phone));

        $this->submitted = true;
        $this->phone = '';
    }
};
?>

<div class="mx-auto lg:mx-0 w-full max-w-70">
    @if ($submitted)
        <div
            class="flex justify-center mx-auto lg:mx-0 items-center gap-3 bg-emerald-500/20 border border-emerald-500/40 backdrop-blur-md rounded-2xl px-5 py-3.5 text-emerald-300 w-full text-center text-sm font-semibold animate-in fade-in duration-300">
            <x-lucide-check-circle class="size-5 shrink-0 stroke-emerald-400" />
            <span>Дякуємо! Очікуйте на дзвінок. Ми скоро передзвонимо.</span>
        </div>
    @else
        <form wire:submit="save" class="flex flex-col gap-1 mx-auto lg:mx-0 w-full">
            <div
                class="flex justify-between items-center gap-3 bg-black/20 border border-white/15 rounded-2xl px-5 py-2.5 transition-all focus-within:bg-black/40 focus-within:border-white/40 w-full">
                {{-- Поле введення --}}
                <div class="text-left mt-2 flex-1 min-w-0">
                    <label for="phone" class="text-xs uppercase leading-none block font-bold text-white/80">
                        Ваш номер телефону
                    </label>
                    <input type="tel" id="phone" x-mask="+380 (99) 999-99-99" placeholder="+380 (63) 123-45-67"
                        wire:model="phone"
                        class="bg-transparent border-none p-0 focus:ring-0 text-white text-base font-bold focus:outline-none leading-none mt-1 w-full placeholder:text-white/60 placeholder:font-normal">
                </div>

                {{-- Кнопка відправки з іконкою телефону --}}
                <button type="submit"
                    class="size-8 flex items-center justify-center shrink-0 hover:scale-115 active:scale-95 transition-transform text-white cursor-pointer"
                    title="Передзвонити">
                    <x-lucide-phone-call class="size-6 stroke-white" />
                </button>
            </div>
            @error('phone')
                <span
                    class="text-red-400 text-xs font-semibold pl-4 mt-1 block animate-in fade-in duration-250">{{ $message }}</span>
            @enderror
        </form>
    @endif
</div>
