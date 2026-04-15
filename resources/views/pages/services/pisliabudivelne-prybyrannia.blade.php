<?php
use function Laravel\Folio\name;
name('services.pisliabudivelne-prybyrannia');
?>

@extends('layouts.base')

@section('header')
    <x-page-header image="{{ Vite::asset('resources/images/breadcrumb-default.jpg') }}">
        <x-slot:title>Післябудівельне прибирання</x-slot:title>

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
            <x-widgets.services-menu :current-service="App\Enums\ServiceEnum::POST_CONSTRUCTION_CLEANING" class="hidden md:block" />
            <x-widgets.consultation :service="App\Enums\ServiceEnum::POST_CONSTRUCTION_CLEANING->value" />
        </x-slot>

        <x-widgets.image-compare before="{{ Vite::asset('resources/images/section-background-04.jpg') }}"
            after="{{ Vite::asset('resources/images/header.webp') }}" />

        <p class="mt-10">
            <x-marker>Будівництво чи ремонт</x-marker> – це завжди оновлення простору, але після завершення робіт
            залишаються пил, будівельне сміття, залишки фарби, цементний наліт та інші забруднення.
            Післябудівельне прибирання потребує професійного підходу, адже стандартні методи часто не дають бажаного
            результату.
        </p>

        <x-table class="mt-5">
            <x-table.row>
                <x-table.cell class="font-semibold">Тип прибирання</x-table.cell>
                <x-table.cell>Післябудівельне, комплексне</x-table.cell>
            </x-table.row>

            <x-table.row>
                <x-table.cell class="font-semibold">Площа/год</x-table.cell>
                <x-table.cell>100–200 м²</x-table.cell>
            </x-table.row>

            <x-table.row>
                <x-table.cell class="font-semibold">Мінімальне замовлення</x-table.cell>
                <x-table.cell>1–2 години роботи</x-table.cell>
            </x-table.row>

            <x-table.row>
                <x-table.cell class="font-semibold">Тип поверхонь</x-table.cell>
                <x-table.cell>Стінові покриття, підлоги, скляні та металеві поверхні</x-table.cell>
            </x-table.row>

            <x-table.row>
                <x-table.cell class="font-semibold">Обладнання</x-table.cell>
                <x-table.cell>Потужні пилососи, пароочисники, миючі машини</x-table.cell>
            </x-table.row>

            <x-table.row>
                <x-table.cell class="font-semibold">Засоби</x-table.cell>
                <x-table.cell>Професійна хімія для будівельних забруднень</x-table.cell>
            </x-table.row>

            <x-table.row>
                <x-table.cell class="font-semibold">Видалення сміття</x-table.cell>
                <x-table.cell>Так, організований вивіз <i>(за домовленістю)</i></x-table.cell>
            </x-table.row>

            <x-table.row>
                <x-table.cell class="font-semibold">Температура виконання</x-table.cell>
                <x-table.cell>5–35°C <i>(залежно від внутрішніх умов)</i></x-table.cell>
            </x-table.row>

            <x-table.row>
                <x-table.cell class="font-semibold">Вологість поверхні</x-table.cell>
                <x-table.cell>до 60% перед нанесенням хімії</x-table.cell>
            </x-table.row>
        </x-table>

        <p class="mt-5">
            Ми пропонуємо комплексне та глибоке очищення приміщень після ремонту та будівництва. Наші фахівці
            мають необхідне обладнання та засоби, щоб видалити навіть найстійкіші забруднення, не пошкодивши нові
            покриття та поверхні.
        </p>

        <div class="grid md:grid-cols-2 gap-5 mt-10">
            <div class="flex gap-2.5">
                <div class="size-15 flex-none rounded-full bg-green-500 flex justify-center items-center">
                    <x-lucide-boom-box class="size-7 stroke-black" stroke-width="1.5" />
                </div>
                <div class="flex flex-col gap-1.5">
                    <span class="text-xl font-medium font-[Oswald]">Глибоке очищення</span>
                    <span class="text-gray-600 text-sm">
                        Видаляємо пил, сміття та залишки будматеріалів — навіть найстійкіші забруднення.
                    </span>
                </div>
            </div>

            <div class="flex gap-2.5">
                <div class="size-15 flex-none rounded-full bg-green-500 flex justify-center items-center">
                    <x-lucide-truck class="size-7 stroke-black" stroke-width="1.5" />
                </div>
                <div class="flex flex-col gap-1.5">
                    <span class="text-xl font-medium font-[Oswald]">Вивіз сміття</span>
                    <span class="text-gray-600 text-sm">
                        Організуємо вивіз будівельного сміття за домовленістю — швидко та акуратно.
                    </span>
                </div>
            </div>

            <div class="flex gap-2.5">
                <div class="size-15 flex-none rounded-full bg-green-500 flex justify-center items-center">
                    <x-lucide-boom-box class="size-7 stroke-black" stroke-width="1.5" />
                </div>
                <div class="flex flex-col gap-1.5">
                    <span class="text-xl font-medium font-[Oswald]">Безпечні засоби</span>
                    <span class="text-gray-600 text-sm">
                        Використовуємо професійну хімію, що не шкодить новим покриттям і безпечна для людей.
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
                        Перевіряємо кожен куточок, щоб залишити приміщення готовим до використання.
                    </span>
                </div>
            </div>
        </div>

        <div class="space-y-2.5 mt-10">
            <div class="font-bold font-[Oswald] text-2xl">Наші навички</div>
            <div class="w-full lg:w-3/4">
                <x-progressbar percentage="95" label="Видалення пилу та будсміття" />
            </div>
            <div class="w-full lg:w-3/4">
                <x-progressbar percentage="90" label="Очищення вікон та рам" />
            </div>
            <div class="w-full lg:w-3/4">
                <x-progressbar percentage="85" label="Видалення плям фарби й цементу" />
            </div>
            <div class="w-full lg:w-3/4">
                <x-progressbar percentage="100" label="Дезінфекція та фінальний контроль" />
            </div>
        </div>

        <x-tabs default-value="details" class="mt-10">
            <x-tabs.list>
                <x-tabs.trigger value="details" variant="green">Сервіс</x-tabs.trigger>
                <x-tabs.trigger value="gallery" variant="green">Галерея</x-tabs.trigger>
                <x-tabs.trigger value="faq" variant="green">FAQ</x-tabs.trigger>
            </x-tabs.list>

            <x-tabs.content value="details" class="pt-5">
                <x-list type="check">
                    <x-slot:caption>
                        Що <span class="font-bold">входить</span> у<br><span class="text-tryit-orange">
                            післябудівельне прибирання</span>?
                    </x-slot:caption>
                    <x-list.item>
                        Видалення будівельного пилу з усіх поверхонь <i>(стіни, стеля, підлога, меблі)</i>
                    </x-list.item>
                    <x-list.item>
                        Очищення вікон, рам, підвіконь від пилу, фарби та клейких слідів
                    </x-list.item>
                    <x-list.item>
                        Вивіз будівельного сміття <i>(за домовленістю)</i>
                    </x-list.item>
                    <x-list.item>
                        Видалення плям цементу, фарби, клею та монтажної піни
                    </x-list.item>
                    <x-list.item>
                        Очищення сантехніки, кухонних поверхонь, освітлювальних приладів
                    </x-list.item>
                    <x-list.item>
                        Глибоке миття підлог та полірування покриттів
                    </x-list.item>
                    <x-list.item>
                        Дезінфекція приміщення
                    </x-list.item>
                </x-list>

                <x-list type="check">
                    <x-slot:caption>
                        Кому <span class="font-bold">потрібна</span> ця <span class="text-tryit-orange">послуга</span>?
                    </x-slot:caption>
                    <x-list.item>Власникам квартир і будинків після ремонту</x-list.item>
                    <x-list.item>Бізнес-центрам і офісам після реконструкції</x-list.item>
                    <x-list.item>Магазинам, ресторанам, салонам після оновлення інтер'єру</x-list.item>
                    <x-list.item>Будівельним компаніям перед здачею об'єкта замовнику</x-list.item>
                    <x-list.item>Орендодавцям, які готують приміщення до заселення</x-list.item>
                </x-list>

                <x-list type="check">
                    <x-slot:caption>
                        <span class="font-bold">Як</span> ми <span class="text-tryit-orange">працюємо</span>?
                    </x-slot:caption>
                    <x-list.item>
                        <b>Безкоштовна консультація</b> – уточнюємо обсяг робіт та особливості приміщення.
                    </x-list.item>
                    <x-list.item>
                        <b>Професійний підбір засобів</b> – використовуємо безпечну хімію, яка не пошкоджує
                        поверхні.
                    </x-list.item>
                    <x-list.item>
                        <b>Глибоке очищення</b> – прибираємо пил, будівельне сміття та складні плями.
                    </x-list.item>
                    <x-list.item>
                        <b>Контроль якості</b> – перевіряємо кожен куточок, щоб усе було ідеально чистим.
                    </x-list.item>
                </x-list>

                <x-list type="check">
                    <x-slot:caption>
                        Чому <span class="font-bold">варто</span> обрати <span class="text-tryit-orange">нас</span>?
                    </x-slot:caption>
                    <x-list.item>
                        <b>Повний комплекс робіт</b> – не залишаємо жодної пилинки після ремонту!
                    </x-list.item>
                    <x-list.item>
                        <b>Безпечні миючі засоби</b> – екологічні та безпечні для здоров'я.
                    </x-list.item>
                    <x-list.item>
                        <b>Сучасне обладнання</b> – потужні пилососи, пароочисники, професійна хімія.
                    </x-list.item>
                    <x-list.item>
                        <b>Швидкість та якість</b> – прибирання виконується максимально оперативно.
                    </x-list.item>
                    <x-list.item>
                        <b>Гарантія чистоти</b> – ваш простір буде готовий до комфортного використання!
                    </x-list.item>
                </x-list>
            </x-tabs.content>

            <x-tabs.content value="gallery">
                <div class="grid grid-cols-2 md:grid-cols-3 gap-5 mt-10">
                    <img src="{{ Vite::asset('resources/images/post-remont-1.jpg') }}" class="rounded-2xl"
                        alt="Післябудівельне прибирання — фото 1">
                    <img src="{{ Vite::asset('resources/images/post-remont-2.jpg') }}" class="rounded-2xl"
                        alt="Післябудівельне прибирання — фото 2">
                    <img src="{{ Vite::asset('resources/images/post-remont-3.jpg') }}" class="rounded-2xl"
                        alt="Післябудівельне прибирання — фото 3">
                </div>
            </x-tabs.content>

            <x-tabs.content value="faq" class="mt-10">
                <x-accordion default-selected="1">
                    <x-accordion.item index="1">
                        <x-accordion.trigger index="1" class="px-0!">
                            Скільки часу займає післябудівельне прибирання?
                        </x-accordion.trigger>
                        <x-accordion.content index="1" class="px-0!">
                            Тривалість залежить від площі приміщення та рівня забруднення. Зазвичай це від 4 до 8
                            годин,
                            але точний час визначається після оцінки об’єкта.
                        </x-accordion.content>
                    </x-accordion.item>

                    <x-accordion.item index="2">
                        <x-accordion.trigger index="2" class="px-0!">
                            Чи потрібно мені бути присутнім під час прибирання?
                        </x-accordion.trigger>
                        <x-accordion.content index="2" class="px-0!">
                            Ні, наша команда може самостійно виконати прибирання. Ви можете залишити ключ або бути
                            присутніми за бажанням.
                        </x-accordion.content>
                    </x-accordion.item>

                    <x-accordion.item index="3">
                        <x-accordion.trigger index="3" class="px-0!">
                            Які засоби ви використовуєте?
                        </x-accordion.trigger>
                        <x-accordion.content index="3" class="px-0!">
                            Ми застосовуємо лише професійні, сертифіковані та безпечні для здоров’я засоби. Вони
                            ефективно видаляють бруд, але не пошкоджують поверхні.
                        </x-accordion.content>
                    </x-accordion.item>

                    <x-accordion.item index="4">
                        <x-accordion.trigger index="4" class="px-0!">
                            Чи входить у послугу вивіз сміття?
                        </x-accordion.trigger>
                        <x-accordion.content index="4" class="px-0!">
                            Так, за домовленістю ми можемо здійснити вивіз будівельного сміття.
                        </x-accordion.content>
                    </x-accordion.item>

                    <x-accordion.item index="5">
                        <x-accordion.trigger index="5" class="px-0!">
                            Як замовити послугу?
                        </x-accordion.trigger>
                        <x-accordion.content index="5" class="px-0!">
                            Залиште заявку на сайті, зателефонуйте або напишіть нам у месенджер. Ми уточнимо деталі
                            й узгодимо зручний час для виконання робіт.
                        </x-accordion.content>
                    </x-accordion.item>
                </x-accordion>
            </x-tabs.content>
        </x-tabs>

        <x-blockquote class="mt-10">
            <p>Замовте післябудівельне прибирання вже зараз!</p>
            <p>Не витрачайте свій час і сили на прибирання після ремонту – довірте це професіоналам! Залиште заявку
                на сайті або телефонуйте, і ми швидко приведемо ваше приміщення до ладу.</p>

            <p>Ваше приміщення засяє чистотою – залиште всі турботи нам!</p>
        </x-blockquote>
    </x-section>
@endsection

@vite('resources/js/services.js')
