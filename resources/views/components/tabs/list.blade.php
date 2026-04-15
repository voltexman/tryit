<div x-on:keydown.right.prevent.stop="$focus.wrap().next()" x-on:keydown.left.prevent.stop="$focus.wrap().previous()"
    x-on:keydown.home.prevent.stop="$focus.first()" x-on:keydown.end.prevent.stop="$focus.last()"
    x-bind:class="{ 'sm:w-36 sm:flex-none sm:flex-col sm:items-stretch': vertical }"
    class="flex items-center text-sm gap-x-2.5">
    {{ $slot }}
</div>
