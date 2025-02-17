<div x-data="imageSlider('{{ $before }}', '{{ $after }}')" class="slider-wrapper rounded-xl">
    <!-- "До" зображення -->
    <div class="image-container">
        <img :src="beforeImage" alt="Before">
    </div>

    <!-- "Після" зображення (обрізається) -->
    <div class="image-container after-image" :style="`clip-path: inset(0 ${100 - sliderPosition}% 0 0)`">
        <img :src="afterImage" alt="After">
    </div>

    <!-- Повзунок -->
    <div class="relative size-full flex items-center">
        <input type="range" min="0" max="100" step="1" x-model="sliderPosition"
            class="absolute size-10 bg-tryit-orange rounded-lg outline-none appearance-none cursor-pointer transform
            [&::-webkit-slider-thumb]:appearance-none 
            [&::-webkit-slider-thumb]:size-10
            [&::-webkit-slider-thumb]:rounded-full
            [&::-webkit-slider-thumb]:cursor-ew-resize
            [&::-moz-range-thumb]:size-10
            [&::-moz-range-thumb]:rounded-full
            [&::-moz-range-thumb]:cursor-ew-resize">
        <div class="absolute size-10 flex items-center justify-center bg-tryit-orange rounded-full"
            :style="'left: ' + sliderPosition + '%; top: 50%; transform: translate(-50%, -50%)'"
            class="z-50 flex size-10 shrink-0 cursor-ew-resize items-center justify-center rounded-full bg-tryit-orange">
            <x-lucide-chevrons-left-right class="size-6 z-50 text-white" />
            <div class="absolute inset-1 rounded-full bg-tryit-orange animate-ping"></div>
        </div>
    </div>

    <!-- Позначки "До" і "Після" -->
    <div class="absolute top-3 left-3 bg-tryit-green text-white text-xs px-2.5 py-1.5 rounded-md">До</div>
    <div class="absolute top-3 right-3 bg-tryit-green text-white text-xs px-2.5 py-1.5 rounded-md">Після</div>
</div>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('imageSlider', (before, after) => ({
            beforeImage: before,
            afterImage: after,
            sliderPosition: 50,
        }));
    });
</script>

<style>
    .slider-wrapper {
        position: relative;
        width: 100%;
        max-width: 600px;
        height: 400px;
        overflow: hidden;
    }

    .image-container {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .image-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .after-image {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        clip-path: inset(0 50% 0 0);
        transition: clip-path 0s;
    }

    input[type="range"] {
        -webkit-appearance: none;
        appearance: none;
        position: absolute;
        left: 0;
        width: 100%;
        height: 6px;
        background: transparent;
        cursor: pointer;
        z-index: 10;
    }
</style>
