@props(['toggle', 'header', 'body', 'footer'])

<div x-data="{ open: false }" x-on:keydown.esc.prevent="open = false">
    @isset($trigger)
        {{ $trigger }}
    @endisset

    <!-- Modal Backdrop -->
    <div x-cloak x-show="open" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-bind:aria-hidden="!open"
        tabindex="-1" role="dialog"
        class="z-90 fixed inset-0 overflow-y-auto overflowx-hidden bg-zinc-900/75 p-4 backdrop-blur-xs will-change-auto lg:p-10">
        <!-- Modal Dialog -->
        <div x-cloak x-show="open" x-on:click.away="open = false" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90" role="document"
            class="mx-auto fixed flex w-full max-w-md flex-col rounded-lg bg-white shadow-xs will-change-auto top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">

            @isset($header)
                <div class="flex items-center justify-between bg-zinc-50 px-5 py-4 rounded-t-lg">
                    <h3 class="text-lg font-bold">Modal Title</h3>
                    <div class="-my-4">
                        <button x-on:click="open = false" type="button"
                            class="inline-flex items-center justify-center gap-2 rounded-lg border border-zinc-200 bg-white px-3 py-2 text-xs font-semibold leading-5 text-zinc-800 hover:border-zinc-300 hover:text-zinc-900 hover:shadow-xs focus:ring-zinc-300/25 active:border-zinc-200 active:shadow-none">
                            x
                        </button>
                    </div>
                </div>
            @endisset

            @isset($body)
                <div class="grow p-5 py-10 lg:p-10">
                    {{ $body }}
                </div>
            @endisset

            @isset($footer)
                <div class="flex items-center justify-end gap-1.5 border-t border-zinc-100 px-5 py-4">
                    {{ $footer }}
                </div>
            @endisset
        </div>
    </div>
</div>
