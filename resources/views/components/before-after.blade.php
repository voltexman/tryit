<div x-data="imageSlider('{{ $before }}', '{{ $after }}')" class="slider-wrapper rounded-2xl overflow-hidden">
    <!-- "Після" зображення (базове, щоб воно було під "До") -->
    <div class="image-container">
        <img :src="afterImage" alt="After" class="w-full h-full object-cover">
    </div>

    <!-- "До" зображення (обрізається) -->
    <div class="image-container after-image" :style="`clip-path: inset(0 ${100 - sliderPosition}% 0 0)`">
        <img :src="beforeImage" alt="Before" class="w-full h-full object-cover">
    </div>

    <!-- Range input для контролю -->
    <input type="range" min="0" max="100" step="1" 
        x-model.number="sliderPosition"
        @input="handleSliderMove($event)"
        class="slider-input"
        aria-label="Before and after image slider">

    <!-- Повзунок з іконкою -->
    <div class="slider-handle"
        :style="{ left: sliderPosition + '%' }"
        @mousedown="isDragging = true"
        @touchstart="isDragging = true">
        <div class="flex items-center justify-center size-10 bg-tryit-orange rounded-full cursor-ew-resize shadow-lg">
            <x-lucide-chevrons-left-right class="size-6 text-white" stroke-width="2" />
        </div>
        <div class="absolute inset-1 rounded-full bg-tryit-orange/50 animate-pulse"></div>
    </div>

    <!-- Позначки "До" і "Після" -->
    <div class="absolute top-4 left-4 z-20 bg-black/60 text-white text-xs font-semibold px-3 py-1.5 rounded-md backdrop-blur-sm">До</div>
    <div class="absolute top-4 right-4 z-20 bg-black/60 text-white text-xs font-semibold px-3 py-1.5 rounded-md backdrop-blur-sm">Після</div>
</div>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('imageSlider', (before, after) => ({
            beforeImage: before,
            afterImage: after,
            sliderPosition: 50,
            isDragging: false,

            init() {
                document.addEventListener('mouseup', () => this.isDragging = false);
                document.addEventListener('touchend', () => this.isDragging = false);
                document.addEventListener('mousemove', (e) => {
                    if (this.isDragging) {
                        this.updateSliderFromMouse(e);
                    }
                });
            },

            handleSliderMove(event) {
                this.sliderPosition = event.target.value;
            },

            updateSliderFromMouse(e) {
                const wrapper = e.target.closest('.slider-wrapper');
                if (!wrapper) return;

                const rect = wrapper.getBoundingClientRect();
                const position = ((e.clientX - rect.left) / rect.width) * 100;
                this.sliderPosition = Math.max(0, Math.min(100, position));
            }
        }));
    });
</script>

<style>
    .slider-wrapper {
        position: relative;
        width: 100%;
        height: auto;
        aspect-ratio: 16 / 9;
        background: #f3f4f6;
    }

    .image-container {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    .image-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .after-image {
        clip-path: inset(0 50% 0 0);
        transition: clip-path 0.05s ease-out;
    }

    .slider-input {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        cursor: ew-resize;
        appearance: none;
        background: transparent;
        border: none;
        z-index: 15;
        pointer-events: all;
    }

    .slider-input::-webkit-slider-thumb {
        appearance: none;
        width: 0;
        height: 0;
        background: transparent;
        border: none;
        cursor: ew-resize;
    }

    .slider-input::-moz-range-thumb {
        width: 0;
        height: 0;
        background: transparent;
        border: none;
        cursor: ew-resize;
    }

    .slider-input::-moz-range-track {
        background: transparent;
        border: none;
    }

    .slider-handle {
        position: absolute;
        top: 50%;
        transform: translate(-50%, -50%);
        z-index: 20;
        pointer-events: none;
    }

    .slider-handle > div {
        transition: box-shadow 0.2s ease;
    }

    .slider-handle:hover > div {
        box-shadow: 0 0 20px rgba(251, 146, 60, 0.5);
    }
</style>
