<?php
use function Laravel\Folio\name;
name('services.khimchystka');
?>

@extends('layouts.base')

@section('header')
    <x-page-header image="{{ Vite::asset('resources/images/breadcrumb-default.jpg') }}">
        <x-slot:title>Професійна хімчистка</x-slot:title>

        <x-slot:breadcrumbs>
            <x-breadcrumbs>
                <x-breadcrumbs.item icon="house" href="{{ route('main') }}" />
                <x-breadcrumbs.separator />
                <x-breadcrumbs.item icon="concierge-bell" href="{{ route('services') }}">Послуги</x-breadcrumbs.item>
            </x-breadcrumbs>
        </x-slot:breadcrumbs>
    </x-page-header>
@endsection

@section('content')
    <x-section orientation="left">
        <x-slot:sidebar class="space-y-10 flex md:flex-row lg:flex-col gap-5">
            <x-widgets.services-menu :current-service="App\Enums\ServiceEnum::DRY_CLEANING" class="hidden md:block" />
            <x-widgets.consultation :service="App\Enums\ServiceEnum::DRY_CLEANING->value" />
        </x-slot>

        <x-widgets.image-compare before="{{ Vite::asset('resources/images/section-background-04.jpg') }}"
            after="{{ Vite::asset('resources/images/header.webp') }}" />

        <p class="mt-10">
            <x-marker>Звичайне прибирання</x-marker> не завжди здатне впоратися зі складними плямами, пилом і
            неприємними запахами. Тканинні поверхні, меблі, килими та автомобільні салони потребують глибокого
            очищення, яке усуне не лише забруднення, а й бактерії та алергени.
        </p>

        <x-table striped>
            <x-table.row>
                <x-table.cell class="font-semibold">Тип послуги</x-table.cell>
                <x-table.cell>Хімчистка тканин та меблів</x-table.cell>
            </x-table.row>

            <x-table.row>
                <x-table.cell class="font-semibold">Об’єкти</x-table.cell>
                <x-table.cell>Меблі, килими, штори, пледи, салони авто</x-table.cell>
            </x-table.row>

            <x-table.row>
                <x-table.cell class="font-semibold">Метод очищення</x-table.cell>
                <x-table.cell>Екстракційний, пінний, ручний</x-table.cell>
            </x-table.row>

            <x-table.row>
                <x-table.cell class="font-semibold">Час виконання</x-table.cell>
                <x-table.cell>30–120 хв залежно від об’єкта</x-table.cell>
            </x-table.row>

            <x-table.row>
                <x-table.cell class="font-semibold">Сушка</x-table.cell>
                <x-table.cell>Швидка, 1–3 години без запаху</x-table.cell>
            </x-table.row>

            <x-table.row>
                <x-table.cell class="font-semibold">Продуктивність</x-table.cell>
                <x-table.cell>~1–3 м²/год <i>(залежно від типу поверхні)</i></x-table.cell>
            </x-table.row>

            <x-table.row>
                <x-table.cell class="font-semibold">Мінімальне замовлення</x-table.cell>
                <x-table.cell>1 одиниця об’єкта або від 30 хв роботи</x-table.cell>
            </x-table.row>
        </x-table>

        <p class="mt-10">
            Ми пропонуємо професійну хімчистку, яка поверне вашим речам первозданну чистоту та свіжість.
            Використовуємо безпечні мийні засоби, що не шкодять тканинам та навколишньому середовищу.
        </p>

        {{-- 4 Іконки --}}
        <div class="grid md:grid-cols-2 gap-5 mt-10">
            <div class="flex gap-2.5">
                <div class="size-15 flex-none rounded-full bg-green-500 flex justify-center items-center">
                    <x-lucide-sofa class="size-7 stroke-black" stroke-width="1.5" />
                </div>
                <div class="flex flex-col gap-1.5">
                    <span class="text-xl font-medium font-[Oswald]">Хімчистка меблів</span>
                    <span class="text-gray-600 text-sm">
                        Очищення диванів, крісел, матраців і офісних стільців від плям і запахів.
                    </span>
                </div>
            </div>

            <div class="flex gap-2.5">
                <div class="size-15 flex-none rounded-full bg-green-500 flex justify-center items-center">
                    <x-lucide-car class="size-7 stroke-black" stroke-width="1.5" />
                </div>
                <div class="flex flex-col gap-1.5">
                    <span class="text-xl font-medium font-[Oswald]">Хімчистка авто</span>
                    <span class="text-gray-600 text-sm">
                        Глибоке очищення салону автомобіля — сидіння, оббивка, килимки, багажник.
                    </span>
                </div>
            </div>

            <div class="flex gap-2.5">
                <div class="size-15 flex-none rounded-full bg-green-500 flex justify-center items-center">
                    <x-lucide-brush class="size-7 stroke-black" stroke-width="1.5" />
                </div>
                <div class="flex flex-col gap-1.5">
                    <span class="text-xl font-medium font-[Oswald]">Очищення килимів</span>
                    <span class="text-gray-600 text-sm">
                        Видалення пилу, плям, запахів і пилових кліщів з будь-яких килимових покриттів.
                    </span>
                </div>
            </div>

            <div class="flex gap-x-2.5">
                <div class="size-15 flex-none rounded-full bg-green-500 flex justify-center items-center">
                    <x-lucide-flask-conical class="size-7 stroke-black" stroke-width="1.5" />
                </div>
                <div class="flex flex-col gap-y-1.5">
                    <span class="text-xl font-medium font-[Oswald]">Безпечна хімія</span>
                    <span class="text-gray-600 text-sm">
                        Екологічні засоби, безпечні для людей, дітей, тварин і тканин.
                    </span>
                </div>
            </div>
        </div>

        {{-- Прогресбари --}}
        <div class="space-y-2.5 mt-10">
            <div class="font-bold font-[Oswald] text-2xl">Наші навички</div>
            <div class="w-full lg:w-3/4">
                <x-progressbar percentage="95" label="Глибоке очищення тканин і меблів" />
            </div>
            <div class="w-full lg:w-3/4">
                <x-progressbar percentage="90" label="Видалення плям і запахів" />
            </div>
            <div class="w-full lg:w-3/4">
                <x-progressbar percentage="85" label="Антиалергенна обробка" />
            </div>
            <div class="w-full lg:w-3/4">
                <x-progressbar percentage="100" label="Безпечні миючі засоби" />
            </div>
        </div>

        {{-- Tabs --}}
        <x-tabs default-value="details" class="mt-10">
            <x-tabs.list>
                <x-tabs.trigger value="details" variant="green">Сервіс</x-tabs.trigger>
                <x-tabs.trigger value="gallery" variant="green">Галерея</x-tabs.trigger>
                <x-tabs.trigger value="faq" variant="green">FAQ</x-tabs.trigger>
            </x-tabs.list>

            {{-- DETAILS --}}
            <x-tabs.content value="details">
                <x-list type="check" class="mt-10">
                    <x-slot:caption>
                        Що <span class="font-bold">входить</span> у <span class="text-tryit-orange">послугу</span>?
                    </x-slot:caption>
                    <x-list.item><b>Хімчистка меблів</b> – диванів, крісел, матраців, офісних стільців</x-list.item>
                    <x-list.item><b>Хімчистка килимів та покриттів</b> – видалення плям, пилу, пилових
                        кліщів</x-list.item>
                    <x-list.item><b>Хімчистка авто</b> – очищення сидінь, оббивки, килимків</x-list.item>
                    <x-list.item><b>Чистка текстилю</b> – штор, гардин, пледів</x-list.item>
                    <x-list.item><b>Антиалергенна обробка</b> – знищення кліщів, бактерій, грибків</x-list.item>
                    <x-list.item><b>Безпечні засоби</b> – екологічна чистка без агресивних хімікатів</x-list.item>
                </x-list>

                <x-list type="check" class="mt-8">
                    <x-slot:caption>
                        Кому <span class="font-bold">потрібна</span> ця <span class="text-tryit-orange">послуга</span>?
                    </x-slot:caption>
                    <x-list.item><b>Власникам квартир</b> – для підтримання свіжості та чистоти</x-list.item>
                    <x-list.item><b>Офісам, ресторанам, готелям</b> – для догляду за меблями</x-list.item>
                    <x-list.item><b>Автовласникам</b> – для очищення салону</x-list.item>
                    <x-list.item><b>Алергікам</b> – для зменшення пилу та алергенів</x-list.item>
                </x-list>

                <x-list type="check" class="mt-8">
                    <x-slot:caption>
                        <span class="font-bold">Як</span> ми <span class="text-tryit-orange">працюємо</span>?
                    </x-slot:caption>
                    <x-list.item><b>Оцінка стану</b> – визначаємо тип забруднень.</x-list.item>
                    <x-list.item><b>Попередня обробка</b> – наносимо спеціальні засоби.</x-list.item>
                    <x-list.item><b>Глибоке очищення</b> – екстракційна або пінна чистка.</x-list.item>
                    <x-list.item><b>Сушка</b> – швидке висихання без запахів.</x-list.item>
                </x-list>

                <x-list type="check" class="mt-8">
                    <x-slot:caption>
                        Чому <span class="font-bold">обирають</span> <span class="text-tryit-orange">нас</span>?
                    </x-slot:caption>
                    <x-list.item><b>Глибоке очищення</b> – видаляємо складні плями</x-list.item>
                    <x-list.item><b>Швидке висихання</b> – результат за кілька годин</x-list.item>
                    <x-list.item><b>Безпечні засоби</b> – підходять для алергіків</x-list.item>
                    <x-list.item><b>Збереження кольору</b> – тканини залишаються м’якими</x-list.item>
                    <x-list.item>Доступні ціни та індивідуальний підхід</x-list.item>
                </x-list>
            </x-tabs.content>

            {{-- GALLERY --}}
            <x-tabs.content value="gallery">
                <div class="grid grid-cols-2 md:grid-cols-3 gap-5 mt-10">
                    <img src="{{ Vite::asset('resources/images/clean-1.jpg') }}" class="rounded-2xl"
                        alt="Хімчистка меблів — фото 1">
                    <img src="{{ Vite::asset('resources/images/clean-2.jpg') }}" class="rounded-2xl"
                        alt="Хімчистка килимів — фото 2">
                    <img src="{{ Vite::asset('resources/images/clean-3.jpg') }}" class="rounded-2xl"
                        alt="Хімчистка авто — фото 3">
                </div>
            </x-tabs.content>

            {{-- FAQ --}}
            <x-tabs.content value="faq" class="mt-10">
                <x-accordion>
                    <x-accordion.item index="1">
                        <x-accordion.trigger index="1" class="px-0!">
                            Скільки часу займає хімчистка меблів?
                        </x-accordion.trigger>
                        <x-accordion.content index="1" class="px-0!">
                            Залежно від розміру та ступеня забруднення — від 1 до 3 годин. Меблі висихають за 3–6
                            годин.
                        </x-accordion.content>
                    </x-accordion.item>

                    <x-accordion.item index="2">
                        <x-accordion.trigger index="2" class="px-0!">
                            Чи безпечні ваші засоби?
                        </x-accordion.trigger>
                        <x-accordion.content index="2" class="px-0!">
                            Так, ми використовуємо лише сертифіковану, гіпоалергенну хімію, безпечну для дітей та
                            тварин.
                        </x-accordion.content>
                    </x-accordion.item>

                    <x-accordion.item index="3">
                        <x-accordion.trigger index="3" class="px-0!">
                            Чи можна проводити хімчистку вдома?
                        </x-accordion.trigger>
                        <x-accordion.content index="3" class="px-0!">
                            Так, ми приїжджаємо на місце зі всім необхідним обладнанням — послуга виконується у вас
                            вдома або в офісі.
                        </x-accordion.content>
                    </x-accordion.item>

                    <x-accordion.item index="4">
                        <x-accordion.trigger index="4" class="px-0!">
                            Чи залишаються запахи після чистки?
                        </x-accordion.trigger>
                        <x-accordion.content index="4" class="px-0!">
                            Ні, після висихання меблі мають лише легкий аромат свіжості — без хімічних запахів.
                        </x-accordion.content>
                    </x-accordion.item>

                    <x-accordion.item index="5">
                        <x-accordion.trigger index="5" class="px-0!">
                            Як замовити хімчистку?
                        </x-accordion.trigger>
                        <x-accordion.content index="5" class="px-0!">
                            Залиште заявку на сайті або зателефонуйте — ми погодимо час, вид робіт і приїдемо в
                            зручний день.
                        </x-accordion.content>
                    </x-accordion.item>
                </x-accordion>
            </x-tabs.content>
        </x-tabs>

        <x-blockquote class="mt-10">
            <p>Замовте хімчистку вже сьогодні!</p>
            <p>Подаруйте вашим меблям, килимам і автомобілю друге життя! Оформіть заявку на сайті або
                зателефонуйте, і ми повернемо вашим речам ідеальну чистоту та свіжість.</p>
            <p>Чистота, комфорт і здоров'я – це просто!</p>
        </x-blockquote>
    </x-section>
@endsection

@vite('resources/js/services.js')
