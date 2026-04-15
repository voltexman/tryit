@props(['variant' => 'default', 'required' => false])

@php
    $baseClasses = 'field-sizing-content min-h-40 peer rounded-2xl px-5 pt-6 pb-3 resize-none text-sm font-normal border w-full tracking-wide transition-colors duration-300
    focus:outline-2 focus:outline-offset-2
    disabled:opacity-50 disabled:pointer-events-none
    placeholder-transparent placeholder:tracking-wide
    autofill:text-white';

    $variantClasses = [
        'default' =>
            'bg-neutral-900/50 text-white hover:bg-neutral-900/75 focus:ring-neutral-700/50 focus:bg-neutral-900/90',
        'orange' =>
            'bg-tryit-orange/70 text-white placeholder:text-white/50 hover:bg-tryit-orange/90 focus:ring-white/80',
        'dark' =>
            'bg-neutral-900/50 text-stone-100 border-neutral-900/20 hover:bg-neutral-900/70 focus:bg-neutral-900/90 focus:outline-neutral-900',
        'light' => 'bg-white text-stone-800 placeholder:text-stone-400 hover:bg-stone-100 focus:outline-tryit-green/70',
        'soft' =>
            'bg-zinc-50 text-zinc-800 border-zinc-200/50 hover:bg-zinc-100 focus:bg-zinc-100 focus:outline-tryit-green',
    ];

    $labelColorClasses = [
        'default' => 'text-white/50 peer-focus:text-neutral-400 peer-not-placeholder-shown:text-neutral-400',
        'orange' => 'text-white/70 peer-focus:text-white peer-not-placeholder-shown:text-white',
        'dark' => 'text-stone-400 peer-focus:text-stone-200 peer-not-placeholder-shown:text-stone-200',
        'light' => 'text-stone-400 peer-focus:text-stone-600 peer-not-placeholder-shown:text-stone-600',
        'soft' => 'text-zinc-400 peer-focus:text-zinc-600 peer-not-placeholder-shown:text-zinc-600',
    ];

    $classes = collect([$baseClasses, $variantClasses[$variant] ?? $variantClasses['default']])->join(' ');
@endphp

<div class="relative">
    <textarea id="floating-textarea-{{ Illuminate\Support\Str::slug($attributes->get('placeholder')) }}"
        {{ $attributes->merge(['class' => $classes]) }} placeholder="{{ $attributes->get('placeholder') }}"></textarea>

    @if ($required)
        <span class="size-2 rounded-full bg-red-500 absolute right-3 top-3"></span>
    @endif

    <label for="floating-input-{{ Illuminate\Support\Str::slug($attributes->get('placeholder')) }}"
        class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-300 border border-transparent origin-[0_0] peer-disabled:opacity-50 peer-disabled:pointer-events-none 
            peer-focus:scale-90
            peer-focus:translate-x-1
            peer-focus:-translate-y-1.5
            peer-not-placeholder-shown:scale-90
            peer-not-placeholder-shown:translate-x-1
            peer-not-placeholder-shown:-translate-y-1.5
            {{ $labelColorClasses[$variant] ?? $labelColorClasses['default'] }}">
        {{ $attributes->get('placeholder') }}
    </label>
</div>
