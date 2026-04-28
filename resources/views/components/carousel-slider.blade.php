@props([
    'images' => [],
    'imagePath' => null,
    'itemsPerView' => 3,
    'autoplay' => true,
    'id' => 'embla-' . uniqid(),
])

@php
    $imagePath = trim($imagePath ?? '', '/');
    // Потрійне дублювання для ідеально плавного циклу
    $displayImages = array_merge($images, $images, $images);
@endphp

<div x-data="{
    init() {
        if (window.initializeCarousel) {
            setTimeout(() => window.initializeCarousel('{{ $id }}', {{ $itemsPerView }}, {{ $autoplay ? 'true' : 'false' }}), 100);
        }
    }
}" class="carousel-wrapper relative w-full overflowhidden">

    <!-- Карусель (Embla) -->
    <div class="embla" id="{{ $id }}">
        <div class="embla__container">
            @foreach ($displayImages as $img)
                <div class="embla__slide">
                    {{-- Внутрішній блок для ефектів анімації --}}
                    <div class="embla__slide__inner">
                        <div class="slide-content group relative aspect-3/4.5 overflow-hidden rounded-2xl shadow-lg">
                            <a href="{{ Vite::asset('resources/images/' . $imagePath . '/' . $img) }}" data-pswp
                                target="_blank" class="block size-full">
                                <img src="{{ Vite::asset('resources/images/' . $imagePath . '/' . $img) }}"
                                    class="size-full object-cover transition-transform duration-1000 group-hover:scale-110"
                                    alt="Слайд">

                                <div
                                    class="absolute top-1/2 left-1/2 -translate-1/2 bg-white/15 backdrop-blur-xs p-2.5 rounded-full border border-white/20 opacity-0 group-hover:opacity-100 transition-all duration-300">
                                    <x-lucide-eye class="size-6 text-white" />
                                </div>

                                <div
                                    class="absolute bottom-0 inset-x-0 p-8 bg-linear-to-t from-black/90 via-black/20 to-transparent">
                                    <p class="text-white text-sm font-light tracking-widest uppercase">Переглянути</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Кнопки управління -->
    <div class="flex items-center gap-10 mt-10 px-4">
        <div class="flex gap-4">
            <button
                class="embla__prev w-12 h-12 lg:w-14 lg:h-14 rounded-full border border-white/10 flex items-center justify-center hover:bg-emerald-600 hover:border-emerald-600 transition-all group active:scale-90">
                <x-lucide-arrow-left
                    class="size-5 lg:size-6 text-white group-hover:-translate-x-1 transition-transform" />
            </button>
            <button
                class="embla__next w-12 h-12 lg:w-14 lg:h-14 rounded-full border border-white/10 flex items-center justify-center hover:bg-emerald-600 hover:border-emerald-600 transition-all group active:scale-90">
                <x-lucide-arrow-right
                    class="size-5 lg:size-6 text-white group-hover:translate-x-1 transition-transform" />
            </button>
        </div>
    </div>
</div>

<style scoped>
    [x-cloak] {
        display: none !important;
    }

    .carousel-wrapper {
        position: relative;
        width: 100%;
    }

    .embla {
        overflow: hidden;
        width: 100%;
        padding-top: 80px;
        /* Збільшено з 60px */
        padding-bottom: 80px;
        /* Збільшено з 60px */
        margin-top: -80px;
        /* Компенсуємо відступи */
        margin-bottom: -80px;
    }

    .embla__container {
        display: flex;
        user-select: none;
        -webkit-touch-callout: none;
        -khtml-user-select: none;
        -webkit-tap-highlight-color: transparent;
    }

    .embla__slide {
        position: relative;
        flex: 0 0 80%;
        /* Мобільні: видно частини сусідніх слайдів */
        min-width: 0;
        padding-left: 0.75rem;
        padding-right: 0.75rem;
    }

    @media (min-width: 768px) {
        .embla__slide {
            flex: 0 0 35%;
        }

        /* Десктоп: більше слайдів, повністю видимі */
    }

    .slide-content {
        /* Забезпечуємо повну видимість зображення */
        object-fit: contain;
    }

    /* Внутрішній блок - ТУТ ВСІ АНІМАЦІЇ */
    .embla__slide__inner {
        transition: transform 0.6s cubic-bezier(0.2, 1, 0.3, 1),
            filter 0.6s ease,
            opacity 0.6s ease;
        transform: scale(0.95);
        /* Менш агресивне зменшення */
        filter: grayscale(0.5) brightness(0.9);
        opacity: 0.8;
        will-change: transform, filter, opacity;
    }

    /* Активний стан */
    .embla__slide.is-active .embla__slide__inner {
        transform: scale(1.05);
        filter: grayscale(0) brightness(1);
        opacity: 1;
        z-index: 10;
    }

    .embla__slide.is-active .slide-content {
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.8);
    }
</style>
