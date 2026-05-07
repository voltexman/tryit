<article class="bg-white rounded-3xl overflow-hidden group">
    <a href="{{ route('blog.show', ['slug' => $post->slug]) }}" class="block">
        <div class="pt-5">
            <div
                class="px-5 mb-5 text-2xl font-[Oswald] text-slate-800 font-bold leading-tight group-hover:text-emerald-500 transition-colors line-clamp-2 max-w-[240px]">
                {{ $post->title }}
            </div>
            <div class="text-slate-500 mb-8 line-clamp-2 px-5 text-sm">
                {{ $post->excerpt ?? (is_string($post->body) ? Str::limit(strip_tags($post->body), 100) : '') }}
            </div>
            <div class="aspect-4/3 overflow-hidden relative">
                <div
                    class="absolute z-10 top-5 right-5 text-slate-700 flex items-center justify-center bg-white p-2 size-14 rounded-full group-hover:bg-emerald-500 group-hover:text-white transition-all duration-300">
                    <x-lucide-arrow-up-right class="size-6 shrink-0" />
                </div>
                <img src="{{ $post->getFirstMediaUrl('posts') }}" alt="{{ $post->title }}"
                    class="size-full object-cover grayscale-25 group-hover:grayscale-0 transition-all duration-700 group-hover:scale-105"
                    loading="lazy" />
            </div>
        </div>
    </a>
</article>
