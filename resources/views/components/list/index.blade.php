@props(['tag' => 'ul', 'type' => null])

<div {{ $attributes->class('flex flex-col gap-x-10 gap-y-2.5 list') }}>
    @isset($caption)
        <div class="text-2xl xl:text-2xl font-[Oswald] tracking-wide uppercase text-nowrap py-2.5 caption">
            {{ $caption }}
        </div>
    @endisset

    <{{ $tag }} data-type="{{ $type }}" class="group grid lg:grid-cols-2 gap-y-1 gap-x-2.5">
        {{ $slot }}
        </{{ $tag }}>
</div>
