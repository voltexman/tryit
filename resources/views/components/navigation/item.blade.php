@props(['link' => '#', 'icon' => null])

<a href="{{ $link }}" @click="typeof open !== 'undefined' ? open = false : null" wire:navigate
    {{ $attributes->class([
        // 1. Спільні класи для обох станів
        'flex flex-col lg:flex-row items-center justify-center lg:justify-start py-6 lg:py-2.5 px-6 lg:px-4 rounded-xl lg:rounded-full aspect-square lg:aspect-auto transition-all duration-300 gap-3 group w-full lg:w-auto',
    
        // 2. Класи ТІЛЬКИ для НЕАКТИВНОГО стану (not-data-current)
        'not-data-current:bg-white lg:not-data-current:bg-transparent not-data-current:text-slate-600 lg:not-data-current:text-slate-50/50 not-data-current:hover:bg-tryit-orange/5 lg:not-data-current:hover:bg-white/10 not-data-current:hover:text-tryit-orange lg:not-data-current:hover:text-white not-data-current:hover:shadow-md lg:not-data-current:hover:shadow-none not-data-current:font-semibold',
    
        // 3. Класи ТІЛЬКИ для АКТИВНОГО стану (data-current)
        'data-current:bg-tryit-orange data-current:text-white data-current:font-bold data-current:z-10 data-current:shadow-lg lg:data-current:bg-transparent lg:data-current:shadow-none',
    ]) }}>

    @isset($icon)
        <div
            class="flex-none transition-all duration-300 group-hover:scale-110 
                    {{-- Неактивна іконка + ховер --}}
                    not-data-current:text-tryit-orange lg:not-data-current:text-slate-50/50 group-hover:text-tryit-orange lg:group-hover:text-white
                    {{-- Активна іконка --}}
                    data-current:text-white">
            @svg('lucide-' . $icon, 'size-7 lg:size-5')
        </div>
    @endisset

    <span class="text-[14px] lg:text-[15px] uppercase lg:normal-case tracking-wider lg:tracking-normal">
        {{ $slot }}
    </span>
</a>
