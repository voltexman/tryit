@props(['positions' => []])

<div x-data="{
    categories: @js($positions),
    selected: 0,
    thumbSize: 25,
    trackLeft: 0,
    trackWidth: 0,
    updateTrack(el) {
        const cols = this.categories.length - 1;
        this.trackWidth = el.offsetWidth - this.thumbSize;
        this.trackLeft = (this.selected / cols) * this.trackWidth;
    }
}" x-init="$nextTick(() => updateTrack($refs.range))" {{ $attributes->class('w-full flex flex-col gap-2.5') }}>

    <label class="text-sm text-neutral-700 font-medium">Ступінь забруднення</label>

    <!-- Slider -->
    <div class="relative w-full h-6 flex items-center">
        <!-- Повний трек -->
        <div class="absolute top-1/2 h-2 bg-neutral-300 rounded-full -translate-y-1/2 w-full"></div>
        <!-- Активна частина треку -->
        <div class="absolute top-1/2 h-2 bg-tryit-green/70 rounded-full -translate-y-1/2"
            :style="`left: 0; width: ${trackLeft + thumbSize/2}px`"></div>

        <!-- Range input -->
        <input x-ref="range" type="range" min="0" max="4" step="1" x-model.number="selected"
           @input="updateTrack($refs.range)"
            class="relative z-10 w-full h-2 bg-transparent appearance-none [&::-webkit-slider-thumb]:w-5 [&::-webkit-slider-thumb]:h-5 [&::-webkit-slider-thumb]:rounded-full [&::-webkit-slider-thumb]:bg-tryit-green [&::-moz-range-thumb]:w-5 [&::-moz-range-thumb]:h-5 [&::-moz-range-thumb]:rounded-full [&::-moz-range-thumb]:bg-tryit-green" />
    </div>

    <!-- Категорії і штрихи -->
    <div class="grid grid-cols-5 w-full text-center text-xs text-neutral-600">
        <template x-for="(cat, index) in categories" :key="index">
            <div class="flex flex-col items-center first:items-start">
                <span x-text="cat" class="px-5"
                    :class="selected === index ? 'font-semibold text-black' : 'opacity-50'"></span>
                <span class="w-px h-1.5 bg-neutral-400 mt-1"></span>
            </div>
        </template>
    </div>
</div>
