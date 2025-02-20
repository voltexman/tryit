@props(['link' => '#', 'active' => false, 'icon' => null])

@if (!$active)
    <a href="{{ $link }}" @click="open = false"
        class="flex border-dashed flex-col py-4 px-8 md:px-4 items-center justify-center text-center bg-tryit-orange/5 lg:bg-transparent border-tryit-orange/20 text-tryit-orange gap-x-2.5 lg:text-white text-[16px] border md:border-0 rounded-lg font-semibold hover:text-tryit-orange transition duration-300 gap-2.5">
        @isset($icon)
            @svg('lucide-' . $icon, 'size-7 inline-flex flex-none lg:hidden')
        @endisset
        <span class="text-sm">{{ $slot }}</span>
    </a>
@endif
