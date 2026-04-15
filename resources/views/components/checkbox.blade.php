@props(['label', 'caption' => null, 'variant' => 'inline', 'icon' => null])

@if ($variant === 'inline')
    <label for="{{ Str::slug($label ?? $slot) }}"
        class="flex items-start gap-1.5 text-sm font-medium text-neutral-600 has-checked:text-neutral-900 has-disabled:cursor-not-allowed has-disabled:opacity-75">

        <span class="relative flex items-center">
            <input id="{{ Str::slug($label ?? $slot) }}" type="checkbox"
                {{ $attributes->merge([
                    'class' =>
                        "before:content-[''] peer relative size-5 appearance-none overflow-hidden rounded-sm border border-neutral-300 bg-neutral-50 before:absolute before:inset-0 checked:border-tryit-green checked:before:bg-tryit-green focus:outline-2 focus:outline-offset-2 focus:outline-tryit-green checked:focus:outline-tryit-green active:outline-offset-0 disabled:cursor-not-allowed",
                ]) }} />

            <x-lucide-check stroke-width="4"
                class="pointer-events-none invisible absolute left-1/2 top-1/2 size-3 -translate-x-1/2 -translate-y-1/4 peer-checked:-translate-y-1/2 transition duration-300 text-neutral-100 peer-checked:visible" />
        </span>

        <span>{{ $label ?? $slot }}</span>
    </label>
@elseif($variant === 'large')
    <label
        class="relative flex flex-col justify-center items-center gap-2.5 rounded-2xl bg-zinc-50 px-2.5 py-5 transition-colors text-neutral-600 hover:bg-zinc-100 has-checked:border-tryit-green/25 has-checked:bg-tryit-green/10 has-checked:text-tryit-green has-checked:border has-focus:outline-2 has-focus:outline-offset-2 has-focus:outline-tryit-green border border-zinc-200/50 duration-300 cursor-pointer">
        <input type="checkbox" id="osLinux" aria-describedby="linuxDescription" class="sr-only peer" name=""
            value="linux">
        {{-- <x-lucide-check class="absolute top-1.5 right-1.5 peer-checked:visible invisible size-4 shrink-0" /> --}}
        <x-dynamic-component :component="'lucide-' . $icon" class="size-7 opacity-90 shrink-0" />
        <div class="flex flex-col">
            <span class="text-sm font-medium" aria-hidden="true">{{ $label ?? $slot }}</span>
            <small class="text-xs">{{ $caption }}</small>
        </div>
    </label>
@endif
