@props(['image'])

<div class="relative h-72 md:h-80 bg-cover bg-center" style="background-image: url('{{ $image }}')">
    <div class="absolute inset-0 bg-linear-to-t from-black/80 via-black/60 to-black/40 backdrop-blur-xs"></div>
    <div class="relative flex flex-col items-center justify-end size-full px-5 pb-10 md:pb-14">
        <h1
            {{ $title->attributes->class('font-display text-2xl md:text-4xl text-white text-center font-bold leading-tight') }}>
            {{ $title }}
        </h1>
        @isset($description)
            <p
                {{ $title->attributes->class('text-sm md:text-base text-white/70 text-center max-w-lg mt-3 leading-relaxed mb-0') }}>
                {{ $description }}
            </p>
        @endisset
    </div>
</div>
