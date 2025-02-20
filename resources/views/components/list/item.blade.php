@props(['index' => null])

<li class="flex items-center gap-x-2.5 py-2.5 border-b border-dashed border-tryit-orange/50 last:border-0">
    <span class="hidden bg-tryit-orange/20 size-8 text-sm rounded-full flex-none lg:flex items-center justify-center">
        <x-lucide-check class="size-5 flex-none text-tryit-orange lg:group-data-[type=check]:block" />
        @isset($index)
            <span class="hidden lg:block font-semibold text-sm text-tryit-orange">{{ $index }}</span>
        @endisset
    </span>
    <span class="text-sm uppercase">
        {{ $slot }}
    </span>
</li>
