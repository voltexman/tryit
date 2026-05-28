<?php

use App\Models\Post;
use Livewire\Component;

new class extends Component {
    public $posts;

    public function mount()
    {
        $this->posts = Post::published()->latest('published_at')->take(3)->get();
    }
};
?>

@placeholder
    <div class="animate-pulse space-y-12">
        {{-- Mobile Placeholder (Horizontal scroll) --}}
        <div class="lg:hidden space-y-8">
            <div class="space-y-4">
                <div class="h-10 w-48 bg-slate-200 rounded-full"></div>
                <div class="h-4 w-64 bg-slate-200 rounded-full"></div>
                <div class="h-4 w-32 bg-slate-200 rounded-full"></div>
            </div>

            <div class="flex overflow-x-auto gap-6 pb-6 -mx-4 px-4 scrollbar-none">
                @for ($i = 0; $i < 3; $i++)
                    <div class="w-[76vw] sm:w-[48vw] shrink-0 bg-white rounded-3xl p-5 space-y-5 border border-slate-100">
                        <div class="space-y-3">
                            <div class="h-6 w-3/4 bg-slate-200 rounded-full"></div>
                            <div class="h-6 w-1/2 bg-slate-200 rounded-full"></div>
                        </div>
                        <div class="space-y-2">
                            <div class="h-4 w-full bg-slate-100 rounded-full"></div>
                            <div class="h-4 w-5/6 bg-slate-100 rounded-full"></div>
                        </div>
                        <div class="flex gap-4">
                            <div class="h-4 w-20 bg-slate-100 rounded-full"></div>
                            <div class="h-4 w-24 bg-slate-100 rounded-full"></div>
                        </div>
                        <div class="aspect-4/3 bg-slate-100 rounded-2xl"></div>
                    </div>
                @endfor
            </div>
        </div>

        {{-- Desktop Placeholder (Staggered Grid) --}}
        <div class="hidden lg:grid lg:grid-cols-3 gap-8">
            {{-- Column 1 --}}
            <div class="space-y-10">
                <div class="space-y-5">
                    <div class="h-12 w-56 bg-slate-200 rounded-full"></div>
                    <div class="space-y-2">
                        <div class="h-4 w-72 bg-slate-200 rounded-full"></div>
                        <div class="h-4 w-64 bg-slate-200 rounded-full"></div>
                    </div>
                    <div class="h-4 w-36 bg-slate-200 rounded-full pt-2"></div>
                </div>

                <div class="bg-white rounded-3xl p-5 space-y-5 border border-slate-100">
                    <div class="space-y-3">
                        <div class="h-7 w-3/4 bg-slate-200 rounded-full"></div>
                        <div class="h-7 w-1/2 bg-slate-200 rounded-full"></div>
                    </div>
                    <div class="space-y-2">
                        <div class="h-4 w-full bg-slate-100 rounded-full"></div>
                        <div class="h-4 w-5/6 bg-slate-100 rounded-full"></div>
                    </div>
                    <div class="flex gap-4">
                        <div class="h-4 w-24 bg-slate-100 rounded-full"></div>
                        <div class="h-4 w-28 bg-slate-100 rounded-full"></div>
                    </div>
                    <div class="aspect-4/3 bg-slate-100 rounded-2xl"></div>
                </div>
            </div>

            {{-- Column 2 --}}
            <div class="lg:pt-35">
                <div class="bg-white rounded-3xl p-5 space-y-5 border border-slate-100">
                    <div class="space-y-3">
                        <div class="h-7 w-3/4 bg-slate-200 rounded-full"></div>
                        <div class="h-7 w-1/2 bg-slate-200 rounded-full"></div>
                    </div>
                    <div class="space-y-2">
                        <div class="h-4 w-full bg-slate-100 rounded-full"></div>
                        <div class="h-4 w-5/6 bg-slate-100 rounded-full"></div>
                    </div>
                    <div class="flex gap-4">
                        <div class="h-4 w-24 bg-slate-100 rounded-full"></div>
                        <div class="h-4 w-28 bg-slate-100 rounded-full"></div>
                    </div>
                    <div class="aspect-4/3 bg-slate-100 rounded-2xl"></div>
                </div>
            </div>

            {{-- Column 3 --}}
            <div>
                <div class="bg-white rounded-3xl p-5 space-y-5 border border-slate-100">
                    <div class="space-y-3">
                        <div class="h-7 w-3/4 bg-slate-200 rounded-full"></div>
                        <div class="h-7 w-1/2 bg-slate-200 rounded-full"></div>
                    </div>
                    <div class="space-y-2">
                        <div class="h-4 w-full bg-slate-100 rounded-full"></div>
                        <div class="h-4 w-5/6 bg-slate-100 rounded-full"></div>
                    </div>
                    <div class="flex gap-4">
                        <div class="h-4 w-24 bg-slate-100 rounded-full"></div>
                        <div class="h-4 w-28 bg-slate-100 rounded-full"></div>
                    </div>
                    <div class="aspect-4/3 bg-slate-100 rounded-2xl"></div>
                </div>
            </div>
        </div>
    </div>
@endplaceholder

{{-- Mobile Layout (Horizontal Scroll) --}}
<div class="lg:hidden space-y-8">
    <div class="space-y-4">
        <x-section.title size="lg">
            Наш <span class="text-emerald-500 italic font-black font-[Lora]">Блог</span>
        </x-section.title>
        <p class="text-gray-400 text-base max-w-sm">
            Поради, ідеї та інсайти для підтримки бездоганної чистоти у вашому просторі.
        </p>
        <div class="pt-2">
            <a href="{{ route('blog.list') }}"
                class="inline-flex items-center gap-2 text-sm font-bold uppercase tracking-widest text-emerald-500 hover:text-emerald-400 transition-colors">
                Всі статті <x-lucide-arrow-right class="size-4" />
            </a>
        </div>
    </div>

    <div class="flex overflow-x-auto gap-6 pb-6 snap-x snap-mandatory -mx-4 px-4 scrollbar-none">
        @foreach ($posts as $post)
            <div class="w-[76vw] sm:w-[48vw] shrink-0 snap-align-start">
                @include('partials.latest-post-item')
            </div>
        @endforeach
    </div>
</div>

{{-- Desktop Layout (Staggered Grid) --}}
<div class="hidden lg:block">
    <div class="grid lg:grid-cols-3 gap-8">
        @foreach ($posts as $post)
            <div class="space-y-10 {{ $loop->iteration === 2 ? 'lg:pt-35' : '' }}">
                @if ($loop->first)
                    <div class="space-y-5">
                        <x-section.title size="lg">
                            Наш <span class="text-emerald-500 italic font-black font-[Lora]">Блог</span>
                        </x-section.title>
                        <p class="text-gray-400 text-lg max-w-sm">
                            Поради, ідеї та інсайти для підтримки бездоганної чистоти у вашому просторі.
                        </p>
                        <div class="pt-4">
                            <a href="{{ route('blog.list') }}"
                                class="inline-flex items-center gap-2 text-sm font-bold uppercase tracking-widest text-emerald-500 hover:text-emerald-400 transition-colors">
                                Всі статті <x-lucide-arrow-right class="size-4" />
                            </a>
                        </div>
                    </div>
                @endif

                @include('partials.latest-post-item')
            </div>
        @endforeach
    </div>
</div>
