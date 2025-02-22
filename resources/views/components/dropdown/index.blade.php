@props(['label'])

<div class="flex w-full disabled:opacity-50" {{ $attributes }}>
    <div x-data="{ open: false }" x-on:keydown.esc.prevent.stop="open = false" class="relative w-full">
        <button type="button"
            class="inline-flex items-center gap-2 w-full cursor-pointer rounded-lg bg-stone-300 p-4 font-medium text-stone-500/80 text-sm hover:bg-stone-400/45 focus:outline-hidden focus:ring-2 focus:ring-tryit-green/80 transition-all duration-300 focus:ring-offset-2"
            id="pm-dropdown" aria-haspopup="true" x-bind:aria-expanded="open" x-on:click="open = true">
            <span>{{ $label }}</span>
            <span class="ms-auto">
                <x-lucide-chevron-down x-show="!open" class="size-5" />
                <x-lucide-chevron-up x-show="open" class="size-5" />
            </span>
        </button>

        <div x-cloak x-show="open" x-transition:enter="transition ease-out duration-100"
            x-transition:enter-start="opacity-0 -translate-y-3" x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-75" x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 translate-y-10" x-on:click.outside="open = false" role="menu"
            aria-labelledby="pm-dropdown"
            class="absolute start-0 z-10 mt-2 w-full origin-top-right rounded-lg shadow-xl">
            <div class="divide-y divide-zinc-100 rounded-lg bg-stone-300 ring-1 ring-black/5">
                <div class="px-2.5 py-3">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</div>
