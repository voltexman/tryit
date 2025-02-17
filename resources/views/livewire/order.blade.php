@session('success')
    <div class="h-96 flex items-center justify-center">
        <div class="flex flex-col items-center">
            <x-lucide-circle-check class="size-24 stroke-1 text-tryit-orange mb-5" />
            <span class="font-semibold">Дякуємо, заявка відправлена</span>
            <span class="text-sm font-medium">Ми зв'яжемось з Вами найближчим часом</span>
        </div>
    </div>
@else
    <form wire:submit="save">
        <div class="flex flex-col gap-y-5">
            <div class="text-xl text-center text-tryit-dark font-black uppercase">Замовити послугу</div>

            <x-forms.input wire:model="order.name" maxLength="40" placeholder="Ваше ім'я" />
            @error('order.name')
                <x-forms.error class="-mt-4" :message="$message" />
            @enderror

            <x-forms.input wire:model="order.contact" maxLength="40" placeholder="Пошта або телефон" />
            @error('order.contact')
                <x-forms.error class="-mt-4" :message="$message" />
            @enderror

            <x-dropdown :label="$order->service ?: 'Оберіть послугу'">
                @foreach (\App\Enums\ServiceEnum::all() as $service)
                    <x-dropdown.item wire:click="$set('order.service', '{{ $service }}')">
                        {{ $service }}
                    </x-dropdown.item>
                @endforeach

            </x-dropdown>
            @error('order.service')
                <x-forms.error class="-mt-4" maxLength="1200" :message="$message" />
            @enderror

            <x-forms.textarea wire:model="order.text" placeholder="Вкажіть додатково опис" />

            <x-button type="submit" wire:target="save" wire:loading.attr="disabled"
                class="ms-auto flex items-center gap-x-1.5">
                <span wire:target="save" wire:loading.remove>Замовити</span>
                <span wire:target="save" wire:loading>Відправка</span>
                <x-lucide-loader-2 wire:target="save" wire:loading class="size-4 animate-spin" />
            </x-button>
        </div>
    </form>
@endsession
