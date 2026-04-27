@props(['content'])

<div x-data="{ open: false }" class="relative inline-flex items-center ml-1">
    <button type="button" @mouseenter="open = true" @mouseleave="open = false" @focus="open = true"
        @blur="open = false" class="text-slate-400 hover:text-emerald-500 transition-colors cursor-help">
        <x-lucide-info class="size-3.5" />
    </button>

    <div x-show="open" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 translate-y-1"
        class="absolute z-50 bottom-full left-1/2 -translate-x-1/2 mb-2 w-48 p-2.5 bg-slate-800 text-white text-[10px] leading-relaxed rounded-lg shadow-xl pointer-events-none"
        style="display: none;">
        {{ $content }}
        <div class="absolute top-full left-1/2 -translate-x-1/2 -mt-1 border-4 border-transparent border-t-slate-800">
        </div>
    </div>
</div>
