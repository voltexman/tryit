<?php

use function Laravel\Folio\name;

name('legal.cookie-policy');
?>

@extends('layouts.base')

@section('header')
    <x-page-header image="{{ Vite::asset('resources/images/service-4.jpg') }}">
        <x-slot:title>
            Політика cookies
        </x-slot>
        <x-slot:description>
            Інформація про використання файлів cookie на нашому сайті
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
                    <h2 class="font-display text-lg md:text-xl font-bold text-gray-900 mb-3">Що таке файли cookie?</h2>
                    <div class="text-sm text-gray-600 leading-relaxed space-y-2">
                        <p class="mb-0">Файли cookie — це невеликі текстові файли, які зберігаються на вашому пристрої (комп'ютері, планшеті або смартфоні) під час відвідування веб-сайтів. Вони допомагають сайту «запам'ятовувати» ваші дії та налаштування.</p>
                        <p class="mb-0">Cookie не містять персональних даних і не можуть бути використані для ідентифікації особи без додаткової інформації.</p>
                    </div>
                </x-policy-section>

                <x-policy-section number="02">
                    <h2 class="font-display text-lg md:text-xl font-bold text-gray-900 mb-3">Які cookie ми використовуємо?</h2>
                    <div class="text-sm text-gray-600 leading-relaxed space-y-2">
                        <p class="mb-0">На сайті <b>www.tryit.com.ua</b> використовуються наступні типи cookie:</p>

                        <div class="bg-gray-50 rounded-xl p-4 space-y-3 mt-3">
                            <div class="flex items-start gap-3">
                                <x-lucide-settings class="size-4 text-tryit-green shrink-0 mt-0.5" stroke-width="1.5" />
                                <div>
                                    <span class="font-semibold text-gray-800 text-sm">Необхідні cookie</span>
                                    <p class="text-xs text-gray-500 mb-0 mt-0.5">Забезпечують базову роботу сайту: навігацію, безпеку, завантаження сторінок. Без них сайт не зможе функціонувати коректно.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <x-lucide-bar-chart-3 class="size-4 text-tryit-orange shrink-0 mt-0.5" stroke-width="1.5" />
                                <div>
                                    <span class="font-semibold text-gray-800 text-sm">Аналітичні cookie</span>
                                    <p class="text-xs text-gray-500 mb-0 mt-0.5">Збирають анонімну статистику про відвідування сайту: кількість відвідувачів, популярні сторінки, джерела трафіку. Допомагають нам покращувати сайт.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <x-lucide-sliders class="size-4 text-tryit-cream shrink-0 mt-0.5" stroke-width="1.5" />
                                <div>
                                    <span class="font-semibold text-gray-800 text-sm">Функціональні cookie</span>
                                    <p class="text-xs text-gray-500 mb-0 mt-0.5">Зберігають ваші персональні налаштування: мову інтерфейсу, вибрані фільтри, заповнені форми. Роблять роботу із сайтом зручнішою.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </x-policy-section>

                <x-policy-section number="03">
                    <h2 class="font-display text-lg md:text-xl font-bold text-gray-900 mb-3">Термін зберігання</h2>
                    <div class="text-sm text-gray-600 leading-relaxed space-y-2">
                        <p class="mb-0"><b>Сесійні cookie</b> — автоматично видаляються після закриття браузера. Використовуються для підтримки вашої сесії під час перегляду сайту.</p>
                        <p class="mb-0"><b>Постійні cookie</b> — зберігаються на вашому пристрої від 30 днів до 1 року. Допомагають нам розпізнавати повторних відвідувачів та зберігати ваші налаштування.</p>
                    </div>
                </x-policy-section>

                <x-policy-section number="04">
                    <h2 class="font-display text-lg md:text-xl font-bold text-gray-900 mb-3">Сторонні cookie</h2>
                    <div class="text-sm text-gray-600 leading-relaxed space-y-2">
                        <p class="mb-0">Ми можемо використовувати сервіси третіх сторін, які також встановлюють cookie:</p>
                        <ul class="list-none space-y-1.5 pl-0">
                            <li class="flex items-start gap-2"><x-lucide-activity class="size-4 text-gray-400 shrink-0 mt-0.5" stroke-width="1.5" /> <b>Google Analytics</b> — для аналізу відвідуваності та поведінки користувачів</li>
                            <li class="flex items-start gap-2"><x-lucide-message-square class="size-4 text-gray-400 shrink-0 mt-0.5" stroke-width="1.5" /> <b>Facebook Pixel</b> — для показу релевантної реклами у соціальних мережах</li>
                        </ul>
                        <p class="mb-0">Політика конфіденційності цих сервісів доступна на їхніх офіційних сайтах.</p>
                    </div>
                </x-policy-section>

                <x-policy-section number="05">
                    <h2 class="font-display text-lg md:text-xl font-bold text-gray-900 mb-3">Як керувати cookie?</h2>
                    <div class="text-sm text-gray-600 leading-relaxed space-y-2">
                        <p class="mb-0">Ви можете контролювати та видаляти cookie у налаштуваннях вашого браузера. Більшість браузерів дозволяють:</p>
                        <ul class="list-none space-y-1.5 pl-0">
                            <li class="flex items-start gap-2"><x-lucide-check class="size-4 text-tryit-green shrink-0 mt-0.5" stroke-width="2" /> Переглядати збережені cookie та видаляти їх окремо</li>
                            <li class="flex items-start gap-2"><x-lucide-check class="size-4 text-tryit-green shrink-0 mt-0.5" stroke-width="2" /> Блокувати cookie від сторонніх сайтів</li>
                            <li class="flex items-start gap-2"><x-lucide-check class="size-4 text-tryit-green shrink-0 mt-0.5" stroke-width="2" /> Налаштувати повідомлення перед збереженням cookie</li>
                            <li class="flex items-start gap-2"><x-lucide-check class="size-4 text-tryit-green shrink-0 mt-0.5" stroke-width="2" /> Повністю вимкнути збереження cookie</li>
                        </ul>
                        <p class="mb-0"><b>Зверніть увагу:</b> вимкнення cookie може вплинути на функціональність сайту. Деякі функції можуть працювати некоректно або бути недоступними.</p>
                    </div>
                </x-policy-section>

                <x-policy-section number="06">
                    <h2 class="font-display text-lg md:text-xl font-bold text-gray-900 mb-3">Зміни до політики</h2>
                    <div class="text-sm text-gray-600 leading-relaxed space-y-2">
                        <p class="mb-0">Ми можемо оновлювати цю Політику cookie. Про значні зміни ви будете повідомлені через банер на сайті. Актуальна версія завжди доступна на цій сторінці.</p>
                    </div>
                </x-policy-section>
            </div>

            {{-- Contact --}}
            <div class="mt-12 pt-8 border-t border-gray-200">
                <div class="flex items-start gap-3 text-xs text-gray-400">
                    <x-lucide-info class="size-4 shrink-0 mt-0.5" stroke-width="1.5" />
                    <p class="mb-0">Якщо у вас є запитання щодо файлів cookie, зверніться до нас: <a href="mailto:info@tryit.com.ua" class="text-tryit-green font-semibold hover:underline">info@tryit.com.ua</a></p>
                </div>
            </div>
        </div>
    </section>
@endsection
