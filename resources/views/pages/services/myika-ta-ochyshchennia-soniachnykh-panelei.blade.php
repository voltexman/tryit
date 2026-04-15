<?php
use function Laravel\Folio\name;
name(App\Enums\ServiceEnum::SOLAR_PANEL_CLEANING->link());
?>

@extends('layouts.base')

@section('header')
    <x-page-header image="{{ Vite::asset('resources/images/breadcrumb-default.jpg') }}">
        <x-slot:title>Миття сонячних панелей</x-slot:title>

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
            <x-widgets.services-menu :current-service="App\Enums\ServiceEnum::SOLAR_PANEL_CLEANING" class="hidden md:block" />
            <x-widgets.consultation :service="App\Enums\ServiceEnum::SOLAR_PANEL_CLEANING->value" />
        </x-slot>

        <x-widgets.image-compare before="{{ Vite::asset('resources/images/section-background-04.jpg') }}"
            after="{{ Vite::asset('resources/images/header.webp') }}" />

        <p class="mt-10">
            <x-marker>Сонячні панелі</x-marker> – це вигідна інвестиція в екологічну енергію, проте їхня
            ефективність напряму залежить від чистоти поверхні. Пил, бруд, пташиний послід, дощові сліди та сажа
            можуть зменшувати продуктивність системи до <b>30%</b>. Регулярне очищення допомагає зберегти
            максимальну ефективність і продовжує термін служби вашої станції.
        </p>

        <x-table class="mt-5">
            <x-table.row>
                <x-table.cell class="font-semibold">Тип очищення</x-table.cell>
                <x-table.cell>Безконтактне/м’які щітки</x-table.cell>
            </x-table.row>

            <x-table.row>
                <x-table.cell class="font-semibold">Вода</x-table.cell>
                <x-table.cell>0 ppm, без хімії</x-table.cell>
            </x-table.row>

            <x-table.row>
                <x-table.cell class="font-semibold">Макс. площа/год</x-table.cell>
                <x-table.cell>150–200 м²</x-table.cell>
            </x-table.row>

            <x-table.row>
                <x-table.cell class="font-semibold">Тип панелей</x-table.cell>
                <x-table.cell>Монокристалічні, полікристалічні, тонкоплівкові</x-table.cell>
            </x-table.row>

            <x-table.row>
                <x-table.cell class="font-semibold">Рекомендована частота</x-table.cell>
                <x-table.cell>2–4 рази/рік</x-table.cell>
            </x-table.row>

            <x-table.row>
                <x-table.cell class="font-semibold">Температура</x-table.cell>
                <x-table.cell>0–40°C</x-table.cell>
            </x-table.row>

            <x-table.row>
                <x-table.cell class="font-semibold">Мінімальне замовлення</x-table.cell>
                <x-table.cell>1 година роботи</x-table.cell>
            </x-table.row>

            <x-table.row>
                <x-table.cell class="font-semibold">Тиск води</x-table.cell>
                <x-table.cell>2–3 бар</x-table.cell>
            </x-table.row>

            <x-table.row>
                <x-table.cell class="font-semibold">Споживання води</x-table.cell>
                <x-table.cell>0.5–1.0 л/м²</x-table.cell>
            </x-table.row>

            <x-table.row>
                <x-table.cell class="font-semibold">Висота робочої зони</x-table.cell>
                <x-table.cell>1–3 м (залежно від установки)</x-table.cell>
            </x-table.row>
        </x-table>

        <p class="mt-5">
            Ми пропонуємо професійне миття сонячних панелей із використанням безпечних технологій та
            демінералізованої води. Наші спеціалісти мають досвід роботи з різними типами фотомодулів і знають, як
            забезпечити чистоту без подряпин чи пошкоджень.
        </p>

        <div class="grid md:grid-cols-2 gap-5 mt-10">
            <div class="flex gap-2.5">
                <div class="size-15 flex-none rounded-full bg-green-500 flex justify-center items-center">
                    <x-lucide-sun class="size-7 stroke-black" stroke-width="1.5" />
                </div>
                <div class="flex flex-col gap-1.5">
                    <span class="text-xl font-medium font-[Oswald]">Максимальна ефективність</span>
                    <span class="text-gray-600 text-sm">
                        Чисті панелі поглинають більше сонячного світла, що підвищує вироблення енергії.
                    </span>
                </div>
            </div>

            <div class="flex gap-2.5">
                <div class="size-15 flex-none rounded-full bg-green-500 flex justify-center items-center">
                    <x-lucide-shield-check class="size-7 stroke-black" stroke-width="1.5" />
                </div>
                <div class="flex flex-col gap-1.5">
                    <span class="text-xl font-medium font-[Oswald]">Безпечне очищення</span>
                    <span class="text-gray-600 text-sm">
                        Не використовуємо абразиви чи хімію — лише м’які щітки та демінералізовану воду.
                    </span>
                </div>
            </div>

            <div class="flex gap-2.5">
                <div class="size-15 flex-none rounded-full bg-green-500 flex justify-center items-center">
                    <x-lucide-leaf class="size-7 stroke-black" stroke-width="1.5" />
                </div>
                <div class="flex flex-col gap-1.5">
                    <span class="text-xl font-medium font-[Oswald]">Екологічно чисто</span>
                    <span class="text-gray-600 text-sm">
                        Вода без домішок не шкодить довкіллю та не залишає осаду на панелях.
                    </span>
                </div>
            </div>

            <div class="flex gap-x-2.5">
                <div class="size-15 flex-none rounded-full bg-green-500 flex justify-center items-center">
                    <x-lucide-badge-check class="size-7 stroke-black" stroke-width="1.5" />
                </div>
                <div class="flex flex-col gap-y-1.5">
                    <span class="text-xl font-medium font-[Oswald]">Гарантований результат</span>
                    <span class="text-gray-600 text-sm">
                        Контроль якості на кожному етапі — панелі працюють на 100%.
                    </span>
                </div>
            </div>
        </div>

        <div class="space-y-2.5 mt-10">
            <div class="font-bold font-[Oswald] text-2xl">Наш досвід</div>
            <div class="w-full lg:w-3/4">
                <x-progressbar percentage="95" label="Очищення фотоелементів" />
            </div>
            <div class="w-full lg:w-3/4">
                <x-progressbar percentage="90" label="Видалення пилу, сажі та бруду" />
            </div>
            <div class="w-full lg:w-3/4">
                <x-progressbar percentage="100" label="Безпека панелей під час миття" />
            </div>
            <div class="w-full lg:w-3/4">
                <x-progressbar percentage="85" label="Оптимізація продуктивності системи" />
            </div>
        </div>

        <x-tabs default-value="details" class="mt-10">
            <x-tabs.list>
                <x-tabs.trigger value="details" variant="green">Сервіс</x-tabs.trigger>
                <x-tabs.trigger value="gallery" variant="green">Галерея</x-tabs.trigger>
                <x-tabs.trigger value="faq" variant="green">FAQ</x-tabs.trigger>
            </x-tabs.list>

            <x-tabs.content value="details" class="pt-5">
                <x-list type="number" class="">
                    <x-slot:caption>
                        Чому важливо <span class="font-bold">регулярно</span><br> очищати <span
                            class="text-tryit-orange">сонячні панелі</span>?
                    </x-slot>
                    <x-list.item index="1">
                        <b>Збільшення продуктивності</b> – чисті панелі ефективніше перетворюють сонячне світло в
                        енергію.
                    </x-list.item>
                    <x-list.item index="2">
                        <b>Подовження терміну служби</b> – своєчасне очищення зменшує ризик перегріву та пошкодження
                        модулів.
                    </x-list.item>
                    <x-list.item index="3">
                        <b>Запобігання корозії</b> – пил і наліт можуть руйнувати захисний шар поверхні.
                    </x-list.item>
                    <x-list.item index="4">
                        <b>Зменшення витрат</b> – доглянуті панелі рідше потребують ремонту чи заміни.
                    </x-list.item>
                </x-list>

                <x-list type="check">
                    <x-slot:caption>
                        Як <span class="font-bold">ми працюємо</span>?
                    </x-slot>
                    <x-list.item>
                        <b>Діагностика стану</b> – оцінюємо рівень забруднення та обираємо оптимальний метод
                        очищення.
                    </x-list.item>
                    <x-list.item>
                        <b>Миття панелей</b> – використовуємо демінералізовану воду та м’які щітки.
                    </x-list.item>
                    <x-list.item>
                        <b>Перевірка результату</b> – контролюємо ефективність після очищення.
                    </x-list.item>
                    <x-list.item>
                        <b>Рекомендації</b> – надаємо поради з догляду й періодичності обслуговування.
                    </x-list.item>
                </x-list>

                <x-list type="check">
                    <x-slot:caption>
                        Які <span class="font-bold">об'єкти</span><br> ми
                        <span class="text-tryit-orange">обслуговуємо</span>?
                    </x-slot>
                    <x-list.item>Приватні будинки та дачі</x-list.item>
                    <x-list.item>Бізнес-центри та офіси</x-list.item>
                    <x-list.item>Промислові підприємства</x-list.item>
                    <x-list.item>Сільськогосподарські комплекси</x-list.item>
                    <x-list.item>Автономні сонячні станції</x-list.item>
                </x-list>

                <x-list type="number">
                    <x-slot:caption>
                        Чому варто <span class="font-bold">обрати</span> <span class="text-tryit-orange">нас</span>?
                    </x-slot>
                    <x-list.item index="1">
                        <b>Безконтактне очищення</b> – без агресивних засобів, без ризику подряпин.
                    </x-list.item>
                    <x-list.item index="2">
                        <b>Сучасне обладнання</b> – професійні щітки, демінералізована вода, контроль тиску.
                    </x-list.item>
                    <x-list.item index="3">
                        <b>Досвідчені фахівці</b> – знаємо особливості різних типів панелей.
                    </x-list.item>
                    <x-list.item index="4">
                        <b>Гарантований результат</b> – чистота без плям і розводів.
                    </x-list.item>
                    <x-list.item index="5">
                        <b>Гнучкий графік</b> – працюємо у зручний для вас час.
                    </x-list.item>
                </x-list>
            </x-tabs.content>

            <x-tabs.content value="gallery" class="pt-5">
                <div class="grid lg:grid-cols-3 gap-5 mt-10">
                    <img src="{{ Vite::asset('resources/images/solar-clean-1.jpg') }}" class="rounded-2xl"
                        alt="">
                    <img src="{{ Vite::asset('resources/images/solar-clean-2.jpg') }}" class="rounded-2xl"
                        alt="">
                    <img src="{{ Vite::asset('resources/images/solar-clean-3.jpg') }}" class="rounded-2xl"
                        alt="">
                </div>
            </x-tabs.content>

            <x-tabs.content value="faq" class="pt-5">
                <x-accordion>
                    <x-accordion.item index="1">
                        <x-accordion.trigger index="1" class="px-0!">
                            Як часто потрібно мити сонячні панелі?
                        </x-accordion.trigger>
                        <x-accordion.content index="1" class="px-0!">
                            Залежно від місця розташування, рекомендовано проводити очищення 2–4 рази на рік.
                            Якщо поруч дороги або промислові зони — частіше.
                        </x-accordion.content>
                    </x-accordion.item>

                    <x-accordion.item index="2">
                        <x-accordion.trigger index="2" class="px-0!">
                            Чи можна мити панелі самостійно?
                        </x-accordion.trigger>
                        <x-accordion.content index="2" class="px-0!">
                            Не радимо. Використання звичайної води або жорстких щіток може залишити плями й
                            подряпини, що знижують ефективність. Ми застосовуємо професійне обладнання.
                        </x-accordion.content>
                    </x-accordion.item>

                    <x-accordion.item index="3">
                        <x-accordion.trigger index="3" class="px-0!">
                            Чи потрібно вимикати станцію під час миття?
                        </x-accordion.trigger>
                        <x-accordion.content index="3" class="px-0!">
                            Ні, ми виконуємо миття без відключення системи, дотримуючись усіх норм безпеки.
                        </x-accordion.content>
                    </x-accordion.item>

                    <x-accordion.item index="4">
                        <x-accordion.trigger index="4" class="px-0!">
                            Чи впливає очищення на гарантію панелей?
                        </x-accordion.trigger>
                        <x-accordion.content index="4" class="px-0!">
                            Ні, наш метод є повністю безпечним і відповідає вимогам виробників сонячних панелей.
                        </x-accordion.content>
                    </x-accordion.item>

                    <x-accordion.item index="5">
                        <x-accordion.trigger index="5" class="px-0!">
                            Скільки часу займає очищення?
                        </x-accordion.trigger>
                        <x-accordion.content index="5" class="px-0!">
                            Зазвичай від 1 до 3 годин, залежно від площі станції та рівня забруднення.
                        </x-accordion.content>
                    </x-accordion.item>
                </x-accordion>
            </x-tabs.content>
        </x-tabs>

        <x-blockquote class="mt-10">
            <p>Замовте очищення сонячних панелей вже сьогодні!</p>
            <p>Поверніть своїм батареям максимальну продуктивність — залиште заявку на сайті або телефонуйте нам, і ми
                розрахуємо вартість послуги спеціально для вас.</p>
            <p>Ваші панелі працюватимуть на 100% — довірте їх очищення професіоналам!</p>
        </x-blockquote>
    </x-section>
@endsection

@vite('resources/js/services.js')
