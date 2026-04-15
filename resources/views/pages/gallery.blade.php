<?php

use function Laravel\Folio\{name, render};
use App\Models\Gallery;
use Illuminate\View\View;

render(function (View $view) {
    $images = Gallery::all();

    return $view->with('images', $images);
});
name('gallery');
?>

@extends('layouts.base')

@section('header')
    <x-page-header image="{{ Vite::asset('resources/images/page-header-gallery.jpg') }}">
        <x-slot:title>Галерея</x-slot>
        <x-slot:description>
            Перегляньте наші робочі будні — так виглядає чистота, порядок та професіоналізм у дії.
        </x-slot>
    </x-page-header>
@endsection

@section('content')
    <x-section>
        <div x-data="{
            images: {{ collect($images)->map(
                fn($image) => [
                    'url' => $image->getFirstMediaUrl('gallery', 'preview'),
                    'description' => $image->description,
                    'title' => $image->title,
                ],
            ) }},
            currentIndex: 0,
            showLightbox: false
        }" @keydown.left.window="currentIndex = (currentIndex - 1 + images.length) % images.length"
            @keydown.right.window="currentIndex = (currentIndex + 1) % images.length" x-cloak>

            <!-- Masonry Grid -->
            <div class="columns-2 sm:columns-3 gap-5 [column-fill:_balance]">
                <template x-for="(image, index) in images" :key="index">
                    <div class="mb-5 break-inside-avoid overflow-hidden rounded-xl cursor-pointer group relative"
                        @click="currentIndex = index; showLightbox = true">
                        <img :src="image.url"
                            class="w-full h-auto object-cover rounded-xl transition duration-300 group-hover:scale-105 group-hover:brightness-110">
                        <!-- Optional hover overlay -->
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition duration-300"></div>
                    </div>
                </template>
            </div>

            <!-- Lightbox -->
            <div x-show="showLightbox"
                class="fixed inset-0 bg-black/80 backdrop-blur-sm flex items-center justify-center z-50" x-transition
                @keyup.esc.window="showLightbox = false" x-init="$watch('showLightbox', value => document.body.style.overflow = value ? 'hidden' : '')">
                <!-- Close -->
                <button @click="showLightbox = false"
                    class="absolute top-5 right-5 text-white hover:text-tryit-orange transition cursor-pointer">
                    <x-lucide-x class="size-8" />
                </button>

                <!-- Prev -->
                <button @click.stop="currentIndex = (currentIndex - 1 + images.length) % images.length"
                    class="absolute left-0 lg:left-5 text-white rounded-full size-12 flex items-center justify-center hover:bg-white/10 cursor-pointer">
                    <x-lucide-chevron-left class="size-8" />
                </button>

                <!-- Image -->
                <div class="max-w-[85%] max-h-[85%] flex flex-col lg:flex-row gap-6" @click.outside="showLightbox = false">
                    <img :src="images[currentIndex].url"
                        class="max-h-[75vh] rounded-xl object-contain transition duration-500 mx-auto">

                    <div x-show="images[currentIndex].title || images[currentIndex].description"
                        class="text-white max-w-sm space-y-3 lg:ps-5">
                        <h3 class="font-[Oswald] text-lg font-semibold" x-text="images[currentIndex].title"></h3>
                        <p class="text-gray-200 text-sm leading-relaxed" x-text="images[currentIndex].description"></p>
                    </div>
                </div>

                <!-- Next -->
                <button @click.stop="currentIndex = (currentIndex + 1) % images.length"
                    class="absolute right-0 lg:right-5 text-white rounded-full size-12 flex items-center justify-center hover:bg-white/10 cursor-pointer">
                    <x-lucide-chevron-right class="size-8" />
                </button>
            </div>
        </div>
    </x-section>
@endsection
