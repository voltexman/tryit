<div @click="open = !open"
    {{ $attributes->class('flex items-center justify-between group cursor-pointer gap-2.5 rounded-full px-5 py-2.5 text-sm font-medium text-tryit-orange hover:bg-tryit-orange/75 hover:text-white') }}>
    <span class="grow">{{ $slot }}</span>
</div>
