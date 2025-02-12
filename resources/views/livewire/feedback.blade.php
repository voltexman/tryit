@session('success')
    <div class="h-96 flex items-center justify-center">
        <div class="flex flex-col items-center">
            <x-lucide-circle-check class="size-24 stroke-1 text-tryit-orange mb-5" />
            <span class="font-semibold">Дякуємо, Ваше повідомлення відправлено</span>
        </div>
    </div>
@else
    <form wire:submit="save">
        <div class="flex flex-col gap-y-5 rounded-lg p-10 bg-tryit-dark/10 shadow-[0px_0px_15px_3px] shadow-black/25">
            <div class="text-xl text-center text-tryit-dark font-black uppercase">Надішліть повідомлення</div>

            <x-forms.input wire:model="feedback.name" placeholder="Ваше ім'я" />
            @error('feedback.name')
                <x-forms.error class="-mt-4" :message="$message" />
            @enderror

            <x-forms.textarea wire:model="feedback.text" placeholder="Вкажіть додатково опис" />

            <x-button type="submit" wire:target="save" wire:loading.attr="disabled" class="ms-auto flex gap-x-1.5">
                <span wire:target="save" wire:loading.remove>Надіслати</span>
                <span wire:target="save" wire:loading>Відправка</span>
                <x-lucide-loader-2 wire:target="save" wire:loading class="size-4 animate-spin" />
            </x-button>
        </div>
    </form>
@endsession
