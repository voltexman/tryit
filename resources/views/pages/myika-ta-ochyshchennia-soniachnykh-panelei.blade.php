<?php

use function Laravel\Folio\name;

$meta_title = 'Миття сонячних панелей та професійне очищення для максимальної ефективності';
$meta_description = 'Замовте миття сонячних панелей! Безпечне очищення без подряпин, збільшення продуктивності до 30%, продовження терміну служби батарей. Працюємо швидко та якісно!';

name('services.myika-ta-ochyshchennia-soniachnykh-panelei');
?>

@extends('layouts.base')

@section('header')
    <x-page-header image="{{ Vite::asset('resources/images/service-2.jpg') }}">
        <x-slot:title>Мийка та очищення сонячних панелей</x-slot>
        <x-slot:description>Безпечне очищення для максимальної продуктивності вашої електростанції</x-slot>
    </x-page-header>
@endsection

@section('content')
    {{-- Intro --}}
    <x-section>
        <div class="grid lg:grid-cols-2 gap-10 items-start">
            <div>
                <h2 class="font-display text-2xl md:text-3xl font-bold text-gray-900 mt-2 mb-5">До 30% більше енергії з
                    чистих панелей</h2>
                <p class="text-gray-600 leading-relaxed">Сонячні панелі — це вигідна інвестиція в екологічну енергію, але
                    їх ефективність напряму залежить від чистоти. Пил, бруд, пташиний послід, дощові сліди та сажа
                    можуть знижувати продуктивність сонячних батарей до 30%.</p>
                <p class="text-gray-600 leading-relaxed">Ми пропонуємо професійне миття сонячних панелей із використанням
                    безпечних технологій, що не пошкоджують поверхню. Наші спеціалісти знають, як правильно очищати
                    фотоелементи, щоб уникнути подряпин та механічних пошкоджень.</p>
            </div>
            <div class="space-y-2.5">
                <div class="font-bold font-[Oswald] text-2xl">Наші навички</div>
                <div class="w-full">
                    <x-progressbar percentage="100" label="Мийка сонячних панелей" />
                </div>
                <div class="w-full">
                    <x-progressbar percentage="95" label="Очищення без подряпин" />
                </div>
                <div class="w-full">
                    <x-progressbar percentage="90" label="Видалення пилу та нальоту" />
                </div>
                <div class="w-full">
                    <x-progressbar percentage="85" label="Підвищення ефективності панелей" />
                </div>
            </div>
        </div>
    </x-section>

    <x-section class="bg-slate-50 border-t border-gray-100">

        @include('partials.services-standarts')

        <x-table class="mt-15" striped>
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
    </x-section>

    {{-- Why clean --}}
    <x-section>
        <h2 class="font-display text-2xl md:text-3xl font-bold text-gray-900 mb-8">Чому важливо <span
                class="text-tryit-orange">очищати</span> панелі</h2>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5">
            @foreach ([['icon' => 'sun', 'title' => 'Більше енергії', 'desc' => 'Чисті панелі поглинають більше сонячного світла та підвищують ефективність'], ['icon' => 'clock', 'title' => 'Довший термін служби', 'desc' => 'Відсутність забруднень зменшує ризик перегріву та пошкодження'], ['icon' => 'shield-check', 'title' => 'Захист від корозії', 'desc' => 'Своєчасне очищення запобігає появі нальоту, який може пошкодити панелі'], ['icon' => 'piggy-bank', 'title' => 'Менше витрат', 'desc' => 'Регулярний догляд дозволяє уникнути дорогих поломок та ремонтів']] as $item)
                <div class="bg-white rounded-xl p-5 shadow-sm">
                    <div class="size-10 rounded-lg bg-tryit-green/10 flex items-center justify-center mb-3">
                        <x-dynamic-component :component="'lucide-' . $item['icon']" class="size-5 text-tryit-green" stroke-width="1.5" />
                    </div>
                    <h3 class="font-display font-bold text-gray-900 text-sm mb-1.5">{{ $item['title'] }}</h3>
                    <p class="text-xs text-gray-500 leading-relaxed mb-0">{{ $item['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </x-section>

    {{-- For whom --}}
    <x-section class="bg-slate-50 border-t border-gray-100">
        <h2 class="font-display text-2xl md:text-3xl font-bold text-gray-900 mb-8">Які об'єкти ми <span
                class="text-tryit-orange">обслуговуємо</span></h2>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ([['icon' => 'home', 'text' => 'Приватні будинки та дачі'], ['icon' => 'building-2', 'text' => 'Бізнес-центри та офіси'], ['icon' => 'factory', 'text' => 'Промислові підприємства'], ['icon' => 'tractor', 'text' => 'Сільськогосподарські комплекси'], ['icon' => 'zap', 'text' => 'Автономні сонячні станції']] as $item)
                <div class="flex items-center gap-3 bg-gray-50 rounded-xl p-4">
                    <x-dynamic-component :component="'lucide-' . $item['icon']" class="size-5 text-tryit-orange shrink-0" stroke-width="1.5" />
                    <span class="text-sm text-gray-700">{{ $item['text'] }}</span>
                </div>
            @endforeach
        </div>
    </x-section>

    {{-- How we work --}}
    <x-section>
        <h2 class="font-display text-2xl md:text-3xl font-bold text-gray-900 mb-8">Як ми <span
                class="text-tryit-orange">працюємо</span></h2>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5">
            @foreach ([['step' => '01', 'title' => 'Діагностика', 'desc' => 'Оцінюємо рівень забруднення та визначаємо найефективніший метод очищення', 'icon' => 'scan-search'], ['step' => '02', 'title' => 'Миття панелей', 'desc' => 'Демінералізована вода та м\'які щітки — без подряпин та пошкоджень', 'icon' => 'droplets'], ['step' => '03', 'title' => 'Перевірка', 'desc' => 'Контролюємо якість очищення для максимальної ефективності панелей', 'icon' => 'check-circle'], ['step' => '04', 'title' => 'Рекомендації', 'desc' => 'Даємо поради щодо частоти миття та профілактичного обслуговування', 'icon' => 'clipboard-list']] as $step)
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
    </x-section>

    {{-- Why us --}}
    <x-section class="bg-slate-50 border-t border-slate-100">
        <h2 class="font-display text-2xl md:text-3xl font-bold text-gray-900 mb-8">Чому <span
                class="text-tryit-orange">ми</span></h2>
        <div class="grid sm:grid-cols-2 gap-4">
            @foreach ([['icon' => 'hand', 'title' => 'Безконтактне очищення', 'desc' => 'Не використовуємо абразиви та агресивну хімію'], ['icon' => 'wrench', 'title' => 'Сучасне обладнання', 'desc' => 'М\'які щітки, очищена вода та професійні інструменти'], ['icon' => 'award', 'title' => 'Досвідчені спеціалісти', 'desc' => 'Знаємо всі особливості догляду за сонячними батареями'], ['icon' => 'badge-check', 'title' => 'Гарантований результат', 'desc' => 'Максимальне видалення забруднень без шкоди для покриття'], ['icon' => 'calendar-check', 'title' => 'Гнучкий графік', 'desc' => 'Працюємо у зручний для вас час, без відключення електростанції']] as $item)
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
    </x-section>

    <x-order-banner image="service-2.jpg" phone="+38 (067) 123-45-67" title="Замовити миття панелей"
        subtitle="Збільште ефективність вашої СЕС вже сьогодні. Телефонуйте!" :service="\App\Enums\ServiceEnum::SOLAR_PANEL_CLEANING->value" />

    @include('partials.blog-section')
@endsection
