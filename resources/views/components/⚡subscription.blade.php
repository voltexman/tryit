<?php

use Livewire\Component;

new class extends Component {
    public string $email = '';
    public bool $subscribed = false;

    public function subscribe(): void
    {
        $this->validate([
            'email' => 'required|email',
        ]);

        // Here we would typically save the email to the database.
        // For example: Subscriber::create(['email' => $this->email]);

        $this->subscribed = true;
        $this->email = '';
    }
};
?>

<div class="relative py-10 lg:py-20 border-b border-white/5">
    <div class="max-w-4xl mx-auto px-5 text-center">
        <div class="text-4xl md:text-5xl font-display text-balance font-bold text-tryit-cream mb-5 lg:mb-10">
            Підписуйтесь на <span class="text-emerald-500">блог</span> і будьте
            <span class="text-emerald-500">в курсі всіх</span> новин.
        </div>

        @if ($subscribed)
            <div
                class="inline-block bg-emerald-500/20 backdrop-blur-md border border-emerald-500/50 text-emerald-400 px-8 py-4 rounded-full font-semibold shadow-lg shadow-emerald-500/10">
                Дякуємо за підписку!
            </div>
        @else
            <form wire:submit="subscribe"
                class="flex flex-col sm:flex-row items-stretch sm:items-center w-full max-w-2xl mx-auto gap-4 sm:gap-0 sm:p-2 sm:bg-tryit-cream/10 sm:backdrop-blur-md sm:border sm:border-tryit-cream/10 rounded-3xl sm:rounded-full transition-all duration-300">
                <input type="email" wire:model="email" placeholder="Введіть ваш email..."
                    class="w-full sm:flex-1 px-6 py-4 sm:py-3 bg-tryit-cream/10 sm:bg-transparent backdrop-blur-md sm:backdrop-blur-none border border-tryit-cream/10 sm:border-transparent rounded-full sm:rounded-none sm:rounded-l-full text-tryit-cream placeholder-tryit-cream/50 focus:outline-none focus:ring-0 focus:border-tryit-cream/30 sm:focus:border-transparent transition-colors"
                    required>
                <button type="submit"
                    class="w-full sm:w-auto font-display flex items-center justify-center gap-1.5 bg-emerald-500 hover:bg-emerald-400 text-zinc-950 font-semibold px-8 py-4 sm:py-3 rounded-full transition-all duration-300 shadow-lg shadow-emerald-500/20 hover:shadow-emerald-500/40">
                    Підписатися
                    <x-lucide-arrow-up-right class="size-5 shrink-0 mt-0.5" />
                </button>
            </form>
            @error('email')
                <span class="text-red-400 text-sm mt-3 block font-medium">{{ $message }}</span>
            @enderror
        @endif
    </div>
</div>
