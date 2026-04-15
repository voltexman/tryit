@props(['value', 'label' => null, 'description' => '', 'icon' => ''])

@php
    $iconHtml = $icon
        ? Blade::render(
            '<x-dynamic-component :component="$component" class="size-4 mr-1.5 inline-block stroke-2 stroke-tryit-orange" />',
            ['component' => 'lucide-' . $icon],
        )
        : null;

    $jsonData = json_encode([
        'description' => $description,
        'icon' => $iconHtml,
    ]);
@endphp

<button type="button"
    class="flex justify-between items-center px-5 py-2.5 text-left hover:bg-zinc-100 transition-colors duration-300 cursor-pointer"
    x-on:click="choose('{{ $value }}')">
    <span class="text-sm">{{ $label ?? ($slot->isNotEmpty() ? $slot : $value) }}</span>
    <x-lucide-check class="size-4 text-tryit-green" x-show="selected === '{{ $value }}'" />
</button>
