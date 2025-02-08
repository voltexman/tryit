<div @click="open = !open"
    {{ $attributes->class('flex items-center justify-between group cursor-pointer gap-2.5 rounded-lg px-4 py-2.5 text-sm font-semibold text-zinc-600 hover:bg-zinc-100/75 hover:text-zinc-950') }}>
    <span class="grow">{{ $slot }}</span>
</div>
