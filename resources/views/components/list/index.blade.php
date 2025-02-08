@props(['tag' => 'ul'])

<div {{ $attributes->class('my-10') }}>
    @isset($caption)
        <div class="font-semibold text-xl">{{ $caption }}</div>
    @endisset

    <{{ $tag }}> {{ $slot }}</{{ $tag }}>
</div>
