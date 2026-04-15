<div x-data="{ type: @entangle('form.options.rope_type') }">
    <div class="grid grid-cols-2 gap-5 lg:w-3/4 mt-5">
        <x-forms.input-number label="Висота будівлі" description="або іншої конструкції" prefix="(м.)"
            wire:model="options.height" />
        <x-forms.input-number label="Кількість поверхів" wire:model="options.floors" />
    </div>

    <!-- Тип робіт -->
    <x-forms.select class="w-full lg:w-2/3 mt-5" placeholder="Тип робіт" x-model="type"
        wire:model="form.options.rope_type">
        <x-forms.select.item value="Миття вікон/фасаду" />
        <x-forms.select.item value="Монтажні роботи" />
        <x-forms.select.item value="Демонтаж" />
        <x-forms.select.item value="Ремонт фасаду" />
        <x-forms.select.item value="Очищення дахів/карнизів" />
        <x-forms.select.item value="Інше" />
    </x-forms.select>

    <!-- Миття вікон / фасаду -->
    <div x-show="type === 'Миття вікон / фасаду'" x-transition class="mt-5">
        <div class="text-black text-sm font-medium mb-2.5">Тип поверхні</div>
        <div class="grid grid-cols-2 lg:grid-cols-3 gap-2.5">
            <x-checkbox label="Скло" />
            <x-checkbox label="Композит" />
            <x-checkbox label="Метал" />
            <x-checkbox label="Панелі" />
            <x-checkbox label="Бетон/штукатурка" />
        </div>

        <div class="text-black text-sm font-medium mt-5">Стан</div>
        <div class="grid grid-cols-2 lg:grid-cols-3 gap-2.5 mt-2.5">
            <x-checkbox label="Сильне забруднення" />
            <x-checkbox label="Пил після ремонту" />
            <x-checkbox label="Пташиний послід" />
            <x-checkbox label="Сліди від реклами" />
        </div>
    </div>

    <!-- Монтажні роботи -->
    <div x-show="type === 'Монтажні роботи'" x-transition class="mt-5 space-y-2.5">
        <div class="text-black text-sm font-medium">Тип обладнання</div>
        <div class="grid grid-cols-2 lg:grid-cols-3 gap-2.5">
            <x-checkbox label="Рекламні банери" />
            <x-checkbox label="Кондиціонери" />
            <x-checkbox label="Кронштейни" />
            <x-checkbox label="Кабелі/траси" />
            <x-checkbox label="Ліхтарі/освітлення" />
        </div>
    </div>

    <!-- Демонтаж -->
    <div x-show="type === 'Демонтаж'" x-transition class="mt-5 space-y-2.5">
        <div class="text-black text-sm font-medium">Особливості</div>
        <div class="grid grid-cols-2 lg:grid-cols-3 gap-2.5">
            <x-checkbox label="Важкодоступне місце" />
            <x-checkbox label="Потрібне різання" />
            <x-checkbox label="Потрібно винести сміття" />
        </div>
    </div>

    <!-- Ремонт фасаду -->
    <div x-show="type === 'Ремонт фасаду'" x-transition class="mt-5 space-y-2.5">
        <div class="text-black text-sm font-medium">Проблеми</div>
        <div class="grid grid-cols-2 lg:grid-cols-3 gap-2.5">
            <x-checkbox label="Тріщини" />
            <x-checkbox label="Корозія металу" />
            <x-checkbox label="Протікання" />
            <x-checkbox label="Відшарування штукатурки" />
        </div>
    </div>

    <!-- Очищення дахів, карнизів -->
    <div x-show="type === 'Очищення дахів / карнизів'" x-transition class="mt-5 space-y-2.5">
        <div class="text-black text-sm font-medium">Тип робіт</div>
        <div class="grid grid-cols-2 lg:grid-cols-3 gap-2.5">
            <x-checkbox label="Очищення снігу" />
            <x-checkbox label="Збивання бурульок" />
            <x-checkbox label="Очищення жолобів" />
            <x-checkbox label="Миття покриття" />
        </div>
    </div>
</div>
