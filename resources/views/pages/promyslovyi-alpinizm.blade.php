<?php

use function Laravel\Folio\name;

$meta_title = 'Висотні роботи та промисловий альпінізм — безпека та якість';
$meta_description = 'Промисловий альпінізм: мийка фасадів, монтаж вивісок, герметизація швів, очищення дахів. Сертифіковані фахівці, безпечні технології, оперативне виконання';

name('services.promyslovyi-alpinizm');

// Назва папки з зображеннями: promyslovyi-alpinizm
$imgDir = 'promyslovyi-alpinizm';

$categories = [
    [
        'title' => 'Висотні роботи',
        'subtitle' => 'Професійне виконання завдань на будь-якій висоті з дотриманням усіх норм безпеки.',
        'bgImage' => Vite::asset("resources/images/{$imgDir}/image-2.jpg"),
        'images' => ['image-1.jpg', 'image-2.jpg'],
    ],
];
?>

@extends('layouts.base')

@section('header')
    <x-page-header image="{{ Vite::asset('resources/images/service-7.jpg') }}">
        <x-slot:title>Промисловий альпінізм</x-slot>
        <x-slot:description>Висотні роботи будь-якої складності з гарантією безпеки</x-slot>
    </x-page-header>
@endsection

@section('content')
    {{-- Intro --}}
    <x-section>
        <div class="grid lg:grid-cols-2 gap-10 items-start">
            <div>
                <h2 class="font-display text-2xl md:text-3xl font-bold text-gray-900 mt-2 mb-5">Професійні рішення на
                    будь-якій висоті</h2>
                <p class="text-gray-600 leading-relaxed">Деякі види робіт на висоті неможливо виконати звичайними
                    методами — саме тоді на допомогу приходять фахівці з промислового альпінізму. Висотні роботи
                    вимагають професіоналізму, досвіду та спеціального обладнання.</p>
                <p class="text-gray-600 leading-relaxed">Наша команда кваліфікованих альпіністів виконує широкий спектр
                    робіт: мийка фасадів, монтаж і демонтаж конструкцій, герметизація швів, очищення дахів від снігу та
                    криги. Ми гарантуємо високу якість, безпеку та оперативність.</p>
            </div>
            <div class="space-y-2.5">
                <div class="font-bold font-[Oswald] text-2xl">Наші навички</div>
                <div class="w-full">
                    <x-progressbar percentage="100" label="Мийка фасадів і вікон" />
                </div>
                <div class="w-full">
                    <x-progressbar percentage="95" label="Герметизація міжпанельних швів" />
                </div>
                <div class="w-full">
                    <x-progressbar percentage="90" label="Монтаж конструкцій" />
                </div>
                <div class="w-full">
                    <x-progressbar percentage="85" label="Очищення дахів" />
                </div>
            </div>
        </div>
    </x-section>

    <x-section class="bg-slate-50 border border-slate-100">

        @include('partials.services-standarts')

        <x-table class="mt-15" striped>
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
    </x-section>

    <section class="relative lg:py-20 w-full bg-gray-900 overflow-hidden text-white font-sans" x-data="{
        activeTab: 0
    }">
        {{-- Динамічний фон --}}
        @foreach ($categories as $index => $cat)
            <div x-show="activeTab === {{ $index }}" x-transition:enter="transition opacity-100 duration-1000"
                x-transition:enter-start="opacity-0" x-cloak class="absolute inset-0 z-0">
                <img src="{{ $cat['bgImage'] }}" class="size-full object-cover brightness-[0.3] scale-105 blur-xs">
                <div class="absolute inset-0 bg-linear-to-r from-slate-900/50 to-slate-950/10"></div>
            </div>
        @endforeach

        <div class="relative z-10 h-full flex flex-col lg:flex-row">
            <!-- Ліва панель: Вертикальні Таби -->
            <div
                class="w-full lg:w-1/4 flex lg:flex-col justify-start lg:justify-center p-5 lg:pl-12 gap-5 lg:gap-10 overflow-x-auto lg:overflow-visible no-scrollbar mt-12 lg:mt-0">
                @foreach ($categories as $index => $cat)
                    <button @click="activeTab = {{ $index }}"
                        :class="activeTab === {{ $index }} ?
                            'text-3xl lg:text-5xl font-bold opacity-100 translate-x-2' :
                            'text-xl lg:text-2xl opacity-30 hover:opacity-60'"
                        class="text-left transition-all duration-500 whitespace-nowrap lg:whitespace-normal origin-left flex items-center gap-4">
                        <span class="text-xs font-mono opacity-50">0{{ $index + 1 }}</span>
                        <span class="font-display">{{ $cat['title'] }}</span>
                    </button>
                @endforeach
            </div>

            <!-- Права панель: Контент та Слайдер -->
            <div class="w-full lg:w-3/4 flex flex-col justify-center lg:px-20 pb-12 lg:pb-0 h-full">
                @foreach ($categories as $index => $cat)
                    <div x-show="activeTab === {{ $index }}" x-cloak class="flex flex-col h-full justify-center">
                        <div class="max-w-xl mb-8 lg:mb-12">
                            <h2 class="text-4xl lg:text-6xl font-display font-bold mb-4 tracking-tighter leading-none">
                                {{ $cat['title'] }}</h2>
                            <p class="text-gray-400 text-sm lg:text-base leading-relaxed max-w-md">{{ $cat['subtitle'] }}
                            </p>
                        </div>

                        <x-carousel-slider :images="$cat['images']" :imagePath="$imgDir" id="embla-cat-{{ $index }}"
                            :itemsPerView="2" />
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- What's included --}}
    <x-section class="bg-slate-50 border border-slate-100">
        <h2 class="font-display text-2xl md:text-3xl font-bold text-gray-900 mb-8">Що входить у <span
                class="text-tryit-orange">послугу</span></h2>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
            @foreach ([['icon' => 'droplets', 'title' => 'Мийка фасадів та вікон', 'desc' => 'Очищення фасадів і вікон на висоті — без розводів, пилу та забруднень'], ['icon' => 'monitor', 'title' => 'Монтаж конструкцій', 'desc' => 'Встановлення та демонтаж рекламних банерів, вивісок, кондиціонерів'], ['icon' => 'shield-check', 'title' => 'Герметизація швів', 'desc' => 'Захист міжпанельних швів від вологи, холоду та протікань'], ['icon' => 'snowflake', 'title' => 'Очищення дахів', 'desc' => 'Безпечне та швидке видалення снігу, криги та бурульок'], ['icon' => 'paintbrush', 'title' => 'Фарбування фасадів', 'desc' => 'Оновлення та ремонт зовнішнього вигляду будівлі на висоті']] as $item)
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
    <x-section>
        <h2 class="font-display text-2xl md:text-3xl font-bold text-gray-900 mb-8">Кому <span
                class="text-tryit-orange">підходить</span> послуга</h2>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
            @foreach ([['icon' => 'building-2', 'text' => 'Офісним центрам та бізнес-комплексам'], ['icon' => 'store', 'text' => 'Торгово-розважальним центрам'], ['icon' => 'building', 'text' => 'Будівельним компаніям та ЖК'], ['icon' => 'landmark', 'text' => 'Державним установам та лікарням']] as $item)
                <div class="flex items-center gap-3 bg-gray-50 rounded-xl p-4">
                    <x-dynamic-component :component="'lucide-' . $item['icon']" class="size-5 text-tryit-orange shrink-0" stroke-width="1.5" />
                    <span class="text-sm text-gray-700">{{ $item['text'] }}</span>
                </div>
            @endforeach
        </div>
    </x-section>

    {{-- How we work --}}
    <x-section class="bg-slate-50 border border-slate-100">
        <h2 class="font-display text-2xl md:text-3xl font-bold text-gray-900 mb-8">Як ми <span
                class="text-tryit-orange">працюємо</span></h2>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5">
            @foreach ([['step' => '01', 'title' => 'Аналіз об\'єкта', 'desc' => 'Визначаємо особливості будівлі та підбираємо обладнання', 'icon' => 'scan-search'], ['step' => '02', 'title' => 'Підготовка', 'desc' => 'Встановлюємо страхувальні системи та забезпечуємо безпеку', 'icon' => 'hard-hat'], ['step' => '03', 'title' => 'Виконання робіт', 'desc' => 'Чітко, швидко та з гарантією якості на будь-якій висоті', 'icon' => 'mountain'], ['step' => '04', 'title' => 'Контроль та здача', 'desc' => 'Перевіряємо результат та залишаємо об\'єкт в ідеальному стані', 'icon' => 'check-circle']] as $step)
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
    <x-section>
        <h2 class="font-display text-2xl md:text-3xl font-bold text-gray-900 mb-8">Чому <span
                class="text-tryit-orange">ми</span></h2>
        <div class="grid sm:grid-cols-2 gap-4">
            @foreach ([['icon' => 'award', 'title' => 'Сертифіковані альпіністи', 'desc' => 'Досвідчені майстри з відповідними допусками та дозволами'], ['icon' => 'shield-check', 'title' => 'Безпечні технології', 'desc' => 'Дотримуємось усіх норм безпеки на висоті'], ['icon' => 'target', 'title' => 'Висока якість', 'desc' => 'Бездоганний результат навіть у важкодоступних місцях'], ['icon' => 'zap', 'title' => 'Гнучкість виконання', 'desc' => 'Працюємо швидко та без шкоди для вашого бізнесу'], ['icon' => 'wallet', 'title' => 'Конкурентні ціни', 'desc' => 'Доступні тарифи без прихованих витрат']] as $item)
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

    <x-order-banner image="service-7.jpg" phone="+38 (067) 123-45-67" title="Послуги альпіністів"
        subtitle="Висотні роботи будь-якої складності. Телефонуйте!" :service="\App\Enums\ServiceEnum::INDUSTRIAL_ALPINISM->value" />

    @include('partials.blog-section')
@endsection
