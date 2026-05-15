<?php

use Livewire\Component;
use App\Models\Post;

new class extends Component {
    public Post $post;

    public function mount($post)
    {
        $this->post = $post;
    }
};
?>

<x-slot:header>
    <div class="relative h-[60vh] min-h-100 overflow-hidden bg-zinc-900">
        @php
            $media = $this->post->getFirstMedia(\App\Models\Post::COLLECTION_COVER);
        @endphp

        @if ($media)
            <img src="{{ $media->getUrl('header') }}" srcset="{{ $media->getSrcset('header') }}"
                sizes="(max-width: 1024px) 100vw, 1600px" class="absolute inset-0 size-full object-cover"
                alt="{{ $this->post->title }}">
        @else
            {{-- Вивід фолбека, якщо медіа немає в базі --}}
            <img src="/images/placeholder-post.webp" class="absolute inset-0 size-full object-cover" alt="placeholder">
        @endif

        {{-- 2. Градієнт поверх картинки --}}
        <div class="absolute inset-0 bg-linear-to-t from-black/90 via-black/50 to-black/30"></div>

        {{-- 3. Контентна частина --}}
        <div class="relative flex flex-col justify-end size-full max-w-4xl mx-auto px-5 pb-10 md:pb-15">
            <a href="{{ route('blog.list') }}"
                class="inline-flex w-fit items-center gap-1.5 text-white text-sm font-medium mb-4 hover:text-white/80 transition-colors">
                <x-lucide-arrow-left class="size-4" stroke-width="2" />
                Назад до блогу
            </a>

            @if ($this->post->tags->isNotEmpty())
                <div class="flex flex-wrap gap-2 mb-4">
                    @foreach ($this->post->tags as $tag)
                        <span
                            class="px-3 py-1 rounded-full bg-white/20 backdrop-blur-md text-white text-[10px] font-bold uppercase tracking-widest border border-white/10">
                            {{ $tag->name }}
                        </span>
                    @endforeach
                </div>
            @endif

            <div class="flex items-center gap-3 text-sm text-white/80 mb-5">
                <div class="flex items-center gap-1.5">
                    <x-lucide-calendar class="size-3.5 opacity-70" />
                    <span>{{ $this->post->published_at->translatedFormat('d F Y') }}</span>
                </div>

                <span class="size-1 rounded-full bg-white/40"></span>

                <div class="flex items-center gap-1.5">
                    <x-lucide-timer class="size-3.5 opacity-70" />
                    <span>{{ $this->post->reading_time }} хв читання</span>
                </div>
            </div>

            <h1 class="font-display text-3xl md:text-5xl font-semibold text-white leading-[1.1] tracking-tight">
                {{ $this->post->title }}
            </h1>
        </div>
    </div>
</x-slot:header>

@use('Filament\Forms\Components\RichEditor\RichContentRenderer')
@use('App\Filament\Forms\Components\RichEditor\RichContentCustomBlocks\ServiceBlock')

<article class="py-10 md:py-20">
    <div class="max-w-4xl mx-auto px-5">
        <div
            class="prose prose-lg max-w-none prose-headings:font-display prose-headings:font-bold prose-headings:text-gray-900 prose-p:text-gray-700 prose-p:leading-relaxed prose-a:text-tryit-green prose-a:font-semibold prose-a:no-underline hover:prose-a:underline prose-strong:text-gray-800 prose-img:rounded-2xl prose-img:shadow-lg prose-blockquote:border-tryit-orange prose-blockquote:text-gray-700 prose-blockquote:not-italic">

            @if ($post->body)
                {!! RichContentRenderer::make($post->body)->customBlocks([ServiceBlock::class])->toHtml() !!}
            @endif
        </div>

        {{-- Share + Back --}}
        <div class="mt-10 pt-10 border-t border-gray-200 flex flex-col sm:flex-row items-center justify-between gap-5">
            <a href="{{ route('blog.list') }}"
                class="inline-flex items-center gap-2 text-sm font-semibold text-tryit-green hover:gap-3 transition-all duration-300">
                <x-lucide-arrow-left class="size-4" stroke-width="2" />
                Всі статті
            </a>
            <div class="flex items-center gap-3 text-sm text-gray-600">
                <span>Поділитись:</span>
                <a href="https://t.me/share/url?url={{ urlencode(request()->url()) }}&text={{ urlencode($post->title) }}"
                    target="_blank"
                    class="size-9 rounded-full bg-gray-100 flex items-center justify-center hover:bg-tryit-green/10 transition-colors">
                    <x-lucide-send class="size-4 text-gray-600" stroke-width="1.5" />
                </a>
                <a href="viber://forward?text={{ urlencode($post->title . ' ' . request()->url()) }}"
                    class="size-9 rounded-full bg-gray-100 flex items-center justify-center hover:bg-tryit-green/10 transition-colors">
                    <x-lucide-message-circle class="size-4 text-gray-600" stroke-width="1.5" />
                </a>
            </div>
        </div>
    </div>
</article>
