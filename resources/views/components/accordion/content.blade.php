@props(['index'])

<div x-cloak x-show="selectedAccordionItem === {{ $index }}" id="accordion-{{ $index }}" role="region"
    aria-labelledby="controlsAccordion-{{ $index }}" x-collapse>
    <div {{ $attributes->class('px-5 pb-5 font-normal text-gray-700 text-pretty') }}>
        {{ $slot }}
    </div>
</div>
