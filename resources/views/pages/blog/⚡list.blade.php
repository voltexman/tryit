<?php

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Post;
use App\Models\Tag;
use Livewire\Attributes\Url;
use Livewire\Attributes\Computed;

new class extends Component {
    use WithPagination;

    #[Url(history: true)]
    public $search = '';

    #[Url(history: true)]
    public $dateFrom = '';

    #[Url(history: true)]
    public $dateTo = '';

    #[Url(history: true)]
    public $sortBy = 'newest';

    #[Url(history: true)]
    public $minReadTime = 0;

    #[Url(history: true)]
    public $maxReadTime = 30;

    #[Url(history: true)]
    public array $selectedTags = [];

    public $perPage = 9;

    public function updatedSearch()
    {
        $this->resetPage();
        $this->perPage = 9;
    }

    public function updatedDateFrom()
    {
        $this->resetPage();
        $this->perPage = 9;
    }

    public function updatedDateTo()
    {
        $this->resetPage();
        $this->perPage = 9;
    }

    public function updatedSortBy()
    {
        $this->resetPage();
        $this->perPage = 9;
    }

    public function updatedMinReadTime()
    {
        $this->resetPage();
        $this->perPage = 9;
    }

    public function updatedMaxReadTime()
    {
        $this->resetPage();
        $this->perPage = 9;
    }

    public function updatedSelectedTags()
    {
        $this->resetPage();
        $this->perPage = 9;
    }

    public function loadMore()
    {
        $this->perPage += 9;
    }

    #[Computed]
    public function tags()
    {
        return Tag::orderBy('name')->get();
    }

    #[Computed]
    public function posts()
    {
        return Post::published()
            ->with('tags')
            ->when($this->search, function ($query) {
                $query->where(function ($q) {
                    $q->where('title', 'like', '%' . $this->search . '%')->orWhere('body', 'like', '%' . $this->search . '%');
                });
            })
            ->when(!empty($this->selectedTags), function ($query) {
                $query->whereHas('tags', function ($q) {
                    $q->whereIn('slug', $this->selectedTags);
                });
            })
            ->when($this->dateFrom, function ($query) {
                $query->whereDate('published_at', '>=', $this->dateFrom);
            })
            ->when($this->dateTo, function ($query) {
                $query->whereDate('published_at', '<=', $this->dateTo);
            })
            ->when($this->minReadTime > 0 || $this->maxReadTime < 30, function ($query) {
                if ($this->minReadTime > 0) {
                    $query->whereRaw('LENGTH(body) >= ?', [$this->minReadTime * 1000]);
                }
                if ($this->maxReadTime < 30) {
                    $query->whereRaw('LENGTH(body) <= ?', [$this->maxReadTime * 1000]);
                }
            })
            ->when($this->sortBy === 'newest', fn($q) => $q->latest('published_at'))
            ->when($this->sortBy === 'oldest', fn($q) => $q->oldest('published_at'))
            ->when($this->sortBy === 'alphabetical', fn($q) => $q->orderBy('title'))
            ->paginate($this->perPage);
    }
};
?>

<x-slot:meta_title>Блог про прибирання та клінінг {{ env('APP_NAME') }} | Корисні поради та лайфхаки</x-slot:meta_title>
<x-slot:meta_description>
    Читайте експертні статті про догляд за офісом чи складом від {{ env('APP_NAME') }}. Професійні секрети виведення
    плям, підбору еко-засобів та швидкого прибирання.
</x-slot:meta_description>
<x-slot:meta_robots>index, follow</x-slot:meta_robots>
<x-slot:meta_image>{{ Vite::asset('resources/images/blog-header-bg.png') }}</x-slot:meta_image>

<x-slot:header>
    <x-page-header :image="Vite::asset('resources/images/blog-header-bg.png')" icon="newspaper">
        <x-slot:title>Наш експертний блог</x-slot>
        <x-slot:description class="text-balance">
            Ділимось практичними порадами, професійними рекомендаціями та новинами зі світу клінінгу.
        </x-slot>
    </x-page-header>
</x-slot:header>

<x-section>
    <div x-data="{ showFilters: false }" class="flex flex-col lg:flex-row gap-5 md:gap-10">
        {{-- Mobile Filters Toggle --}}
        <div class="lg:hidden flex items-center justify-between cursor-pointer" @click="showFilters = !showFilters">
            <div class="flex items-center gap-2 text-gray-800 font-bold">
                <x-lucide-sliders-horizontal class="size-5" />
                <span>Фільтри та сортування</span>
            </div>
            <button class="p-2 bg-gray-50 rounded-xl text-gray-600 hover:bg-gray-100 transition-colors">
                <x-lucide-chevron-down class="size-5 transition-transform duration-300"
                    x-bind:class="showFilters ? 'rotate-180' : ''" />
            </button>
        </div>

        {{-- Sidebar Filters --}}
        <div :class="showFilters ? 'block' : 'hidden'" class="lg:block lg:w-1/3 xl:w-1/4 shrink-0">
            <div class="lg:sticky lg:top-10 space-y-5">
                <div
                    class="hidden lg:flex items-center gap-2 text-gray-800 font-bold mb-2 pb-4 border-b border-gray-100">
                    <x-lucide-sliders-horizontal class="size-5 text-orange-500" />
                    <h3 class="text-lg">Фільтри</h3>
                </div>

                {{-- Search --}}
                <div>
                    <label for="search"
                        class="font-display block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-2.5">Пошук</label>
                    <div>
                        <x-forms.input wire:model.live.debounce.300ms="search" icon="search" id="search"
                            placeholder="Знайти статтю..." />
                    </div>
                </div>

                {{-- Tag --}}
                <div>
                    <label
                        class="font-display block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-2.5">
                        Категорія (Теги)
                    </label>
                    <div class="flex flex-wrap gap-2">
                        @foreach ($this->tags as $tagOption)
                            <label class="cursor-pointer group">
                                <input type="checkbox" wire:model.live="selectedTags" value="{{ $tagOption->slug }}"
                                    class="peer sr-only">
                                <div
                                    class="text-xs font-medium py-1.5 px-2.5 rounded-full border border-slate-200 bg-slate-100 text-slate-600 group-hover:bg-slate-100 peer-checked:bg-orange-500 peer-checked:text-white peer-checked:border-orange-500 transition-all">
                                    {{ $tagOption->name }}
                                </div>
                            </label>
                        @endforeach
                    </div>
                </div>

                {{-- Sort By --}}
                <div>
                    <label for="sortBy"
                        class="font-display block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-2.5">
                        Сортування
                    </label>
                    <div class="relative">
                        <select wire:model.live="sortBy" id="sortBy"
                            class="block w-full pl-3.5 pr-10 py-3 bg-slate-100 border border-slate-200 rounded-full focus:ring-orange-500 focus:border-orange-500 text-sm transition-all appearance-none text-gray-700 cursor-pointer">
                            <option value="newest">Найновіші спочатку</option>
                            <option value="oldest">Найстаріші спочатку</option>
                            <option value="alphabetical">За алфавітом (А-Я)</option>
                        </select>
                        <div class="absolute inset-y-0 right-0 pr-3.5 flex items-center pointer-events-none">
                            <x-lucide-chevron-down class="size-4 text-gray-400" />
                        </div>
                    </div>
                </div>

                {{-- Reading Time --}}
                <div>
                    <label class="font-display block text-xs font-semibold text-slate-500 uppercase tracking-wider">
                        Час читання
                    </label>
                    <div x-data="{ min: $wire.entangle('minReadTime').live, max: $wire.entangle('maxReadTime').live }" class="relative pb-2">
                        <!-- Tracks container (aligns exactly with thumb centers since thumbs are 20px wide) -->
                        <div class="absolute top-1/2 -translate-y-1/2 left-[10px] right-[10px] h-1.5 z-0">
                            <!-- Track background -->
                            <div class="absolute inset-0 bg-slate-200 rounded-full"></div>
                            <!-- Active track -->
                            <div class="absolute inset-y-0 bg-orange-500 rounded-full"
                                x-bind:style="'left: ' + (min / 30 * 100) + '%; right: ' + (100 - max / 30 * 100) + '%;'">
                            </div>
                        </div>

                        <!-- Min Thumb -->
                        <input type="range" x-model="min" min="0" max="30" step="1"
                            @input="min = Math.min(min, max - 1)"
                            class="absolute top-1/2 -translate-y-1/2 left-0 right-0 w-full m-0 p-0 appearance-none bg-transparent pointer-events-none range-slider z-20">

                        <!-- Max Thumb -->
                        <input type="range" x-model="max" min="0" max="30" step="1"
                            @input="max = Math.max(max, min + 1)"
                            class="absolute top-1/2 -translate-y-1/2 left-0 right-0 w-full m-0 p-0 appearance-none bg-transparent pointer-events-none range-slider z-30">

                        <div class="flex pt-15 justify-between items-center text-[11px] font-bold text-gray-500 px-1">
                            <span x-text="min + ' хв'"></span>
                            <span x-text="max >= 30 ? '30+ хв' : max + ' хв'"></span>
                        </div>
                    </div>
                </div>
                {{-- Dates --}}
                <div x-data="{
                    init() {
                        let picker = window.flatpickr(this.$refs.picker, {
                            mode: 'range',
                            dateFormat: 'Y-m-d',
                            defaultDate: [$wire.dateFrom, $wire.dateTo].filter(Boolean),
                            disableMobile: true,
                            locale: {
                                ...window.flatpickr.l10ns.uk,
                                rangeSeparator: ' — '
                            },
                            onChange: (selectedDates, dateStr, instance) => {
                                if (selectedDates.length === 2) {
                                    $wire.set('dateFrom', instance.formatDate(selectedDates[0], 'Y-m-d'));
                                    $wire.set('dateTo', instance.formatDate(selectedDates[1], 'Y-m-d'));
                                } else if (selectedDates.length === 0) {
                                    $wire.set('dateFrom', '');
                                    $wire.set('dateTo', '');
                                }
                            }
                        });
                
                        $wire.watch('dateFrom', value => {
                            if (!value && !$wire.dateTo) {
                                picker.clear();
                            }
                        });
                    }
                }">
                    <label
                        class="font-display block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-2.5">
                        Період публікації
                    </label>
                    <div class="relative">
                        <input x-ref="picker" type="text" placeholder="Оберіть період" readonly
                            class="block w-full pl-3.5 pr-10 py-3 bg-slate-100 border border-slate-200 rounded-full focus:ring-orange-500 focus:border-orange-500 text-sm transition-all text-gray-600 cursor-pointer">
                        <div class="absolute inset-y-0 right-0 pr-3.5 flex items-center pointer-events-none">
                            <x-lucide-calendar class="size-4 text-gray-400" />
                        </div>
                    </div>
                </div>

                {{-- Reset --}}
                @if (
                    $search ||
                        !empty($selectedTags) ||
                        $sortBy !== 'newest' ||
                        $minReadTime > 0 ||
                        $maxReadTime < 30 ||
                        $dateFrom ||
                        $dateTo)
                    <div class="pt-5 border-t border-slate-200 mt-2">
                        <button
                            wire:click="$set('search', ''); $set('dateFrom', ''); $set('dateTo', ''); $set('sortBy', 'newest'); $set('minReadTime', 0); $set('maxReadTime', 30); $set('selectedTags', [])"
                            class="flex items-center justify-center gap-2 w-full py-3 text-sm font-bold text-red-600 bg-red-50 rounded-full hover:bg-red-100 transition-colors">
                            <x-lucide-x class="size-4" />
                            Скинути всі фільтри
                        </button>
                    </div>
                @endif

            </div>
        </div>

        {{-- Posts Grid Area --}}
        <div class="lg:w-2/3 xl:w-3/4 flex flex-col min-h-screen">

            {{-- Results Info --}}
            <div class="mb-6 flex items-center justify-between text-sm text-gray-500">
                <div>
                    @if (
                        $search ||
                            !empty($selectedTags) ||
                            $sortBy !== 'newest' ||
                            $minReadTime > 0 ||
                            $maxReadTime < 30 ||
                            $dateFrom ||
                            $dateTo)
                        Знайдено статей: <span class="font-bold text-gray-900">{{ $this->posts->total() }}</span>
                    @endif
                </div>
                <div wire:loading class="text-orange-500 font-medium flex items-center gap-2">
                    <x-lucide-loader-2 class="size-4 mb-0.5 inline-flex animate-spin" />
                    Оновлення...
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-5 relative"
                wire:loading.class="opacity-60 pointer-events-none transition-opacity duration-300">
                @foreach ($this->posts as $post)
                    @php
                        $excerpt = is_array($post->body)
                            ? collect($post->body)->firstWhere('type', 'text')['data']['content'] ?? ''
                            : (string) $post->body;
                        $excerpt = Str::limit(strip_tags($excerpt), 130);
                    @endphp

                    @if ($loop->index % 9 === 0)
                        <article
                            class="col-span-full relative w-full h-80 sm:h-96 lg:h-105 rounded-3xl overflow-hidden group border border-gray-100">
                            @if ($post->hasMedia(\App\Models\Post::COLLECTION_COVER))
                                @php
                                    $media = $post->getFirstMedia(\App\Models\Post::COLLECTION_COVER);
                                @endphp
                                <img src="{{ $media->getUrl('header') }}"
                                    @if ($media->hasResponsiveImages('header')) srcset="{{ $media->getSrcset('header') }}"
                                            sizes="(max-width: 1024px) 100vw, 900px" @endif
                                    class="absolute inset-0 size-full object-cover group-hover:scale-105 transition-transform duration-700"
                                    alt="{{ $post->title }}" loading="lazy">
                            @else
                                <div class="size-full bg-slate-100 flex items-center justify-center text-slate-300">
                                    <x-lucide-image class="size-12" />
                                </div>
                            @endif
                            <div
                                class="absolute inset-0 bg-linear-to-t from-black/90 via-black/40 to-black/10 flex flex-col justify-end p-5">
                                @if ($post->tags->isNotEmpty())
                                    <div class="flex flex-wrap gap-2 mb-4">
                                        @foreach ($post->tags as $tag)
                                            <span
                                                class="px-3 py-1.5 rounded-full bg-orange-500 text-white text-[10px] font-semibold tracking-wider">
                                                {{ $tag->name }}
                                            </span>
                                        @endforeach
                                    </div>
                                @endif

                                <a href="{{ route('blog.show', $post) }}" wire:navigate
                                    class="text-white font-display text-2xl sm:text-3xl md:text-4xl font-bold mb-5 max-w-3xl leading-tight hover:text-orange-400 transition-colors duration-300">
                                    {{ $post->title }}
                                </a>

                                <div class="flex items-center text-white/90 gap-5 text-sm font-medium">
                                    <div class="flex items-center gap-2">
                                        <x-lucide-calendar class="size-4 opacity-70" />
                                        {{ $post->published_at->translatedFormat('d M Y') }}
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <x-lucide-timer class="size-4 opacity-70" />
                                        {{ $post->reading_time }} хв читання
                                    </div>
                                </div>
                            </div>
                        </article>
                    @else
                        <article
                            class="flex flex-col bg-white rounded-2xl overflow-hidden border border-gray-200 hover:shadow-lg transition-all duration-300 group">
                            <a href="{{ route('blog.show', $post) }}" wire:navigate
                                class="relative h-60 overflow-hidden block">
                                @if ($post->hasMedia(\App\Models\Post::COLLECTION_COVER))
                                    @php $media = $post->getFirstMedia(\App\Models\Post::COLLECTION_COVER); @endphp
                                    <img src="{{ $media->getUrl('preview') }}"
                                        @if ($media->hasResponsiveImages('preview')) srcset="{{ $media->getSrcset('preview') }}"
                                                sizes="(max-width: 640px) 100vw, 450px" @endif
                                        class="size-full object-cover group-hover:scale-105 transition-transform duration-500"
                                        alt="{{ $post->title }}" loading="lazy">
                                @else
                                    <div class="size-full bg-slate-50 flex items-center justify-center text-slate-300">
                                        <x-lucide-image class="size-10" />
                                    </div>
                                @endif
                                @if ($post->tags->isNotEmpty())
                                    <div class="absolute top-4 left-4 flex flex-wrap gap-2">
                                        @foreach ($post->tags as $tag)
                                            <span
                                                class="px-2.5 py-1 rounded-full bg-white/80 backdrop-blur-sm text-slate-900 text-[10px] font-semibold tracking-wider">
                                                {{ $tag->name }}
                                            </span>
                                        @endforeach
                                    </div>
                                @endif
                            </a>
                            <div class="p-5 flex flex-col flex-grow">
                                <a href="{{ route('blog.show', $post) }}" wire:navigate
                                    class="text-lg font-bold mb-2.5 leading-tight text-slate-900 group-hover:text-orange-600 transition-colors duration-300">
                                    {{ $post->title }}
                                </a>
                                <p class="text-gray-500 text-sm mb-2.5 leading-relaxed line-clamp-2 flex-grow">
                                    {{ Str::limit(strip_tags($post->body), 100) }}
                                </p>
                                <div class="mt-auto flex items-center justify-between border-t border-gray-100 pt-2.5">
                                    <div class="flex items-center gap-2 text-xs font-semibold text-slate-500">
                                        <x-lucide-calendar class="size-4 text-slate-400" />
                                        {{ $post->published_at->translatedFormat('d M Y') }}
                                    </div>
                                    <div class="flex items-center gap-2 text-xs font-semibold text-slate-500">
                                        <x-lucide-timer class="size-4 text-slate-400" />
                                        {{ $post->reading_time }} хв
                                    </div>
                                </div>
                            </div>
                        </article>
                    @endif
                @endforeach
            </div>

            {{-- Infinite Scroll Trigger & Placeholder --}}
            @if ($this->posts->hasMorePages())
                <div x-intersect="$wire.loadMore()" class="mt-102">
                    <div class="grid md:grid-cols-2 gap-5 animate-pulse">
                        @foreach (range(1, 2) as $i)
                            <div class="flex flex-col bg-white rounded-3xl overflow-hidden border border-gray-100">
                                <div class="h-60 bg-gray-100"></div>
                                <div class="p-7">
                                    <div class="h-4 w-24 bg-gray-200 rounded mb-5"></div>
                                    <div class="h-6 w-full bg-gray-200 rounded mb-2.5"></div>
                                    <div class="h-6 w-3/4 bg-gray-200 rounded mb-6"></div>
                                    <div class="h-4 w-full bg-gray-100 rounded mb-2"></div>
                                    <div class="h-4 w-4/5 bg-gray-100 rounded"></div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

            @if ($this->posts->isEmpty())
                <div
                    class="mt-8 text-center py-20 bg-white rounded-3xl border border-dashed border-gray-300 flex-grow flex flex-col justify-center items-center">
                    <div class="inline-flex items-center justify-center size-20 rounded-full bg-gray-50 mb-5">
                        <x-lucide-search-x class="size-10 text-gray-400" />
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">За вашим запитом нічого не знайдено</h3>
                    <p class="text-gray-500 max-w-sm mx-auto mb-8 leading-relaxed">Спробуйте змінити параметри пошуку
                        або скиньте фільтри, щоб побачити більше статей.</p>
                    <button
                        wire:click="$set('search', ''); $set('dateFrom', ''); $set('dateTo', ''); $set('sortBy', 'newest'); $set('minReadTime', 0); $set('maxReadTime', 30); $set('selectedTags', [])"
                        class="inline-flex items-center justify-center px-6 py-3 text-sm font-bold cursor-pointer text-white bg-orange-600 rounded-xl hover:bg-orange-700 transition-colors shadow-sm shadow-orange-600/20">
                        Скинути всі фільтри
                    </button>
                </div>
            @endif
        </div>
    </div>
</x-section>
