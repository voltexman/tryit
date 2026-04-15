@props(['variant' => 'default', 'size' => 'md', 'icon' => null, 'required' => false])

@php
    $baseClasses = 'peer rounded-full text-sm font-normal border w-full tracking-wide transition-colors duration-300
        focus:outline-none disabled:opacity-50 placeholder:tracking-wide disabled:pointer-events-none focus:border-transparent
        focus:ring-2 ring-offset-2 placeholder-transparent autofill:bg-transparent autofill:text-white';

    $variantClasses = [
        'default' => 'bg-neutral-900/50 text-white hover:bg-neutral-900/75 focus:bg-neutral-900/90',
        'orange' => 'bg-tryit-orange/70 text-white hover:bg-tryit-orange/90 focus:bg-tryit-orange',
        'dark' =>
            'bg-neutral-900/50 text-stone-100 border-neutral-900/20 hover:bg-neutral-900/70 focus:bg-neutral-900/90 focus:ring-neutral-900',
        'light' => 'bg-white text-stone-800 border-stone-100 hover:bg-stone-100 focus:bg-stone-100 outline-tryit-green',
        'soft' => 'bg-zinc-50 text-zinc-800 border-zinc-200/50 hover:bg-zinc-100 focus:bg-zinc-100 outline-tryit-green',
    ];

    $sizeClasses = [
        'sm' => 'text-xs pt-5 pb-2 pe-3 ps-3',
        'md' => 'text-sm pt-6 pb-2 pe-4 ps-4',
        'lg' => 'text-base pt-7 pb-3 pe-5 ps-5',
        'xl' => 'text-lg pt-7 pb-3 pe-6 ps-6',
    ];

    $labelColorClasses = [
        'default' => 'text-white/50 peer-focus:text-neutral-400 peer-not-placeholder-shown:text-neutral-400',
        'orange' => 'text-white/70 peer-focus:text-white peer-not-placeholder-shown:text-white',
        'dark' => 'text-stone-400 peer-focus:text-stone-200 peer-not-placeholder-shown:text-stone-200',
        'light' => 'text-stone-400 peer-focus:text-stone-600 peer-not-placeholder-shown:text-stone-600',
        'soft' => 'text-zinc-400 peer-focus:text-zinc-600 peer-not-placeholder-shown:text-zinc-600',
    ];

    $iconPadding = $icon ? 'ps-12' : '';

    $iconColor = match ($variant) {
        'light', 'soft' => 'stroke-tryit-green',
        'dark', 'default', 'orange' => 'stroke-white',
        default => 'stroke-white',
    };

    $classes = collect([
        $baseClasses,
        $variantClasses[$variant] ?? $variantClasses['default'],
        $sizeClasses[$size] ?? $sizeClasses['md'],
        $iconPadding,
    ])->join(' ');
@endphp

<div class="relative w-full">
    <input id="floating-input-{{ Illuminate\Support\Str::slug($attributes->get('placeholder')) }}"
        {{ $attributes->merge(['class' => $classes]) }} placeholder="{{ $attributes->get('placeholder') }}">

    @if ($icon)
        <div class="absolute inset-y-0 start-0 flex items-center ps-4 pointer-events-none">
            <x-dynamic-component :component="'lucide-' . $icon" class="size-5 {{ $iconColor }}" />
        </div>
    @endif

    @if ($required)
        <span class="size-2 rounded-full bg-red-500 absolute right-3 top-3"></span>
    @endif

    <label for="floating-input-{{ Illuminate\Support\Str::slug($attributes->get('placeholder')) }}"
        class="absolute left-0 top-0 h-full flex items-center text-sm transition-all duration-300 pointer-events-none origin-[0%_0%]
            ps-{{ $icon ? '12' : '4' }}
            peer-disabled:opacity-50 peer-disabled:pointer-events-none
            peer-focus:scale-90 peer-focus:translate-x-1 peer-focus:-translate-y-1.5
            peer-not-placeholder-shown:scale-90 peer-not-placeholder-shown:translate-x-1 peer-not-placeholder-shown:-translate-y-1.5
            {{ $labelColorClasses[$variant] ?? $labelColorClasses['default'] }}">
        {{ $attributes->get('placeholder') }}
    </label>
</div>
