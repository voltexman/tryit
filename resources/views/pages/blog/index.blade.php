<?php

use function Laravel\Folio\name;
use App\Models\Post;

$posts = Post::published()->paginate(9);

name('blog');
?>

@extends('layouts.base')

@section('header')
    <x-page-header image="https://images.unsplash.com/photo-1455390582262-044cdead277a?w=1200">
        <x-slot:title>
            Блог
        </x-slot>
        <x-slot:description>
            Корисні поради, новини та статті про професійне прибирання
        </x-slot>
    </x-page-header>
@endsection

@section('content')
    <section class="py-16">
        <div class="max-w-6xl mx-auto px-5">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($posts as $post)
                    <a href="{{ route('blog.show', ['slug' => $post->slug]) }}"
                        class="group flex flex-col bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500">
                        <div class="aspect-[16/10] overflow-hidden">
                            <img src="{{ $post->cover_image }}" alt="{{ $post->title }}"
                                class="size-full object-cover group-hover:scale-105 transition-transform duration-700" loading="lazy" />
                        </div>
                        <div class="flex flex-col flex-1 p-6">
                            <div class="flex items-center gap-3 text-xs text-gray-400 mb-3">
                                <span>{{ $post->published_at->translatedFormat('d M Y') }}</span>
                                <span class="size-1 rounded-full bg-gray-300"></span>
                                <span>{{ $post->reading_time }} хв читання</span>
                            </div>
                            <h2 class="font-display text-lg font-bold text-gray-900 leading-snug mb-2 group-hover:text-tryit-green transition-colors line-clamp-2">
                                {{ $post->title }}
                            </h2>
                            <p class="text-sm text-gray-500 leading-relaxed line-clamp-3 mb-0">{{ $post->excerpt }}</p>
                            <div class="mt-auto pt-5 flex items-center gap-1.5 text-sm font-semibold text-tryit-orange group-hover:gap-3 transition-all duration-300">
                                Читати <x-lucide-arrow-right class="size-4" stroke-width="2" />
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>

            @if($posts->hasPages())
                <div class="mt-12 flex justify-center">
                    {{ $posts->links() }}
                </div>
            @endif
        </div>
    </section>
@endsection
