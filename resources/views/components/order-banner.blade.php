@props([
    'image',
    'phone' => '+38 (067) 123-45-67',
    'title' => 'Замовити послугу',
    'subtitle' => 'Зателефонуйте або залиште заявку на сайті',
])
<div class="relative overflow-hidden">
    <img src="{{ Vite::asset('resources/images/' . $image) }}" alt="order background"
        class="absolute inset-0 size-full object-cover object-center" style="z-index:1;" loading="lazy">
    <div class="absolute inset-0 bg-emerald-950/70 backdrop-blur-xs" style="z-index:2;"></div>
    <div class="relative z-10 flex flex-col items-center justify-center py-15 px-5 text-center">
        <div class="text-3xl md:text-4xl font-bold text-white mb-1.5 font-[Oswald]">{{ $title }}</div>
        <div class="text-lg md:text-base text-emerald-100 mb-10">{{ $subtitle }}</div>
        <a href="tel:{{ str_replace([' ', '(', ')', '-'], '', $phone) }}"
            class="font-display inline-block bg-white/90 hover:bg-tryit-orange text-emerald-900 hover:text-white font-semibold rounded-full px-8 py-3 text-lg shadow transition duration-200">
            {{ $phone }}
        </a>
    </div>
</div>
