<?php
use function Laravel\Folio\name;
name('services.promyslovyi-alpinizm');
?>

@extends('layouts.base')

@section('header')
    <x-page-header image="{{ Vite::asset('resources/images/breadcrumb-default.jpg') }}">
        <x-slot:title>Промисловий альпінізм</x-slot:title>

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
            <x-widgets.services-menu :current-service="App\Enums\ServiceEnum::INDUSTRIAL_ALPINISM" class="hidden md:block" />
            <x-widgets.consultation :service="App\Enums\ServiceEnum::INDUSTRIAL_ALPINISM->value" />
        </x-slot>

        <x-widgets.image-compare before="{{ Vite::asset('resources/images/section-background-04.jpg') }}"
            after="{{ Vite::asset('resources/images/header.webp') }}" />

        <p class="mt-10">
            Деякі види робіт на висоті неможливо виконати звичайними методами – саме тоді на допомогу приходять
            фахівці з промислового альпінізму. Висотні роботи вимагають професіоналізму, досвіду та спеціального
            обладнання, адже вони проводяться без використання будівельних лісів чи підйомників.
        </p>

        <x-table class="mt-5">
            <x-table.row>
                <x-table.cell class="font-semibold">Максимальна висота</x-table.cell>
                <x-table.cell>до 100 м <i>(залежно від об'єкта та умов)</i></x-table.cell>
            </x-table.row>

            <x-table.row>
                <x-table.cell class="font-semibold">Об’єкти</x-table.cell>
                <x-table.cell>Фасади, дахи, міжпанельні шви, конструкції, банери, вивіски</x-table.cell>
            </x-table.row>

            <x-table.row>
                <x-table.cell class="font-semibold">Тип робіт</x-table.cell>
                <x-table.cell>Мийка, герметизація, монтаж/демонтаж, очищення дахів, фарбування</x-table.cell>
            </x-table.row>

            <x-table.row>
                <x-table.cell class="font-semibold">Безпека</x-table.cell>
                <x-table.cell>Страхувальні системи, сертифіковані альпіністи</x-table.cell>
            </x-table.row>

            <x-table.row>
                <x-table.cell class="font-semibold">Обладнання</x-table.cell>
                <x-table.cell>Вертикальні страхувальні системи, мотузки, карабіни, спецодяг</x-table.cell>
            </x-table.row>

            <x-table.row>
                <x-table.cell class="font-semibold">Продуктивність</x-table.cell>
                <x-table.cell>10–50 м² фасаду/год (залежно від типу роботи)</x-table.cell>
            </x-table.row>

            <x-table.row>
                <x-table.cell class="font-semibold">Час виконання</x-table.cell>
                <x-table.cell>~1–8 годин/завдання залежно від складності</x-table.cell>
            </x-table.row>
        </x-table>

        <p class="mt-5">
            Наша команда кваліфікованих альпіністів виконує широкий спектр робіт: мийка фасадів, монтаж і демонтаж
            конструкцій, герметизація швів, очищення дахів від снігу та криги. Ми гарантуємо високу якість, безпеку
            та оперативність.
        </p>

        <div class="grid md:grid-cols-2 gap-5 mt-10">
            <div class="flex gap-2.5">
                <div class="size-15 flex-none rounded-full bg-green-500 flex justify-center items-center">
                    <x-lucide-building-2 class="size-7 stroke-black" stroke-width="1.5" />
                </div>
                <div>
                    <span class="text-xl font-medium font-[Oswald]">Мийка фасадів</span>
                    <p class="text-gray-600 text-sm">
                        Висотна мийка скла, фасадів, вікон — чисто і безпечено навіть на 30-му поверсі.
                    </p>
                </div>
            </div>

            <div class="flex gap-2.5">
                <div class="size-15 flex-none rounded-full bg-green-500 flex justify-center items-center">
                    <x-lucide-shield-check class="size-7 stroke-black" stroke-width="1.5" />
                </div>
                <div>
                    <span class="text-xl font-medium font-[Oswald]">Герметизація швів</span>
                    <p class="text-gray-600 text-sm">
                        Надійна ізоляція міжпанельних стиків — захист від вологи, холоду та протягів.
                    </p>
                </div>
            </div>

            <div class="flex gap-2.5">
                <div class="size-15 flex-none rounded-full bg-green-500 flex justify-center items-center">
                    <x-lucide-wrench class="size-7 stroke-black" stroke-width="1.5" />
                </div>
                <div>
                    <span class="text-xl font-medium font-[Oswald]">Монтаж і демонтаж</span>
                    <p class="text-gray-600 text-sm">
                        Встановлення банерів, вивісок, кондиціонерів — оперативно та без ризику.
                    </p>
                </div>
            </div>

            <div class="flex gap-2.5">
                <div class="size-15 flex-none rounded-full bg-green-500 flex justify-center items-center">
                    <x-lucide-snowflake class="size-7 stroke-black" stroke-width="1.5" />
                </div>
                <div>
                    <span class="text-xl font-medium font-[Oswald]">Очищення дахів</span>
                    <p class="text-gray-600 text-sm">
                        Безпечне видалення снігу, бурульок і криги з дахів будь-якої складності.
                    </p>
                </div>
            </div>
        </div>

        <div class="space-y-2.5 mt-10">
            <div class="font-bold font-[Oswald] text-2xl">Наші навички</div>
            <div class="w-full lg:w-3/4">
                <x-progressbar percentage="100" label="Мийка фасадів і вікон" />
            </div>
            <div class="w-full lg:w-3/4">
                <x-progressbar percentage="95" label="Герметизація міжпанельних швів" />
            </div>
            <div class="w-full lg:w-3/4">
                <x-progressbar percentage="90" label="Монтаж конструкцій" />
            </div>
            <div class="w-full lg:w-3/4">
                <x-progressbar percentage="85" label="Очищення дахів" />
            </div>
        </div>

        <x-tabs default-value="details" class="mt-10">
            <x-tabs.list>
                <x-tabs.trigger value="details" variant="green">Сервіс</x-tabs.trigger>
                <x-tabs.trigger value="gallery" variant="green">Галерея</x-tabs.trigger>
                <x-tabs.trigger value="faq" variant="green">FAQ</x-tabs.trigger>
            </x-tabs.list>

            <x-tabs.content value="details" class="md:grid md:grid-cols-2 md:gap-5 lg:flex lg:flex-col pt-5">
                <x-list type="check">
                    <x-slot:caption>
                        Що <span class="font-bold">входить</span> у <span class="text-tryit-orange">послугу</span>?
                    </x-slot:caption>
                    <x-list.item>Мийка фасадів та вікон на висоті</x-list.item>
                    <x-list.item>Монтаж і демонтаж банерів, вивісок, кондиціонерів</x-list.item>
                    <x-list.item>Герметизація міжпанельних швів</x-list.item>
                    <x-list.item>Очищення дахів від снігу та бурульок</x-list.item>
                    <x-list.item>Фарбування та ремонт фасадів</x-list.item>
                </x-list>

                <x-list type="check">
                    <x-slot:caption>
                        Кому <span class="font-bold">підходить</span> ця <span class="text-tryit-orange">послуга</span>?
                    </x-slot:caption>
                    <x-list.item>Офісним центрам та бізнес-комплексам</x-list.item>
                    <x-list.item>ТРЦ, магазинам, житловим комплексам</x-list.item>
                    <x-list.item>Будівельним компаніям</x-list.item>
                    <x-list.item>Державним установам і навчальним закладам</x-list.item>
                </x-list>

                <x-list type="check">
                    <x-slot:caption>
                        <span class="font-bold">Як</span> ми <span class="text-tryit-orange">працюємо</span>?
                    </x-slot:caption>
                    <x-list.item>Аналіз об’єкта та вибір обладнання</x-list.item>
                    <x-list.item>Встановлення страхувальних систем</x-list.item>
                    <x-list.item>Виконання робіт на висоті</x-list.item>
                    <x-list.item>Фінальна перевірка та очистка</x-list.item>
                </x-list>

                <x-list type="check">
                    <x-slot:caption>
                        Чому <span class="font-bold">варто</span> обрати <span class="text-tryit-orange">нас</span>?
                    </x-slot:caption>
                    <x-list.item>Сертифіковані альпіністи з досвідом</x-list.item>
                    <x-list.item>Безпечні технології та страхування</x-list.item>
                    <x-list.item>Висока якість навіть у важкодоступних місцях</x-list.item>
                    <x-list.item>Гнучкість і конкурентні ціни</x-list.item>
                </x-list>
            </x-tabs.content>

            <x-tabs.content value="gallery" class="pt-5">
                <div class="grid grid-cols-2 md:grid-cols-3 gap-5 mt-10">
                    <img src="{{ Vite::asset('resources/images/alpinism-1.jpg') }}" class="rounded-2xl"
                        alt="Промисловий альпінізм — фото 1">
                    <img src="{{ Vite::asset('resources/images/alpinism-2.jpg') }}" class="rounded-2xl"
                        alt="Промисловий альпінізм — фото 2">
                    <img src="{{ Vite::asset('resources/images/alpinism-3.jpg') }}" class="rounded-2xl"
                        alt="Промисловий альпінізм — фото 3">
                </div>
            </x-tabs.content>

            <x-tabs.content value="faq" class="pt-5">
                <x-accordion default-selected="1">
                    <x-accordion.item index="1">
                        <x-accordion.trigger index="1">
                            Які види висотних робіт ви виконуєте?
                        </x-accordion.trigger>
                        <x-accordion.content index="1">
                            Мийка фасадів, герметизація, монтаж/демонтаж, фарбування, очищення дахів.
                        </x-accordion.content>
                    </x-accordion.item>
                    <x-accordion.item index="2">
                        <x-accordion.trigger index="2">
                            Чи потрібен дозвіл для проведення робіт?
                        </x-accordion.trigger>
                        <x-accordion.content index="2">
                            Ні, усі наші альпіністи мають офіційні сертифікати та допуски.
                        </x-accordion.content>
                    </x-accordion.item>
                    <x-accordion.item index="3">
                        <x-accordion.trigger index="3">Чи працюєте ви у зимовий період?</x-accordion.trigger>
                        <x-accordion.content index="3">
                            Так, виконуємо очищення дахів від снігу, бурульок та льоду.
                        </x-accordion.content>
                    </x-accordion.item>
                    <x-accordion.item index="4">
                        <x-accordion.trigger index="4">Яка гарантія на виконані роботи?</x-accordion.trigger>
                        <x-accordion.content index="4">
                            Ми гарантуємо якість, безпеку та довговічність виконаних робіт.
                        </x-accordion.content>
                    </x-accordion.item>
                </x-accordion>
            </x-tabs.content>
        </x-tabs>

        <x-blockquote class="mt-10">
            <p>Замовте послугу промислового альпінізму вже сьогодні!</p>
            <p>Ми допоможемо вирішити будь-яке висотне завдання швидко, безпечно та якісно.
                Залиште заявку або зателефонуйте – і ми підготуємо для вас найкращу пропозицію!</p>
            <p>Промисловий альпінізм – безпечні рішення на висоті!</p>
        </x-blockquote>
    </x-section>
@endsection

@vite('resources/js/services.js')
