<div class="space-y-5">
    <div class="font-[Oswald] text-2xl font-medium text-tryit-dark">Останні статті</div>
    @foreach ($posts as $post)
        <article class="flex flex-col md:flex-row gap-5 group">
            <a href="{{ route('post.show', ['post' => $post->slug]) }}"
                class="w-full md:w-1/3 flex-none rounded-2xl overflow-hidden">
                <img src="{{ $post->getFirstMediaUrl('posts', 'preview-small') }}" alt="{{ $post->title }}"
                    class="object-cover group-hover:scale-110 group-hover:rotate-3 transition-transform duration-300">
            </a>
            <div class="flex-1 flex flex-col justify-center gap-y-2.5">
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
