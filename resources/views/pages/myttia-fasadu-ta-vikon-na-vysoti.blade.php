<?php

use function Laravel\Folio\name;

$meta_title = 'Професійне миття вікон і фасадів. Безпечне очищення WFP-системою';
$meta_description = 'Замовте миття вікон і фасадів із використанням екологічної WFP-системи! Без розводів, без хімії, безпечне очищення для бізнес-центрів, офісів, ЖК та магазинів';

name('services.myttia-fasadu-ta-vikon-na-vysoti');
?>

@extends('layouts.base')

@section('header')
    <x-page-header image="{{ Vite::asset('resources/images/service-1.jpg') }}">
        <x-slot:title>Миття фасадів та вікон на висоті</x-slot>
        <x-slot:description>Інноваційна технологія WFP-системи для бездоганного результату</x-slot>
    </x-page-header>
@endsection

@section('content')
    {{-- Intro --}}
    <section class="py-12 md:py-16">
        <div class="max-w-5xl mx-auto px-5">
            <div class="grid lg:grid-cols-2 gap-10 items-center">
                <div>
                    <span
                        class="font-display text-sm font-semibold text-tryit-orange uppercase tracking-wider">WFP-система</span>
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-gray-900 mt-2 mb-5">Чисті вікна та фасади —
                        імідж вашого бізнесу</h2>
                    <p class="text-gray-600 leading-relaxed">Забруднення, пил, дощові патьоки та міський смог з часом роблять
                        будівлю тьмяною. Ми пропонуємо професійне миття фасадів і вікон за допомогою сучасної WFP-системи
                        <i>(Water-Fed Pole)</i> — інноваційної технології без використання драбин або підйомників.
                    </p>
                    <p class="text-gray-600 leading-relaxed">Телескопічні карбонові штанги подають очищену демінералізовану
                        воду під тиском — вікна висихають без розводів, а процес повністю безпечний та екологічний.</p>
                </div>
                <div class="relative">
                    <img src="{{ Vite::asset('resources/images/service-1.jpg') }}"
                        class="w-full rounded-2xl shadow-lg object-cover aspect-4/3" alt="Миття фасадів" loading="lazy" />
                </div>
            </div>
        </div>
    </section>

    <section class="mt-10">
        <div class="max-w-5xl mx-auto px-5">

            @include('partials.services-standarts')

            <x-table class="mt-15" striped>
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
        </div>
    </section>

    {{-- Advantages grid --}}
    <section class="py-12 md:py-16 bg-gray-50">
        <div class="max-w-5xl mx-auto px-5">
            <h2 class="font-display text-2xl md:text-3xl font-bold text-gray-900 mb-8">Переваги <span
                    class="text-tryit-orange">WFP-системи</span></h2>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5">
                <div class="bg-white rounded-xl p-5 shadow-sm">
                    <div class="size-10 rounded-lg bg-tryit-green/10 flex items-center justify-center mb-3">
                        <x-lucide-droplets class="size-5 text-tryit-green" stroke-width="1.5" />
                    </div>
                    <h3 class="font-display font-bold text-gray-900 text-sm mb-1.5">Без хімії</h3>
                    <p class="text-xs text-gray-500 leading-relaxed mb-0">Тільки очищена демінералізована вода — екологічно
                        та безпечно</p>
                </div>
                <div class="bg-white rounded-xl p-5 shadow-sm">
                    <div class="size-10 rounded-lg bg-tryit-green/10 flex items-center justify-center mb-3">
                        <x-lucide-sparkles class="size-5 text-tryit-green" stroke-width="1.5" />
                    </div>
                    <h3 class="font-display font-bold text-gray-900 text-sm mb-1.5">Без розводів</h3>
                    <p class="text-xs text-gray-500 leading-relaxed mb-0">Вікна висихають природним чином — ідеально чиста
                        поверхня</p>
                </div>
                <div class="bg-white rounded-xl p-5 shadow-sm">
                    <div class="size-10 rounded-lg bg-tryit-green/10 flex items-center justify-center mb-3">
                        <x-lucide-shield-check class="size-5 text-tryit-green" stroke-width="1.5" />
                    </div>
                    <h3 class="font-display font-bold text-gray-900 text-sm mb-1.5">Безпечно</h3>
                    <p class="text-xs text-gray-500 leading-relaxed mb-0">Без підйомників та альпінізму на середніх висотах
                    </p>
                </div>
                <div class="bg-white rounded-xl p-5 shadow-sm">
                    <div class="size-10 rounded-lg bg-tryit-green/10 flex items-center justify-center mb-3">
                        <x-lucide-leaf class="size-5 text-tryit-green" stroke-width="1.5" />
                    </div>
                    <h3 class="font-display font-bold text-gray-900 text-sm mb-1.5">Екологічно</h3>
                    <p class="text-xs text-gray-500 leading-relaxed mb-0">Жодних хімічних слідів на поверхні та в повітрі
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- For whom --}}
    <section class="py-12 md:py-16">
        <div class="max-w-5xl mx-auto px-5">
            <h2 class="font-display text-2xl md:text-3xl font-bold text-gray-900 mb-8">Для яких <span
                    class="text-tryit-orange">об'єктів</span></h2>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach ([['icon' => 'building-2', 'text' => 'Бізнес-центри та офісні будівлі'], ['icon' => 'store', 'text' => 'Торгові комплекси та магазини'], ['icon' => 'building', 'text' => 'Житлові багатоповерхові будинки'], ['icon' => 'bed-double', 'text' => 'Готелі та ресторани'], ['icon' => 'warehouse', 'text' => 'Промислові та складські приміщення'], ['icon' => 'panel-top', 'text' => 'Вітрини та скляні фасади']] as $item)
                    <div class="flex items-center gap-3 bg-gray-50 rounded-xl p-4">
                        <x-dynamic-component :component="'lucide-' . $item['icon']" class="size-5 text-tryit-orange shrink-0"
                            stroke-width="1.5" />
                        <span class="text-sm text-gray-700">{{ $item['text'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- How we work --}}
    <section class="py-12 md:py-16 bg-gray-50">
        <div class="max-w-5xl mx-auto px-5">
            <h2 class="font-display text-2xl md:text-3xl font-bold text-gray-900 mb-8">Як ми <span
                    class="text-tryit-orange">працюємо</span></h2>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5">
                @foreach ([['step' => '01', 'title' => 'Оцінка об\'єкта', 'desc' => 'Визначаємо рівень забруднення, тип поверхні та підбираємо оптимальну технологію', 'icon' => 'search'], ['step' => '02', 'title' => 'Підготовка', 'desc' => 'Налаштовуємо карбонові штанги з подачею демінералізованої води', 'icon' => 'settings'], ['step' => '03', 'title' => 'Миття', 'desc' => 'Видаляємо бруд, пил, залишки смогу та водяних патьоків', 'icon' => 'spray-can'], ['step' => '04', 'title' => 'Контроль якості', 'desc' => 'Перевіряємо кожне вікно та фасад на бездоганний результат', 'icon' => 'check-circle']] as $step)
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

    {{-- Why us --}}
    <section class="py-12 md:py-16">
        <div class="max-w-5xl mx-auto px-5">
            <h2 class="font-display text-2xl md:text-3xl font-bold text-gray-900 mb-8">Чому <span
                    class="text-tryit-orange">ми</span></h2>
            <div class="grid sm:grid-cols-2 gap-4">
                @foreach ([['icon' => 'shield-check', 'title' => 'Безпека та якість', 'desc' => 'Досвідчені фахівці та сертифіковане обладнання'], ['icon' => 'leaf', 'title' => 'Екологічність', 'desc' => 'Тільки очищена вода без хімічних засобів'], ['icon' => 'badge-check', 'title' => 'Гарантія результату', 'desc' => 'Чистота без розводів і слідів'], ['icon' => 'wallet', 'title' => 'Доступні ціни', 'desc' => 'Індивідуальний підхід та знижки для корпоративних клієнтів'], ['icon' => 'zap', 'title' => 'Оперативність', 'desc' => 'Швидке виконання замовлень у зручний для вас час']] as $item)
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

    {{-- CTA --}}
    <section class="py-12 md:py-16 bg-tryit-green">
        <div class="max-w-3xl mx-auto px-5 text-center">
            <x-lucide-phone-call class="size-8 text-white/80 mx-auto mb-4" stroke-width="1.5" />
            <h2 class="font-display text-2xl md:text-3xl font-bold text-white mb-3">Замовте миття фасадів сьогодні</h2>
            <p class="text-white/70 text-sm mb-6">Залиште заявку або зателефонуйте — і ми підготуємо для вас найкращу
                пропозицію</p>
            <a href="tel:+380978778667"
                class="inline-flex items-center gap-2 bg-white text-tryit-green font-display font-bold text-sm px-8 py-3.5 rounded-full hover:bg-white/90 transition-colors">
                <x-lucide-phone class="size-4" stroke-width="2" />
                +380 (97) 877-866-7
            </a>
        </div>
    </section>
@endsection
