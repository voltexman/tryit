@props([
    'items' => [],
    'itemsPerView' => 3,
    'gap' => 4,
    'id' => 'carousel-advanced-' . uniqid(),
    'title' => null,
    'showDots' => false,
])

@php
    $gapPx = $gap * 4;
    $itemWidth = 100 / $itemsPerView;
@endphp

<div class="w-full" x-data="{
    canScrollPrev: false,
    canScrollNext: true,
    currentPage: 1,
    totalPages: Math.ceil({{ count($items) }} / {{ $itemsPerView }}),
    
    init() {
        this.$nextTick(() => this.updateScrollState());
        this.$el.querySelector('#{{ $id }}').addEventListener('scroll', () => this.updateScrollState());
        window.addEventListener('resize', () => this.updateScrollState());
    },
    
    updateScrollState() {
        const container = this.$el.querySelector('#{{ $id }}');
        const scrollLeft = container.scrollLeft;
        const scrollWidth = container.scrollWidth;
        const clientWidth = container.clientWidth;
        
        this.canScrollPrev = scrollLeft > 0;
        this.canScrollNext = scrollLeft < scrollWidth - clientWidth - 10;
        
        const itemWidth = container.querySelector('div').clientWidth + {{ $gapPx }};
        this.currentPage = Math.floor(scrollLeft / itemWidth / {{ $itemsPerView }}) + 1;
    },
    
    scrollPrev() {
        const container = this.$el.querySelector('#{{ $id }}');
        const itemWidth = container.querySelector('div').clientWidth + {{ $gapPx }};
        container.scrollBy({
            left: -(itemWidth * {{ $itemsPerView }}),
            behavior: 'smooth'
        });
    },
    
    scrollNext() {
        const container = this.$el.querySelector('#{{ $id }}');
        const itemWidth = container.querySelector('div').clientWidth + {{ $gapPx }};
        container.scrollBy({
            left: itemWidth * {{ $itemsPerView }},
            behavior: 'smooth'
        });
    }
}">
    @if($title)
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-lg font-semibold">{{ $title }}</h3>
            <div class="flex items-center gap-4">
                @if($showDots)
                    <span class="text-sm text-gray-500" x-text="`${currentPage} / ${totalPages}`"></span>
                @endif
                <div class="flex gap-2">
                    <button @click="scrollPrev()" :disabled="!canScrollPrev"
                        class="p-2 rounded-lg bg-gray-100 hover:bg-gray-200 transition disabled:opacity-50 disabled:cursor-not-allowed">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                    </button>
                    <button @click="scrollNext()" :disabled="!canScrollNext"
                        class="p-2 rounded-lg bg-gray-100 hover:bg-gray-200 transition disabled:opacity-50 disabled:cursor-not-allowed">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    @endif

    <div id="{{ $id }}" class="overflow-x-auto scroll-smooth" style="scrollbar-width: thin;">
        <div class="flex" style="gap: {{ $gapPx }}px;">
            @forelse($items as $item)
                <div class="flex-shrink-0" style="width: {{ $itemWidth }}%; min-width: {{ $itemWidth }}%;">
                    {{ $slot($item) ?? $item }}
                </div>
            @empty
                <div class="w-full py-8 text-center text-gray-500">
                    Нема елементів для відображення
                </div>
            @endforelse
        </div>
    </div>

    @if($showDots)
        <div class="flex justify-center gap-2 mt-4">
            @for($i = 1; $i <= $totalPages; $i++)
                <button @click="
                    const container = $el.querySelector('#{{ $id }}');
                    const itemWidth = container.querySelector('div').clientWidth + {{ $gapPx }};
                    container.scrollTo({
                        left: itemWidth * {{ $itemsPerView }} * ({{ $i }} - 1),
                        behavior: 'smooth'
                    });
                "
                    :class="currentPage === {{ $i }} ? 'bg-emerald-600' : 'bg-gray-300'"
                    class="w-2 h-2 rounded-full transition">
                </button>
            @endfor
        </div>
    @endif
</div>

<style>
    #{{ $id }}::-webkit-scrollbar {
        height: 4px;
    }

    #{{ $id }}::-webkit-scrollbar-track {
        background: #f1f5f9;
        border-radius: 4px;
    }

    #{{ $id }}::-webkit-scrollbar-thumb {
        background: #cbd5e1;
        border-radius: 4px;
    }

    #{{ $id }}::-webkit-scrollbar-thumb:hover {
        background: #94a3b8;
    }
</style>
