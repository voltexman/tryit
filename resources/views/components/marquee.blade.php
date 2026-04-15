@props(['direction' => 'left', 'items' => []])

<div x-data="{
    pauseOnHover: true,
    init() {
        this.$nextTick(() => {
            const clone = this.$refs.marqueeList.cloneNode(true);
            this.$refs.marqueeTrack.appendChild(clone);
        });
    }
}" {{ $attributes->class('relative overflow-hidden bg-transparent') }}>
    <!-- Лівий градієнт -->
    <div class="absolute inset-y-0 start-0 z-10 w-16 sm:w-24 bg-linear-to-r from-white to-transparent" aria-hidden="true">
    </div>

    <!-- Правий градієнт -->
    <div class="absolute inset-y-0 end-0 z-10 w-16 sm:w-24 bg-linear-to-l from-white to-transparent" aria-hidden="true">
    </div>

    <!-- Трек -->
    <div x-ref="marqueeTrack" @class([
        'relative flex w-max',
        'animate-marquee-left' => $direction === 'left',
        'animate-marquee-right' => $direction === 'right',
    ]) :class="{ 'hover:animate-none': pauseOnHover }">
        <!-- Список -->
        <div x-ref="marqueeList"
            class="flex shrink-0 flex-nowrap items-center justify-around gap-5 sm:gap-10 px-5 sm:px-10">
            @foreach ($items as $item)
                <span
                    class="text-8xl lg:text-9xl font-black text-gray-200 font-[Raleway] uppercase hover:text-tryit-green transition-colors duration-300">
                    {{ $item }}
                </span>
                <span class="size-8 bg-gray-300 mx-2.5 rounded-full"></span>
            @endforeach
        </div>
    </div>
</div>

<style>
    @keyframes marquee-scroll-left {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
    }

    @keyframes marquee-scroll-right {
        0% {
            transform: translateX(-50%);
        }

        100% {
            transform: translateX(0);
        }
    }

    .animate-marquee-left {
        display: flex;
        width: max-content;
        animation: marquee-scroll-left 25s linear infinite;
        will-change: transform;
    }

    .animate-marquee-right {
        display: flex;
        width: max-content;
        animation: marquee-scroll-right 25s linear infinite;
        will-change: transform;
    }

    .marquee-paused {
        animation-play-state: paused;
    }
</style>
