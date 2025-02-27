@props(['images' => []])

<div x-data="carousel({
    slides: @js($images),
})" {{ $attributes->class('relative w-full overflow-hidden') }}>

    <!-- previous button -->
    <button type="button"
        class="hidden absolute left-5 top-1/2 z-20 flex rounded-full -translate-y-1/2 items-center justify-center bg-surface/40 p-2 text-on-surface transition hover:bg-surface/60 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary active:outline-offset-0 opacity-0 group-hover:opacity-100 size-10 bg-black/20 backdrop-blur-xs text-white border cursor-pointer"
        aria-label="Попереднє зображення" x-on:click="previous()">
        <x-lucide-chevron-left class="size-8 size-5 md:size-6 pr-0.5" />
    </button>

    <!-- next button -->
    <button type="button"
        class="hidden absolute right-5 top-1/2 z-20 flex rounded-full -translate-y-1/2 items-center justify-center bg-surface/40 p-2 text-on-surface transition hover:bg-surface/60 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary active:outline-offset-0 opacity-0 group-hover:opacity-100 size-10 bg-black/20 backdrop-blur-xs text-white border cursor-pointer"
        aria-label="Наступне зображення" x-on:click="next()">
        <x-lucide-chevron-right class="size-8 size-5 md:size-6 pl-0.5" />
    </button>

    <!-- slides -->
    <!-- Change min-h-[50svh] to your preferred height size -->
    <div class="relative min-h-[50svh] w-full">
        <template x-for="(slide, index) in slides">
            <div x-show="currentSlideIndex == index + 1" class="absolute inset-0" x-transition.opacity.duration.1000ms>
                <img class="absolute w-full h-full inset-0 object-cover text-on-surface" :src="slide"
                    alt="" />
            </div>
        </template>
    </div>

    <!-- indicators -->
    <div class="hidden absolute rounded-full bottom-5 left-1/2 z-20 flex -translate-x-1/2 gap-2.5 bg-white/40 backdrop-blur-xs px-2.5 py-1.5"
        role="group" aria-label="slides">
        <template x-for="(slide, index) in slides">
            <button class="size-2.5 rounded-full transition self-center" x-on:click="currentSlideIndex = index + 1"
                x-bind:class="[currentSlideIndex === index + 1 ? 'bg-tryit-orange/80 size-3' :
                    'bg-tryit-green/80'
                ]"
                x-bind:aria-label="'slide ' + (index + 1)"></button>
        </template>
    </div>
</div>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('carousel', (carouselData = {
            slides: [],
        }, ) => ({
            slides: carouselData.slides,
            currentSlideIndex: 1,
            previous() {
                if (this.currentSlideIndex > 1) {
                    this.currentSlideIndex = this.currentSlideIndex - 1
                } else {
                    this.currentSlideIndex = this.slides.length
                }
            },
            next() {
                if (this.currentSlideIndex < this.slides.length) {
                    this.currentSlideIndex = this.currentSlideIndex + 1
                } else {
                    this.currentSlideIndex = 1
                }
            },
        }))
    })
</script>
