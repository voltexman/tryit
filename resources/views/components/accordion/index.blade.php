@props(['defaultSelected' => null])

<div x-data="{ selectedAccordionItem: {{ $defaultSelected === null ? 'null' : $defaultSelected }} }"
    {{ $attributes->class('flex flex-col w-full divide-y divide-outline divide-zinc-50 flex-none text-black') }}>
    {{ $slot }}
</div>
