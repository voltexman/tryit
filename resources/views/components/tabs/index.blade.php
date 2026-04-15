@props(['default-value'])

<div x-data="{ active: '{{ $defaultValue }}', vertical: false }" x-bind:class="{ 'sm:flex-row': vertical }" {{ $attributes->class('flex flex-col') }}>
    {{ $slot }}
</div>
