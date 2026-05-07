<div class="grid lg:grid-cols-3 gap-8">
    {{-- Column 1: Title + First Post --}}
    <div class="space-y-10">
        <div class="space-y-5">
            <x-section.title size="lg">
                Наш <span class="text-emerald-500 italic font-black font-[Lora]">Блог</span>
            </x-section.title>
            <p class="text-gray-400 text-lg max-w-sm">
                Поради, ідеї та інсайти для підтримки бездоганної чистоти у вашому просторі.
            </p>
            <div class="pt-4">
                <a href="{{ route('blog') }}"
                    class="inline-flex items-center gap-2 text-sm font-bold uppercase tracking-widest text-emerald-500 hover:text-emerald-400 transition-colors">
                    Всі статті <x-lucide-arrow-right class="size-4" />
                </a>
            </div>
        </div>

        @if ($post = $posts->get(0))
            @include('partials.latest-post-item')
        @endif
    </div>

    {{-- Column 2: Second Post --}}
    <div class="lg:pt-35">
        @if ($post = $posts->get(1))
            @include('partials.latest-post-item')
        @endif
    </div>

    {{-- Column 3: Third Post --}}
    <div class="">
        @if ($post = $posts->get(2))
            @include('partials.latest-post-item')
        @endif
    </div>
</div>
