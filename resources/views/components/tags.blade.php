<div class="space-y-5">
    <div class="font-[Oswald] text-2xl font-medium text-tryit-dark">Всі теги</div>
    <div class="flex flex-wrap gap-2.5">
        @foreach ($tags as $tag)
            <x-tag :link="route('posts', ['tag' => $tag->name])">
                {{ $tag->name }}
            </x-tag>
        @endforeach
    </div>
</div>
