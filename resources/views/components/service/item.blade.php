@props(['value'])

<div x-on:click="active = '{{ $value }}'; background = '{{ App\Enums\ServiceEnum::from($value)->image() }}'"
    x-on:focus="active = '{{ $value }}'" id="{{ $value }}-tab" role="tab"
    aria-controls="{{ $value }}-tab-pane" x-bind:aria-selected="active === '{{ $value }}'"
    x-bind:tabindex="active === '{{ $value }}' ? '0' : '-1'"
    :class="active === '{{ $value }}' ? 'border-tryit-green from-tryit-green/25' : 'border-white/10'"
    {{ $attributes->class(['flex flex-col lg:ps-5 lg:border-s lg:gap-2.5 py-1.5 lg:bg-linear-to-r to-25% hover:from-tryit-green/25 hover:to-75% to-transparent cursor-pointer transition-colors duration-300']) }}>

    <div class="text-xl lg:text-2xl font-[Oswald]"
        :class="active === '{{ $value }}' ? 'text-tryit-green' : 'text-white'">
        {{ App\Enums\ServiceEnum::from($value)->getLabel() }}
    </div>
    <div class="hidden lg:block text-xs text-gray-300">
        {{ App\Enums\ServiceEnum::from($value)->caption() }}
    </div>
</div>
