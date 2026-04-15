<?php

use App\Models\Post;
use App\Models\Tag;
use function Livewire\Volt\{computed, state};

state(['search', 'tag'])
    ->session()
    ->url();

$posts = computed(function () {
    return Post::query()
        ->when($this->search, function ($query) {
            $query->where('title', 'like', '%' . $this->search . '%');
        })
        ->when($this->tag, function ($query) {
            $query->whereHas('tags', function ($query) {
                $query->where('name', $this->tag);
            });
        })
        ->get();
});
$tags = computed(fn() => Tag::all());
?>

<div>
    <div class="flex flex-col md:flex-row gap-5 justify-between">
        <x-forms.input x-on:input.debounce.500ms="$wire.set('search', $event.target.value)" variant="soft" icon="search"
            x-bind:value="$wire.search" placeholder="Пошук статей..." class="max-w-xl" />

        @if ($this->tag || $this->search)
            <button type="button" x-on:click="$wire.tag = ''; $wire.search = ''; $wire.$refresh()"
                class="rounded-full flex justify-center items-center gap-1.5 px-5 py-2.5 border border-dashed border-zinc-300 bg-zinc-50 hover:bg-zinc-100 transition-colors duration-300 cursor-pointer">
                <span class="text-sm">Очистити</span>
                <x-lucide-x class="size-4" />
            </button>
        @endif
    </div>

    <div x-data="{ expanded: false }" class="relative mt-5 py-5 overflow-hidden " wire:target="tag"
        wire:loading.class="opacity-50" x-cloak>
        <div class="inline-flex flex-wrap gap-2.5 transition-all duration-300"
            x-bind:class="expanded ? 'max-h-[1000px]' : 'max-h-32 mask-b-from-1%'">
            @foreach ($this->tags as $tag)
                <x-tag x-on:click="$wire.set('tag', '{{ $tag->name }}')"
                    class="cursor-pointer hover:bg-tryit-green/30 transition-colors duration-300"
                    x-bind:class="{ 'bg-tryit-green text-white': $wire.tag === '{{ $tag->name }}' }">
                    {{ $tag->name }}
                    <button type="button" class="ms-0.5 cursor-pointer"
                        x-bind:class="$wire.tag === '{{ $tag->name }}' ? 'block' : 'hidden'">
                        <x-lucide-x class="size-3.5 stroke-white fill-none" />
                    </button>
                </x-tag>
            @endforeach
        </div>

        <button type="button" x-on:click="expanded = !expanded"
            class="relative bottom-0 z-10 flex justify-center items-center w-full h-10 cursor-pointer">
            <x-lucide-chevron-down class="size-6 stroke-neutral-700 transition-transform duration-300"
                x-bind:class="expanded ? 'rotate-180' : 'rotate-0'" />
        </button>
    </div>

    @if ($this->posts->isEmpty())
        <div
            class="relative flex flex-col justify-center items-center h-60 lg:h-100 max-w-2xl mx-auto rounded-2xl border border-dashed border-tryit-green/20 mt-10 overflow-hidden before:absolute before:inset-0 before:bg-[url('https://demo2.pavothemes.com/cetro/wp-content/uploads/2025/07/h3-cleaning01.jpg')] before:bg-cover before:bg-center before:opacity-5 before:z-0">
            <x-lucide-search class="size-15 stroke-tryit-green relative z-10" />
            <div class="mt-5 text-tryit-green text-sm relative z-10">
                Статті за вашим запитом не знайдені
            </div>
            <div class="mt-0.5 text-tryit-green text-sm relative z-10">
                Спробуйте інший пошуковий запит
            </div>
        </div>
    @else
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-5 mt-5">
            @foreach ($this->posts as $post)
                <div class="flex flex-col gap-y-2.5 group">
                    <a href="{{ route('post.show', ['post' => $post->slug]) }}" class="rounded-2xl overflow-hidden">
                        <img src="{{ $post->getFirstMediaUrl('posts', 'preview-small') }}" alt="{{ $post->title }}"
                            class="w-full h-64 object-cover group-hover:scale-110 group-hover:rotate-3 transition-transform duration-300">
                    </a>
                    <div class="text-gray-500 text-sm font-medium flex items-center gap-1.5">
                        <x-lucide-calendar class="size-4 stroke-tryit-green inline-block" />
                        <span>{{ $post->created_at->format('M d, Y') }}</span>
                    </div>
                    <x-link href="{{ route('post.show', ['post' => $post->slug]) }}">
                        <h4 class="text-xl font-[Oswald] font-semibold leading-snug line-clamp-2">
                            {{ $post->title }}
                        </h4>
                    </x-link>
                </div>
            @endforeach
        </div>
    @endif
</div>
