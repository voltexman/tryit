@props(['tag' => 'ul', 'type' => null])

<div {{ $attributes->class('my-10') }}>
    @isset($caption)
        <div class="font-semibold text-xl">{{ $caption }}</div>
    @endisset

    <{{ $tag }} data-type="{{ $type }}" class="group"> {{ $slot }}</{{ $tag }}>
</div>
