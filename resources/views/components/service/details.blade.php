@props(['value'])

<div class="absolut min--[200px] lg:top-1/2 lgL-translate-y-1/2">
    <div x-show="active === '{{ $value }}'" x-transition:enter="transition ease-in duration-500"
        x-transition:enter-start="opacity-0 -translate-y-10" x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-10"
        class="hidden lg:block lg:text-6xl text-white mb-10 font-[Oswald] font-semibold">
        {{ App\Enums\ServiceEnum::from($value)->getLabel() }}
    </div>

    <div x-show="active === '{{ $value }}'" x-transition:enter="transition ease-out duration-500"
        x-transition:enter-start="opacity-0 -translate-x-full" x-transition:enter-end="opacity-100 translate-x-0"
        x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 translate-x-0"
        x-transition:leave-end="opacity-0 -translate-x-full" id="{{ $value }}-tab-pane"
        {{ $attributes->class('text-base lg:text-xl text-gray-200') }} role="tabpanel"
        aria-labelledby="{{ $value }}-tab">
        {{ $slot }}
    </div>

    <div x-show="active === '{{ $value }}'" x-transition:enter="transition ease-in duration-500"
        x-transition:enter-start="opacity-0 translate-y-10" x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 translate-y-10">
        <a href="{{ route(App\Enums\ServiceEnum::from($value)->link()) }}">
            <x-button variant="orange" class="mt-5 lg:mt-10 text-base">Детальніше</x-button>
        </a>
    </div>
</div>
