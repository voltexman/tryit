<div class="max-w-7xl mx-auto px-5 lg:px-0">
    {{-- Mobile: horizontal scroll (зберігаємо вашу логіку Alpine) --}}
    <div class="md:hidden" x-data="{ scrollEl: null, active: 0, count: {{ $posts->count() }} }" x-init="scrollEl = $refs.blogScroll;
    scrollEl.addEventListener('scroll', () => { active = Math.round(scrollEl.scrollLeft / (scrollEl.scrollWidth / count)) })">
        <div x-ref="blogScroll" class="flex gap-5 overflow-x-auto scroll-smooth snap-x snap-mandatory pb-5 -mx-5 px-5"
            style="scrollbar-width: none; -ms-overflow-style: none;">
            @foreach ($posts as $post)
                <a href="{{ route('blog.show', ['slug' => $post->slug]) }}"
                    class="group flex-none w-[85vw] flex flex-col bg-white rounded-3xl overflow-hidden snap-start border border-gray-100 shadow-sm">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ $post->getFirstMediaUrl('posts') }}" alt="{{ $post->title }}"
                            class="size-full object-cover group-hover:scale-105 transition-transform duration-700" />
                    </div>
                    <div class="p-5">
                        <h3 class="font-display text-lg font-bold text-gray-900 leading-tight mb-2 line-clamp-2">
                            {{ $post->title }}
                        </h3>
                        <div class="flex items-center justify-between mt-4">
                            <span class="text-xs font-semibold text-indigo-600 uppercase tracking-wider">
                                {{ $post->reading_time }} хв читання
                            </span>
                            <span class="text-xs text-gray-400">
                                {{ $post->published_at->translatedFormat('d M Y') }}
                            </span>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

        @if ($posts->count() > 1)
            <div class="flex justify-center gap-1.5 mt-4">
                <template x-for="i in count" :key="i">
                    <button
                        @click="scrollEl.scrollTo({ left: (i - 1) * (scrollEl.scrollWidth / count), behavior: 'smooth' })"
                        class="size-2 rounded-full transition-all duration-300"
                        :class="active === i - 1 ? 'bg-indigo-600 w-5' : 'bg-gray-300'"></button>
                </template>
            </div>
        @endif
    </div>

    {{-- Desktop: Layout 50/50 --}}
    <div class="hidden md:grid lg:grid-cols-2 gap-12">

        {{-- Головна стаття (перша в списку) --}}
        @if ($featured = $posts->first())
            <article class="group cursor-pointer">
                <a href="{{ route('blog.show', ['slug' => $featured->slug]) }}">
                    <div class="overflow-hidden rounded-3xl mb-6 aspect-video">
                        <img src="{{ $featured->getFirstMediaUrl('posts') }}" alt="{{ $featured->title }}"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <h3
                        class="text-3xl font-bold text-gray-900 mb-4 group-hover:text-orange-600 transition-colors font-display">
                        {{ $featured->title }}
                    </h3>
                    <p class="text-gray-500 mb-5 line-clamp-2">
                        {{ Str::limit(strip_tags($featured->body), 150) }}
                    </p>
                    <div class="flex items-center justify-between border-t border-gray-100">
                        <div class="flex items-center gap-1.5">
                            <span class="text-sm text-gray-400 font-medium">
                                <x-lucide-calendar class="size-4 shrink-0 inline-flex mb-1.5" />
                                {{ $post->published_at->translatedFormat('d M Y') }}
                            </span>
                        </div>
                        <span class="text-gray-400 font-medium text-sm tracking-wide">
                            <x-lucide-timer class="size-4 shrink-0 inline-flex mb-1.5" />
                            {{ $post->reading_time }} хв читання
                        </span>
                    </div>
                </a>
            </article>
        @endif

        {{-- Список інших статей --}}
        <div class="flex flex-col gap-8">
            @foreach ($posts->skip(1) as $post)
                <article class="group cursor-pointer">
                    <a href="{{ route('blog.show', ['slug' => $post->slug]) }}"
                        class="grid grid-cols-[180px_1fr] gap-6">
                        <div class="h-32 rounded-2xl overflow-hidden">
                            <img src="{{ $post->getFirstMediaUrl('posts') }}" alt="{{ $post->title }}"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <div class="flex flex-col justify-between py-1">
                            <h4
                                class="text-xl font-bold text-gray-900 group-hover:text-orange-600 transition-colors leading-tight line-clamp-2 font-display">
                                {{ $post->title }}
                            </h4>
                            <div class="text-sm line-clamp-2 text-gray-500 mt-1.5">
                                {{ Str::limit(strip_tags($post->body), 150) }}
                            </div>
                            <div class="flex items-center justify-between mt-auto">
                                <div class="flex items-center gap-0.5 text-gray-400 text-xs">
                                    <x-lucide-calendar class="size-3.5 shrink-0 mb-0.5" />
                                    {{ $post->published_at->translatedFormat('d M Y') }}
                                </div>
                                <span class="text-gray-400 text-xs tracking-wide">
                                    <x-lucide-timer class="size-3.5 shrink-0 inline-flex mb-0.5" />
                                    {{ $post->reading_time }} хв читання
                                </span>
                            </div>
                        </div>
                    </a>
                </article>
            @endforeach
        </div>
    </div>
</div>
