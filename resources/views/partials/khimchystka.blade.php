<div x-data="{ type: @entangle('form.options.clean_type') }">

    <!-- Тип об’єкта хімчистки -->
    <x-forms.select class="w-full lg:w-2/3 mt-5" placeholder="Тип хімчистки" x-model="type"
        wire:model="form.options.clean_type">
        <x-forms.select.item value="М’які меблі" />
        <x-forms.select.item value="Килими та килимові покриття" />
        <x-forms.select.item value="Матрац" />
        <x-forms.select.item value="Автомобільний салон" />
        <x-forms.select.item value="Інше" />
    </x-forms.select>

    <!-- М’які меблі -->
    <div x-show="type === 'М’які меблі'" x-transition class="mt-5 space-y-5">
        <div class="grid grid-cols-2 gap-5">
            <x-forms.input-number label="Кількість" wire:model="options.units" />
        </div>

        <div class="space-y-2.5">
            <div class="text-black text-sm font-medium">Тип меблів</div>
            <div class="grid grid-cols-2 lg:grid-cols-3 gap-2.5">
                <x-checkbox label="Диван" />
                <x-checkbox label="Крісло" />
                <x-checkbox label="Кутовий диван" />
                <x-checkbox label="Пуф" />
                <x-checkbox label="Кухонний стілець" />
                <x-checkbox label="Офісне крісло" />
            </div>
        </div>

        <div class="space-y-2.5">
            <div class="text-black text-sm font-medium">Деталі стану</div>
            <div class="grid grid-cols-2 lg:grid-cols-3 gap-2.5">
                <x-checkbox label="Плями від рідин" />
                <x-checkbox label="Шерсть тварин" />
                <x-checkbox label="Неприємний запах" />
                <x-checkbox label="Делікатна тканина" />
            </div>
        </div>
    </div>

    <!-- Килими -->
    <div x-show="type === 'Килими та килимові покриття'" x-transition class="mt-5 space-y-5">
        <div class="grid grid-cols-3 gap-5">
            <x-forms.input-number label="Кількість" wire:model="options.carpet_count" />
            <x-forms.input-number label="Площа" wire:model="options.total_area" />
            <x-forms.input-number label="Товщина" wire:model="options.pile_height" />
        </div>

        <div class="space-y-2.5">
            <div class="text-black text-sm font-medium">Тип килима</div>
            <div class="grid grid-cols-2 lg:grid-cols-3 gap-2.5">
                <x-checkbox label="Синтетичний" />
                <x-checkbox label="Вовняний" />
                <x-checkbox label="Високий ворс" />
                <x-checkbox label="Безворсовий" />
            </div>
        </div>

        <div class="space-y-2.5">
            <div class="text-black text-sm font-medium">Стан</div>
            <div class="grid grid-cols-2 lg:grid-cols-3 gap-2.5">
                <x-checkbox label="Плями" />
                <x-checkbox label="Запах" />
                <x-checkbox label="Волосся тварин" />
                <x-checkbox label="Сліди від меблів" />
            </div>
        </div>
    </div>

    <!-- Матрац -->
    <div x-show="type === 'Матрац'" x-transition class="mt-5 space-y-5">
        <div class="grid grid-cols-3 gap-5 mt-5">
            <x-forms.input-number label="Товщина" prefix="(см)" wire:model="options.mattress_thickness" />
            <x-forms.input-number label="Довжина" prefix="(см)" wire:model="options.mattress_length" />
            <x-forms.input-number label="Ширина" prefix="(см)" wire:model="options.mattress_width" />
        </div>

        <div class="space-y-2.5">
            <div class="text-black text-sm font-medium">Тип матраца</div>
            <div class="grid grid-cols-2 lg:grid-cols-3 gap-2.5">
                <x-checkbox label="Односпальний" />
                <x-checkbox label="Двоспальний" />
                <x-checkbox label="Дитячий" />
                <x-checkbox label="Топпер" />
            </div>
        </div>

        <div class="space-y-2.5">
            <div class="text-black text-sm font-medium">Проблеми</div>
            <div class="grid grid-cols-2 lg:grid-cols-3 gap-2.5">
                <x-checkbox label="Сліди рідин" />
                <x-checkbox label="Запах" />
                <x-checkbox label="Плями" />
                <x-checkbox label="Алергени" />
            </div>
        </div>
    </div>

    <!-- Автомобільний салон -->
    <div x-show="type === 'Автомобільний салон'" x-transition class="mt-5 space-y-5">
        <div class="grid grid-cols-2 lg:grid-cols-3 gap-5">
            <x-forms.input-number label="Кількість місць" wire:model="options.seats" />
            <x-forms.input-number label="Рік виготовлення" wire:model="options.car_year" />
        </div>

        <div class="space-y-2.5">
            <div class="text-black text-sm font-medium">Що потрібно очистити</div>
            <div class="grid grid-cols-2 lg:grid-cols-3 gap-2.5">
                <x-checkbox label="Сидіння" />
                <x-checkbox label="Підлога" />
                <x-checkbox label="Стеля" />
                <x-checkbox label="Багажник" />
                <x-checkbox label="Панелі та пластик" />
            </div>
        </div>

        <div class="space-y-2.5">
            <div class="text-black text-sm font-medium">Матеріали</div>
            <div class="grid grid-cols-2 gap-2.5">
                <x-checkbox label="Тканина" />
                <x-checkbox label="Шкіра" />
            </div>
        </div>

        <div class="space-y-2.5">
            <div class="text-black text-sm font-medium">Проблеми</div>
            <div class="grid grid-cols-2 lg:grid-cols-3 gap-2.5">
                <x-checkbox label="Запах" />
                <x-checkbox label="Плями" />
                <x-checkbox label="Після тварин" />
            </div>
        </div>
    </div>
</div>

<x-range :positions="['Легке', 'Середнє', 'Сильне', 'Важке', 'Критичне']" class="mt-5" />
