<blockquote {{ $attributes->class('relative space-y-5 bg-neutral-100 rounded-2xl px-5 py-10 md:p-10 bg-typography-gray') }}>
    <x-lucide-quote class="absolute top-10 right-10 size-20 text-tryit-orange opacity-10" />
    <div class="text-black font-medium text-balance">
        <em class="[&>*]:mb-1.5">{{ $slot }}</em>
    </div>

    <div class="flex items-center gap-x-2.5">
        <div class="shrink-0">
            <img class="size-8 opacity-75 rounded-full" src="{{ Vite::asset('resources/images/cleaning.png') }}"
                alt="">
        </div>
        <div class="">
            <div class="text-lg font-[Oswald] font-semibold text-tryit-dark">www.tryit.com.ua</div>
            <div class="text-sm text-gray-500">Клінінгова компанія</div>
        </div>
    </div>
</blockquote>
