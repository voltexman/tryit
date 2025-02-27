@props(['tag' => 'ul', 'type' => null])

<div class="grid lg:grid-cols-5 gap-x-10 gap-y-2.5 lg:gap-20 mt-15">
    @isset($caption)
        <div class="text-2xl xl:text-4xl font-light uppercase lg:col-span-2">
            {{ $caption }}
        </div>
    @endisset

    <{{ $tag }} data-type="{{ $type }}" class="group lg:col-span-3"> {{ $slot }}</{{ $tag }}>
</div>
