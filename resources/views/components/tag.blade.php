@props(['variant' => 'green', 'link' => null])

@php
    // класи без hover
    $base = match ($variant) {
        'soft' => 'bg-zinc-500/10 border border-dashed border-zinc-400/40 text-zinc-600',
        'green' => 'bg-green-500/15 border border-dashed border-green-500/60 text-green-600',
        default => '',
    };

    // hover-класи окремо (лише для посилань)
    $hover = match ($variant) {
        'soft' => 'hover:bg-zinc-500/20',
        'green' => 'hover:bg-green-500/30',
        default => '',
    };
@endphp

@if ($link)
    <a href="{{ $link }}"
        {{ $attributes->class([
            $base,
            $hover,
            'text-xs font-medium px-2.5 py-1.5 rounded-full inline-block transition-colors duration-300',
        ]) }}>
        <x-lucide-tag class="size-3.5 inline-block mr-0.5 -mt-0.5" />
        {{ $slot }}
    </a>
@else
    <div
        {{ $attributes->class([$base, 'text-xs font-medium px-2.5 py-1.5 rounded-full inline-flex justify-center items-center']) }}>
        <x-lucide-tag class="size-3.5 inline-block mr-1.5" />
        {{ $slot }}
    </div>
@endif
