<div>
    {{-- Mobile: horizontal scroll --}}
    <div class="md:hidden" x-data="{ scrollEl: null, active: 0, count: {{ $posts->count() }} }" x-init="scrollEl = $refs.blogScroll;
    scrollEl.addEventListener('scroll', () => { active = Math.round(scrollEl.scrollLeft / (scrollEl.scrollWidth / count)) })">
        <div x-ref="blogScroll"
            class="flex gap-4 overflow-x-auto scroll-smooth snap-x snap-mandatory pb-4 -mx-5 px-5 scroll-pl-5"
            style="scrollbar-width: none; -ms-overflow-style: none;">
            @foreach ($posts as $post)
                <a href="{{ route('blog.show', ['slug' => $post->slug]) }}"
                    class="group flex-none w-[75vw] flex flex-col bg-gray-50 rounded-2xl overflow-hidden snap-start">
                    <div class="aspect-16/10 overflow-hidden">
                        <img src="{{ $post->cover_image }}" alt="{{ $post->title }}"
                            class="size-full object-cover group-hover:scale-105 transition-transform duration-700"
                            loading="lazy" />
                    </div>
                    <div class="flex flex-col flex-1 p-4">
                        <div class="flex items-center gap-3 text-xs text-gray-400 mb-2">
                            <span class="inline-flex gap-1.5">
                                <x-lucide-calendar class="size-3 shrink-0" />
                                {{ $post->published_at->translatedFormat('d M Y') }}
                            </span>
                            <span class="size-1 rounded-full bg-gray-300"></span>
                            <span>{{ $post->reading_time }} хв</span>
                        </div>
                        <h3 class="font-display text-sm font-bold text-gray-900 leading-snug mb-1.5 line-clamp-2">
                            {{ $post->title }}</h3>
                        <p class="text-xs text-gray-500 leading-relaxed line-clamp-2 mb-0">{{ $post->excerpt }}
                        </p>
                        <div
                            class="mt-auto pt-3 flex items-center gap-1.5 text-xs font-semibold text-tryit-orange">
                            Читати <x-lucide-arrow-right class="size-3.5" stroke-width="2" />
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
        @if($posts->count() > 1)
        <div class="flex justify-center gap-1.5 mt-4">
            <template x-for="i in count" :key="i">
                <button
                    @click="scrollEl.scrollTo({ left: (i - 1) * (scrollEl.scrollWidth / count), behavior: 'smooth' })"
                    class="size-2 rounded-full transition-all duration-300 cursor-pointer"
                    :class="active === i - 1 ? 'bg-tryit-orange w-5' : 'bg-gray-300'"></button>
            </template>
        </div>
        @endif
    </div>

    {{-- Desktop: grid --}}
    <div class="hidden md:grid md:grid-cols-3 gap-6">
        @foreach ($posts as $post)
            <a href="{{ route('blog.show', ['slug' => $post->slug]) }}"
                class="group flex flex-col bg-gray-50 rounded-2xl overflow-hidden hover:shadow-xl transition-all duration-500">
                <div class="aspect-16/10 overflow-hidden">
                    <img src="{{ $post->cover_image }}" alt="{{ $post->title }}"
                        class="size-full object-cover group-hover:scale-105 transition-transform duration-700"
                        loading="lazy" />
                </div>
                <div class="flex flex-col flex-1 p-5">
                    <div class="flex items-center gap-3 text-xs text-gray-400 mb-3">
                        <span>{{ $post->published_at->translatedFormat('d M Y') }}</span>
                        <span class="size-1 rounded-full bg-gray-300"></span>
                        <span>{{ $post->reading_time }} хв читання</span>
                    </div>
                    <h3
                        class="font-display text-base font-bold text-gray-900 leading-snug mb-2 group-hover:text-tryit-green transition-colors line-clamp-2">
                        {{ $post->title }}</h3>
                    <p class="text-sm text-gray-500 leading-relaxed line-clamp-2 mb-0">{{ $post->excerpt }}</p>
                    <div
                        class="mt-auto pt-4 flex items-center gap-1.5 text-xs font-semibold text-tryit-orange group-hover:gap-2.5 transition-all duration-300">
                        Читати <x-lucide-arrow-right class="size-3.5" stroke-width="2" />
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>
