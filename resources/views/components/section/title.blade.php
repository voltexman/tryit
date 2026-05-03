@props([
    'tag' => 'h2',
    'size' => 'md',
    'color' => 'dark',
])

@php
    $sizes = [
        'sm' => 'text-2xl lg:text-4xl',
        'md' => 'text-3xl lg:text-5xl',
        'lg' => 'text-4xl/9 md:text-5xl lg:text-6xl',
    ];

    $colors = [
        'dark' => 'text-slate-800',
        'white' => 'text-white',
        'emerald' => 'text-emerald-950',
    ];

    $classes = [
        'font-[Lora] italic font-black drop-shadow-xl text-balance',
        $sizes[$size] ?? $sizes['md'],
        $colors[$color] ?? $colors['dark'],
    ];
@endphp

<{{ $tag }} {{ $attributes->merge(['class' => implode(' ', $classes)]) }}>
    {{ $slot }}
    </{{ $tag }}>
