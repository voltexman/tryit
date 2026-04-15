<div class="grid grid-cols-3 gap-5 w-full mt-5">
    <x-forms.input-number label="Кількість вікон" maxlength="2" wire:model="form.options.total_area" />
    <x-forms.input-number label="Висота будівлі" maxlength="3" prefix="(м)" wire:model="form.options.panels_count" />
    <x-forms.input-number label="Площа скління" maxlength="3" prefix="(м)" wire:model="form.options.total_area" />
</div>

<x-forms.select class="w-full lg:w-2/3 mt-5" placeholder="Тип забудови" wire:model="form.options.building_type">
    <x-forms.select.item value="Приватний будинок" />
    <x-forms.select.item value="Офісна будівля" />
    <x-forms.select.item value="ТРЦ" />
    <x-forms.select.item value="Склад" />
    <x-forms.select.item value="Виробництво" />
</x-forms.select>

<x-forms.select class="w-full lg:w-2/3 mt-5" placeholder="Тип поверхні" wire:model="form.options.surface_type">
    <x-forms.select.item value="Скло" />
    <x-forms.select.item value="Фасадні панелі" />
    <x-forms.select.item value="Пластик/ПВХ" />
    <x-forms.select.item value="Алюмінієві системи" />
    <x-forms.select.item value="Композит" />
</x-forms.select>

<x-forms.select class="w-full lg:w-2/3 mt-5" placeholder="Доступ до фасаду" wire:model="form.options.facade_access">
    <x-forms.select.item value="Вільний" />
    <x-forms.select.item value="Обмежений" />
    <x-forms.select.item value="Внутрішній двір" />
    <x-forms.select.item value="Потрібно дозвіл" />
</x-forms.select>

<x-range :positions="['Легке', 'Середнє', 'Сильне', 'Важке', 'Критичне']" class="mt-5" />
