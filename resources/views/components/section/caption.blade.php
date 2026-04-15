<div {{ $attributes->class('flex items-center gap-2.5 mb-5 relative') }}>
    <img src="{{ Vite::asset('resources/images/cleaning.png') }}" class="size-5 inline-flex" alt="">
    <span class="text-sm font-bold uppercase">{{ $slot }}</span>
</div>
