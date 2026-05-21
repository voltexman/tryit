@props(['image', 'icon' => null])

<div class="relative h-72 md:h-100 bg-cover bg-center" style="background-image: url('{{ $image }}')">
    <div class="absolute inset-0 bg-linear-to-t from-black/80 via-black/60 to-black/40 backdrop-blur-[2px]"></div>
    <div class="relative flex flex-col items-center justify-end size-full px-5 pb-10 md:pb-14">
        @isset($icon)
            <x-dynamic-component :component="'lucide-' . $icon" class="size-12 lg:size-20 mb-2.5 lg:mb-5 stroke-tryit-cream"
                stroke-width="1" />
        @endisset
        <h1
            {{ $title->attributes->class('font-display text-2xl md:text-4xl text-tryit-cream text-center text-balance font-bold leading-tight') }}>
            {{ $title }}
        </h1>
        @isset($description)
            <div
                {{ $title->attributes->class('text-sm md:text-base text-tryit-cream/80 text-center text-balance max-w-xl mt-2.5 leading-relaxed mb-0') }}>
                {{ $description }}
            </div>
        @endisset
    </div>
</div>
