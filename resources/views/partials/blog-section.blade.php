{{-- === BLOG === --}}
<section class="py-20 bg-stone-50 relative overflow-hidden">
    <div class="max-w-6xl mx-auto px-5 relative z-10">
        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4 mb-12">
            <div>
                <x-section.badge class="mb-2.5">Корисні статті</x-section.badge>
                <x-section.title tag="h3" size="lg">
                    Наш <span class="text-emerald-500">Блог</span>
                </x-section.title>
                <x-section.description>
                    Поради, ідеї та інсайти для бездоганної чистоти
                </x-section.description>
            </div>
            <a href="{{ route('blog') }}"
                class="inline-flex font-display items-center gap-1.5 mt-5 lg:mt-0 text-xs font-semibold uppercase tracking-wider text-emerald-600 hover:text-emerald-700 transition-colors">
                Всі статті <x-lucide-arrow-right class="size-4" stroke-width="2" />
            </a>
        </div>

        <livewire:blog-posts />
    </div>
</section>
