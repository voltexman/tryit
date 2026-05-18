<?php

use Livewire\Component;
use App\Models\Gallery;
use Livewire\Attributes\Computed;

new class extends Component {
    #[Computed]
    public function images()
    {
        return Gallery::main()->latest()->get();
    }
};
?>

<x-slot:meta_title>Галерея робіт — Клінінг TryIt</x-slot:meta_title>
<x-slot:meta_description>Фотогалерея виконаних робіт з прибирання офісів та будинків від компанії TryIt.</x-slot:meta_description>
<x-slot:meta_robots>index, follow</x-slot:meta_robots>
<x-slot:meta_image>{{ Vite::asset('resources/images/gallery-header-bg.png') }}</x-slot:meta_image>

<x-slot:header>
    <x-page-header :image="Vite::asset('resources/images/gallery-header-bg.png')">
        <x-slot:title>Галерея</x-slot>
        <x-slot:description>
            Тут ви можете побачити нас в дії.
        </x-slot>
    </x-page-header>
</x-slot:header>

<div class="max-w-7xl mx-auto px-5 py-16 lg:py-24">
    @if ($this->images->isEmpty())
        <div class="text-center py-20">
            <p class="text-gray-500 text-lg font-[Lora] italic">Галерея наразі порожня.</p>
        </div>
    @else
        <div id="gallery-container" x-init="initializeGallery('gallery-container')"
            class="columns-1 sm:columns-2 md:columns-3 lg:columns-4 gap-6 space-y-6">
            @foreach ($this->images as $item)
                @php
                    $imageUrl = $item->getFirstMediaUrl('gallery');
                @endphp

                @if ($imageUrl)
                    <a href="{{ $imageUrl }}" data-pswp data-pswp-title="{{ $item->title }}"
                        data-pswp-description="{{ $item->description }}"
                        class="block break-inside-avoid rounded-xl overflow-hidden shadow-lg group relative bg-gray-100 cursor-zoom-in">
                        <img src="{{ $imageUrl }}" alt="{{ $item->alt ?? ($item->title ?? 'Зображення галереї') }}"
                            title="{{ $item->meta_title ?? $item->title }}"
                            class="w-full h-auto object-cover transform transition duration-700 group-hover:scale-105"
                            loading="lazy">

                        @if ($item->title || $item->description)
                            <div
                                class="absolute inset-0 bg-linear-to-t from-slate-900/90 via-slate-900/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                                @if ($item->title)
                                    <h3
                                        class="text-white text-xl font-bold font-[Oswald] tracking-wide mb-2 translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                                        {{ $item->title }}
                                    </h3>
                                @endif
                                @if ($item->description)
                                    <p
                                        class="text-gray-300 text-sm translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75 line-clamp-3">
                                        {{ $item->description }}
                                    </p>
                                @endif
                            </div>
                        @endif
                    </a>
                @endif
            @endforeach
        </div>
    @endif
</div>
