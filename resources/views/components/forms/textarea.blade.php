@props([
    'variant' => 'filled',
    'size' => 'md',
    'color' => 'slate',
])

@php
    // 1. Розміри (з урахуванням особливостей textarea)
    $sizeClasses = [
        'sm' => 'px-3 py-2 text-sm rounded-md',
        'md' => 'px-4 py-3 text-base rounded-xl',
        'lg' => 'px-6 py-4 text-base rounded-3xl',
    ];

    // 2. Кольорові палітри (повні назви класів без підстановок)
    $colorPalettes = [
        'green' => [
            'filled' => 'bg-emerald-50 border-emerald-50 focus:ring-emerald-500/40 focus:border-emerald-500',
            'outline' => 'focus:border-emerald-500 focus:ring-emerald-500/40',
            'underline' => 'focus:border-emerald-500',
        ],
        'orange' => [
            'filled' => 'bg-orange-50 border-orange-50 focus:ring-orange-500/40 focus:border-orange-500',
            'outline' => 'focus:border-orange-500 focus:ring-orange-500/40',
            'underline' => 'focus:border-orange-500',
        ],
        'slate' => [
            'filled' => 'bg-slate-100 border-slate-200 focus:ring-emerald-500/80 focus:border-slate-300',
            'outline' => 'focus:border-slate-500 focus:ring-slate-500/40',
            'underline' => 'focus:border-slate-500',
        ],
    ];

    // 3. Структурні стилі (геометрія та логіка фокусу)
    $variantStructures = [
        'filled' => 'border focus:bg-white focus:ring-2 focus:ring-offset-2',
        'outline' => 'bg-transparent border-2 border-slate-200 focus:ring-2 focus:ring-offset-2',
        'underline' => 'bg-transparent border-b-2 border-b-slate-200 rounded-none px-1 focus:ring-0',
    ];

    $palette = $colorPalettes[$color] ?? $colorPalettes['slate'];

    $finalClasses = [
        'w-full transition-all duration-300 focus:outline-none font-medium text-slate-900 placeholder:text-slate-400 disabled:opacity-50 resize-none min-h-[120px]',
        $sizeClasses[$size] ?? $sizeClasses['md'],
        $variantStructures[$variant] ?? $variantStructures['filled'],
        $palette[$variant] ?? $palette['filled'],
    ];

    $dotClasses = [
        'sm' => 'top-2.5 right-3.5',
        'md' => 'top-3.5 right-4.5',
        'lg' => 'top-4.5 right-6',
    ];
    $dotPosition = $dotClasses[$size] ?? $dotClasses['md'];
@endphp

<div class="relative w-full">
    <textarea {{ $attributes->class($finalClasses) }}></textarea>
    @if ($attributes->has('required') && $attributes->get('required') !== false)
        <span class="absolute {{ $dotPosition }} flex h-1.5 w-1.5 pointer-events-none">
            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
            <span class="relative inline-flex rounded-full h-1.5 w-1.5 bg-red-500"></span>
        </span>
    @endif
</div>
