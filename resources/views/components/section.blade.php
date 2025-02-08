<section {{ $attributes->class(['py-15']) }}>
    @isset($caption)
        <x-icons.section-caption class="mx-auto mb-5 opacity-95" />
        <h2 class="text-center text-2xl drop-shadow-lg">{{ $caption }}</h2>
    @endisset
    <div class="max-w-6xl mx-auto mt-10 px-5">{{ $slot }}</div>
</section>
