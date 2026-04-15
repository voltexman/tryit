<?php

use App\Models\Post;
use function Livewire\Volt\{computed, state};

state('search')->session();

$posts = computed(function () {
    return Post::where('title', 'like', '%' . $this->search . '%')->get();
});
?>

<div x-data="{
    open: false,
    search: @entangle('search')
}" class="relative space-y-5" x-cloak>
    <div class="font-[Oswald] text-2xl font-medium text-tryit-dark">Останні статті</div>
    <div class="relative">
        <x-forms.input wire:model.live.debounce.500ms="search" variant="soft" placeholder="Пошук за назвою..."
            icon="search" @focus="open = true" @click.away="open = false" />
        <div class="absolute top-1/2 -translate-y-1/2 right-3 flex justify-center items-center">
            <x-lucide-loader-circle wire:loading class="size-5 stroke-stone-500 animate-spin" />
            <button x-show="search" type="button" wire:click="$set('search', '')" class="cursor-pointer"
                wire:target="search" wire:loading.remove>
                <x-lucide-x class="size-5 stroke-stone-500" />
            </button>
        </div>
    </div>

    <div x-show="open && search" x-transition.opacity.duration.300ms
        class="absolute top-30 left-0 w-full bg-stone-50 border shadow-lg rounded-2xl overflow-hidden z-10 p-2.5">
        <x-scrollbar class="min-h-32 max-h-80 space-y-2.5 pe-.5">
            @forelse ($this->posts as $post)
                <article class="flex flex-col md:flex-row gap-2.5">
                    <a href="{{ route('post.show', ['post' => $post->slug]) }}" class="w-full md:w-1/3 flex-none">
                        <img src="{{ $post->getFirstMediaUrl('posts', 'preview-small') }}" alt="{{ $post->title }}"
                            class="rounded-xl object-cover">
                    </a>
                    <div class="flex-1 flex flex-col justify-center gap-y-2.5">
                        <div class="text-gray-500 text-sm font-medium flex items-center gap-1.5">
                            <x-lucide-calendar class="size-4 stroke-tryit-green inline-block" />
                            <span>{{ $post->created_at->format('M d, Y') }}</span>
                        </div>
                        <x-link href="{{ route('post.show', ['post' => $post->slug]) }}">
                            <h4 class="text-lg font-medium leading-snug line-clamp-2">
                                {{ $post->title }}
                            </h4>
                        </x-link>
                    </div>
                </article>
            @empty
                <div class="size-full flex flex-col justify-center items-center min-h-32">
                    <x-lucide-search-x class="size-12 stroke-gray-400" />
                    <div class="text-sm text-gray-400 mt-2">Нічого не знайдено</div>
                </div>
            @endforelse
        </x-scrollbar>
    </div>
</div>
