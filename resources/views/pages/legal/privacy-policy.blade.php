<?php
use function Laravel\Folio\name;
name('legal.privacy-policy');
?>

@extends('layouts.base')

@section('header')
    <x-page-header image="{{ Vite::asset('resources/images/service-3.jpg') }}">
        <x-slot:title>
            Політика конфіденційності
        </x-slot>
        <x-slot:description>
            Ця Політика конфіденційності діє стосовно всієї інформації, що розташована на сайті www.tryit.com.ua
        </x-slot>
    </x-page-header>
@endsection

@section('content')
    <section class="py-12 md:py-16">
        <div class="max-w-3xl mx-auto px-5">
            {{-- Document header --}}
            <div class="flex items-center gap-3 mb-2 text-sm text-gray-400">
                <x-lucide-calendar class="size-4" stroke-width="1.5" />
                <span>Останнє оновлення: 15 квітня 2026 р.</span>
            </div>
            <div class="w-full h-px bg-gray-200 mb-10"></div>

            <div class="flex flex-col gap-10">
                <x-policy-section number="01">
                    <h2 class="font-display text-lg md:text-xl font-bold text-gray-900 mb-3">Загальні положення</h2>
                    <div class="text-sm text-gray-600 leading-relaxed space-y-2">
                        <p class="mb-0">Згідно Закону України «Про захист персональних даних» персональні дані — це відомості чи сукупність відомостей про фізичну особу, яка ідентифікована або може бути конкретно ідентифікована.</p>
                        <p class="mb-0">Використання сайту <b>www.tryit.com.ua</b> означає згоду з цією Політикою конфіденційності та умовами обробки персональних даних. У разі незгоди з умовами Політики конфіденційності, необхідно припинити використання сайту.</p>
                    </div>
                </x-policy-section>

                <x-policy-section number="02">
                    <h2 class="font-display text-lg md:text-xl font-bold text-gray-900 mb-3">Предмет політики конфіденційності</h2>
                    <div class="text-sm text-gray-600 leading-relaxed space-y-2">
                        <p class="mb-0">Ця Політика встановлює зобов'язання сайту щодо нерозголошення та забезпечення захисту конфіденційності персональних даних. Дані, дозволені для обробки, включають:</p>
                        <ul class="list-none space-y-1.5 pl-0">
                            <li class="flex items-start gap-2"><x-lucide-user class="size-4 text-tryit-green shrink-0 mt-0.5" stroke-width="1.5" /> Прізвище, ім'я, по-батькові</li>
                            <li class="flex items-start gap-2"><x-lucide-map-pin class="size-4 text-tryit-green shrink-0 mt-0.5" stroke-width="1.5" /> Місце проживання (перебування)</li>
                            <li class="flex items-start gap-2"><x-lucide-clipboard-list class="size-4 text-tryit-green shrink-0 mt-0.5" stroke-width="1.5" /> Інформація про замовлення (деталі послуги)</li>
                            <li class="flex items-start gap-2"><x-lucide-phone class="size-4 text-tryit-green shrink-0 mt-0.5" stroke-width="1.5" /> Контактний телефон, електронна пошта</li>
                        </ul>
                    </div>
                </x-policy-section>

                <x-policy-section number="03">
                    <h2 class="font-display text-lg md:text-xl font-bold text-gray-900 mb-3">Мета збору персональних даних</h2>
                    <div class="text-sm text-gray-600 leading-relaxed space-y-2">
                        <p class="mb-0">Особиста інформація використовується для надання послуг відповідно до потреб, зокрема для встановлення зворотного зв'язку, обробки запитів та заявок, надання ефективної клієнтської підтримки.</p>
                    </div>
                </x-policy-section>

                <x-policy-section number="04">
                    <h2 class="font-display text-lg md:text-xl font-bold text-gray-900 mb-3">Способи та терміни обробки даних</h2>
                    <div class="text-sm text-gray-600 leading-relaxed space-y-2">
                        <p class="mb-0">В ході обробки з персональними даними здійснюються: збір, запис, систематизація, накопичення, зберігання, уточнення (оновлення), використання, передача, знеособлення, блокування, видалення, знищення.</p>
                        <p class="mb-0">Обробка персональних даних здійснюється без обмеження терміну будь-яким законним способом, у тому числі в інформаційних системах з використанням засобів автоматизації або без таких засобів.</p>
                    </div>
                </x-policy-section>

                <x-policy-section number="05">
                    <h2 class="font-display text-lg md:text-xl font-bold text-gray-900 mb-3">Захист інформації</h2>
                    <div class="text-sm text-gray-600 leading-relaxed space-y-2">
                        <p class="mb-0">Ми прагнемо захищати конфіденційність персональних даних та вживаємо всіх необхідних заходів:</p>
                        <ul class="list-none space-y-1.5 pl-0">
                            <li class="flex items-start gap-2"><x-lucide-check class="size-4 text-tryit-green shrink-0 mt-0.5" stroke-width="2" /> Внутрішня перевірка процесів збору, зберігання та обробки даних</li>
                            <li class="flex items-start gap-2"><x-lucide-check class="size-4 text-tryit-green shrink-0 mt-0.5" stroke-width="2" /> Заходи безпеки, що включають відповідне шифрування</li>
                            <li class="flex items-start gap-2"><x-lucide-check class="size-4 text-tryit-green shrink-0 mt-0.5" stroke-width="2" /> Забезпечення фізичної безпеки даних для запобігання неавторизованого доступу</li>
                        </ul>
                    </div>
                </x-policy-section>

                <x-policy-section number="06">
                    <h2 class="font-display text-lg md:text-xl font-bold text-gray-900 mb-3">Передача даних третім особам</h2>
                    <div class="text-sm text-gray-600 leading-relaxed space-y-2">
                        <p class="mb-0">Ми не передаємо ваші дані третім особам без вашої згоди, за винятком випадків, передбачених законодавством. Дані можуть передаватися лише:</p>
                        <ul class="list-none space-y-1.5 pl-0">
                            <li class="flex items-start gap-2"><x-lucide-circle-dot class="size-4 text-tryit-orange shrink-0 mt-0.5" stroke-width="2" /> Партнерам, що беруть участь у виконанні замовлень</li>
                            <li class="flex items-start gap-2"><x-lucide-circle-dot class="size-4 text-tryit-orange shrink-0 mt-0.5" stroke-width="2" /> Платіжним системам у разі онлайн-оплат</li>
                            <li class="flex items-start gap-2"><x-lucide-circle-dot class="size-4 text-tryit-orange shrink-0 mt-0.5" stroke-width="2" /> Державним органам на підставах, встановлених законодавством</li>
                        </ul>
                    </div>
                </x-policy-section>

                <x-policy-section number="07">
                    <h2 class="font-display text-lg md:text-xl font-bold text-gray-900 mb-3">Файли cookie та технології</h2>
                    <div class="text-sm text-gray-600 leading-relaxed space-y-2">
                        <p class="mb-0">Ми використовуємо файли cookie для збору аналітичної інформації та покращення роботи сайту. Ви можете змінити налаштування браузера для відмови від використання cookie, проте це може вплинути на функціональність сайту.</p>
                        <p class="mb-0">Детальніше — на сторінці <a href="{{ route('legal.cookie-policy') }}" class="text-tryit-green font-semibold hover:underline">Політика cookies</a>.</p>
                    </div>
                </x-policy-section>

                <x-policy-section number="08">
                    <h2 class="font-display text-lg md:text-xl font-bold text-gray-900 mb-3">Зміна політики конфіденційності</h2>
                    <div class="text-sm text-gray-600 leading-relaxed space-y-2">
                        <p class="mb-0">Дана політика конфіденційності може час від часу змінюватися. Всі зміни публікуються на цій сторінці.</p>
                    </div>
                </x-policy-section>
            </div>

            {{-- Contact --}}
            <div class="mt-12 pt-8 border-t border-gray-200">
                <div class="flex items-start gap-3 text-xs text-gray-400">
                    <x-lucide-mail class="size-4 shrink-0 mt-0.5" stroke-width="1.5" />
                    <p class="mb-0">З питань щодо політики конфіденційності, в тому числі видалення персональних даних, зв'яжіться з нами: <a href="mailto:info@tryit.com.ua" class="text-tryit-green font-semibold hover:underline">info@tryit.com.ua</a></p>
                </div>
            </div>
        </div>
    </section>
@endsection
