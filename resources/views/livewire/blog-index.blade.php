<div>
    {{-- Filters --}}
    <div class="sticky top-0 z-10 py-5 bg-white mb-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-5">
        <div class="lg:col-span-1">
            <label for="search" class="block text-sm font-medium text-gray-700 mb-1">Пошук</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <x-lucide-search class="size-4 text-gray-400" />
                </div>
                <input wire:model.live.debounce.300ms="search" type="text" id="search"
                    class="block w-full pl-10 pr-3 py-2 border border-gray-200 rounded-xl focus:ring-emerald-500 focus:border-emerald-500 sm:text-sm"
                    placeholder="Назва...">
            </div>
        </div>

        <div>
            <label for="dateFrom" class="block text-sm font-medium text-gray-700 mb-1">Дата від</label>
            <input wire:model.live="dateFrom" type="date" id="dateFrom"
                class="block w-full px-3 py-2 border border-gray-200 rounded-xl focus:ring-emerald-500 focus:border-emerald-500 sm:text-sm">
        </div>

        <div>
            <label for="dateTo" class="block text-sm font-medium text-gray-700 mb-1">Дата до</label>
            <input wire:model.live="dateTo" type="date" id="dateTo"
                class="block w-full px-3 py-2 border border-gray-200 rounded-xl focus:ring-emerald-500 focus:border-emerald-500 sm:text-sm">
        </div>

        <div>
            <label for="readingTime" class="block text-sm font-medium text-gray-700 mb-1">Час читання</label>
            <select wire:model.live="readingTime" id="readingTime"
                class="block w-full px-3 py-2 border border-gray-200 rounded-xl focus:ring-emerald-500 focus:border-emerald-500 sm:text-sm">
                <option value="">Будь-який</option>
                <option value="short">
                    < 5 хв</option>
                <option value="medium">5-10 хв</option>
                <option value="long">> 10 хв</option>
            </select>
        </div>

        <div>
            <label for="sortBy" class="block text-sm font-medium text-gray-700 mb-1">Сортувати</label>
            <select wire:model.live="sortBy" id="sortBy"
                class="block w-full px-3 py-2 border border-gray-200 rounded-xl focus:ring-emerald-500 focus:border-emerald-500 sm:text-sm">
                <option value="newest">Спочатку нові</option>
                <option value="oldest">Спочатку старі</option>
                <option value="alphabetical">За назвою</option>
            </select>
        </div>
    </div>

    {{-- Posts Grid --}}
    <div class="grid md:grid-cols-2 gap-10">
        @foreach ($this->posts as $post)
            @if ($loop->index % 9 === 0)
                <article
                    class="col-span-full relative w-full h-100 rounded-3xl overflow-hidden mb-8 group cursor-pointer">
                    <img src="{{ $post->cover_image }}" alt="Office"
                        class="absolute inset-0 w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black/40 flex flex-col items-center justify-center text-center p-6">
                        <a href="{{ route('blog.show', ['slug' => $post->slug]) }}"
                            class="text-white font-display text-3xl md:text-5xl font-bold mb-6 max-w-2xl leading-tight">
                            {{ $post->title }}
                        </a>

                        <div class="flex flex-col items-center text-white">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="text-left text-sm opacity-80">
                                    <x-lucide-calendar class="size-4 shrink-0 inline-flex mb-1" />
                                    {{ $post->published_at->translatedFormat('d M Y') }} ·
                                    <x-lucide-timer class="size-4 shrink-0 inline-flex mb-1" />
                                    {{ $post->reading_time }} хв читання
                                </div>
                            </div>
                            <a href="{{ route('blog.show', ['slug' => $post->slug]) }}"
                                class="flex items-center gap-2 font-medium hover:underline">
                                Читати <x-lucide-move-right class="size-4 inline-flex shrink-0" />
                            </a>
                        </div>
                    </div>
                </article>
            @else
                <article class="flex flex-col">
                    <a href="{{ route('blog.show', ['slug' => $post->slug]) }}"
                        class="rounded-3xl overflow-hidden h-64 mb-2.5 shadow-sm">
                        <img src="{{ $post->cover_image }}" alt="Interior" class="w-full h-full object-cover">
                    </a>
                    <a href="{{ route('blog.show', ['slug' => $post->slug]) }}"
                        class="text-2xl font-bold mb-3 leading-tight text-slate-800 hover:text-orange-600 transition-colors duration-300 cursor-pointer">
                        {{ $post->title }}
                    </a>
                    <p class="text-gray-500 text-sm mb-1.5 leading-relaxed line-clamp-2">
                        {{ $post->excerpt }}
                    </p>
                    <div class="mt-auto flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="text-xs font-semibold text-slate-400">
                                <x-lucide-calendar class="size-4 shrink-0 inline-flex mb-1" />
                                {{ $post->published_at->translatedFormat('d M Y') }}
                            </div>
                        </div>
                        <div class="text-xs font-semibold text-slate-400">
                            <x-lucide-timer class="size-4 shrink-0 inline-flex mb-1" />
                            {{ $post->reading_time }} хв читання
                        </div>
                    </div>
                </article>
            @endif
        @endforeach
    </div>

    {{-- Infinite Scroll Trigger & Placeholder --}}
    @if ($this->posts->hasMorePages())
        <div x-intersect="$wire.loadMore()" class="mt-12">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 animate-pulse">
                @foreach (range(1, 3) as $i)
                    <div class="flex flex-col bg-gray-50 rounded-2xl overflow-hidden">
                        <div class="aspect-16/10 bg-gray-200"></div>
                        <div class="p-6">
                            <div class="h-3 w-24 bg-gray-200 rounded mb-3"></div>
                            <div class="h-6 w-full bg-gray-200 rounded mb-2"></div>
                            <div class="h-4 w-3/4 bg-gray-200 rounded mb-4"></div>
                            <div class="h-4 w-20 bg-gray-200 rounded"></div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif

    @if ($this->posts->isEmpty())
        <div class="mt-12 text-center py-20 bg-white rounded-3xl border border-dashed border-gray-200">
            <x-lucide-search class="size-12 text-gray-300 mx-auto mb-4" />
            <h3 class="text-lg font-bold text-gray-900 mb-1">Статей не знайдено</h3>
            <p class="text-gray-500">Спробуйте змінити параметри фільтрації</p>
            <button
                wire:click="$set('search', ''); $set('dateFrom', ''); $set('dateTo', ''); $set('sortBy', 'newest'); $set('readingTime', '')"
                class="mt-4 text-emerald-600 font-semibold hover:underline">
                Скинути всі фільтри
            </button>
        </div>
    @endif
</div>
