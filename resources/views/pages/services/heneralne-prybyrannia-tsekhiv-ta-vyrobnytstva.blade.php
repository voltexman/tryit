<?php
use function Laravel\Folio\name;
name('services.heneralne-prybyrannia-tsekhiv-ta-vyrobnytstva');
?>

@extends('layouts.base')

@section('header')
    <x-page-header image="{{ Vite::asset('resources/images/breadcrumb-default.jpg') }}">
        <x-slot:title>Генеральне прибирання виробничих приміщень</x-slot:title>

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
            <x-widgets.services-menu :current-service="App\Enums\ServiceEnum::INDUSTRIAL_CLEANING" class="hidden md:block" />
            <x-widgets.consultation :service="App\Enums\ServiceEnum::INDUSTRIAL_CLEANING->value" />
        </x-slot>

        <x-widgets.image-compare before="{{ Vite::asset('resources/images/section-background-04.jpg') }}"
            after="{{ Vite::asset('resources/images/header.webp') }}" />

        <p class="mt-10">
            <x-marker>Генеральне прибирання виробничих приміщень</x-marker> — це не просто очищення від пилу чи
            сміття, а повноцінне оновлення робочого середовища. Ми знаємо, наскільки важливо підтримувати
            чистоту у цехах, майстернях, складах чи виробничих зонах, де від цього залежить не лише комфорт, а й безпека
            працівників.
        </p>

        <x-table striped>
            <x-table.row>
                <x-table.cell class="font-semibold">Тип прибирання</x-table.cell>
                <x-table.cell>Генеральне/дезінфекційне/періодичне/екстрене</x-table.cell>
            </x-table.row>

            <x-table.row>
                <x-table.cell class="font-semibold">Об’єкти</x-table.cell>
                <x-table.cell>Цехи, склади, майстерні, виробничі зони</x-table.cell>
            </x-table.row>

            <x-table.row>
                <x-table.cell class="font-semibold">Площа/год</x-table.cell>
                <x-table.cell>~150–250 м²</x-table.cell>
            </x-table.row>

            <x-table.row>
                <x-table.cell class="font-semibold">Мінімальне замовлення</x-table.cell>
                <x-table.cell>2 години роботи</x-table.cell>
            </x-table.row>

            <x-table.row>
                <x-table.cell class="font-semibold">Тип поверхонь</x-table.cell>
                <x-table.cell>Підлоги, стіни, стелі, обладнання, перегородки</x-table.cell>
            </x-table.row>

            <x-table.row>
                <x-table.cell class="font-semibold">Обладнання</x-table.cell>
                <x-table.cell>Промислові пилососи, пароочисники, мийки</x-table.cell>
            </x-table.row>

            <x-table.row>
                <x-table.cell class="font-semibold">Засоби</x-table.cell>
                <x-table.cell>Сертифікована хімія</x-table.cell>
            </x-table.row>

            <x-table.row>
                <x-table.cell class="font-semibold">Вивіз сміття</x-table.cell>
                <x-table.cell>Так <i>(за домовленістю)</i></x-table.cell>
            </x-table.row>

            <x-table.row>
                <x-table.cell class="font-semibold">Температура виконання</x-table.cell>
                <x-table.cell>5–40°C <i>(залежно від приміщення)</i></x-table.cell>
            </x-table.row>

            <x-table.row>
                <x-table.cell class="font-semibold">Вологість поверхні</x-table.cell>
                <x-table.cell>до 60% перед нанесенням хімії</x-table.cell>
            </x-table.row>
        </x-table>

        <p class="mt-10">
            Наша команда виконує глибоке очищення всіх поверхонь, технічних зон і важкодоступних місць із
            використанням професійного обладнання та безпечних засобів. Ми забезпечуємо порядок навіть після
            масштабних робіт, пилу, мастильних речовин чи виробничих забруднень.
        </p>

        {{-- 4 Іконки --}}
        <div class="grid md:grid-cols-2 gap-5 mt-10">
            <div class="flex gap-2.5">
                <div class="size-15 flex-none rounded-full bg-green-500 flex justify-center items-center">
                    <x-lucide-factory class="size-7 stroke-black" stroke-width="1.5" />
                </div>
                <div class="flex flex-col gap-1.5">
                    <span class="text-xl font-medium font-[Oswald]">Глибоке очищення цехів</span>
                    <span class="text-gray-600 text-sm">
                        Прибираємо виробничі зони, технічні ділянки, пил, мастила, бруд і кіптяву.
                    </span>
                </div>
            </div>

            <div class="flex gap-2.5">
                <div class="size-15 flex-none rounded-full bg-green-500 flex justify-center items-center">
                    <x-lucide-flask-conical class="size-7 stroke-black" stroke-width="1.5" />
                </div>
                <div class="flex flex-col gap-1.5">
                    <span class="text-xl font-medium font-[Oswald]">Безпечна хімія</span>
                    <span class="text-gray-600 text-sm">
                        Використовуємо сертифіковані засоби, безпечні для працівників та обладнання.
                    </span>
                </div>
            </div>

            <div class="flex gap-2.5">
                <div class="size-15 flex-none rounded-full bg-green-500 flex justify-center items-center">
                    <x-lucide-sparkles class="size-7 stroke-black" stroke-width="1.5" />
                </div>
                <div class="flex flex-col gap-1.5">
                    <span class="text-xl font-medium font-[Oswald]">Дезінфекція та полірування</span>
                    <span class="text-gray-600 text-sm">
                        Повна дезінфекція робочих поверхонь, ручок, обладнання та підлог.
                    </span>
                </div>
            </div>

            <div class="flex gap-x-2.5">
                <div class="size-15 flex-none rounded-full bg-green-500 flex justify-center items-center">
                    <x-lucide-check-circle class="size-7 stroke-black" stroke-width="1.5" />
                </div>
                <div class="flex flex-col gap-y-1.5">
                    <span class="text-xl font-medium font-[Oswald]">Контроль якості</span>
                    <span class="text-gray-600 text-sm">
                        Кожен об’єкт перевіряється керівником бригади перед здачею замовнику.
                    </span>
                </div>
            </div>
        </div>

        {{-- Прогресбари --}}
        <div class="space-y-2.5 mt-10">
            <div class="font-bold font-[Oswald] text-2xl">Наші навички</div>
            <div class="w-full lg:w-3/4">
                <x-progressbar percentage="95" label="Глибоке очищення виробничих площ" />
            </div>
            <div class="w-full lg:w-3/4">
                <x-progressbar percentage="90" label="Видалення мастил і промислових плям" />
            </div>
            <div class="w-full lg:w-3/4">
                <x-progressbar percentage="85" label="Дезінфекція поверхонь і обладнання" />
            </div>
            <div class="w-full lg:w-3/4">
                <x-progressbar percentage="100" label="Контроль якості робіт" />
            </div>
        </div>

        {{-- Tabs --}}
        <x-tabs default-value="details" class="mt-10">
            <x-tabs.list>
                <x-tabs.trigger value="details" variant="green">Сервіс</x-tabs.trigger>
                <x-tabs.trigger value="gallery" variant="green">Галерея</x-tabs.trigger>
                <x-tabs.trigger value="faq" variant="green">FAQ</x-tabs.trigger>
            </x-tabs.list>

            {{-- DETAILS TAB --}}
            <x-tabs.content value="details">
                <x-list type="check" class="mt-10">
                    <x-slot:caption>
                        Що <span class="font-bold">входить</span> у
                        <span class="text-tryit-orange">генеральне<br>прибирання виробничих<br>приміщень</span>?
                    </x-slot:caption>
                    <x-list.item>Очищення підлог, стін, стель від пилу, мастил, кіптяви.</x-list.item>
                    <x-list.item>Миття вікон, рам, перегородок і вітрин.</x-list.item>
                    <x-list.item>Очищення промислового обладнання від пилу та забруднень.</x-list.item>
                    <x-list.item>Знежирення поверхонь і робочих зон.</x-list.item>
                    <x-list.item>Дезінфекція приміщення екологічними засобами.</x-list.item>
                    <x-list.item>Вивіз сміття та відходів <i>(за домовленістю)</i>.</x-list.item>
                </x-list>

                <x-list type="check" class="mt-8">
                    <x-slot:caption>
                        Кому <span class="font-bold">потрібна</span> ця
                        <span class="text-tryit-orange">послуга</span>?
                    </x-slot:caption>
                    <x-list.item>Виробничим підприємствам і цехам.</x-list.item>
                    <x-list.item>Складам, логістичним та пакувальним центрам.</x-list.item>
                    <x-list.item>Фабрикам харчової, хімічної та легкої промисловості.</x-list.item>
                    <x-list.item>Компаніям, які готуються до перевірок чи сертифікацій.</x-list.item>
                    <x-list.item>Після ремонту, реконструкції або просто планового очищення.</x-list.item>
                </x-list>

                <x-list type="check" class="mt-8">
                    <x-slot:caption>
                        <span class="font-bold">Як</span> ми <span class="text-tryit-orange">працюємо</span>?
                    </x-slot:caption>
                    <x-list.item>
                        <b>Безкоштовна консультація</b> – оцінюємо об’єкт і підбираємо оптимальні рішення.
                    </x-list.item>
                    <x-list.item>
                        <b>Професійне обладнання</b> – промислові пилососи, пароочисники, спеціальні мийки.
                    </x-list.item>
                    <x-list.item>
                        <b>Глибоке очищення</b> – прибираємо пил, жир, кіптяву, залишки фарби чи мастил.
                    </x-list.item>
                    <x-list.item>
                        <b>Контроль якості</b> – обов’язкова перевірка після завершення робіт.
                    </x-list.item>
                </x-list>

                <x-list type="check" class="mt-8">
                    <x-slot:caption>
                        Чому <span class="font-bold">варто</span> обрати
                        <span class="text-tryit-orange">нас</span>?
                    </x-slot:caption>
                    <x-list.item><b>Досвід понад 10 років</b> у промисловому клінінгу.</x-list.item>
                    <x-list.item><b>Сучасна техніка</b> для великих площ і складних об’єктів.</x-list.item>
                    <x-list.item><b>Безпечна хімія</b> — сертифікована та екологічна.</x-list.item>
                    <x-list.item><b>Гарантований результат</b> — приміщення готове до роботи.</x-list.item>
                </x-list>
            </x-tabs.content>

            {{-- GALLERY TAB --}}
            <x-tabs.content value="gallery">
                <div class="grid grid-cols-2 md:grid-cols-3 gap-5 mt-10">
                    <img src="{{ Vite::asset('resources/images/factory-clean-1.jpg') }}" class="rounded-2xl"
                        alt="Генеральне прибирання виробництва — фото 1">
                    <img src="{{ Vite::asset('resources/images/factory-clean-2.jpg') }}" class="rounded-2xl"
                        alt="Генеральне прибирання виробництва — фото 2">
                    <img src="{{ Vite::asset('resources/images/factory-clean-3.jpg') }}" class="rounded-2xl"
                        alt="Генеральне прибирання виробництва — фото 3">
                </div>
            </x-tabs.content>

            {{-- FAQ TAB --}}
            <x-tabs.content value="faq" class="mt-10">
                <x-accordion>
                    <x-accordion.item index="1">
                        <x-accordion.trigger index="1" class="px-0!">
                            Як часто потрібно проводити генеральне прибирання виробництва?
                        </x-accordion.trigger>
                        <x-accordion.content index="1" class="px-0!">
                            Рекомендується проводити не рідше одного разу на квартал, або частіше — залежно від
                            типу
                            виробництва та вимог санітарних норм.
                        </x-accordion.content>
                    </x-accordion.item>

                    <x-accordion.item index="2">
                        <x-accordion.trigger index="2" class="px-0!">
                            Чи можливо проводити прибирання без зупинки виробництва?
                        </x-accordion.trigger>
                        <x-accordion.content index="2" class="px-0!">
                            Так, ми працюємо у зручний для вас час — у вихідні або нічні зміни, щоб не заважати
                            процесу виробництва.
                        </x-accordion.content>
                    </x-accordion.item>

                    <x-accordion.item index="3">
                        <x-accordion.trigger index="3" class="px-0!">
                            Яке обладнання ви використовуєте?
                        </x-accordion.trigger>
                        <x-accordion.content index="3" class="px-0!">
                            Ми застосовуємо промислові пилососи, парогенератори, мийні машини, висотні
                            інструменти
                            та професійні засоби.
                        </x-accordion.content>
                    </x-accordion.item>

                    <x-accordion.item index="4">
                        <x-accordion.trigger index="4" class="px-0!">
                            Чи надаєте ви документи після прибирання?
                        </x-accordion.trigger>
                        <x-accordion.content index="4" class="px-0!">
                            Так, ми оформлюємо акти виконаних робіт і за потреби — звіти для санітарних
                            перевірок.
                        </x-accordion.content>
                    </x-accordion.item>

                    <x-accordion.item index="5">
                        <x-accordion.trigger index="5" class="px-0!">
                            Як замовити послугу?
                        </x-accordion.trigger>
                        <x-accordion.content index="5" class="px-0!">
                            Залиште заявку на сайті або телефонуйте нам. Наш менеджер узгодить деталі, підготує
                            кошторис і підбере оптимальний час.
                        </x-accordion.content>
                    </x-accordion.item>
                </x-accordion>
            </x-tabs.content>
        </x-tabs>

        <x-blockquote class="mt-10">
            <p>Замовте генеральне прибирання виробничих приміщень вже сьогодні!</p>
            <p>Професійна чистота — це запорука безпеки, продуктивності та репутації вашого бізнесу. Ми подбаємо
                про кожен квадратний метр вашого виробництва, щоб ви могли зосередитись на головному — своїй роботі.
            </p>
            <p>Зателефонуйте зараз і переконайтеся, що справжня чистота починається з TryIt!</p>
        </x-blockquote>
    </x-section>
@endsection

@vite('resources/js/services.js')
