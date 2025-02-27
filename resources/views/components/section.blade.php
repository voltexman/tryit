<section {{ $attributes->class(['py-15 min-h-screen']) }}>
    @isset($caption)
        <h2 class="mb-15 text-center text-3xl uppercase font-black text-gray-800 drop-shadow-lg relative">
            <img src="{{ Vite::asset('resources/images/klax.svg') }}"
                class="size-32 opacity-15 -z-10 absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2" alt="">
            <span>{{ $caption }}</span>
        </h2>
    @endisset
    <div class="max-w-7xl mx-auto px-5">{{ $slot }}</div>
</section>
