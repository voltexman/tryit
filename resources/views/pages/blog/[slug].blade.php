<?php

use function Laravel\Folio\name;
use App\Models\Post;

name('blog.show');
?>

@extends('layouts.base')

@php
    $post = Post::where('slug', request()->route('slug'))
        ->with('tags')
        ->where('is_published', true)
        ->firstOrFail();
    $relatedPosts = Post::published()->where('id', '!=', $post->id)->with('tags')->take(3)->get();
@endphp

@section('header')
    <div class="relative h-[60vh] min-h-100 bg-cover bg-center"
        style="background-image: url('{{ $post->getFirstMediaUrl('posts') }}');">
        <div class="absolute inset-0 bg-linear-to-t from-black/90 via-black/50 to-black/30"></div>
        <div class="relative flex flex-col justify-end size-full max-w-4xl mx-auto px-5 pb-10 md:pb-15">
            <a href="{{ route('blog') }}"
                class="inline-flex items-center gap-1.5 text-white text-sm font-medium mb-2.5 hover:text-white transition-colors">
                <x-lucide-arrow-left class="size-4" stroke-width="2" />
                Назад до блогу
            </a>

            @if ($post->tags->isNotEmpty())
                <div class="flex gap-2 mb-3">
                    @foreach ($post->tags as $tag)
                        <span
                            class="px-3 py-1 rounded-full bg-white/30 backdrop-blur-md text-white text-[10px] font-bold uppercase tracking-widest">
                            {{ $tag->name }}
                        </span>
                    @endforeach
                </div>
            @endif

            <div class="flex items-center gap-2.5 text-sm text-white mb-5">
                <x-lucide-calendar class="size-3 mb-0.5 shrink-0" />
                <span class="-ms-1.5">{{ $post->published_at->translatedFormat('d F Y') }}</span>
                <span class="size-1 rounded-full bg-white/40"></span>
                <x-lucide-timer class="size-3 mb-0.5 shrink-0" />
                <span class="-ms-1.5">{{ $post->reading_time }} хв читання</span>
            </div>
            <h1 class="font-display text-2xl md:text-4xl lg:text-5xl font-bold text-white leading-tight">
                {{ $post->title }}
            </h1>
        </div>
    </div>
@endsection

@section('content')
    <article class="py-12 md:py-16">
        <div class="max-w-4xl mx-auto px-5">
            @if ($post->excerpt)
                <p
                    class="text-lg md:text-xl text-gray-700 leading-relaxed font-light border-l-4 border-tryit-orange pl-5 mb-10">
                    {{ $post->excerpt }}
                </p>
            @endif

            <div
                class="prose prose-lg max-w-none
                prose-headings:font-display prose-headings:font-bold prose-headings:text-gray-900
                prose-p:text-gray-700 prose-p:leading-relaxed
                prose-a:text-tryit-green prose-a:font-semibold prose-a:no-underline hover:prose-a:underline
                prose-strong:text-gray-800
                prose-img:rounded-2xl prose-img:shadow-lg
                prose-blockquote:border-tryit-orange prose-blockquote:text-gray-700 prose-blockquote:not-italic">

                @if ($post->body)
                    {!! \Filament\Forms\Components\RichEditor\RichContentRenderer::make($post->body)->customBlocks([\App\Filament\Forms\Components\RichEditor\RichContentCustomBlocks\ServiceBlock::class])->toHtml() !!}
                @endif
            </div>

            {{-- Share + Back --}}
            <div class="mt-12 pt-8 border-t border-gray-200 flex flex-col sm:flex-row items-center justify-between gap-4">
                <a href="{{ route('blog') }}"
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

    {{-- Related articles --}}
    @if ($relatedPosts->isNotEmpty())
        <section class="py-16 bg-gray-50">
            <div class="max-w-6xl mx-auto px-5">
                <h2 class="font-display text-2xl font-bold text-gray-900 mb-8">Читайте <span
                        class="text-tryit-orange">також</span></h2>
                <div class="grid md:grid-cols-3 gap-6">
                    @foreach ($relatedPosts as $related)
                        <a href="{{ route('blog.show', ['slug' => $related->slug]) }}"
                            class="group flex flex-col bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500">
                            <div class="relative aspect-16/10 overflow-hidden">
                                <img src="{{ $related->getFirstMediaUrl('posts') }}" alt="{{ $related->title }}"
                                    class="size-full object-cover group-hover:scale-105 transition-transform duration-700"
                                    loading="lazy" />
                                @if ($related->tags->isNotEmpty())
                                    <div class="absolute top-3 left-3 flex flex-wrap gap-1.5">
                                        @foreach ($related->tags as $tag)
                                            <span
                                                class="px-2 py-0.5 rounded-md bg-white/90 backdrop-blur-sm text-slate-900 text-[9px] font-bold uppercase tracking-widest shadow-xs">
                                                {{ $tag->name }}
                                            </span>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                            <div class="flex flex-col flex-1 p-5">
                                <div class="flex items-center gap-3 text-xs text-gray-600 mb-2">
                                    <span>{{ $related->published_at->translatedFormat('d M Y') }}</span>
                                    <span class="size-1 rounded-full bg-gray-400"></span>
                                    <span>{{ $related->reading_time }} хв</span>
                                </div>
                                <h3
                                    class="font-display text-base font-bold text-gray-900 leading-snug group-hover:text-tryit-green transition-colors line-clamp-2">
                                    {{ $related->title }}
                                </h3>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
@endsection
