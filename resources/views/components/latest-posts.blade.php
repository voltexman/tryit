@php
    $latest = $posts->first();
    $others = $posts->skip(1);
@endphp

@if ($latest)
    <article
        class="relative size-full min-h-100 rounded-3xl overflow-hidden group
           before:content-[''] before:absolute before:inset-0
           before:bg-linear-to-b before:from-black/20 before:to-black/80
           group-hover:before:bg-black/50">

        <!-- Зображення -->
        <a href="{{ route('post.show', ['post' => $latest->slug]) }}">
            <img src="{{ $latest->getFirstMediaUrl('posts', 'preview-small') }}" alt="{{ $latest->title }}"
                class="size-full object-cover rounded-3xl">
        </a>

        <!-- Теги -->
        <div class="absolute top-5 left-5 md:top-10 md:left-10 flex gap-2.5 z-10">
            @foreach ($latest->tags->take(2) as $tag)
                <x-tag :link="route('posts', ['tag' => $tag->name])" class="bg-neutral-300/80 text-tryit-dark border-neutral-300/90">
                    {{ $tag->name }}
                </x-tag>
            @endforeach
        </div>

        <!-- Текст -->
        <div class="absolute bottom-0 p-5 md:p-10 z-10">
            <div class="text-gray-300 text-sm font-medium flex items-center gap-1.5 mb-1.5">
                <x-lucide-calendar class="size-4 stroke-tryit-green inline-block" />
                <span>{{ $latest->created_at->format('M d, Y') }}</span>
            </div>
            <x-link href="{{ route('post.show', ['post' => $latest->slug]) }}">
                <h3 class="text-2xl text-gray-100 font-bold">{{ $latest->title }}</h3>
            </x-link>
        </div>
    </article>

@endif

<div class="flex flex-col gap-10">
    @foreach ($others as $post)
        <article class="flex flex-col md:flex-row gap-5">
            <a href="{{ route('post.show', ['post' => $post->slug]) }}" class="w-full md:w-1/3">
                <img src="{{ $post->getFirstMediaUrl('posts', 'preview-small') }}" alt="{{ $post->title }}"
                    class="rounded-2xl object-cover">
            </a>
            <div class="flex-1 flex flex-col justify-center gap-y-2.5">
                <div class="flex gap-2.5">
                    @foreach ($post->tags->take(2) as $tag)
                        <x-tag>{{ $tag->name }}</x-tag>
                    @endforeach
                </div>
                <div class="text-gray-500 text-sm font-medium flex items-center gap-1.5">
                    <x-lucide-calendar class="size-4 stroke-tryit-green inline-block" />
                    <span>{{ $post->created_at->format('M d, Y') }}</span>
                </div>
                <x-link href="{{ route('post.show', ['post' => $post->slug]) }}">
                    <h4 class="text-xl font-semibold leading-snug line-clamp-2">
                        {{ $post->title }}
                    </h4>
                </x-link>
            </div>
        </article>
    @endforeach
</div>
