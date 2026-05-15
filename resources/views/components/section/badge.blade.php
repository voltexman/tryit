@props(['color' => 'emerald'])

@php
    $colors = [
        'emerald' => 'bg-emerald-100 text-emerald-800 border-emerald-200',
        'slate' => 'bg-slate-500/10 text-slate-200 border-slate-500/20',
        'amber' => 'bg-amber-500/10 text-amber-700 border-amber-500/20',
    ];

    $colorClasses = $colors[$color] ?? $colors['emerald'];
@endphp

<div
    {{ $attributes->merge([
        'class' =>
            'inline-flex items-center px-3 py-1.5 text-xs font-semibold tracking-wide border backdrop-blur-sm rounded-full ' .
            $colorClasses,
    ]) }}>
    <img src="{{ Vite::asset('resources/images/cleaning.png') }}" class="size-3.5 mr-2.5" alt="">
    {{ $slot }}
</div>
