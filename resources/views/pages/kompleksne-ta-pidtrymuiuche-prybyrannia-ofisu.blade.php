<?php

use function Laravel\Folio\name;

$meta_title = 'Професійне прибирання офісів та чистота, комфорт, порядок';
$meta_description = 'Прибирання офісів: регулярне, генеральне, разове. Очищення меблів, техніки, вікон, санвузлів. Гнучкий графік, екозасоби, гарантія чистоти.';

name('services.kompleksne-ta-pidtrymuiuche-prybyrannia-ofisu');

// Назва папки з зображеннями: kompleksne-ta-pidtrymuiuche-prybyrannia
$imgDir = 'kompleksne-ta-pidtrymuiuche-prybyrannia';

$comparisons = [
    [
        'title' => 'Робоча зона',
        'before' => Vite::asset("resources/images/{$imgDir}/comparison-1-before.jpg"),
        'after' => Vite::asset("resources/images/{$imgDir}/comparison-1-after.jpg"),
    ],
    [
        'title' => 'Кухонна зона',
        'before' => Vite::asset("resources/images/{$imgDir}/comparison-2-before.jpg"),
        'after' => Vite::asset("resources/images/{$imgDir}/comparison-2-after.jpg"),
    ],
    [
        'title' => 'Санвузол',
        'before' => Vite::asset("resources/images/{$imgDir}/comparison-3-before.jpg"),
        'after' => Vite::asset("resources/images/{$imgDir}/comparison-3-after.jpg"),
    ],
    [
        'title' => 'Коридор',
        'before' => Vite::asset("resources/images/{$imgDir}/comparison-4-before.jpg"),
        'after' => Vite::asset("resources/images/{$imgDir}/comparison-4-after.jpg"),
    ],
    [
        'title' => 'new 1',
        'before' => Vite::asset("resources/images/{$imgDir}/comparison-5-before.jpg"),
        'after' => Vite::asset("resources/images/{$imgDir}/comparison-5-after.jpg"),
    ],
];

$categories = [
    [
        'title' => 'Офіс',
        'subtitle' => 'Комплексне прибирання офісних приміщень для комфортної роботи.',
        'bgImage' => Vite::asset("resources/images/{$imgDir}/IMG_4603.jpeg"),
        'images' => ['IMG_4603.jpeg', 'IMG_4808.jpeg', '2026-04-26 14.31.00.jpg', 'comparison-6-after.jpg'],
    ],
    [
        'title' => 'Деталі',
        'subtitle' => 'Приділяємо увагу кожній деталі вашого інтер\'єру.',
        'bgImage' => Vite::asset("resources/images/{$imgDir}/comparison-1-after.jpg"),
        'images' => ['comparison-1-after.jpg', 'comparison-2-after.jpg', 'comparison-3-after.jpg', 'comparison-4-after.jpg'],
    ],
];
?>

@extends('layouts.base')

@section('header')
    <x-page-header image="{{ Vite::asset('resources/images/service-6.jpg') }}">
        <x-slot:title>Комплексне та підтримуюче прибирання офісу</x-slot>
        <x-slot:description>Чистота, комфорт і продуктивність вашого робочого простору</x-slot>
    </x-page-header>
@endsection

@section('content')
    {{-- Intro --}}
    <section class="py-12 md:py-16">
        <div class="max-w-5xl mx-auto px-5">
            <div class="grid lg:grid-cols-2 gap-10 items-start">
                <div>
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-gray-900 mt-2 mb-5">Чистий офіс — продуктивна
                        робота</h2>
                    <p class="text-gray-600 leading-relaxed">Чистий і доглянутий офіс — це не лише приємна атмосфера для
                        співробітників, а й важливий іміджевий фактор для клієнтів та партнерів. Регулярне прибирання
                        підтримує порядок, свіжість повітря та гігієну робочого простору.</p>
                    <p class="text-gray-600 leading-relaxed">Ми пропонуємо комплексне та підтримуюче прибирання офісних
                        приміщень — від щоденного догляду до генеральних прибирань.</p>
                </div>
                <div class="space-y-2.5">
                    <div class="font-bold font-[Oswald] text-2xl">Наші навички</div>
                    <div class="w-full">
                        <x-progressbar percentage="100" label="Щоденне прибирання офісу" />
                    </div>
                    <div class="w-full">
                        <x-progressbar percentage="95" label="Мийка вікон та поверхонь" />
                    </div>
                    <div class="w-full">
                        <x-progressbar percentage="90" label="Дезінфекція та гігієна" />
                    </div>
                    <div class="w-full">
                        <x-progressbar percentage="85" label="Догляд за меблями та технікою" />
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
                <p class="text-gray-500 mt-3">Оберіть зону, щоб побачити результат до та після прибирання</p>
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
            <div class="grid grid-cols-5 gap-2.5 md:gap-5 mt-10">
                <template x-for="(item, index) in comparisons" :key="index">
                    <button @click="activeTab = index"
                        class="relative aspect-square rounded-2xl overflow-hidden border-2 transition-all duration-300 cursor-pointer group"
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
                    <x-table.cell>Офіси, бізнес-центри, коворкінги, магазини, студії</x-table.cell>
                </x-table.row>

                <x-table.row>
                    <x-table.cell class="font-semibold">Частота</x-table.cell>
                    <x-table.cell>Щоденно, 2–3 рази на тиждень або за графіком</x-table.cell>
                </x-table.row>

                <x-table.row>
                    <x-table.cell class="font-semibold">Зони очищення</x-table.cell>
                    <x-table.cell>Підлоги, меблі, техніка, санвузли, кухні, вікна</x-table.cell>
                </x-table.row>

                <x-table.row>
                    <x-table.cell class="font-semibold">Засоби</x-table.cell>
                    <x-table.cell>Еко-сертифіковані, безпечні для людей та обладнання</x-table.cell>
                </x-table.row>

                <x-table.row>
                    <x-table.cell class="font-semibold">Час виконання</x-table.cell>
                    <x-table.cell>30–120 хв/100 м² залежно від площі та складності</x-table.cell>
                </x-table.row>

                <x-table.row>
                    <x-table.cell class="font-semibold">Винесення сміття</x-table.cell>
                    <x-table.cell>Регулярна заміна пакетів, сортування, вивіз за домовленістю</x-table.cell>
                </x-table.row>

                <x-table.row>
                    <x-table.cell class="font-semibold">Контроль якості</x-table.cell>
                    <x-table.cell>Перевірка після кожного прибирання керівником бригади</x-table.cell>
                </x-table.row>

                <x-table.row>
                    <x-table.cell class="font-semibold">Продуктивність</x-table.cell>
                    <x-table.cell>100–300 м²/год залежно від типу приміщення</x-table.cell>
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

    {{-- What's included --}}
    <section class="py-12 md:py-16 bg-gray-50">
        <div class="max-w-5xl mx-auto px-5">
            <h2 class="font-display text-2xl md:text-3xl font-bold text-gray-900 mb-8">Що <span
                    class="text-tryit-orange">входить</span> у послугу</h2>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
                @foreach ([['icon' => 'spray-can', 'title' => 'Щоденне прибирання', 'desc' => 'Підмітання, вологе миття підлоги, видалення пилу з усіх поверхонь'], ['icon' => 'monitor', 'title' => 'Очищення меблів і техніки', 'desc' => 'Протирання столів, стільців, шаф, оргтехніки'], ['icon' => 'trash-2', 'title' => 'Винесення сміття', 'desc' => 'Заміна сміттєвих пакетів та сортування відходів'], ['icon' => 'panel-top', 'title' => 'Мийка вікон', 'desc' => 'Очищення вікон та скляних перегородок без розводів'], ['icon' => 'bath', 'title' => 'Дезінфекція санвузлів', 'desc' => 'Чистота та гігієна в місцях загального користування'], ['icon' => 'flower-2', 'title' => 'Догляд за рослинами', 'desc' => 'Полив та догляд за офісними рослинами за бажанням']] as $item)
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

    {{-- For whom --}}
    <section class="py-12 md:py-16">
        <div class="max-w-5xl mx-auto px-5">
            <h2 class="font-display text-2xl md:text-3xl font-bold text-gray-900 mb-8">Кому <span
                    class="text-tryit-orange">підходить</span></h2>
            <div class="grid sm:grid-cols-2 gap-4">
                @foreach ([['icon' => 'building-2', 'text' => 'Офісам, бізнес-центрам та коворкінгам'], ['icon' => 'store', 'text' => 'Магазинам, салонам краси, клінікам'], ['icon' => 'landmark', 'text' => 'Державним установам та навчальним закладам'], ['icon' => 'briefcase', 'text' => 'Приватним кабінетам, студіям та агентствам']] as $item)
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
                @foreach ([['step' => '01', 'title' => 'Консультація', 'desc' => 'Підлаштовуємо графік прибирання під ваш розклад', 'icon' => 'calendar'], ['step' => '02', 'title' => 'Прибирання', 'desc' => 'Дбайливо чистимо техніку, меблі та поверхні', 'icon' => 'sparkles'], ['step' => '03', 'title' => 'Екозасоби', 'desc' => 'Безпечні для людей та навколишнього середовища', 'icon' => 'leaf'], ['step' => '04', 'title' => 'Контроль якості', 'desc' => 'Кожне прибирання виконується на вищому рівні', 'icon' => 'check-circle']] as $step)
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
                    class="text-tryit-orange">обирають нас</span></h2>
            <div class="grid sm:grid-cols-2 gap-4">
                @foreach ([['icon' => 'clock', 'title' => 'Гнучкий графік', 'desc' => 'Щоденне, разове або генеральне прибирання'], ['icon' => 'spray-can', 'title' => 'Професійні засоби', 'desc' => 'Безпечні та ефективні миючі засоби та обладнання'], ['icon' => 'users', 'title' => 'Досвідчена команда', 'desc' => 'Акуратність, швидкість та відповідальність'], ['icon' => 'badge-check', 'title' => 'Гарантія чистоти', 'desc' => 'Ваш офіс завжди виглядатиме ідеально']] as $item)
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

    <x-order-banner image="service-6.jpg" phone="+38 (067) 123-45-67" title="Замовити прибирання офісу"
        subtitle="Створимо ідеальну чистоту у вашому робочому просторі. Телефонуйте!" :service="\App\Enums\ServiceEnum::OFFICE_CLEANING->value" />

    @include('partials.blog-section')
@endsection
