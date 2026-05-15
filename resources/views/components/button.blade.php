@props([
    'variant' => 'default',
    'color' => 'emerald',
    'size' => 'md',
])

@php
    $baseClasses =
        'inline-flex items-center justify-center font-medium font-display rounded-full transition-all duration-300 cursor-pointer disabled:opacity-50 disabled:cursor-not-allowed';

    $sizeClasses = [
        'xs' => 'px-2.5 py-1.5 text-xs',
        'sm' => 'px-3 py-2 text-sm',
        'md' => 'px-4 py-2.5 text-sm',
        'lg' => 'px-6 py-3 text-base',
    ];

    $colors = [
        'emerald' => 'bg-emerald-700 hover:bg-emerald-800 text-white',
        'orange' => 'bg-orange-600 hover:bg-orange-700 text-white font-bold',
        'slate' => 'bg-slate-800 hover:bg-slate-700 text-white',
        'white' => 'bg-white hover:bg-slate-50 text-slate-900 border border-slate-200',
    ];

    $variantClasses = [
        'default' => $colors[$color] ?? $colors['emerald'],
        'icon' => 'bg-transparent hover:bg-slate-400/10 px-2.5',
        'outline' => "border-2 border-{$color}-600 text-{$color}-600 hover:bg-{$color}-50",
    ];

    $finalClasses = [
        $baseClasses,
        $sizeClasses[$size] ?? $sizeClasses['md'],
        $variantClasses[$variant] ?? $variantClasses['default'],
    ];
@endphp

<button {{ $attributes->merge(['type' => 'button', 'class' => implode(' ', $finalClasses)]) }}>
    {{ $slot }}
</button>
