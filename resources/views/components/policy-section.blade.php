@props(['icon' => 'file-text', 'number' => null])

<div class="group">
    <div class="flex items-start gap-4 md:gap-5">
        <div class="flex-none size-10 md:size-12 rounded-xl bg-tryit-green/10 flex items-center justify-center mt-0.5">
            @if($number)
                <span class="font-display font-bold text-tryit-green text-sm">{{ $number }}</span>
            @else
                <x-dynamic-component :component="'lucide-' . $icon" class="size-5 text-tryit-green" stroke-width="1.5" />
            @endif
        </div>
        <div class="flex-1 min-w-0">
            {{ $slot }}
        </div>
    </div>
</div>
