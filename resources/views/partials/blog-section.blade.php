{{-- === BLOG === --}}
<section class="py-24 bg-slate-200/60 text-white overflow-hidden relative">
    {{-- Background Image with Overlay --}}
    <div class="absolute inset-0 z-0">
        <img src="{{ Vite::asset('resources/images/h2-background04.jpg') }}" alt=""
            class="size-full object-cover opacity-25 grayscale" />
        <div class="absolute inset-0 bg-slate-50/15"></div>
    </div>

    <div class="max-w-6xl mx-auto px-6 relative z-10">
        <livewire:blog-posts />
    </div>
</section>
