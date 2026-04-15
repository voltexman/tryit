@props(['link' => '#', 'active' => false, 'icon' => null])

@if (!$active)
    <a href="{{ $link }}" @click="open = false"
        class="flex border-dashed flex-col p-5 items-center justify-center text-center bg-tryit-green-100/35 lg:bg-transparent border-tryit-green-100 text-tryit-green gap-x-2.5 lg:text-white text-[16px] border md:border-0 rounded-2xl font-semibold hover:text-tryit-orange transition duration-300 gap-2.5">
        @isset($icon)
            <x-dynamic-component :component="'lucide-' . $icon" class="size-7 inline-flex flex-none lg:hidden" stroke-width="1.5" />
        @endisset
        <span class="text-sm font-medium">{{ $slot }}</span>
    </a>
@endif
