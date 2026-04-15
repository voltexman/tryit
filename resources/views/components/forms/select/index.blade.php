@props(['placeholder' => 'Select option', 'icon' => null])

<div x-data="selectComponent()" x-modelable="selected" {{ $attributes->whereStartsWith('wire:model') }}
    class="relative w-full">

    <!-- Toggle -->
    <button type="button" @click="isOpen = !isOpen"
        {{ $attributes->class('inline-flex h-14 bg-zinc-50 border-zinc-200/50 rounded-full text-sm font-medium px-5 items-center gap-2.5 border w-full cursor-pointer hover:bg-zinc-100 transition-colors duration-300 relative') }}>

        @if ($icon)
            <x-dynamic-component :component="'lucide-' . $icon" class="size-5 stroke-tryit-green" />
        @endif

        <!-- Floating label block -->
        <div class="flex flex-col leading-tight ms-10 pointer-events-none w-full text-left">

            <!-- Label -->
            <span class="absolute transition-all duration-200 px-1"
                :class="[
                    @js($icon) ? 'left-12' : 'left-5',
                    selected ? 'top-2.5 text-xs text-gray-600' : 'top-1/2 -translate-y-1/2 text-gray-700 text-sm',
                ]">
                {{ $placeholder }}
            </span>

            <!-- Selected value -->
            <span class="absolute left-5 text-gray-800 transition-all duration-200 px-1 text-sm"
                :class="[
                    @js($icon) ? 'left-12' : 'left-5',
                    selected ? 'bottom-2' : 'bottom-0 -translate-y-1/2 text-sm',
                ]"
                x-show="selected" x-text="selected" x-transition.opacity></span>
        </div>

        <x-lucide-chevron-down class="size-4 flex-none transition-transform ms-auto"
            x-bind:class="isOpen ? 'rotate-180' : 'rotate-0'" />
    </button>

    <!-- Options -->
    <div x-cloak x-show="isOpen" @click.outside="isOpen = false" x-transition.opacity
        class="absolute top-20 left-0 z-30 bg-zinc-50 shadow-md rounded-3xl min-w-2xs max-w-xl overflow-hidden border border-zinc-200/50">
        <div class="flex flex-col py-2.5">
            {{ $slot }}
        </div>
    </div>
</div>

<script>
    function selectComponent() {
        return {
            selected: null,
            isOpen: false,

            choose(value) {
                this.selected = value;
                this.isOpen = false;
            },
        }
    }
</script>
