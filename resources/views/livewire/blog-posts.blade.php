<div class="max-w-7xl mx-auto">
    <style>
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
    </style>
    {{-- Mobile: horizontal scroll --}}
    <div class="md:hidden" x-data="{
        active: 0,
        count: {{ $posts->count() }},
        scrollTo(index) {
            const container = this.$refs.blogScroll;
            const cardWidth = container.firstElementChild.offsetWidth;
            const gap = 16; // gap-4 is 1rem (16px)
            container.scrollTo({
                left: index * (cardWidth + gap),
                behavior: 'smooth'
            });
        }
    }">
        <div x-ref="blogScroll"
            @scroll.debounce.50ms="active = Math.round($refs.blogScroll.scrollLeft / ($refs.blogScroll.firstElementChild.offsetWidth + 16))"
            class="flex gap5 overflow-x-auto scroll-smooth snap-x snap-mandatory pb-10 no-scrollbar"
            style="scrollbar-width: none; -ms-overflow-style: none;">`
            @foreach ($posts as $post)
                <div class="snap-start flex-none w-[80vw] ps-5">
                    <a href="{{ route('blog.show', ['slug' => $post->slug]) }}"
                        class="group flex flex-col bg-white rounded-3xl overflow-hidden border border-gray-100 shadow-xs hover:shadow-md transition-shadow duration-300 h-full">
                        <div class="aspect-16/10 overflow-hidden relative">
                            <img src="{{ $post->getFirstMediaUrl('posts') }}" alt="{{ $post->title }}" width="400"
                                height="250" loading="lazy"
                                class="size-full object-cover group-hover:scale-105 transition-transform duration-700" />
                            <div class="absolute top-4 left-4">
                                <span
                                    class="bg-emerald-500/90 backdrop-blur-md text-white text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full">
                                    {{ $post->reading_time }} хв
                                </span>
                            </div>
                        </div>
                        <div class="p-6 flex flex-col flex-1">
                            <h3
                                class="font-display text-lg font-bold text-gray-900 leading-tight mb-3 group-hover:text-emerald-600 transition-colors line-clamp-2">
                                {{ $post->title }}
                            </h3>
                            <div class="mt-auto flex items-center justify-between pt-4 border-t border-gray-50">
                                <span class="text-[11px] font-medium text-gray-600 uppercase tracking-wider">
                                    {{ $post->published_at->translatedFormat('d M Y') }}
                                </span>
                                <x-lucide-arrow-right
                                    class="size-4 text-emerald-600 transform group-hover:translate-x-1 transition-transform" />
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

            {{-- Spacer for better scroll end --}}
            <div class="flex-none w-1"></div>
        </div>

        @if ($posts->count() > 1)
            <div class="flex justify-center gap-2 mt-2">
                <template x-for="i in count" :key="i">
                    <button @click="scrollTo(i - 1)" class="h-1.5 rounded-full transition-all duration-300"
                        :aria-label="'Перейти до слайду ' + i"
                        :class="active === i - 1 ? 'bg-emerald-600 w-8' : 'bg-gray-300 w-4'"></button>
                </template>
            </div>
        @endif
    </div>

    {{-- Desktop: Layout 50/50 --}}
    <div class="hidden md:grid lg:grid-cols-2 gap-10 xl:gap-16">

        {{-- Featured Post --}}
        @if ($featured = $posts->first())
            <article class="group">
                <a href="{{ route('blog.show', ['slug' => $featured->slug]) }}" class="flex flex-col h-full">
                    <div
                        class="overflow-hidden rounded-[2.5rem] mb-8 aspect-video relative shadow-2xl shadow-emerald-900/10">
                        <img src="{{ $featured->getFirstMediaUrl('posts') }}" alt="{{ $featured->title }}"
                            width="800" height="450" loading="lazy"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-1000">
                        <div
                            class="absolute inset-0 bg-linear-to-t from-black/40 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        </div>

                        <div class="absolute top-6 left-6">
                            <span
                                class="bg-white/95 backdrop-blur-md text-emerald-700 text-xs font-bold uppercase tracking-widest px-4 py-1.5 rounded-full shadow-sm">
                                Останні новини
                            </span>
                        </div>
                    </div>

                    <div class="flex items-center gap-3 mb-4">
                        <span
                            class="text-xs font-bold text-emerald-700 uppercase tracking-widest bg-emerald-50 px-3 py-1 rounded-md">
                            #Поради
                        </span>
                        <span class="text-gray-600 text-sm font-medium">
                            {{ $featured->published_at->translatedFormat('d F Y') }}
                        </span>
                    </div>

                    <h3
                        class="text-3xl xl:text-4xl font-black text-gray-900 mb-5 group-hover:text-emerald-700 transition-colors font-display leading-tight">
                        {{ $featured->title }}
                    </h3>

                    <p class="text-gray-700 text-lg mb-8 line-clamp-3 leading-relaxed">
                        {{ Str::limit(strip_tags($featured->excerpt ?? strip_tags($featured->body)), 180) }}
                    </p>

                    <div class="mt-auto flex items-center gap-6 pt-6 border-t border-gray-100">
                        <div class="flex items-center gap-2 text-gray-600">
                            <x-lucide-timer class="size-5 text-emerald-600" />
                            <span class="text-sm font-semibold tracking-wide">{{ $featured->reading_time }} хв
                                читання</span>
                        </div>
                        <div class="flex items-center gap-2 text-emerald-700 font-bold group/btn transition-colors">
                            <span>Читати далі</span>
                            <x-lucide-move-right class="size-5 transition-transform group-hover/btn:translate-x-2" />
                        </div>
                    </div>
                </a>
            </article>
        @endif

        {{-- Side List --}}
        <div class="flex flex-col gap-10">
            @foreach ($posts->skip(1) as $post)
                <article class="group">
                    <a href="{{ route('blog.show', ['slug' => $post->slug]) }}"
                        class="grid grid-cols-[160px_1fr] xl:grid-cols-[200px_1fr] gap-6 xl:gap-8">
                        <div class="h-32 xl:h-40 rounded-3xl overflow-hidden shadow-lg shadow-emerald-900/5">
                            <img src="{{ $post->getFirstMediaUrl('posts') }}" alt="{{ $post->title }}" width="300"
                                height="200" loading="lazy"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        </div>
                        <div class="flex flex-col justify-center py-1">
                            <div class="flex items-center gap-3 mb-2">
                                <span class="text-[10px] font-bold text-gray-600 uppercase tracking-widest">
                                    {{ $post->published_at->translatedFormat('d M Y') }}
                                </span>
                                <span class="size-1 rounded-full bg-emerald-600"></span>
                                <span class="text-[10px] font-bold text-emerald-700 uppercase tracking-widest">
                                    {{ $post->reading_time }} хв
                                </span>
                            </div>

                            <h4
                                class="text-xl xl:text-2xl font-bold text-gray-900 group-hover:text-emerald-700 transition-colors leading-tight line-clamp-2 font-display mb-3">
                                {{ $post->title }}
                            </h4>

                            <p class="text-sm text-gray-700 line-clamp-2 leading-relaxed">
                                {{ Str::limit(strip_tags($post->excerpt ?? strip_tags($post->body)), 120) }}
                            </p>
                        </div>
                    </a>
                </article>
            @endforeach
        </div>
    </div>
</div>
