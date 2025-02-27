@props(['orientation' => 'left', 'link', 'images' => []])

<div class="grid lg:grid-cols-5 lg:gap-10 items-center">
    <div @class([
        'lg:order-1' => $orientation === 'left',
        'lg:order-2' => $orientation === 'right',
        'lg:col-span-2 relative animate-in duration-1000',
    ]) x-intersect="$el.classList.add('zoom-in')">
        <x-slider :images="[$images]" class="rounded-2xl overflow-hidden size-96 group" />
    </div>
    <div @class([
        'lg:order-2' => $orientation === 'left',
        'lg:order-1' => $orientation === 'right',
        'flex flex-col lg:col-span-3 gap-y-5 animate-in duration-1000',
    ]) x-intersect="$el.classList.add('zoom-in')">
        <div class="text-2xl lg:text-3xl border-s-4 border-tryit-orange ps-2.5 font-light uppercase">
            {{ $name }}
        </div>
        <div class="">
            <div>{{ $description }}</div>
            <div class="mt-5 flex gap-x-5">
                <a href="{{ route($link) }}">
                    <x-button class="flex gap-x-1.5" aria-label="Відкрити сторінку з детальним описом послуги">
                        Детальніше...
                    </x-button>
                </a>
            </div>
        </div>
    </div>
</div>
