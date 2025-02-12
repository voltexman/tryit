@props(['variant' => 'default'])

@php
    $baseClasses =
        'py-2.5 text-sm rounded-md transition-colors duration-300 cursor-pointer disabled:opacity-50 disabled:cursor-not-allowed';
    $variantClasses = [
        'default' => 'bg-tryit-orange hover:bg-tryit-orange/80 text-white px-4',
        'icon' => 'bg-transparent hover:bg-stone-400/20 px-2.5',
    ];
@endphp

<button
    {{ $attributes->merge(['type' => 'button', 'class' => "$baseClasses " . ($variantClasses[$variant] ?? $variantClasses['default'])]) }}>
    {{ $slot }}
</button>
