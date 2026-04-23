@props(['link' => '#', 'active' => false, 'icon' => null])

@php
    $baseClasses =
        'flex flex-col lg:flex-row items-center justify-center lg:justify-start py-5 lg:py-2.5 px-6 lg:px-4 rounded-2xl lg:rounded-full transition-all duration-300 gap-3 group w-full lg:w-auto';

    $activeClasses = 'text-white font-bold z-10';
    $inactiveClasses =
        'bg-white border border-gray-100 lg:border-none lg:bg-transparent text-slate-600 lg:text-slate-50/50 hover:bg-tryit-orange/5 lg:hover:bg-white/10 hover:text-tryit-orange lg:hover:text-white hover:shadow-md lg:hover:shadow-none font-semibold';

    $classes = $baseClasses . ' ' . ($active ? $activeClasses : $inactiveClasses);
@endphp

<a href="{{ $link }}" @click="typeof open !== 'undefined' ? open = false : null"
    {{ $attributes->class($classes) }}>
    @isset($icon)
        <div
            class="flex-none {{ $active ? 'text-white' : 'text-tryit-orange lg:text-slate-50/50 group-hover:text-tryit-orange lg:group-hover:text-white' }} transition-all duration-300 group-hover:scale-110">
            @svg('lucide-' . $icon, 'size-7 lg:size-5')
        </div>
    @endisset
    <span
        class="text-[14px] lg:text-[15px] uppercase lg:normal-case tracking-wider lg:tracking-normal">{{ $slot }}</span>
</a>
