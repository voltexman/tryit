<blockquote {{ $attributes->class('relative border-s-4 ps-4 sm:ps-6') }}>
    <div class="text-gray-700 text-base">
        <em class="[&>*]:mb-2.5">{{ $slot }}</em>
    </div>

    <footer class="mt-4">
        <div class="flex items-center">
            <div class="shrink-0">
                <img class="size-7 opacity-75 rounded-full" src="{{ Vite::asset('resources/images/cleaning.png') }}"
                    alt="">
            </div>
            <div class="ms-4">
                <div class="text-base font-semibold text-gray-800">www.tryit.com.ua</div>
                <div class="text-xs text-gray-500">Клінінгова компанія</div>
            </div>
        </div>
    </footer>
</blockquote>
