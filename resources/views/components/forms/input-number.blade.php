@props(['label', 'description', 'prefix', 'min' => null, 'max' => null, 'maxlength' => 3])

<div {{ $attributes->class('') }}>
    <label for="quantity-input" class="block mb-1.5 text-sm font-medium text-heading line-clamp-1 text-nowrap">
        {{ $label }}
    </label>

    <div x-data="{
        value: @entangle($attributes->wire('model')).defer ?? null,
        min: {{ $min ?? '0' }},
        max: {{ $max ?? 'null' }},
        maxlength: {{ $maxlength }},
        increment() {
            if (this.value === null) this.value = this.min;
            else if (this.max === null || this.value < this.max) this.value++;
        },
        decrement() {
            if (this.value === null) this.value = this.min;
            else if (this.value > this.min) this.value--;
        },
        sanitize() {
            if (this.value !== null) {
    
                // Лише цифри
                this.value = this.value.toString().replace(/[^0-9]/g, '');
    
                // Обмеження по кількості символів
                if (this.value.length > this.maxlength) {
                    this.value = this.value.slice(0, this.maxlength);
                }
    
                let n = Number(this.value);
    
                // Мінімум
                if (isNaN(n) || n < this.min) this.value = this.min;
    
                // Максимум
                if (this.max !== null && n > this.max) this.value = this.max;
            }
        }
    }" class="relative flex items-center border rounded-3xl bg-zinc-50 overflow-hidden">
        <!-- Декремент -->
        <button type="button" @click="decrement"
            class="hidden md:block bg-zinc-100/80 text-body box-border border-e border-zinc-200/50 hover:bg-zinc-200/60 font-medium leading-5 rounded-s-base text-sm px-3 focus:outline-none h-10 cursor-pointer transition-colors duration-300">
            <x-lucide-minus class="size-4" />
        </button>

        <div class="relative w-full">
            @isset($prefix)
                <span class="absolute top-0.5 right-2.5 md:right-0.5 text-xs text-gray-500">{{ $prefix }}</span>
            @endisset

            <!-- Інпут -->
            <input type="text" id="quantity-input" x-model="value" @input="sanitize"
                aria-describedby="helper-text-explanation" maxlength="{{ $maxlength }}" min="{{ $min ?? '' }}"
                max="{{ $max ?? '' }}"
                class="border-x-0 h-10 placeholder:text-heading text-heading text-center w-full py-2.5 placeholder:text-body focus:outline-none"
                placeholder="{{ $min ?? 0 }}" required />
        </div>

        <!-- Інкремент -->
        <button type="button" @click="increment"
            class="hidden md:block bg-zinc-100/80 text-body box-border border-s border-zinc-200/50 hover:bg-zinc-200/60 font-medium leading-5 rounded-e-base text-sm px-3 focus:outline-none h-10 cursor-pointer transition-colors duration-300">
            <x-lucide-plus class="size-4" />
        </button>
    </div>

    @isset($description)
        <span class="text-xs text-gray-500">{{ $description }}</span>
    @endisset
</div>
