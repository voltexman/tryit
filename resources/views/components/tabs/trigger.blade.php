@props(['value', 'variant' => 'default'])

@php
    $variantClasses = [
        'default' => [
            'active' => 'text-zinc-950 border-zinc-200/75 bg-white',
            'inactive' => 'text-zinc-500 border-transparent hover:text-zinc-950',
        ],
        'orange' => [
            'active' => 'text-white bg-orange-500 border-orange-600',
            'inactive' => 'text-orange-500 border-transparent hover:text-orange-600 hover:bg-orange-50',
        ],
        'green' => [
            'active' => 'text-white bg-tryit-green border-tryit-green-600',
            'inactive' => 'text-green-500 bg-green-50 border-transparent hover:text-green-600 hover:bg-green-100',
        ],
    ];
@endphp

<button x-on:click="active = '{{ $value }}'" x-on:focus="active = '{{ $value }}'" type="button"
    id="{{ $value }}-tab" role="tab" aria-controls="{{ $value }}-tab-pane"
    x-bind:aria-selected="active === '{{ $value }}' ? 'true' : 'false'"
    x-bind:tabindex="active === '{{ $value }}' ? '0' : '-1'"
    x-bind:class="{
        '{{ $variantClasses[$variant]['active'] }}': active === '{{ $value }}',
        '{{ $variantClasses[$variant]['inactive'] }}': active !== '{{ $value }}',
        'sm:-me-px': vertical,
    }"
    {{ $attributes->class('z-10 -mb-px flex items-center gap-2.5 px-5 py-3 font-medium rounded-full cursor-pointer') }}>
    {{ $slot }}
</button>
