@props(['trigger', 'title', 'body'])

<div x-data="{
    open: false,
    mobileFullWidth: true,

    // 'start', 'end', 'top', 'bottom'
    position: 'end',

    // 'xs', 'sm', 'md', 'lg', 'xl'
    size: 'md',

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
}" x-on:keydown.esc.prevent="open = false">
    @isset($trigger)
        {{ $trigger }}
    @endisset

    <template x-teleport="body">
        <div x-cloak x-show="open" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" x-bind:aria-hidden="!open" tabindex="-1" role="dialog"
            aria-labelledby="pm-offcanvas-title"
            class="fixed inset-0 overflow-hidden bg-zinc-700/75 backdrop-blur-xs z-50">
            <!-- Offcanvas Sidebar -->
            <div x-cloak x-show="open" x-on:click.away="open = false" x-bind="transitionClasses"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-end="translate-x-0 translate-y-0"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="translate-x-0 translate-y-0" role="document"
                class="absolute flex w-full flex-col bg-white shadow-lg will-change-transform"
                x-bind:class="{
                    'h-dvh top-0 end-0': position === 'end',
                    'h-dvh top-0 start-0': position === 'start',
                    'bottom-0 start-0 end-0': position === 'top',
                    'bottom-0 start-0 end-0': position === 'bottom',
                    'h-64': position === 'top' || position === 'bottom',
                    'sm:max-w-xs': size === 'xs' && !(position === 'top' || position === 'bottom'),
                    'sm:max-w-sm': size === 'sm' && !(position === 'top' || position === 'bottom'),
                    'sm:max-w-md': size === 'md' && !(position === 'top' || position === 'bottom'),
                    'sm:max-w-lg': size === 'lg' && !(position === 'top' || position === 'bottom'),
                    'sm:max-w-xl': size === 'xl' && !(position === 'top' || position === 'bottom'),
                    'max-w-72': !mobileFullWidth && !(position === 'top' || position === 'bottom'),
                }">
                <div class="flex min-h-16 flex-none items-center justify-between border-b border-zinc-100 px-5 md:px-7">
                    @isset($title)
                        <span id="pm-offcanvas-title" class="py-5 font-semibold">
                            {{ $title }}
                        </span>
                    @endisset
                    <button x-on:click="open = false" type="button" class="ms-auto">
                        <x-lucide-x class="hi-solid hi-x -mx-1 inline-block size-4" />
                    </button>
                </div>

                <div class="flex grow flex-col overflow-y-auto p-5">
                    <div class="flex h-full flex-col items-center justify-between gap-5">
                        @isset($body)
                            {{ $body }}
                        @endisset
                    </div>
                </div>
            </div>
        </div>
    </template>
</div>
