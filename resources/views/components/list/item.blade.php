@props(['index' => null])

<li class="flex items-start gap-x-2.5 my-1.5 transition duration-300 last:border-0">
    <span class="bg-tryit-green size-5 text-sm rounded-full flex-none flex items-center justify-center">
        @isset($index)
            <span class="font-semibold text-xs text-white">{{ $index }}</span>
        @else
            <x-lucide-check class="size-3 flex-none text-white lg:group-data-[type=check]:block" stroke-width="4" />
        @endisset
    </span>
    <span class="text-tryit-dark font-medium">
        {{ $slot }}
    </span>
</li>
