<button id="controlsAccordion-{{ $index }}" type="button"
    {{ $attributes->class('flex w-full items-center justify-between gap-5 p-5 text-left font-[Oswald] font-semibold text-lg cursor-pointer underline-offset-2 hover:bg-surface-alt/75 focus-visible:bg-surface-alt/75 focus-visible:underline focus-visible:outline-hidden') }}
    aria-controls="accordion-{{ $index }}"
    x-on:click="selectedAccordionItem = selectedAccordionItem === {{ $index }} ? null : {{ $index }}"
    x-bind:class="selectedAccordionItem === {{ $index }} ? 'text-black' : 'text-black/80'"
    x-bind:aria-expanded="selectedAccordionItem === {{ $index }} ? 'true' : 'false'">
    {{ $slot }}
    <x-lucide-chevron-down class="size-5 shrink-0 transition" aria-hidden="true"
        x-bind:class="selectedAccordionItem === {{ $index }} ? 'rotate-180' : ''" />
</button>
