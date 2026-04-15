@props(['value'])

<div x-show="active === '{{ $value }}'" id="{{ $value }}-tab-pane" {{ $attributes->class('flex flex-col gap-10') }}
    tab="tabpanel" aria-labelledby="{{ $value }}-tab">
    {{ $slot }}
</div>
