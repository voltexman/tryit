@props(['trigger', 'header', 'footer', 'size' => 'md', 'position' => 'end'])

<!-- Offcanvas -->
<div x-data="offcanvas({
    position: '{{ $position }}',
    size: '{{ $size }}'
})" x-effect="document.body.classList.toggle('overflow-hidden', open)"
    x-on:keydown.esc.prevent="open = false" {{ $attributes->class('') }}>

    <!-- Offcanvas Toggle Button -->
    <div x-on:click="open = true" {{ $trigger->attributes->class('mt-5') }}>
        {{ $trigger }}
    </div>

    <!-- Backdrop -->
    <template x-teleport="body">
        <div x-cloak x-show="open" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="z-100 fixed inset-0 overflow-hidden bg-zinc-700/75 backdrop-blur-xs">

            <!-- Sidebar -->
            <div x-cloak x-show="open" x-on:click.away="open = false" x-bind="transitionClasses"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-end="translate-x-0 translate-y-0"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="translate-x-0 translate-y-0"
                class="absolute flex w-full flex-col bg-white shadow-lg will-change-transform"
                x-bind:class="sizeClasses">
                @isset($header)
                    <div
                        {{ $header->attributes->merge(['class' => 'flex min-h-16 flex-none items-center justify-between border-b border-zinc-100 px-5 md:px-10', 'id' => 'offcanvas-header']) }}>
                        {{ $header }}
                        <!-- Close Button -->
                        <button x-on:click="open = false" type="button"
                            class="inline-flex items-center justify-center rounded-full border border-zinc-100 bg-zinc-50/80 hover:bg-zinc-50 size-8 text-xs font-semibold leading-5 text-zinc-800 hover:border-zinc-200 hover:text-zinc-900 focus:ring-zinc-300/25 active:border-zinc-200 active:shadow-none transition-colors duration-300 cursor-pointer">
                            <x-lucide-x class="hi-solid hi-x -mx-1 inline-block size-4" />
                        </button>
                        <!-- END Close Button -->
                    </div>
                @else
                    <button x-on:click="open = false" type="button"
                        class="absolute top-2.5 right-2.5 flex items-center justify-center rounded-full border border-zinc-100 bg-zinc-50/80 hover:bg-zinc-50 size-10 text-xs font-semibold leading-5 text-zinc-800 hover:border-zinc-200 hover:text-zinc-900 focus:ring-zinc-300/25 active:border-zinc-200 active:shadow-none transition-colors duration-300 cursor-pointer">
                        <x-lucide-x class="hi-solid hi-x -mx-1 inline-block size-5" />
                    </button>
                @endisset

                <div class="flex grow flex-col overflow-y-auto px-5 lg:px-10">
                    {{ $slot }}
                </div>

                @isset($footer)
                    <div
                        {{ $footer->attributes->merge(['class' => 'flex w-full min-h-16 flex-none items-center justify-between border-t border-zinc-100 px-5 md:px-10', 'id' => 'offcanvas-footer']) }}>
                        {{ $footer }} </div>
                @endisset
            </div>
        </div>
    </template>
</div>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('offcanvas', ({
            position,
            size
        }) => ({
            open: false,
            mobileFullWidth: false,
            position,
            size,

            get transitionClasses() {
                return {
                    'x-transition:enter-start': () => {
                        if (this.position === 'start')
                            return '-translate-x-full rtl:translate-x-full';
                        if (this.position === 'end')
                            return 'translate-x-full rtl:-translate-x-full';
                        if (this.position === 'top') return '-translate-y-full';
                        if (this.position === 'bottom') return 'translate-y-full';
                    },
                    'x-transition:leave-end': () => {
                        if (this.position === 'start')
                            return '-translate-x-full rtl:translate-x-full';
                        if (this.position === 'end')
                            return 'translate-x-full rtl:-translate-x-full';
                        if (this.position === 'top') return '-translate-y-full';
                        if (this.position === 'bottom') return 'translate-y-full';
                    }
                };
            },

            get sizeClasses() {
                return {
                    'h-dvh top-0 end-0': this.position === 'end',
                    'h-dvh top-0 start-0': this.position === 'start',
                    'bottom-0 start-0 end-0': this.position === 'top' || this.position ===
                        'bottom',
                    'h-64': this.position === 'top' || this.position === 'bottom',
                    'sm:max-w-xs': this.size === 'xs' && this.isSidebar,
                    'sm:max-w-sm': this.size === 'sm' && this.isSidebar,
                    'sm:max-w-md': this.size === 'md' && this.isSidebar,
                    'sm:max-w-lg': this.size === 'lg' && this.isSidebar,
                    'sm:max-w-xl': this.size === 'xl' && this.isSidebar,
                    'max-w-full': !this.mobileFullWidth && this.isSidebar
                };
            },

            get isSidebar() {
                return !(this.position === 'top' || this.position === 'bottom');
            },
        }));
    });
</script>
