@props(['index' => null])

<li class="flex items-center gap-x-2.5 uppercase py-2.5 border-b border-dashed border-tryit-orange/50 last:border-0">
    <span class="bg-tryit-orange/20 size-8 text-sm rounded-full flex-none flex items-center justify-center">
        <x-lucide-check class="size-5 hidden flex-none text-tryit-orange lg:group-data-[type=check]:block" />
        @isset($index)
            <span class="font-semibold text-sm text-tryit-orange">{{ $index }}</span>
        @endisset
    </span>
    <span class="">
        {{ $slot }}
    </span>
</li>
