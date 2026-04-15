<?php
use function Laravel\Folio\name;
name('services.kompleksne-ta-pidtrymuiuche-prybyrannia-ofisu');
?>

@extends('layouts.base')

@section('header')
    <x-page-header image="{{ Vite::asset('resources/images/breadcrumb-default.jpg') }}">
        <x-slot:title>Прибирання офісних приміщень</x-slot:title>

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
            <x-widgets.services-menu :current-service="App\Enums\ServiceEnum::OFFICE_CLEANING" class="hidden md:block" />
            <x-widgets.consultation :service="App\Enums\ServiceEnum::OFFICE_CLEANING->value" />
        </x-slot>

        <x-widgets.image-compare before="{{ Vite::asset('resources/images/section-background-04.jpg') }}"
            after="{{ Vite::asset('resources/images/header.webp') }}" />

        <p class="mt-10">
            <x-marker>Чистий і доглянутий офіс</x-marker> – це не лише приємна атмосфера для співробітників, а й
            важливий іміджевий фактор для клієнтів та партнерів. Регулярне прибирання допомагає підтримувати
            порядок, свіжість повітря та гігієну робочого простору, що сприяє підвищенню продуктивності та
            комфорту працівників.
        </p>

        <x-table striped>
            <x-table.row>
                <x-table.cell class="font-semibold">Тип прибирання</x-table.cell>
                <x-table.cell>Комплексне та підтримуюче</x-table.cell>
            </x-table.row>

            <x-table.row>
                <x-table.cell class="font-semibold">Об’єкти</x-table.cell>
                <x-table.cell>Офіси, бізнес-центри, коворкінги, магазини, студії</x-table.cell>
            </x-table.row>

            <x-table.row>
                <x-table.cell class="font-semibold">Частота</x-table.cell>
                <x-table.cell>Щоденно, 2–3 рази на тиждень або за графіком</x-table.cell>
            </x-table.row>

            <x-table.row>
                <x-table.cell class="font-semibold">Зони очищення</x-table.cell>
                <x-table.cell>Підлоги, меблі, техніка, санвузли, кухні, вікна</x-table.cell>
            </x-table.row>

            <x-table.row>
                <x-table.cell class="font-semibold">Засоби</x-table.cell>
                <x-table.cell>Еко-сертифіковані, безпечні для людей та обладнання</x-table.cell>
            </x-table.row>

            <x-table.row>
                <x-table.cell class="font-semibold">Час виконання</x-table.cell>
                <x-table.cell>30–120 хв/100 м² залежно від площі та складності</x-table.cell>
            </x-table.row>

            <x-table.row>
                <x-table.cell class="font-semibold">Винесення сміття</x-table.cell>
                <x-table.cell>Регулярна заміна пакетів, сортування, вивіз за домовленістю</x-table.cell>
            </x-table.row>

            <x-table.row>
                <x-table.cell class="font-semibold">Контроль якості</x-table.cell>
                <x-table.cell>Перевірка після кожного прибирання керівником бригади</x-table.cell>
            </x-table.row>

            <x-table.row>
                <x-table.cell class="font-semibold">Продуктивність</x-table.cell>
                <x-table.cell>100–300 м²/год залежно від типу приміщення</x-table.cell>
            </x-table.row>
        </x-table>

        <p class="mt-10">
            Ми пропонуємо комплексне та підтримуюче прибирання офісних приміщень, яке включає всі необхідні
            послуги для забезпечення чистоти та затишку у вашому робочому просторі.
        </p>

        {{-- 4 Іконки --}}
        <div class="grid md:grid-cols-2 gap-5 mt-10">
            <div class="flex gap-2.5">
                <div class="size-15 flex-none rounded-full bg-green-500 flex justify-center items-center">
                    <x-lucide-briefcase class="size-7 stroke-black" stroke-width="1.5" />
                </div>
                <div>
                    <span class="text-xl font-medium font-[Oswald]">Регулярне прибирання</span>
                    <p class="text-gray-600 text-sm">
                        Щоденне або планове прибирання приміщень – чистота без перерв.
                    </p>
                </div>
            </div>

            <div class="flex gap-2.5">
                <div class="size-15 flex-none rounded-full bg-green-500 flex justify-center items-center">
                    <x-lucide-sparkles class="size-7 stroke-black" stroke-width="1.5" />
                </div>
                <div>
                    <span class="text-xl font-medium font-[Oswald]">Дезінфекція та гігієна</span>
                    <p class="text-gray-600 text-sm">
                        Обробка санвузлів, кухонь, робочих зон – для безпечного середовища.
                    </p>
                </div>
            </div>

            <div class="flex gap-2.5">
                <div class="size-15 flex-none rounded-full bg-green-500 flex justify-center items-center">
                    <x-lucide-recycle class="size-7 stroke-black" stroke-width="1.5" />
                </div>
                <div>
                    <span class="text-xl font-medium font-[Oswald]">Винесення сміття</span>
                    <p class="text-gray-600 text-sm">
                        Регулярна заміна пакетів, сортування відходів, підтримка порядку.
                    </p>
                </div>
            </div>

            <div class="flex gap-2.5">
                <div class="size-15 flex-none rounded-full bg-green-500 flex justify-center items-center">
                    <x-lucide-leaf class="size-7 stroke-black" stroke-width="1.5" />
                </div>
                <div>
                    <span class="text-xl font-medium font-[Oswald]">Еко-засоби</span>
                    <p class="text-gray-600 text-sm">
                        Використовуємо лише безпечні, сертифіковані засоби без агресивної хімії.
                    </p>
                </div>
            </div>
        </div>

        {{-- Прогресбари --}}
        <div class="space-y-2.5 mt-10">
            <div class="font-bold font-[Oswald] text-2xl">Наші навички</div>
            <div class="w-full lg:w-3/4">
                <x-progressbar percentage="100" label="Регулярне прибирання офісів" />
            </div>
            <div class="w-full lg:w-3/4">
                <x-progressbar percentage="95" label="Дезінфекція і гігієна" />
            </div>
            <div class="w-full lg:w-3/4">
                <x-progressbar percentage="90" label="Очищення техніки та меблів" />
            </div>
            <div class="w-full lg:w-3/4">
                <x-progressbar percentage="85" label="Використання еко-засобів" />
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
                    <x-list.item>
                        Щоденне або планове прибирання – підмітання, миття підлоги, видалення пилу
                    </x-list.item>
                    <x-list.item>Очищення меблів та техніки – столи, стільці, оргтехніка</x-list.item>
                    <x-list.item>Винесення сміття та заміна пакетів</x-list.item>
                    <x-list.item>Миття вікон і скляних перегородок</x-list.item>
                    <x-list.item>Дезінфекція санвузлів і кухонь</x-list.item>
                    <x-list.item>Догляд за рослинами (за бажанням)</x-list.item>
                </x-list>

                <x-list type="check" class="mt-8">
                    <x-slot:caption>
                        Кому <span class="font-bold">підходить</span> ця <span class="text-tryit-orange">послуга</span>?
                    </x-slot:caption>
                    <x-list.item>Офісам, бізнес-центрам і коворкінгам</x-list.item>
                    <x-list.item>Магазинам, салонам краси, клінікам</x-list.item>
                    <x-list.item>Державним установам і навчальним закладам</x-list.item>
                    <x-list.item>Приватним студіям і агентствам</x-list.item>
                </x-list>

                <x-list type="check" class="mt-8">
                    <x-slot:caption>
                        <span class="font-bold">Як</span> ми <span class="text-tryit-orange">працюємо</span>?
                    </x-slot:caption>
                    <x-list.item>Консультація та підбір графіка</x-list.item>
                    <x-list.item>Дбайливе прибирання з урахуванням особливостей офісу</x-list.item>
                    <x-list.item>Використання екологічних засобів</x-list.item>
                    <x-list.item>Контроль якості після кожного прибирання</x-list.item>
                </x-list>

                <x-list type="check" class="mt-8">
                    <x-slot:caption>
                        Чому <span class="font-bold">обирають</span> <span class="text-tryit-orange">нас</span>?
                    </x-slot:caption>
                    <x-list.item>Гнучкий графік — щоденне чи разове прибирання</x-list.item>
                    <x-list.item>Професійні засоби та техніка</x-list.item>
                    <x-list.item>Досвідчені працівники</x-list.item>
                    <x-list.item>Гарантія чистоти та свіжості</x-list.item>
                </x-list>
            </x-tabs.content>

            {{-- GALLERY --}}
            <x-tabs.content value="gallery">
                <div class="grid grid-cols-2 md:grid-cols-3 gap-5 mt-10">
                    {{-- <img src="{{ Vite::asset('resources/images/office-clean-1.jpg') }}" class="rounded-2xl"
                        alt="Прибирання офісу — фото 1">
                    <img src="{{ Vite::asset('resources/images/office-clean-2.jpg') }}" class="rounded-2xl"
                        alt="Прибирання офісу — фото 2">
                    <img src="{{ Vite::asset('resources/images/office-clean-3.jpg') }}" class="rounded-2xl"
                        alt="Прибирання офісу — фото 3"> --}}
                </div>
            </x-tabs.content>

            {{-- FAQ --}}
            <x-tabs.content value="faq" class="mt-10">
                <x-accordion>
                    <x-accordion.item index="1">
                        <x-accordion.trigger index="1">
                            Як часто потрібно проводити прибирання офісу?
                        </x-accordion.trigger>
                        <x-accordion.content index="1">
                            Оптимально — щодня або кілька разів на тиждень, залежно від відвідуваності.
                        </x-accordion.content>
                    </x-accordion.item>
                    <x-accordion.item index="2">
                        <x-accordion.trigger index="2">
                            Чи можна домовитись про прибирання поза робочим часом?
                        </x-accordion.trigger>
                        <x-accordion.content index="2">
                            Так, ми підлаштовуємось під ваш графік і працюємо навіть у вихідні.
                        </x-accordion.content>
                    </x-accordion.item>
                    <x-accordion.item index="3">
                        <x-accordion.trigger index="3">
                            Чи використовуєте ви власні миючі засоби?
                        </x-accordion.trigger>
                        <x-accordion.content index="3">
                            Так, ми приїжджаємо зі своїми професійними засобами та обладнанням.
                        </x-accordion.content>
                    </x-accordion.item>
                    <x-accordion.item index="4">
                        <x-accordion.trigger index="4">
                            Чи можна замовити генеральне прибирання?
                        </x-accordion.trigger>
                        <x-accordion.content index="4">
                            Так, ми виконуємо як регулярне, так і генеральне прибирання офісів.
                        </x-accordion.content>
                    </x-accordion.item>
                </x-accordion>
            </x-tabs.content>
        </x-tabs>

        <x-blockquote class="mt-10">
            <p>Замовте професійне прибирання офісу вже сьогодні!</p>
            <p>Не витрачайте час співробітників на прибирання – довірте це професіоналам! Ми подбаємо про ідеальний
                порядок у вашому офісі.</p>
            <p>Чистий офіс – продуктивна робота!</p>
        </x-blockquote>
    </x-section>
@endsection

@vite('resources/js/services.js')
