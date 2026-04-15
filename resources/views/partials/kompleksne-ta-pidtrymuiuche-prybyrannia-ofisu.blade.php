<div x-data="{ officeType: @entangle('form.options.office_type') }">

    <!-- Основні параметри -->
    <div class="grid grid-cols-2 lg:grid-cols-3 gap-5 w-full mt-5">
        <x-forms.input-number label="Площа офісу (м²)" wire:model="form.options.area" />
        <x-forms.input-number label="Кількість працівників" wire:model="form.options.employees" />
        <x-forms.input-number label="Кількість поверхів" wire:model="form.options.floors" />
    </div>

    <!-- Тип офісу -->
    <x-forms.select class="w-full lg:w-2/3 mt-5" placeholder="Тип офісу" x-model="officeType"
        wire:model="form.options.office_type">
        <x-forms.select.item value="Відкритий простір (Open Space)" />
        <x-forms.select.item value="Кабінетна система" />
        <x-forms.select.item value="Коворкінг" />
        <x-forms.select.item value="Комбінований офіс" />
        <x-forms.select.item value="Інше" />
    </x-forms.select>

    <!-- Open Space -->
    <div x-show="officeType === 'Відкритий простір (Open Space)'" x-transition class="mt-5 space-y-5">
        <div class="text-black text-sm font-medium">Модулі</div>
        <div class="grid grid-cols-2 lg:grid-cols-3 gap-2.5">
            <x-checkbox label="Робочі місця" />
            <x-checkbox label="Зона відпочинку" />
            <x-checkbox label="Кухня/міні-кухня" />
            <x-checkbox label="Санвузли" />
            <x-checkbox label="Переговорні кімнати" />
        </div>
    </div>

    <!-- Кабінетна система -->
    <div x-show="officeType === 'Кабінетна система'" x-transition class="mt-5 space-y-5">
        <div class="grid grid-cols-3 gap-5">
            <x-forms.input-number label="Кабінетів" wire:model="form.options.cabinets" />
            <x-forms.input-number label="Санвузлів" wire:model="form.options.toilets" />
        </div>

        <div class="text-black text-sm font-medium mt-5">Окремі зони</div>
        <div class="grid grid-cols-2 lg:grid-cols-3 gap-2.5">
            <x-checkbox label="Кухня / зона кави" />
            <x-checkbox label="Зона очікування" />
            <x-checkbox label="Серверна кімната" />
        </div>
    </div>

    <!-- Коворкінг -->
    <div x-show="officeType === 'Коворкінг'" x-transition class="mt-5 space-y-5">
        <div class="text-black text-sm font-medium">Зони прибирання</div>
        <div class="grid grid-cols-2 lg:grid-cols-3 gap-2.5">
            <x-checkbox label="Гнучкі робочі столи" />
            <x-checkbox label="Лаунж-зони" />
            <x-checkbox label="Малі переговорні" />
            <x-checkbox label="Івент-зона" />
            <x-checkbox label="Кухня / бар" />
            <x-checkbox label="Санвузли" />
        </div>
    </div>

    <!-- Частота прибирання -->
    <x-forms.select class="w-full lg:w-1/2 mt-5" placeholder="Частота прибирання" wire:model="form.options.frequency">
        <x-forms.select.item value="Одноразове" />
        <x-forms.select.item value="Щоденне" />
        <x-forms.select.item value="Щотижневе" />
        <x-forms.select.item value="Щомісячне" />
    </x-forms.select>

    <!-- Додаткові послуги -->
    <div class="text-black text-sm font-medium mt-5">Додаткові роботи</div>
    <div class="grid grid-cols-2 lg:grid-cols-3 gap-2.5">
        <x-checkbox label="Миття посуду" />
        <x-checkbox label="Винос сміття" />
        <x-checkbox label="Мийка вікон" />
        <x-checkbox label="Прибирання кухні" />
        <x-checkbox label="Дезінфекція поверхонь" class="col-span-2" />
        <x-checkbox label="Прибирання санвузлів" class="col-span-full" />
    </div>

    <!-- Рівень забруднення -->
    <x-range :positions="['Легке', 'Середнє', 'Сильне', 'Важке', 'Критичне']" class="mt-5" />
</div>
