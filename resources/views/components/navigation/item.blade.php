@props(['link' => '#', 'icon' => null])

<a href="{{ $link }}" @click="typeof open !== 'undefined' ? open = false : null" wire:navigate
    {{ $attributes->class([
        // 0. ХОВАЄМО АКТИВНИЙ ПУНКТ ВЗАГАЛІ
        'data-current:hidden',
    
        // 1. спільні класи для обох станів
        'flex flex-col lg:flex-row items-center justify-center  lg:justify-start py-6 lg:py-2.5 px-6 lg:px-4 rounded-xl lg:rounded-full aspect-square lg:aspect-auto transition-all duration-300 gap-3 group w-full lg:w-auto',
    
        // 2. класи тільки для неактивного стану (not-data-current)
        'not-data-current:bg-white lg:not-data-current:bg-transparent not-data-current:text-tryit-cream lg:not-data-current:text-tryit-cream not-data-current:hover:bg-tryit-orange/5 lg:not-data-current:hover:bg-white/10 not-data-current:hover:text-tryit-orange lg:not-data-current:hover:text-white not-data-current:font-semibold',
    
        // 3. класи тільки для активного стану (data-current) - залишаємо про всяк випадок, але display: none їх перекриє
        'data-current:bg-tryit-orange data-current:text-white data-current:font-bold data-current:z-10 lg:data-current:bg-transparent',
    ]) }}>
    @isset($icon)
        <div
            class="lg:hidden flex-none transition-all duration-300 group-hover:scale-110 group-hover:text-tryit-orange lg:group-hover:text-white">
            <x-dynamic-component :component="'lucide-' . $icon" class="size-7 lg:size-5 not-data-current:text-tryit-cream" />
        </div>
    @endisset

    <span class="text-[14px] lg:text-[15px] uppercase lg:normal-case tracking-wider lg:tracking-normal">
        {{ $slot }}
    </span>
</a>
