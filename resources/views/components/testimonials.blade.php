<div data-hs-carousel='{
    "loadingClasses": "opacity-0",
    {{-- "dotsItemClasses": "hs-carousel-active:bg-tryit-orange hs-carousel-active:border-tryit-green size-3 border-2 border-gray-300 rounded-full cursor-pointer", --}}
    "slidesQty": {
        "xs": 1,
        "lg": 2
    },
    "isDraggable": true
}'
    class="relative z-40">
    <div class="hs-carousel relative w-full min-h-45 lg:min-h-90">
        <div
            class="hs-carousel-body absolute top-0 bottom-0 start-0 flex gap-5 lg:gap-10 flex-nowrap opacity-0 cursor-grab transition-transform duration-700 hs-carousel-dragging:transition-none hs-carousel-dragging:cursor-grabbing">
            @foreach ($testimonials as $testimonial)
                <div class="hs-carousel-slide lg:bg-white lg:rounded-2xl lg:shadow-lg px5 lg:px-10 lg:py-20 relative">
                    <x-lucide-quote class="hidden lg:block size-12 absolute top-5 left-5 opacity-10 z-0" />
                    <div class="flex flex-col h-full justify-center">
                        <div @class([
                            'border-b border-neutral-100 pb-2.5 lg:pb-5' =>
                                $testimonial->name || $testimonial->company,
                        ])>
                            <p class="text-gray-800 line-clamp-4 whitespace-normal text-lg lg:text-xl">
                                {{ $testimonial->text }}
                            </p>
                        </div>
                        @if ($testimonial->name || $testimonial->company)
                            @if ($testimonial->name)
                                <div class="mt-2.5 lg:mt-5 font-[Oswald] font-bold text-tryit-dark">
                                    {{ $testimonial->name }}
                                </div>
                            @endif
                            @if ($testimonial->company)
                                <div class="mt-2.5 text-sm text-gray-500">
                                    {{ $testimonial->company }}
                                </div>
                            @endif
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="hs-carousel-pagination flex justify-start absolute bottom-0 left-0 gap-x-2.5"></div>
</div>
