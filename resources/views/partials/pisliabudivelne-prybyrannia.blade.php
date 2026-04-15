<div class="grid grid-cols-3 gap-5 w-full mt-5">
    <x-forms.input-number label="Площа" prefix="(м)" wire:model="options.total_area" />
    <x-forms.input-number label="Поверх" wire:model="options.panels_count" />
    <x-forms.input-number label="Поверхів" wire:model="options.total_area" />
</div>

<x-forms.select class="w-full lg:w-2/3 mt-5" placeholder="Тип будівлі" wire:model="options.building_type">
    <x-forms.select.item value="Квартира" />
    <x-forms.select.item value="Приватний будинок" />
    <x-forms.select.item value="Офісна будівля" />
    <x-forms.select.item value="Комерційне приміщення" />
    <x-forms.select.item value="Склад" />
</x-forms.select>

<div class="mt-5 space-y-2.5">
    <div class="text-black text-sm font-medium">Поверхні прибирання</div>
    <div class="grid grid-cols-2 lg:grid-cols-3 gap-x-5 gap-y-2.5">
        <x-checkbox label="Підлога" />
        <x-checkbox label="Вікна" />
        <x-checkbox label="Стіни" />
        <x-checkbox label="Меблі" />
        <x-checkbox label="Балкон" />
        <x-checkbox label="Фасад" />
    </div>
</div>
