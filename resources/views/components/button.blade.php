@props(['variant' => 'default', 'size' => 'md', 'icon' => null])

@php
    $base =
        'inline-flex items-center rounded-full font-medium transition-colors duration-300 disabled:opacity-50 whitespace-nowrap cursor-pointer';

    $variants = [
        'green' => 'bg-tryit-green hover:bg-tryit-green/80 text-white',
        'orange' => 'bg-tryit-orange hover:bg-tryit-orange/80 text-white',
        'default' => 'bg-tryit-dark hover:bg-tryit-dark/80 text-white',
    ];

    $sizes = [
        'sm' => 'py-2 pl-4 pr-2 text-sm gap-2',
        'md' => 'py-2.5 pl-5 pr-3 text-sm gap-2.5',
        'lg' => 'py-4 pl-6 pr-4 text-lg gap-3',
        'xl' => 'py-5 pl-7 pr-5 text-xl gap-3.5',
    ];

    $iconWrapper = [
        'sm' => 'w-7 h-7',
        'md' => 'w-7 h-7',
        'lg' => 'w-7 h-7',
        'xl' => 'w-8 h-8',
    ];

    $iconSizes = [
        'sm' => 'w-3.5 h-3.5',
        'md' => 'w-4 h-4',
        'lg' => 'w-5 h-5',
        'xl' => 'w-6 h-6',
    ];

    $iconName = $icon === true || $icon === '' ? 'arrow-right' : $icon;

    $iconColor = [
        'green' => 'stroke-tryit-green',
        'orange' => 'stroke-tryit-orange',
        'default' => 'stroke-tryit-dark',
    ];
@endphp


<button
    {{ $attributes->merge([
        'class' => $base . ' ' . ($variants[$variant] ?? $variants['default']) . ' ' . ($sizes[$size] ?? $sizes['md']),
    ]) }}>
    <span>{{ $slot }}</span>

    @if ($icon)
        <span class="ml-auto flex items-center justify-center rounded-full bg-white {{ $iconWrapper[$size] }}">
            <x-dynamic-component :component="'lucide-' . $iconName" class="{{ $iconSizes[$size] }} {{ $iconColor[$variant] }}"
                wire:loading.remove />
            <x-lucide-loader-2 class="animate-spin {{ $iconSizes[$size] }} {{ $iconColor[$variant] }}" wire:loading />
        </span>
    @endif
</button>
