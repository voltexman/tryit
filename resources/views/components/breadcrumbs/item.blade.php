@props(['icon', 'href' => '#'])

<li class="inline-flex items-center">
    <a class="flex items-center text-sm text-gray-200 hover:text-neutral-400 focus:outline-hidden focus:text-neutral-400 transition-colors duration-300"
        href="{{ $href }}">
        <x-dynamic-component :component="'lucide-' . $icon" class="size-4 mr-1.5 text-gray-200 shrink-0" />
        {{ $slot }}
    </a>
</li>
