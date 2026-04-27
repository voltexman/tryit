@props([
    'images' => [],
    'imagePath' => null,
    'itemsPerView' => 5,
    'autoplay' => true,
])

@php
    $id = 'embla-' . uniqid();
    $imagePath = trim($imagePath ?? '', '/');
@endphp

<div class="w-full" x-data x-init="window.initializeCarousel('{{ $id }}', {{ $itemsPerView }}, {{ $autoplay ? 'true' : 'false' }})">
    @if ($slot->isNotEmpty())
        <h3 class="text-lg font-semibold mb-4">{{ $slot }}</h3>
    @endif

    <div class="overflow-hidden">
        <div class="embla" id="{{ $id }}" data-images-count="{{ count($images) }}"
            data-items-per-view="{{ $itemsPerView }}" style="--items-per-view: {{ $itemsPerView }}">
            <div class="embla__container">
                @forelse($images as $image)
                    <div class="embla__slide">
                        <div class="embla__slide__inner group relative cursor-pointer">
                            <a href="{{ Vite::asset('resources/images/' . $imagePath . '/' . $image) }}" data-pswp
                                target="_blank" class="block w-full h-full">
                                <img src="{{ Vite::asset('resources/images/' . $imagePath . '/' . $image) }}"
                                    alt="Фото" class="w-full h-48 md:h-64 object-cover rounded-3xl">

                                {{-- Hover Overlay with Eye Icon --}}
                                <div
                                    class="absolute inset-0 bg-black/25 opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-3xl flex items-center justify-center">
                                    <div
                                        class="bg-white/20 p-3 rounded-full backdrop-blur-sm border border-white/30 transform scale-75 group-hover:scale-100 transition-transform duration-300">
                                        <x-lucide-eye class="size-6 text-white" stroke-width="2" />
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="w-full py-8 text-center text-gray-500">Нема зображень</div>
                @endforelse
            </div>
        </div>
    </div>

    @if (count($images) > 1)
        <div class="flex items-center justify-center mt-10">
            <div class="embla__dots gap-2 flex" id="{{ $id }}-dots"></div>
        </div>
    @endif
</div>

<style scoped>
    /* PhotoSwipe Fix: Забороняємо розтягування та фіксуємо шари */
    .pswp {
        z-index: 99999;
    }

    .pswp__img {
        object-fit: contain !important;
    }

    .embla {
        overflow: hidden;
    }

    .embla__container {
        display: flex;
        backface-visibility: hidden;
        margin-left: -0.5rem;
        /* Компенсація падінгу першого слайда */
    }

    .embla__slide {
        flex: 0 0 70%;
        /* Зменшуємо до 70%, щоб по 15% з кожного боку було видно сусідів */
        min-width: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        padding-left: 0.25rem;
        /* Менший відступ */
        padding-right: 0.25rem;
        /* Менший відступ */
    }

    .embla__slide__inner {
        width: 100%;
        transition: transform 0.5s ease-in-out, filter 0.5s ease-in-out;
        transform: scale(0.85);
        filter: grayscale(0.5) brightness(0.95);
        will-change: transform, filter;
    }

    .embla__slide.is-active .embla__slide__inner {
        transform: scale(1);
        filter: grayscale(0) brightness(1);
        /* Кольорові та яскраві при активації */
    }



    @media (min-width: 1024px) {
        .embla__slide {
            flex: 0 0 30%;
            /* Приблизно 3 зображення у полі зору + боки */
        }
    }


    .embla__slide img {
        width: 100%;
        height: 100%;
        display: block;
        object-fit: cover;
        object-position: center;
    }

    .embla__controls {
        gap: 0.5rem;
    }

    .embla__prev,
    .embla__next {
        flex-shrink: 0;
        background-color: white;
        border: 1px solid #e5e7eb;
        color: #374151;
        transition: all 0.2s ease;
    }

    .embla__prev:hover:not(:disabled),
    .embla__next:hover:not(:disabled) {
        background-color: #f3f4f6;
        border-color: #d1d5db;
        color: #111827;
    }

    .embla__prev:disabled,
    .embla__next:disabled {
        opacity: 0.75;
        cursor: not-allowed;
    }

    .embla__dots {
        display: flex;
        gap: 0.375rem;
        flex-wrap: wrap;
    }

    .embla__dot {
        width: 0.625rem;
        height: 0.625rem;
        border-radius: 50%;
        background-color: #e5e7eb;
        cursor: pointer;
        transition: all 0.2s ease;
        border: none;
        padding: 0;
        margin: 0;
    }

    .embla__dot:hover:not(.is-selected) {
        background-color: #d1d5db;
    }

    .embla__dot.is-selected {
        background-color: #059669;
        transform: scale(1.2);
    }
</style>
