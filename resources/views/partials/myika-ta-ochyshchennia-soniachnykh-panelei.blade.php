<div class="flex gap-5 w-full mt-5">
    <x-forms.input-number label="Кількість панелей" min="1" wire:model="options.panels_count" class="lg:w-1/3" />
    <x-forms.input-number label="Загальна площа" wire:model="options.total_area" class="lg:w-1/3" />
</div>

<x-forms.select class="w-full lg:w-2/4 mt-5" placeholder="Тип установки" wire:model="options.access_level">
    <x-forms.select.item value="На землі" />
    <x-forms.select.item value="На плоскому даху" />
    <x-forms.select.item value="На похилому даху" />
    <x-forms.select.item value="На конструкції" />
</x-forms.select>

<x-forms.select class="w-full lg:w-2/3 mt-5" placeholder="Доступ до панелей" wire:model="options.mount_type">
    <x-forms.select.item value="Доступні з землі" />
    <x-forms.select.item value="Потрібна драбина" />
    <x-forms.select.item value="Потрібна вишка/підйомник" />
</x-forms.select>

<x-forms.select class="w-full lg:w-1/2 mt-5" placeholder="Тип забудови" wire:model="options.building_type">
    <x-forms.select.item value="Приватний будинок" />
    <x-forms.select.item value="Офісна будівля" />
    <x-forms.select.item value="ТРЦ" />
    <x-forms.select.item value="Склад" />
    <x-forms.select.item value="Виробництво" />
</x-forms.select>

<x-range :positions="['Легке', 'Середнє', 'Сильне', 'Важке', 'Критичне']" class="mt-5" />

<div class="mt-5 space-y-2.5">
    <div class="text-black text-sm font-medium">Характер забруднення</div>
    <div class="grid grid-cols-2 lg:grid-cols-3 gap-x-5 gap-y-2.5">
        <x-checkbox label="Пил/бруд/пісок" />
        <x-checkbox label="Пташиний послід" />
        <x-checkbox label="Мох/лишайник" />
        <x-checkbox label="Сажа/смола" />
        <x-checkbox label="Комахи/пилок" />
        <x-checkbox label="Наліт" />
    </div>
</div>
