<article class="bg-white rounded-3xl overflow-hidden group">
    <a href="{{ route('blog.show', $post) }}" wire:navigate class="block">
        <div class="pt-5">
            <div
                class="px-5 mb-2.5 text-2xl font-[Oswald] text-slate-800 font-bold leading-tight group-hover:text-emerald-500 transition-colors line-clamp-2">
                {{ $post->title }}
            </div>
            <div class="text-slate-500 mb-2.5 line-clamp-2 px-5 text-sm">
                {{ Str::limit(strip_tags($post->body), 100) }}
            </div>
            <div class="flex items-center gap-5 px-5 mb-2.5">
                <div class="text-emerald-500 text-xs">
                    <x-lucide-calendar class="size-3 inline-block mr-0.5 mb-0.5" />
                    {{ $post->created_at->format('d M Y') }}
                </div>
                <div class="text-sm text-emerald-500">
                    <x-lucide-timer class="size-3 inline-block mr-0.5 mb-0.5" />
                    {{ $post->reading_time }} хв читання
                </div>
            </div>
            <div class="aspect-4/3 overflow-hidden relative">
                <div
                    class="absolute z-10 top-5 right-5 text-slate-700 flex items-center justify-center bg-white p-2 size-12 rounded-full group-hover:bg-emerald-500 group-hover:text-white transition-all duration-300">
                    <x-lucide-arrow-up-right class="size-6 shrink-0" />
                </div>
                @if ($post->hasMedia(\App\Models\Post::COLLECTION_COVER))
                    @php $media = $post->getFirstMedia(\App\Models\Post::COLLECTION_COVER); @endphp
                    {!! $post->getFirstMedia(\App\Models\Post::COLLECTION_COVER)->img('preview', [
                        'class' =>
                            'size-full object-cover grayscale-25 group-hover:grayscale-0 transition-all duration-700 group-hover:scale-105',
                        'alt' => $post->title,
                        'loading' => 'lazy',
                        'sizes' => '(max-width: 640px) 100vw, 450px',
                    ]) !!}
                @else
                    <div class="size-full bg-slate-100 flex items-center justify-center text-slate-300">
                        <x-lucide-image class="size-10" />
                    </div>
                @endif
            </div>
        </div>
    </a>
</article>
