<div class="grid grid-cols-3 gap-5 w-full mt-5">
    <x-forms.input-number label="Площа" prefix="(м²)" wire:model="options.total_area" />
    <x-forms.input-number label="Поверх" wire:model="options.floor" />
    <x-forms.input-number label="Поверхів" wire:model="options.floors_total" />
</div>

<x-forms.select class="w-full lg:w-2/3 mt-5" placeholder="Тип об’єкта" wire:model="options.building_type">
    <x-forms.select.item value="Цех" />
    <x-forms.select.item value="Виробничий склад" />
    <x-forms.select.item value="Логістичний склад" />
    <x-forms.select.item value="Комерційне виробництво" />
</x-forms.select>

<div class="mt-5 space-y-2.5">
    <div class="text-black text-sm font-medium">Поверхні прибирання</div>
    <div class="grid grid-cols-2 lg:grid-cols-3 gap-2.5">
        <x-checkbox label="Підлога" />
        <x-checkbox label="Стіни" />
        <x-checkbox label="Вікна" />
        <x-checkbox label="Обладнання" />
        <x-checkbox label="Склади / полиці" />
    </div>
</div>
