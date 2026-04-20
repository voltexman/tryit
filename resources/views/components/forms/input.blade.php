@props([
    'variant' => 'filled',
    'size' => 'md',
    'color' => 'slate',
])

@php
    // 1. Розміри
    $sizeClasses = [
        'sm' => 'px-3 py-2 text-sm rounded-md',
        'md' => 'px-4 py-2.5 text-base rounded-xl',
        'lg' => 'px-6 py-3.5 text-base rounded-full',
    ];

    // 2. Кольорові схеми (тільки класи кольорів)
    $colorPalettes = [
        'green' => [
            'filled' => 'bg-emerald-100 border-emerald-100 focus:ring-emerald-500/40 focus:border-emerald-500',
            'outline' => 'focus:border-emerald-500 focus:ring-emerald-500/40',
            'underline' => 'focus:border-emerald-500',
        ],
        'orange' => [
            'filled' => 'bg-orange-100 border-orange-100 focus:ring-orange-500/40 focus:border-orange-500',
            'outline' => 'focus:border-orange-500 focus:ring-orange-500/40',
            'underline' => 'focus:border-orange-500',
        ],
        'slate' => [
            'filled' => 'bg-slate-100 border-slate-200 focus:ring-slate-500/40 focus:border-slate-300',
            'outline' => 'focus:border-slate-500 focus:ring-slate-500/40',
            'underline' => 'focus:border-slate-500',
        ],
    ];

    // 3. Структурні стилі варіантів (без кольорів)
    $variantStructures = [
        'filled' => 'border focus:bg-white focus:ring-2 focus:ring-offset-2',
        'outline' => 'bg-transparent border-2 border-slate-200 focus:ring-2 focus:ring-offset-2',
        'underline' => 'bg-transparent border-b-2 border-b-slate-200 rounded-none px-1 focus:ring-0',
    ];

    $palette = $colorPalettes[$color] ?? $colorPalettes['slate'];

    $finalClasses = [
        'w-full transition-all duration-300 focus:outline-none font-medium text-slate-900 placeholder:text-slate-400 disabled:opacity-50',
        $sizeClasses[$size] ?? $sizeClasses['md'],
        $variantStructures[$variant] ?? $variantStructures['filled'],
        $palette[$variant] ?? $palette['filled'],
    ];
@endphp

<div class="relative w-full">
    <input {{ $attributes->class($finalClasses)->merge(['type' => 'text']) }}>
</div>
