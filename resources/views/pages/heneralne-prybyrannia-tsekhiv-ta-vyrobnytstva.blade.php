<?php

use function Laravel\Folio\name;

$meta_title = 'Генеральне прибирання виробничих приміщень та очищення цехів, складів, заводів';
$meta_description = 'Професійне прибирання промислових приміщень, цехів, складів та заводів. Видалення пилу, мастил, сажі, дезінфекція та відповідність санітарним нормам';

name('services.heneralne-prybyrannia-tsekhiv-ta-vyrobnytstva');

// Назва папки з зображеннями: generalne-prybyrannia-tsekhiv-ta-vyrobnytstva
$imgDir = 'generalne-prybyrannia-tsekhiv-ta-vyrobnytstva';

$comparisons = [
    [
        'title' => 'Виробничий цех',
        'before' => Vite::asset("resources/images/{$imgDir}/comparison-1-before.jpg"),
        'after' => Vite::asset("resources/images/{$imgDir}/comparison-1-after.jpg"),
    ],
    [
        'title' => 'Складське приміщення',
        'before' => Vite::asset("resources/images/{$imgDir}/comparison-2-before.jpg"),
        'after' => Vite::asset("resources/images/{$imgDir}/comparison-2-after.jpg"),
    ],
    [
        'title' => 'Технічна зона',
        'before' => Vite::asset("resources/images/{$imgDir}/comparison-3-before.jpg"),
        'after' => Vite::asset("resources/images/{$imgDir}/comparison-3-after.jpg"),
    ],
    [
        'title' => 'Промислові відкладення',
        'before' => Vite::asset("resources/images/{$imgDir}/comparison-4-before.jpg"),
        'after' => Vite::asset("resources/images/{$imgDir}/comparison-4-after.jpg"),
    ],
    [
        'title' => 'Спеціалізована ділянка',
        'before' => Vite::asset("resources/images/{$imgDir}/comparison-5-before.jpg"),
        'after' => Vite::asset("resources/images/{$imgDir}/comparison-5-after.jpg"),
    ],
    [
        'title' => 'Спеціалізована ділянка',
        'before' => Vite::asset("resources/images/{$imgDir}/comparison-6-before.jpeg"),
        'after' => Vite::asset("resources/images/{$imgDir}/comparison-6-after.jpeg"),
    ],
];

$categories = [
    [
        'title' => 'Цехи',
        'subtitle' => 'Професійне прибирання виробничих приміщень. Якісний результат для вашого виробництва.',
        'bgImage' => Vite::asset("resources/images/{$imgDir}/comparison-1-after.jpg"),
        'images' => ['IMG_2816.jpeg', 'IMG_2843.jpeg', 'IMG_2934.jpeg', 'IMG_3025.JPG'],
    ],
    [
        'title' => 'Склади',
        'subtitle' => 'Кожна деталь має значення. Ми приділяємо увагу навіть найбільш важкодоступним місцям.',
        'bgImage' => Vite::asset("resources/images/{$imgDir}/comparison-2-after.jpg"),
        'images' => ['IMG_3034.jpeg', 'IMG_3127.jpeg', 'IMG_3141.JPG', 'IMG_3170.jpeg'],
    ],
];
?>

@extends('layouts.base')

@section('header')
    <x-page-header image="{{ Vite::asset('resources/images/service-4.jpeg') }}">
        <x-slot:title class="text-balance">Генеральне прибирання<br>цехів та виробництва</x-slot>
        <x-slot:description class="text-balance">Чистота, безпека та відповідність санітарним нормам</x-slot>
    </x-page-header>
@endsection

@section('content')
    <section class="py-10 mt-10">
        <div class="max-w-5xl mx-auto px-5">
            <div class="grid lg:grid-cols-2 gap-10 items-start">
                <div>
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-gray-900 mt-2 mb-5">Чистота на виробництві —
                        безпека та ефективність</h2>
                    <p class="text-gray-600 leading-relaxed">В умовах постійного виробничого процесу накопичуються пил, жир,
                        технічні забруднення, що впливають на працездатність персоналу та обладнання.</p>
                    <p class="text-gray-600 leading-relaxed">Наша команда має досвід роботи на підприємствах різних галузей —
                        від харчових виробництв до важкої промисловості.</p>
                </div>
                <div class="space-y-2.5">
                    <div class="font-bold font-[Oswald] text-2xl">Наші навички</div>
                    <div class="w-full">
                        <x-progressbar percentage="100" label="Видалення пилу та бруду" />
                    </div>
                    <div class="w-full">
                        <x-progressbar percentage="95" label="Дезінфекція робочих зон" />
                    </div>
                    <div class="w-full">
                        <x-progressbar percentage="90" label="Очищення обладнання" />
                    </div>
                    <div class="w-full">
                        <x-progressbar percentage="85" label="Миття поверхонь" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Before/After Section with Tabs --}}
    <section class="py-20 bg-slate-100 border border-slate-100" x-data="{
        activeTab: 0,
        comparisons: {{ json_encode($comparisons) }}
    }">
        <div class="max-w-5xl mx-auto px-5 mt-5">
            <div class="text-center mb-10">
                <h2 class="font-display text-3xl md:text-4xl font-bold text-gray-900">Результати нашої роботи</h2>
                <p class="text-gray-500 mt-3">Оберіть об'єкт, щоб побачити результат до та після генерального прибирання</p>
            </div>

            {{-- Comparison View --}}
            <div class="relative bg-gray-100 rounded-2xl overflow-hidden shadow-xl">
                @foreach ($comparisons as $index => $item)
                    <div x-show="activeTab === {{ $index }}" x-transition:enter="transition ease-out duration-500"
                        x-transition:enter-start="opacity-0 translate-y-4"
                        x-transition:enter-end="opacity-100 translate-y-0" @if ($index !== 0) x-cloak @endif>
                        <x-before-after before="{{ $item['before'] }}" after="{{ $item['after'] }}" />
                    </div>
                @endforeach
            </div>

            {{-- Thumbnails Triggers --}}
            <div class="grid grid-cols-3 gap-2.5 md:gap-5 mt-10">
                <template x-for="(item, index) in comparisons" :key="index">
                    <button @click="activeTab = index"
                        class="relative aspect-video rounded-2xl overflow-hidden border-2 transition-all duration-300 cursor-pointer group"
                        :class="activeTab === index ? 'border-tryit-orange ring-4 ring-tryit-orange/20 scale-105' :
                            'border-transparent opacity-60 hover:opacity-100'">
                        <img :src="item.after"
                            class="size-full object-cover transition-transform duration-500 group-hover:scale-110"
                            :alt="item.title">
                        <div class="absolute inset-0 bg-black/40 flex items-end p-3">
                            <span
                                class="font-display text-white text-[10px] font-bold uppercase drop-shadow-xl tracking-wider"
                                x-text="item.title"></span>
                        </div>
                    </button>
                </template>
            </div>
        </div>
    </section>

    <section class="py-10 md:py-20">
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
                            :itemsPerView="3" />
                    </div>
                @endforeach
            </div>
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

    <section class="py-10 md:py-20">
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

    <x-order-banner image="generalne-prybyrannia-tsekhiv-ta-vyrobnytstva/IMG_3170.jpeg" title="Замовити послугу"
        subtitle="Професійне прибирання промислових об'єктів. Телефонуйте!" :service="\App\Enums\ServiceEnum::INDUSTRIAL_CLEANING->value" />

    @include('partials.blog-section')
@endsection
