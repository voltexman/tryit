<?php

use App\Models\Feedback;
use Livewire\Component;
use Livewire\Attributes\Computed;

new class extends Component {
    #[Computed]
    public function feedbacks()
    {
        return Feedback::where('is_visible_on_homepage', true)->latest()->get();
    }
}; ?>

<section class="py-10 lg:py-20 bg-slate-200/60 relative">
    <div class="absolute inset-0 z-0 pointer-events-none">
        <img src="{{ Vite::asset('resources/images/h2-background01.jpg') }}" alt=""
            class="size-full object-cover object-right opacity-25 grayscale" />
        <div class="absolute inset-0 bg-slate-50/15"></div>
    </div>

    <div class="max-w-6xl mx-auto px-5 relative z-10">
        <div class="text-center mb-12">
            <x-section.badge class="mb-2.5">Відгуки про нас</x-section.badge>
            <x-section.title tag="h2" size="lg">
                Що кажуть <span class="text-emerald-400 font-[Lora] font-black italic">клієнти</span>
            </x-section.title>
            <x-section.description>
                Реальні враження від нашої роботи
            </x-section.description>
        </div>
    </div>

    <div x-data x-init="window.initializeFeedbackCarousel('feedbacks-carousel')" id="feedbacks-carousel" class="relative w-full z-10 overflow-hidden pb-4">
        <div class="embla__viewport w-full">
            <div class="embla__container flex -ml-4 px-4 md:px-8">
                @forelse ($this->feedbacks as $feedback)
                    <div class="embla__slide flex-[0_0_85%] min-w-0 md:flex-[0_0_45%] lg:flex-[0_0_30%] pl-4">
                        <div
                            class="relative bg-slate-50 border border-slate-100 p-5 rounded-3xl transition-all duration-300 h-full flex flex-col overflow-hidden group">
                            <!-- Background Quote Icon -->
                            <x-lucide-quote
                                class="absolute bottom-2 right-2 size-24 text-slate-200/50 rotate-180 z-0 pointer-events-none" />

                            <div class="relative z-10 flex items-center gap-5 mb-5">
                                @if ($feedback->getFirstMediaUrl('avatar'))
                                    <img src="{{ $feedback->getFirstMediaUrl('avatar') }}"
                                        alt="{{ $feedback->name ?: 'Анонім' }}"
                                        class="size-12 rounded-full object-cover shrink-0">
                                @else
                                    <div
                                        class="size-12 rounded-full bg-emerald-100 flex items-center justify-center text-emerald-700 font-bold font-display text-lg shrink-0">
                                        @if ($feedback->name)
                                            {{ mb_substr($feedback->name, 0, 1) }}
                                        @else
                                            <x-lucide-user class="size-6" />
                                        @endif
                                    </div>
                                @endif
                                <div class="grow">
                                    <h3 class="font-semibold text-base line-clamp-2 text-slate-800 font-display">
                                        {{ $feedback->name ?: 'Анонім' }}
                                    </h3>
                                    <div class="flex items-center justify-between">
                                        @if ($feedback->rating)
                                            <div class="flex gap-0.5 text-tryit-orange">
                                                @foreach (range(1, 5) as $i)
                                                    <x-lucide-star
                                                        class="size-3.5 {{ $feedback->rating >= $i ? 'fill-current' : 'text-slate-200' }}" />
                                                @endforeach
                                            </div>
                                        @else
                                            <div></div>
                                        @endif
                                        <div class="text-[10px] text-slate-400 font-medium uppercase tracking-wider">
                                            {{ $feedback->created_at->translatedFormat('d M Y') }}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-slate-600 leading-relaxed text-base grow relative z-10 line-clamp-6">
                                "{{ $feedback->text }}"
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="embla__slide flex-[0_0_100%] pl-4">
                        <div class="text-center text-slate-200 py-10">
                            Відгуків поки немає, але ви можете бути першими!
                        </div>
                    </div>
                @endforelse
            </div>
        </div>

        @if ($this->feedbacks->count() > 3)
            <div class="flex items-center justify-center gap-4 mt-5">
                <button
                    class="embla__prev size-10 cursor-pointer rounded-full border border-slate-500/50 flex items-center justify-center text-slate-400 hover:bg-emerald-500 hover:text-white hover:border-emerald-500 transition-colors backdrop-blur-sm">
                    <x-lucide-arrow-left class="size-5" />
                </button>
                <button
                    class="embla__next size-10 cursor-pointer rounded-full border border-slate-500/50 flex items-center justify-center text-slate-400 hover:bg-emerald-500 hover:text-white hover:border-emerald-500 transition-colors backdrop-blur-sm">
                    <x-lucide-arrow-right class="size-5" />
                </button>
            </div>
        @endif
    </div>

    <div class="mt-5 text-center relative z-10">
        <a href="{{ route('feedback') }}" class="inline-block">
            <x-button color="white" size="lg" class="text-slate-800! hover:text-emerald-700!">
                Залишити свій відгук
            </x-button>
        </a>
    </div>
</section>
