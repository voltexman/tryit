@session('success')
    <div class="h-96 flex items-center justify-center">
        <div class="flex flex-col items-center">
            <x-lucide-circle-check class="size-24 stroke-1 text-tryit-orange mb-5" />
            <span class="font-semibold">Дякуємо, Ваша заявка відправлена</span>
            <span class="font-medium">Ми зв'яжемось з Вами найближчим часом</span>
        </div>
    </div>
@else
    <form wire:submit="save">
        <div class="flex flex-col gap-y-5">
            <div class="text-xl text-center text-tryit-dark font-black uppercase">Замовити послугу</div>

            <x-forms.input wire:model="form.name" placeholder="Ваше ім'я" />
            @error('form.name')
                <x-forms.error class="-mt-4" :message="$message" />
            @enderror

            <x-forms.input wire:model="form.contact" placeholder="Пошта або телефон" />
            @error('form.contact')
                <x-forms.error class="-mt-4" :message="$message" />
            @enderror

            <x-dropdown :label="$form->service ?: 'Оберіть послугу'">
                @foreach (\App\Enums\ServiceEnum::values() as $service)
                    <x-dropdown.item wire:click="$set('form.service', '{{ $service }}')">
                        {{ $service }}
                    </x-dropdown.item>
                @endforeach

            </x-dropdown>
            @error('form.service')
                <x-forms.error class="-mt-4" :message="$message" />
            @enderror

            <x-forms.textarea wire:model="form.text" placeholder="Вкажіть додатково опис" />

            <x-button type="submit" wire:target="save" wire:loading.attr="disabled" class="ms-auto flex gap-x-1.5">
                <span wire:target="save" wire:loading.remove>Замовити</span>
                <span wire:target="save" wire:loading>Відправка</span>
                <x-lucide-loader-2 wire:target="save" wire:loading class="size-4 animate-spin" />
            </x-button>
        </div>
    </form>
@endsession
