<?php
use function Laravel\Folio\name;
name('services.myttia-fasadiv-ta-vikon-na-vysoti');
?>

@extends('layouts.base')

@section('header')
    <x-page-header image="{{ Vite::asset('resources/images/breadcrumb-default.jpg') }}">
        <x-slot:title>Миття фасадів та вікон на висоті <br><i>(WFP-система)</i></x-slot:title>
    </x-page-header>
@endsection

@section('content')
    <x-section orientation="left">
        <x-slot:sidebar class="space-y-10 flex md:flex-row lg:flex-col gap-5">
            <x-widgets.services-menu :current-service="App\Enums\ServiceEnum::WINDOW_CLEANING" class="hidden md:block" />
            <x-widgets.consultation :service="App\Enums\ServiceEnum::WINDOW_CLEANING->value" />
        </x-slot>

        <x-widgets.image-compare before="{{ Vite::asset('resources/images/section-background-04.jpg') }}"
            after="{{ Vite::asset('resources/images/header.webp') }}" />

        <p class="mt-10">
            <x-marker>Чисті вікна та фасади</x-marker> – це не лише естетика, а й імідж вашого бізнесу чи
            житлового комплексу. Забруднення, пил, дощові патьоки та міський смог з часом роблять будівлю
            тьмяною, зменшуючи її привабливість. Ми пропонуємо професійне миття фасадів і вікон на висоті за
            допомогою сучасної WFP-системи <i>(Water-Fed Pole)</i>, що забезпечує бездоганний результат без
            розводів і слідів.
        </p>

        <x-table class="mt-5">
            <x-table.row>
                <x-table.cell class="font-semibold">Максимальна висота</x-table.cell>
                <x-table.cell>до 18 м <i>(без підйомника)</i></x-table.cell>
            </x-table.row>

            <x-table.row>
                <x-table.cell class="font-semibold">Тип системи</x-table.cell>
                <x-table.cell>WFP, телескопічні карбонові штанги</x-table.cell>
            </x-table.row>

            <x-table.row>
                <x-table.cell class="font-semibold">Якість води</x-table.cell>
                <x-table.cell>0 ppm демінералізована</x-table.cell>
            </x-table.row>

            <x-table.row>
                <x-table.cell class="font-semibold">Тиск води в системі</x-table.cell>
                <x-table.cell>2,5–4 бар</x-table.cell>
            </x-table.row>

            <x-table.row>
                <x-table.cell class="font-semibold">Довжина карбонових штанг</x-table.cell>
                <x-table.cell>6–18 м <i>(залежно від об'єкта)</i></x-table.cell>
            </x-table.row>

            <x-table.row>
                <x-table.cell class="font-semibold">Споживання води</x-table.cell>
                <x-table.cell>0.7–1.2 л/хв</x-table.cell>
            </x-table.row>

            <x-table.row>
                <x-table.cell class="font-semibold">Продуктивність</x-table.cell>
                <x-table.cell>80–150 м²/год</x-table.cell>
            </x-table.row>

            <x-table.row>
                <x-table.cell class="font-semibold">Мінімальне замовлення</x-table.cell>
                <x-table.cell>від 2 годин роботи</x-table.cell>
            </x-table.row>

            <x-table.row>
                <x-table.cell class="font-semibold">Рекомендована частота</x-table.cell>
                <x-table.cell>2–4 рази на рік</x-table.cell>
            </x-table.row>
        </x-table>

        <p class="mt-5">
            <span class="font-bold font-[Oswald] text-2xl">Що таке WFP-система та чому вона ефективна?</span><br>
            <x-marker>WFP-система</x-marker> – це інноваційна технологія миття вікон і фасадів без
            використання драбин або підйомників. Вона складається з телескопічних карбонових штанг, через
            які подається очищена демінералізована вода під тиском.
        </p>

        <div class="grid md:grid-cols-2 gap-5 mt-10">
            <div class="flex gap-2.5">
                <div class="size-15 flex-none rounded-full bg-green-500 flex justify-center items-center">
                    <x-lucide-shield-check class="size-7 stroke-black" stroke-width="1.5" />
                </div>
                <div class="flex flex-col gap-1.5">
                    <span class="text-xl font-medium font-[Oswald]">Безпечне миття</span>
                    <span class="text-gray-600 text-sm">
                        Усі роботи виконуються з землі без підйомників і ризику для персоналу.
                    </span>
                </div>
            </div>
            <div class="flex gap-2.5">
                <div class="size-15 flex-none rounded-full bg-green-500 flex justify-center items-center">
                    <x-lucide-leaf class="size-7 stroke-black" stroke-width="1.5" />
                </div>
                <div class="flex flex-col gap-1.5">
                    <span class="text-xl font-medium font-[Oswald]">Еко очищення</span>
                    <span class="text-gray-600 text-sm">
                        Використовуємо демінералізовану воду без хімії — чисто й без шкоди довкіллю.
                    </span>
                </div>
            </div>
            <div class="flex gap-2.5">
                <div class="size-15 flex-none rounded-full bg-green-500 flex justify-center items-center">
                    <x-lucide-sparkles class="size-7 stroke-black" stroke-width="1.5" />
                </div>
                <div class="flex flex-col gap-1.5">
                    <span class="text-xl font-medium font-[Oswald]">Ідеальна чистота</span>
                    <span class="text-gray-600 text-sm">
                        Поверхні висихають природно, не залишаючи розводів і плям.
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
                        Кожен етап контролюється нашими спеціалістами для бездоганної якості.
                    </span>
                </div>
            </div>
        </div>

        <div class="space-y-2.5 mt-10">
            <div class="font-bold font-[Oswald] text-2xl">Наші навички</div>
            <div class="w-full lg:w-3/4">
                <x-progressbar percentage="95" label="Очищення фасадів" />
            </div>
            <div class="w-full lg:w-3/4">
                <x-progressbar percentage="90" label="Миття вікон і скляних конструкцій" />
            </div>
            <div class="w-full lg:w-3/4">
                <x-progressbar percentage="85" label="Видалення відкладень і нальоту" />
            </div>
            <div class="w-full lg:w-3/4">
                <x-progressbar percentage="100" label="Захист поверхонь після миття" />
            </div>
        </div>

        <x-tabs default-value="details" class="mt-10">
            <x-tabs.list>
                <x-tabs.trigger value="details" variant="green">Сервіс</x-tabs.trigger>
                <x-tabs.trigger value="gallery" variant="green">Галерея</x-tabs.trigger>
                <x-tabs.trigger value="faq" variant="green">FAQ</x-tabs.trigger>
            </x-tabs.list>

            <x-tabs.content value="details" class="pt-5">
                <x-list type="number">
                    <x-slot:caption>
                        <span class="font-bold">Завдяки</span> цьому
                    </x-slot>
                    <x-list.item index="1">
                        Вода розчиняє бруд, залишаючи поверхню ідеально чистою без застосування хімічних засобів.
                    </x-list.item>
                    <x-list.item index="2">
                        Вікна та фасади висихають природним чином без розводів.
                    </x-list.item>
                    <x-list.item index="3">
                        Метод безпечний для людей, оскільки не потребує використання підйомників або промислового
                        альпінізму на середніх висотах.
                    </x-list.item>
                    <x-list.item index="4">
                        Це екологічний спосіб очищення, адже не залишає хімічних слідів на поверхні та в повітрі.
                    </x-list.item>
                </x-list>

                <x-list type="check">
                    <x-slot:caption>
                        Для яких <span class="font-bold">об’єктів</span><br> підходить ця
                        <span class="text-tryit-orange font-medium">послуга</span>?
                    </x-slot>
                    <x-list.item>Бізнес-центри та офісні будівлі</x-list.item>
                    <x-list.item>Торгові комплекси та магазини</x-list.item>
                    <x-list.item>Житлові багатоповерхові будинки</x-list.item>
                    <x-list.item>Готелі та ресторани</x-list.item>
                    <x-list.item>Промислові та складські приміщення</x-list.item>
                    <x-list.item>Вітрини, скляні перегородки, фасади будь-якого типу</x-list.item>
                </x-list>

                <x-list type="number">
                    <x-slot:caption>
                        Як <span class="font-bold">відбувається</span><br> процес <span
                            class="text-tryit-orange font-medium">миття</span>?
                    </x-slot>
                    <x-list.item index="1">
                        <span class="font-semibold">Оцінка об’єкта</span> – наші фахівці виїжджають на місце для
                        визначення рівня забруднення, типу поверхні та підбору оптимальної технології очищення.
                    </x-list.item>
                    <x-list.item index="2">
                        <span class="font-semibold">Підготовка обладнання</span> – використовуємо карбонові штанги
                        з
                        подачею демінералізованої води для ефективного очищення.
                    </x-list.item>
                    <x-list.item index="3">
                        <span class="font-semibold">Миття поверхонь</span> – видаляємо бруд, пил, залишки смогу та
                        водяних патьоків.
                    </x-list.item>
                    <x-list.item index="4">
                        <span class="font-semibold">Контроль якості</span> – перевіряємо результат, щоб кожне вікно
                        та фасад були ідеально чистими.
                    </x-list.item>
                </x-list>

                <x-list type="number">
                    <x-slot:caption>
                        Чому варто <span class="font-bold"><br>обрати</span> <span
                            class="text-tryit-orange font-medium">нас</span>?
                    </x-slot>
                    <x-list.item index="1">
                        <span class="font-semibold">Безпека та якість</span> – досвідчені фахівці та сертифіковане
                        обладнання.
                    </x-list.item>
                    <x-list.item index="2">
                        <span class="font-semibold">Екологічність</span> – використовуємо тільки очищену воду без
                        хімічних засобів.
                    </x-list.item>
                    <x-list.item index="3">
                        <span class="font-semibold">Гарантія результату</span> – чистота без розводів і слідів.
                    </x-list.item>
                    <x-list.item index="4">
                        <span class="font-semibold">Доступні ціни</span> – індивідуальний підхід та гнучка система
                        знижок для корпоративних клієнтів.
                    </x-list.item>
                    <x-list.item index="5">
                        <span class="font-semibold">Оперативність</span> – швидке виконання замовлень у зручний для
                        вас час.
                    </x-list.item>
                </x-list>
            </x-tabs.content>

            <x-tabs.content value="gallery" class="pt-5">Зображення</x-tabs.content>

            <x-tabs.content value="faq" class="pt-5">
                <x-accordion>
                    <x-accordion.item index="1">
                        <x-accordion.trigger index="1" class="px-0!">
                            Чи потрібно мені бути вдома під час прибирання?
                        </x-accordion.trigger>
                        <x-accordion.content index="1" class="px-0!">
                            Ні, ваша присутність не обов’язкова. Усі наші працівники проходять перевірку, тому ви
                            можете спокійно залишити ключ або впустити команду зранку, а повернутися вже в чисту,
                            доглянуту оселю. Якщо хочете — ми повідомимо, коли роботу буде завершено, або надішлемо
                            фото результату.
                        </x-accordion.content>
                    </x-accordion.item>
                    <x-accordion.item index="2">
                        <x-accordion.trigger index="2" class="px-0!">
                            Як замовити прибирання?
                        </x-accordion.trigger>
                        <x-accordion.content index="2" class="px-0!">
                            Зробити це можна у будь-який зручний для вас спосіб — через сайт, Instagram, Telegram чи
                            просто телефоном. Ми уточнимо деталі (площа, тип прибирання, адреса, зручний час) і
                            миттєво підтвердимо бронювання.
                        </x-accordion.content>
                    </x-accordion.item>
                    <x-accordion.item index="3">
                        <x-accordion.trigger index="3" class="px-0!">
                            Які засоби ви використовуєте для прибирання?
                        </x-accordion.trigger>
                        <x-accordion.content index="3" class="px-0!">
                            Ми застосовуємо лише професійні та безпечні мийні засоби, що не шкодять людям і
                            тваринам.
                        </x-accordion.content>
                    </x-accordion.item>
                    <x-accordion.item index="4">
                        <x-accordion.trigger index="4" class="px-0!">
                            Скільки часу займає прибирання?
                        </x-accordion.trigger>
                        <x-accordion.content index="4" class="px-0!">
                            Тривалість залежить від площі, кількості кімнат та рівня забруднення. Наприклад,
                            звичайна квартира займає близько 2–3 годин, а генеральне прибирання приватного будинку —
                            до 6 годин. Усі терміни ми узгоджуємо перед виїздом.
                        </x-accordion.content>
                    </x-accordion.item>
                    <x-accordion.item index="5">
                        <x-accordion.trigger index="5" class="px-0!">
                            Чи можна замовити прибирання на певний день і час?
                        </x-accordion.trigger>
                        <x-accordion.content index="5" class="px-0!">
                            Звісно. Ми працюємо за попереднім записом, тому ви можете обрати будь-який зручний день
                            і годину. Якщо потрібне термінове прибирання — часто можемо приїхати того ж дня.
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
