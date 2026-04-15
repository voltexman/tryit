@props(['text'])

<div class="flex ms-5 mt-0.5">
    <x-lucide-info class="size-3.5 stroke-gray-500 me-1.5 flex-none" />
    <span class="text-xs text-gray-500 leading-4">{{ $text ?? $slot }}</span>
</div>
