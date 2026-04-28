@props([
    'image' => null,
    'video' => null,
    'phone' => '+38 (067) 123-45-67',
    'title' => 'Замовити послугу',
    'subtitle' => 'Зателефонуйте або залиште заявку на сайті',
    'service' => null,
])
<div class="relative overflow-hidden py-20">
    @if ($video)
        <video autoplay muted loop playsinline class="absolute inset-0 size-full object-cover object-center"
            style="z-index:1;">
            <source src="{{ Vite::asset('resources/videos/' . $video) }}" type="video/mp4">
        </video>
    @elseif($image)
        <img src="{{ Vite::asset('resources/images/' . $image) }}"
            class="absolute inset-0 size-full object-cover object-center" style="z-index:1;" loading="lazy" alt="">
    @endif
    <div class="absolute inset-0 bg-emerald-950/70 backdrop-blur-xs" style="z-index:2;"></div>
    <div class="relative z-10 flex flex-col items-center justify-center px-5 text-center">
        <div class="mx-auto size-20 bg-slate-100/90 flex justify-center items-center mb-5 rounded-full">
            <img src="{{ Vite::asset('resources/images/cleaning.png') }}" class="size-10" />
        </div>
        <div class="text-2xl md:text-4xl font-bold text-white mb-1.5 font-[Oswald]">{{ $title }}</div>
        <div class="text-base md:text-base text-emerald-100 mb-10">{{ $subtitle }}</div>

        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <x-button size="lg" color="orange"
                @click="Livewire.dispatch('setService', { service: '{{ $service ?? '' }}' }); window.openOffcanvas('orderOffcanvas')">
                Замовити послугу
            </x-button>

            <a href="tel:{{ str_replace([' ', '(', ')', '-'], '', $phone) }}"
                class="font-display inline-block bg-white/90 hover:bg-white text-emerald-900 font-semibold rounded-full px-6 py-3 text-base shadow transition duration-200">
                {{ $phone }}
            </a>
        </div>
    </div>
</div>
