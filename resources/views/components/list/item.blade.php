@props(['index' => null])

<li
    class="flex items-start gap-x-2.5 py-2.5 border-b border-dashed border-tryit-green/30 xl:hover:bg-tryit-green/5 transition duration-300 last:border-0">
    <span class="hidden bg-tryit-green/30 size-7 text-sm rounded-full flex-none md:flex items-center justify-center">
        @isset($index)
            <span class="hidden lg:block font-semibold text-sm text-tryit-green">{{ $index }}</span>
        @else
            <x-lucide-check class="size-4 flex-none text-tryit-green lg:group-data-[type=check]:block" />
        @endisset
    </span>
    <span class="text-gray-700 font-normal">
        {{ $slot }}
    </span>
</li>
