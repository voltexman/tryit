<form wire:submit="save">
    <div class="flex flex-col gap-y-5">
        <div class="text-xl text-center text-tryit-dark font-black uppercase">Замовити послугу</div>
        <x-forms.input wire:model="form.name" placeholder="Ваше ім'я" />
        <x-forms.input wire:model="form.contact" placeholder="Пошта або телефон" />
        <x-dropdown :label="$form->service ?: 'Оберіть послугу'">
            <x-dropdown.item wire:click="$set('form.service', 'Миття фасадів та вікон на висоті')">
                Миття фасадів та вікон на висоті
            </x-dropdown.item>
            <x-dropdown.item>Мийка та очищення сонячних панелей</x-dropdown.item>
            <x-dropdown.item>Післябудівельне прибирання</x-dropdown.item>
            <x-dropdown.item>Генеральне прибирання цехів та виробництва</x-dropdown.item>
            <x-dropdown.item>Хімчистка</x-dropdown.item>
            <x-dropdown.item>Комплексне та підтримуюче прибирання офісу</x-dropdown.item>
            <x-dropdown.item>Промисловий</x-dropdown.item>
        </x-dropdown>
        <x-forms.textarea wire:model="form.text" placeholder="Вкажіть додатково опис" />
        <x-button type="submit" class="ms-auto" wire:loading.attr="disabled">
            <span wire:loading class="flex items-center gap-x-1.5">
                <span>Відправка</span>
                <x-lucide-loader-2 class="size-4 animate-spin" />
            </span>
            <span wire:loading.remove>Замовити</span>
        </x-button>
    </div>
</form>
