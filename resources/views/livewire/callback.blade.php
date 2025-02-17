@session('success')
    <div class="flex gap-5">
        <div><x-lucide-info class="size-10" stroke-width="1.5" /></div>
        <div class="grid">
            <span class="text-sm font-bold">Номер відправлено менеджеру</span>
            <span class="text-xs">Очікуйте на дзвінок найближчим часом</span>
        </div>
    </div>
@else
    <div class="flex flex-col">
        <div class="text-lg font-semibold">Передзвоніть мені</div>
        <div class="relative">
            <form wire:submit="send">
                <x-forms.input x-mask="+380 (99) 999-99-99" wire:model="callback.phone" wire:loading.attr="disabled"
                    class="pl-12 !bg-stone-300/50" placeholder="Вкажіть номер телефону" />
                <x-lucide-phone class="size-5 absolute top-1/2 -translate-y-1/2 left-4 stroke-stone-600" />
                <x-button type="submit" variant="icon" class="absolute top-1/2 -translate-y-1/2 right-2">
                    <x-lucide-send wire:loading.remove class="size-5 stroke-stone-600" />
                    <x-lucide-loader-2 wire:loading class="size-5 animate-spin stroke-stone-600" />
                </x-button>
            </form>
        </div>

        <span class="text-xs text-stone-500 mt-1.5">
            Якщо не маєте можливості подзвонити нам, <b>замовте</b> дзвінок і наш <b>менеджер</b> зателефонує вам найближчим
            часом.
        </span>
    </div>
@endsession
