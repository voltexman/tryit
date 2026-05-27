@props(['trigger', 'header', 'footer', 'position' => 'end', 'size' => 'md'])

<div x-data="{
    open: false,
    mobileFullWidth: true,

    // 'start', 'end', 'top', 'bottom'
    position: '{{ $position }}',

    // 'xs', 'sm', 'md', 'lg', 'xl'
    size: '{{ $size }}',

    // Set transition classes based on position
    transitionClasses: {
        'x-transition:enter-start'() {
            if (this.position === 'start') {
                return '-translate-x-full rtl:translate-x-full';
            } else if (this.position === 'end') {
                return 'translate-x-full rtl:-translate-x-full';
            } else if (this.position === 'top') {
                return '-translate-y-full';
            } else if (this.position === 'bottom') {
                return 'translate-y-full';
            }
        },
        'x-transition:leave-end'() {
            if (this.position === 'start') {
                return '-translate-x-full rtl:translate-x-full';
            } else if (this.position === 'end') {
                return 'translate-x-full rtl:-translate-x-full';
            } else if (this.position === 'top') {
                return '-translate-y-full';
            } else if (this.position === 'bottom') {
                return 'translate-y-full';
            }
        },
    },
}" x-on:keydown.esc.prevent="open = false" {{ $attributes->class('') }}>
    <div wire:ignore class="contents">
        {{ $trigger }}
    </div>

    <template x-teleport="body">
        <div x-cloak x-show="open" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" x-bind:aria-hidden="!open" tabindex="-1" role="dialog"
            aria-labelledby="pm-offcanvas-title"
            class="z-90 fixed inset-0 overflow-hidden bg-stone-900/60 backdrop-blur-xs"
            x-effect="document.body.style.overflow = open ? 'hidden' : 'auto'">

            <div x-cloak x-show="open" x-bind="transitionClasses" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-end="translate-x-0 translate-y-0"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="translate-x-0 translate-y-0" role="document"
                class="absolute flex w-full flex-col bg-white shadow-lg will-change-transform"
                x-bind:class="{
                    'h-dvh top-0 inset-e-0': position === 'end',
                    'h-dvh top-0 inset-s-0': position === 'start',
                    'bottom-0 inset-s-0 inset-e-0': position === 'top',
                    'bottom-0 inset-s-0 inset-e-0': position === 'bottom',
                    'h-64': position === 'top' || position === 'bottom',
                    'sm:max-w-xs': size === 'xs' && !(position === 'top' || position === 'bottom'),
                    'sm:max-w-sm': size === 'sm' && !(position === 'top' || position === 'bottom'),
                    'sm:max-w-md': size === 'md' && !(position === 'top' || position === 'bottom'),
                    'sm:max-w-lg': size === 'lg' && !(position === 'top' || position === 'bottom'),
                    'sm:max-w-xl': size === 'xl' && !(position === 'top' || position === 'bottom'),
                    'max-w-72': !mobileFullWidth && !(position === 'top' || position === 'bottom'),
                }">

                @isset($header)
                    <div
                        {{ $header->attributes->class('flex gap-1.5 font-[Oswald] tracking-wide min-h-16 bg-slate-50 border-b border-slate-100 flex-none items-center px-5') }}>
                        {{ $header }}
                    </div>
                @endisset

                <button x-on:click="open = false" type="button"
                    class="absolute top-3 right-3 inline-flex items-center justify-center size-8 rounded-full bg-slate-800 text-slate-50 hover:bg-zinc-800 hover:text-zinc-200 transition-colors duration-300 cursor-pointer">
                    <x-lucide-x class="-mx-1 inline-block size-4" />
                </button>

                <div class="flex grow flex-col overflow-y-auto">
                    <div x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 translate-y-4"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-4"
                        class="flex flex-col size-full max-w-xl mx-auto p-5">
                        {{ $slot }}
                    </div>
                </div>

                @isset($footer)
                    <div
                        {{ $footer->attributes->class('relative bg-slate-50 border-t border-slate-100 flex gap-2.5 px-5 py-2.5') }}>
                        {{ $footer }}
                    </div>
                @endisset
            </div>
        </div>
    </template>
</div>
