@props(['currentService'])

<div {{ $attributes->class('bg-stone-100 w-full rounded-3xl overflow-hidden py-2.5 services-menu') }}>
    @foreach (App\Enums\ServiceEnum::cases() as $service)
        <a href="{{ route($service->link()) }}"
            class="
                flex items-start gap-x-2.5 px-5 py-2 transition-colors duration-300 menu-item
                {{ $currentService === $service ? 'bg-stone-300/80' : 'hover:bg-stone-200' }}
            ">
            <x-dynamic-component :component="'lucide-' . $service->icon()" class="hidden lg:block size-7 text-tryit-green-800 shrink-0"
                stroke-width="1.5" />

            <span class="flex flex-col">
                <span class="font-semibold text-tryit-dark">
                    {{ $service->getLabel() }}
                </span>

                <span class="text-xs text-gray-500 line-clamp-1 lg:line-clamp-2">
                    {{ $service->caption() }}
                </span>
            </span>
        </a>
    @endforeach
</div>
