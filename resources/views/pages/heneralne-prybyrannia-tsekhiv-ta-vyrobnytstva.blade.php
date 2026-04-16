<?php

use function Laravel\Folio\name;

$meta_title = 'Генеральне прибирання виробничих приміщень та очищення цехів, складів, заводів';
$meta_description = 'Професійне прибирання промислових приміщень, цехів, складів та заводів. Видалення пилу, мастил, сажі, дезінфекція та відповідність санітарним нормам';

name('services.heneralne-prybyrannia-tsekhiv-ta-vyrobnytstva');
?>

@extends('layouts.base')

@section('header')
    <x-page-header image="{{ Vite::asset('resources/images/service-4.jpg') }}">
        <x-slot:title class="text-balance">Генеральне прибирання<br>цехів та виробництва</x-slot>
        <x-slot:description class="text-balance">Чистота, безпека та відповідність санітарним нормам</x-slot>
    </x-page-header>
@endsection

@section('content')
    <section class="py-10 mt-10">
        <div class="max-w-5xl mx-auto px-5">
            <div class="grid lg:grid-cols-2 gap-10 items-center">
                <div>
                    <span class="font-display text-sm font-semibold text-tryit-orange uppercase tracking-wider">Промисловий
                        клінінг</span>
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-gray-900 mt-2 mb-5">Чистота на виробництві —
                        безпека та ефективність</h2>
                    <p class="text-gray-600 leading-relaxed">В умовах постійного виробничого процесу накопичуються пил, жир,
                        технічні забруднення, що впливають на працездатність персоналу та обладнання.</p>
                    <p class="text-gray-600 leading-relaxed">Наша команда має досвід роботи на підприємствах різних галузей —
                        від харчових виробництв до важкої промисловості.</p>
                </div>
                <div>
                    <img src="{{ Vite::asset('resources/images/service-4.jpg') }}"
                        class="w-full rounded-2xl shadow-lg object-cover aspect-4/3" alt="Прибирання виробництва"
                        loading="lazy" />
                </div>
            </div>
        </div>
    </section>

    <section class="mt-10">
        <div class="max-w-5xl mx-auto px-5">
            
            @include('partials.services-standarts')
            
            <x-table class="mt-15" striped>
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
        </div>
    </section>

    <section class="py-12 md:py-16 bg-gray-50">
        <div class="max-w-5xl mx-auto px-5">
            <h2 class="font-display text-2xl md:text-3xl font-bold text-gray-900 mb-8">Що <span
                    class="text-tryit-orange">входить</span> у послугу</h2>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
                @foreach ([['icon' => 'wind', 'title' => 'Видалення пилу та бруду', 'desc' => 'Очищення виробничих площ від технічних забруднень'], ['icon' => 'shield-check', 'title' => 'Дезінфекція', 'desc' => 'Робочих зон відповідно до санітарних норм'], ['icon' => 'droplets', 'title' => 'Видалення мастил і сажі', 'desc' => 'Промислових відкладень та нальоту'], ['icon' => 'settings', 'title' => 'Очищення обладнання', 'desc' => 'Конвеєрів, верстатів, агрегатів від пилу'], ['icon' => 'paintbrush', 'title' => 'Миття поверхонь', 'desc' => 'Підлог, стін, стель, вентиляційних систем'], ['icon' => 'lightbulb', 'title' => 'Очищення приладів', 'desc' => 'Освітлення, розетки, вимикачі, панелі']] as $item)
                    <div class="bg-white rounded-xl p-5 shadow-sm">
                        <div class="size-10 rounded-lg bg-tryit-green/10 flex items-center justify-center mb-3">
                            <x-dynamic-component :component="'lucide-' . $item['icon']" class="size-5 text-tryit-green" stroke-width="1.5" />
                        </div>
                        <h3 class="font-display font-bold text-gray-900 text-sm mb-1.5">{{ $item['title'] }}</h3>
                        <p class="text-xs text-gray-500 leading-relaxed mb-0">{{ $item['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-12 md:py-16">
        <div class="max-w-5xl mx-auto px-5">
            <h2 class="font-display text-2xl md:text-3xl font-bold text-gray-900 mb-8">Кому <span
                    class="text-tryit-orange">потрібна</span> ця послуга</h2>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach ([['icon' => 'factory', 'text' => 'Виробничим підприємствам'], ['icon' => 'warehouse', 'text' => 'Складам і логістичним центрам'], ['icon' => 'building', 'text' => 'Заводам і фабрикам'], ['icon' => 'store', 'text' => 'Магазинам і торговим базам'], ['icon' => 'wheat', 'text' => 'Агрокомплексам та харчовим підприємствам']] as $item)
                    <div class="flex items-center gap-3 bg-gray-50 rounded-xl p-4">
                        <x-dynamic-component :component="'lucide-' . $item['icon']" class="size-5 text-tryit-orange shrink-0"
                            stroke-width="1.5" />
                        <span class="text-sm text-gray-700">{{ $item['text'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-12 md:py-16 bg-gray-50">
        <div class="max-w-5xl mx-auto px-5">
            <h2 class="font-display text-2xl md:text-3xl font-bold text-gray-900 mb-8">Як ми <span
                    class="text-tryit-orange">працюємо</span></h2>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5">
                @foreach ([['step' => '01', 'title' => 'Оцінка об\'єкта', 'desc' => 'Визначаємо рівень забруднення та особливості приміщення', 'icon' => 'search'], ['step' => '02', 'title' => 'Підбір обладнання', 'desc' => 'Професійні мийні засоби та промислова техніка', 'icon' => 'settings'], ['step' => '03', 'title' => 'Глибоке очищення', 'desc' => 'Працюємо навіть у важкодоступних місцях', 'icon' => 'sparkles'], ['step' => '04', 'title' => 'Перевірка', 'desc' => 'Забезпечуємо ідеальну чистоту та відповідність нормам', 'icon' => 'check-circle']] as $step)
                    <div class="relative bg-white rounded-xl p-5 shadow-sm">
                        <span
                            class="font-display text-3xl font-black text-tryit-orange/10 absolute top-3 right-4">{{ $step['step'] }}</span>
                        <div class="size-10 rounded-lg bg-tryit-orange/10 flex items-center justify-center mb-3">
                            <x-dynamic-component :component="'lucide-' . $step['icon']" class="size-5 text-tryit-orange" stroke-width="1.5" />
                        </div>
                        <h3 class="font-display font-bold text-gray-900 text-sm mb-1.5">{{ $step['title'] }}</h3>
                        <p class="text-xs text-gray-500 leading-relaxed mb-0">{{ $step['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-12 md:py-16">
        <div class="max-w-5xl mx-auto px-5">
            <h2 class="font-display text-2xl md:text-3xl font-bold text-gray-900 mb-8">Чому <span
                    class="text-tryit-orange">обирають нас</span></h2>
            <div class="grid sm:grid-cols-2 gap-4">
                @foreach ([['icon' => 'wrench', 'title' => 'Спеціалізоване обладнання', 'desc' => 'Потужні пилососи, пароочисники, індустріальні мийні машини'], ['icon' => 'leaf', 'title' => 'Безпечні методи', 'desc' => 'Екологічні засоби, безпечні для виробничого процесу'], ['icon' => 'file-check', 'title' => 'Дотримання стандартів', 'desc' => 'Відповідність вимогам безпеки та санітарним нормам'], ['icon' => 'hard-hat', 'title' => 'Досвід на промислових об\'єктах', 'desc' => 'Знаємо як працювати в умовах виробництва'], ['icon' => 'clock', 'title' => 'Гнучкий графік', 'desc' => 'Роботи у неробочий час або поетапно, без зупинки процесів']] as $item)
                    <div class="flex items-start gap-4 p-4 rounded-xl hover:bg-gray-50 transition-colors">
                        <div class="size-10 rounded-lg bg-tryit-green/10 flex items-center justify-center shrink-0">
                            <x-dynamic-component :component="'lucide-' . $item['icon']" class="size-5 text-tryit-green" stroke-width="1.5" />
                        </div>
                        <div>
                            <h3 class="font-display font-bold text-gray-900 text-sm mb-1">{{ $item['title'] }}</h3>
                            <p class="text-xs text-gray-500 leading-relaxed mb-0">{{ $item['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-12 md:py-16 bg-tryit-green">
        <div class="max-w-3xl mx-auto px-5 text-center">
            <x-lucide-phone-call class="size-8 text-white/80 mx-auto mb-4" stroke-width="1.5" />
            <h2 class="font-display text-2xl md:text-3xl font-bold text-white mb-3">Замовте генеральне прибирання</h2>
            <p class="text-white/70 text-sm mb-6">Чистота — запорука безпеки та продуктивності вашого виробництва</p>
            <a href="tel:+380978778667"
                class="inline-flex items-center gap-2 bg-white text-tryit-green font-display font-bold text-sm px-8 py-3.5 rounded-full hover:bg-white/90 transition-colors">
                <x-lucide-phone class="size-4" stroke-width="2" />
                +380 (97) 877-866-7
            </a>
        </div>
    </section>
@endsection
