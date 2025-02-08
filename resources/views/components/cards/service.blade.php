@props(['orientation' => 'left', 'link', 'image'])

<div class="grid lg:grid-cols-5 gap-10 items-center">
    <div @class([
        'lg:order-1' => $orientation === 'left',
        'lg:order-2' => $orientation === 'right',
        'lg:col-span-2',
    ])>
        <img src="{{ $image }}" class="rounded-2xl" alt="">
    </div>
    <div @class([
        'lg:order-2' => $orientation === 'left',
        'lg:order-1' => $orientation === 'right',
        'flex flex-col lg:col-span-3 gap-y-5',
    ])>
        <div class="text-2xl lg:text-4xl font-bold">
            {{ $name }}
        </div>
        <div class="lg:text-xl relative">
            <div>{{ $description }}</div>
            <div class="mt-5 flex gap-x-5">
                <a href="{{ route($link) }}">
                    <x-button class="flex gap-x-1.5">
                        <x-lucide-scroll-text class="size-5" />
                        <span>Детальніше...</span>
                    </x-button>
                </a>
                <x-button>Замовити</x-button>
            </div>
        </div>
    </div>
</div>
