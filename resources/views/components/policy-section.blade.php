@props([
    'number' => null,
    'icon' => null,
])

<div {{ $attributes->merge(['class' => 'relative flex flex-col sm:flex-row gap-4 sm:gap-6 lg:gap-8 group']) }}>
    @if($number || $icon)
        <div class="shrink-0 flex items-start">
            <div class="relative flex items-center justify-center size-12 sm:size-14 rounded-2xl bg-tryit-green/10 text-tryit-green transition-transform duration-300 group-hover:-translate-y-1">
                @if($icon)
                    <x-dynamic-component :component="'lucide-'.$icon" class="size-6 sm:size-7" stroke-width="1.5" />
                    
                    @if($number)
                        <div class="absolute -top-2 -right-2 flex items-center justify-center size-7 rounded-full bg-white shadow-sm border border-gray-100 font-display text-xs font-bold text-gray-900">
                            {{ $number }}
                        </div>
                    @endif
                @elseif($number)
                    <span class="font-display text-xl sm:text-2xl font-black">{{ $number }}</span>
                @endif
            </div>
        </div>
    @endif

    <div class="flex-1 pt-1">
        {{ $slot }}
    </div>
</div>
