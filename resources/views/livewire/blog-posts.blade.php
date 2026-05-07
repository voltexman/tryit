<div>
    <div class="grid lg:grid-cols-3 gap-8">
        {{-- Column 1: Title + First Post --}}
        <div class="space-y-10">
            <div class="space-y-5">
                <x-section.title size="lg">
                    Наш <span class="text-emerald-500 italic font-black font-[Lora]">Блог</span>
                </x-section.title>
                <p class="text-gray-400 text-lg max-w-sm">
                    Поради, ідеї та інсайти для підтримки бездоганної чистоти у вашому просторі.
                </p>
                <div class="pt-4">
                    <a href="{{ route('blog') }}"
                        class="inline-flex items-center gap-2 text-sm font-bold uppercase tracking-widest text-emerald-500 hover:text-emerald-400 transition-colors">
                        Всі статті <x-lucide-arrow-right class="size-4" />
                    </a>
                </div>
            </div>

            @if ($post = $posts->get(0))
                <article class="bg-white rounded-3xl overflow-hidden group">
                    <a href="{{ route('blog.show', ['slug' => $post->slug]) }}" class="block">
                        <div class="pt-5">
                            <div class="flex justify-between items-start px-5 mb-5">
                                <h3
                                    class="text-2xl font-[Oswald] text-slate-800 font-bold leading-tight group-hover:text-emerald-500 transition-colors line-clamp-2 max-w-[240px]">
                                    {{ $post->title }}
                                </h3>
                                <div
                                    class="size-12 rounded-full border border-gray-700 flex items-center justify-center group-hover:bg-white group-hover:text-black transition-all shrink-0">
                                    <x-lucide-arrow-up-right class="size-6" />
                                </div>
                            </div>
                            <div class="text-slate-500 mb-8 line-clamp-2 px-5 text-sm">
                                {{ $post->excerpt ?? (is_string($post->body) ? Str::limit(strip_tags($post->body), 100) : '') }}
                            </div>
                            <div class="aspect-4/3 overflow-hidden">
                                <img src="{{ $post->getFirstMediaUrl('posts') }}" alt="{{ $post->title }}"
                                    class="size-full object-cover grayscale-25 group-hover:grayscale-0 transition-all duration-700 group-hover:scale-105"
                                    loading="lazy" />
                            </div>
                        </div>
                    </a>
                </article>
            @endif
        </div>

        {{-- Column 2: Second Post --}}
        <div class="lg:pt-35">
            @if ($post = $posts->get(1))
                <article class="bg-white rounded-3xl overflow-hidden group">
                    <a href="{{ route('blog.show', ['slug' => $post->slug]) }}" class="block">
                        <div class="pt-5">
                            <div class="flex justify-between items-start px-5 mb-5">
                                <h3
                                    class="text-2xl text-slate-800 font-[Oswald] font-bold leading-tight group-hover:text-emerald-500 transition-colors line-clamp-2 max-w-60">
                                    {{ $post->title }}
                                </h3>
                                <div
                                    class="size-12 rounded-full border border-gray-700 flex items-center justify-center group-hover:bg-white group-hover:text-black transition-all shrink-0">
                                    <x-lucide-arrow-up-right class="size-6" />
                                </div>
                            </div>
                            <div class="text-slate-500 mb-8 line-clamp-2 px-5 text-sm">
                                {{ $post->excerpt ?? (is_string($post->body) ? Str::limit(strip_tags($post->body), 100) : '') }}
                            </div>
                            <div class="aspect-4/3 overflow-hidden">
                                <img src="{{ $post->getFirstMediaUrl('posts') }}" alt="{{ $post->title }}"
                                    class="size-full object-cover grayscale-25 group-hover:grayscale-0 transition-all duration-700 group-hover:scale-105"
                                    loading="lazy" />
                            </div>
                        </div>
                    </a>
                </article>
            @endif
        </div>

        {{-- Column 3: Third Post --}}
        <div class="">
            @if ($post = $posts->get(2))
                <article class="bg-white rounded-3xl overflow-hidden group">
                    <a href="{{ route('blog.show', ['slug' => $post->slug]) }}" class="block">
                        <div class="pt-5">
                            <div class="flex justify-between items-start px-5 mb-5">
                                <h3
                                    class="text-2xl text-slate-800 font-[Oswald] font-bold leading-tight group-hover:text-emerald-500 transition-colors line-clamp-2 max-w-[240px]">
                                    {{ $post->title }}
                                </h3>
                                <div
                                    class="size-12 rounded-full border border-gray-600 flex items-center justify-center group-hover:bg-white group-hover:text-black transition-all shrink-0">
                                    <x-lucide-arrow-up-right class="size-6" />
                                </div>
                            </div>
                            <div class="text-gray-600 mb-5 line-clamp-2 px-5 text-sm">
                                {{ $post->excerpt ?? (is_string($post->body) ? Str::limit(strip_tags($post->body), 100) : '') }}
                            </div>
                            <div class="aspect-4/3 overflow-hidden">
                                <img src="{{ $post->getFirstMediaUrl('posts') }}" alt="{{ $post->title }}"
                                    class="size-full object-cover grayscale-25 group-hover:grayscale-0 transition-all duration-700 group-hover:scale-105"
                                    loading="lazy" />
                            </div>
                        </div>
                    </a>
                </article>
            @endif
        </div>
    </div>
</div>
