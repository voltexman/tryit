<?php

use function Laravel\Folio\name;
use App\Models\Gallery;

$images = Gallery::all();

name('gallery');
?>

@extends('layouts.base')

@section('header')
    <x-page-header
        image="https://thumbs.dreamstime.com/b/timeless-office-cleaning-scene-vintage-charm-meets-modern-efficiency-retro-business-workspace-step-back-time-witness-350463863.jpg">
        <x-slot:title>
            Галерея
        </x-slot>
        <x-slot:description>
            Перегляньте наші робочі будні - так виглядає чистота, порядок та професіоналізм у дії.
        </x-slot>
    </x-page-header>
@endsection

@section('content')
    <x-section>
        <div x-data="{
            images: {{ collect($images)->map(fn($image) => ['url' => $image->getFirstMediaUrl('gallery', 'preview'), 'description' => $image->description, 'title' => $image->title]) }},
            currentIndex: 0,
            showLightbox: false
        }" class="grid grid-cols-2 lg:grid-cols-5 gap-5 justify-center"
            @keydown.left.window="currentIndex = (currentIndex - 1 + images.length) % images.length"
            @keydown.right.window="currentIndex = (currentIndex + 1) % images.length" x-cloak>

            <!-- Image thumbnails -->
            <template x-for="(image, index) in images" :key="index">
                <img :src="image.url"
                    class="rounded-lg shadow-md cursor-pointer transform transition duration-300 hover:scale-105 hover:rotate-4 hover:shadow-xl shadow-black/30 lg:sepia-50 hover:sepia-0"
                    @click="currentIndex = index; showLightbox = true">
            </template>

            <!-- Lightbox modal -->
            <div x-show="showLightbox"
                class="fixed inset-0 bg-black/80 backdrop-blur-sm flex items-center justify-center z-50"
                x-transition:leave="transition ease-in duration-250" x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0" @keyup.esc.window="showLightbox = false" x-init="$watch('showLightbox', value => document.body.style.overflow = value ? 'hidden' : '')">

                <!-- Close button -->
                <span class="absolute top-5 right-5 text-white text-3xl cursor-pointer" @click="showLightbox = false">
                    <x-lucide-x class="size-8" />
                </span>

                <!-- Left arrow -->
                <span
                    class="absolute rounded-full size-12 hover:bg-tryit-orange/5 hover:border border-white/30 flex items-center justify-center left-0 lg:left-5 text-white text-3xl cursor-pointer"
                    @click.stop="currentIndex = (currentIndex - 1 + images.length) % images.length">
                    <x-lucide-chevron-left class="size-8" />
                </span>

                <!-- Image -->
                <div class="max-w-[80%] max-h-[80%] flex flex-col lg:flex-row" @click.outside="showLightbox = false">
                    <div class="grow overflow-hidden rounded-xl">
                        <img :src="images[currentIndex].url" class="transition-opacity duration-500">
                    </div>
                    <div x-show="images[currentIndex].title || images[currentIndex].description"
                        class="w-full grow max-w-sm lg:ps-10 mt-5 lg:mt-0 flex flex-col">
                        <span class="text-white text-lg font-bold mb-5" x-text="images[currentIndex].title"></span>
                        <span class="text-white font-normal" x-text="images[currentIndex].description"></span>
                    </div>
                </div>

                <!-- Right arrow -->
                <span
                    class="absolute rounded-full size-12 hover:bg-tryit-orange/5 hover:border border-white/30 flex items-center justify-center right-0 lg:right-5 text-white text-3xl cursor-pointer"
                    @click.stop="currentIndex = (currentIndex + 1) % images.length">
                    <x-lucide-chevron-right class="size-8" />
                </span>
            </div>
        </div>
    </x-section>
@endsection
