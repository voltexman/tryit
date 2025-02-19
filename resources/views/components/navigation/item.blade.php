@props(['link' => '#', 'active' => false, 'icon' => null])

@if (!$active)
    <a href="{{ $link }}" @click="open = false"
        class="flex flex-col p-4 items-center justify-center text-center bg-tryit-orange/5 lg:bg-transparent border-tryit-orange/10 text-tryit-orange gap-x-2.5 lg:text-white text-[16px] border xl:border-0 rounded-lg font-semibold hover:text-tryit-orange transition duration-300 gap-2.5">
        @isset($icon)
            @svg('lucide-' . $icon, 'size-7 inline-flex flex-none lg:hidden')
        @endisset
        <span class="text-sm">{{ $slot }}</span>
    </a>
@endif
