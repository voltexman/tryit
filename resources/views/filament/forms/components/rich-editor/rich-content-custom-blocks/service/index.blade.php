<div
    class="relative overflow-hidden -mx-5 md:rounded-3xl my-6 min-h-120 lg:min-h-100 flex items-center bg-emerald-700 group">
    {{-- 1. Subtle Background Pattern (Optional, for depth) --}}
    <div class="absolute inset-0 -top-10 z-0 pointer-events-none opacity-15">
        <img src="{{ Vite::asset('resources/images/h3-cleaning-01.jpg') }}"
            class="size-full object-cover mix-blend-overlay" alt="">
    </div>

    {{-- 2. Team Image (Directly on Green Background) --}}
    <div class="absolute inset-y-0 -bottom-10 left-15 z-10 w-1/2 flex items-end pointer-events-none">
        <img src="{{ Vite::asset('resources/images/h1-cleaning-team.png') }}"
            class="w-auto h-[90%] object-contain object-bottom shadow-none! drop-shadow-xl" alt="TryIt Team">
    </div>

    {{-- 3. Content (Directly on Green Background, Right Aligned) --}}
    <div class="relative z-30 w-full max-w-6xl mx-auto px-5 flex justify-end">
        <div class="w-full lg:w-1/2 flex flex-col items-center lg:items-start text-center lg:text-left">

            {{-- Title --}}
            <div class="font-[Oswald] text-2xl md:text-4xl font-semibold mb-4 text-white">
                {{ $title ?? 'Чистота без зусиль' }}
            </div>

            {{-- Subtitle --}}
            <div class="text-emerald-100/80 text-base mb-10 max-w-sm leading-relaxed">
                {{ $subtitle ?? 'Ваш простір у надійних руках наших професіоналів.' }}
            </div>

            {{-- Action Buttons --}}
            <div class="flex flex-col gap-5">
                <a href="tel:+380978778667"
                    class="flex w-fit cursor-pointer items-center gap-2.5 text-white! font-[Oswald] hover:text-white text-2xl font-bold no-underline!">
                    <x-lucide-phone class="size-4" />
                    <span>+380 (97) 877-86-67</span>
                </a>
                <a href="{{ $serviceUrl ?? '#' }}" class="shrink-0 no-underline">
                    <button
                        class="font-[Oswald] bg-white hover:bg-emerald-50 text-emerald-800 px-6 py-4 rounded-full font-black text-sm uppercase tracking-wide transition-all shadow-lg active:scale-95">
                        {{ $actionLabel ?? 'Замовити послугу' }}
                    </button>
                </a>
            </div>
        </div>
    </div>

    {{-- Decorative "Decore" Element --}}
    <img src="{{ Vite::asset('resources/images/decore.png') }}"
        class="absolute -top-10 -right-10 w-48 opacity-10 pointer-events-none z-10 -rotate-12 invert" alt="">
</div>
