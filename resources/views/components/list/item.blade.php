@props(['index' => null])

<li class="flex items-center gap-x-2.5 py-2.5 border-b border-dashed border-tryit-orange/50 last:border-0">
    <span class="hidden bg-tryit-orange/20 size-7 text-sm rounded-full flex-none md:flex items-center justify-center">
        @isset($index)
            <span class="hidden lg:block font-semibold text-sm text-tryit-orange">{{ $index }}</span>
        @else
            <x-lucide-check class="size-4 flex-none text-tryit-orange lg:group-data-[type=check]:block" />
        @endisset
    </span>
    <span class="text-gray-700 font-normal">
        {{ $slot }}
    </span>
</li>
