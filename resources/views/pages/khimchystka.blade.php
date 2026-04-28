<?php

use function Laravel\Folio\name;

$meta_title = 'Професійна хімчистка меблів, килимів, авто та глибоке очищення без хімії';
$meta_description = 'Замовте хімчистку меблів, килимів, авто та текстилю! Видалення плям, запахів, алергенів. Швидке висихання, безпечні засоби, відновлення свіжості';

name('services.khimchystka');

// Назва папки з зображеннями: khimchystka
$imgDir = 'khimchystka';

$categories = [
    [
        'title' => 'Хімчистка',
        'subtitle' => 'Професійне очищення меблів та килимів для відновлення їхнього вигляду.',
        'bgImage' => Vite::asset("resources/images/{$imgDir}/IMG_4654.jpeg"),
        'images' => ['IMG_4654.jpeg', 'IMG_4656.jpeg', 'image-1.jpg'],
    ],
];
?>

@extends('layouts.base')

@section('header')
    <x-page-header image="{{ Vite::asset('resources/images/service-5.jpg') }}">
        <x-slot:title>Хімчистка меблів, килимів та авто</x-slot>
        <x-slot:description>Глибоке очищення тканин з відновленням свіжості та кольору</x-slot>
    </x-page-header>
@endsection

@section('content')
    {{-- Intro --}}
    <section class="py-12 md:py-10">
        <div class="max-w-5xl mx-auto px-5">
            <div class="grid lg:grid-cols-2 gap-10 items-start">
                <div>
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-gray-900 mt-2 mb-5">Друге життя для ваших
                        меблів та килимів</h2>
                    <p class="text-gray-600 leading-relaxed">Звичайне прибирання не завжди здатне впоратися зі складними
                        плямами, пилом і неприємними запахами. Тканинні поверхні, меблі, килими та автомобільні салони
                        потребують глибокого очищення, яке усуне не лише забруднення, а й бактерії та алергени.</p>
                    <p class="text-gray-600 leading-relaxed">Ми пропонуємо професійну хімчистку, яка поверне вашим речам
                        первозданну чистоту та свіжість. Використовуємо безпечні мийні засоби, що не шкодять тканинам та
                        навколишньому середовищу.</p>
                </div>
                <div class="space-y-2.5">
                    <div class="font-bold font-[Oswald] text-2xl">Наші навички</div>
                    <div class="w-full">
                        <x-progressbar percentage="100" label="Хімчистка меблів" />
                    </div>
                    <div class="w-full">
                        <x-progressbar percentage="95" label="Очищення килимів" />
                    </div>
                    <div class="w-full">
                        <x-progressbar percentage="90" label="Чистка салонів авто" />
                    </div>
                    <div class="w-full">
                        <x-progressbar percentage="85" label="Антиалергенна обробка" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Before/After Section --}}
    <section class="py-12 md:py-20 bg-slate-50 border-y border-slate-100">
        <div class="max-w-5xl mx-auto px-5">
            <div class="text-center mb-10">
                <h2 class="font-display text-3xl md:text-4xl font-bold text-gray-900">Результат хімчистки</h2>
                <p class="text-gray-500 mt-3">Професійне видалення найскладніших забруднень</p>
            </div>
            <div class="relative bg-gray-100 rounded-2xl overflow-hidden shadow-xl">
                <x-before-after before="{{ Vite::asset('resources/images/' . $imgDir . '/comparison-1-before.jpg') }}"
                    after="{{ Vite::asset('resources/images/' . $imgDir . '/comparison-1-after.jpg') }}" />
            </div>
        </div>
    </section>

    <section class="mt-10">
        <div class="max-w-5xl mx-auto px-5">

            @include('partials.services-standarts')

            <x-table class="mt-15" striped>
                <x-table.row>
                    <x-table.cell class="font-semibold">Об’єкти</x-table.cell>
                    <x-table.cell>Меблі, килими, штори, пледи, салони авто</x-table.cell>
                </x-table.row>

                <x-table.row>
                    <x-table.cell class="font-semibold">Метод очищення</x-table.cell>
                    <x-table.cell>Екстракційний, пінний, ручний</x-table.cell>
                </x-table.row>

                <x-table.row>
                    <x-table.cell class="font-semibold">Час виконання</x-table.cell>
                    <x-table.cell>30–120 хв залежно від об’єкта</x-table.cell>
                </x-table.row>

                <x-table.row>
                    <x-table.cell class="font-semibold">Сушка</x-table.cell>
                    <x-table.cell>Швидка, 1–3 години без запаху</x-table.cell>
                </x-table.row>

                <x-table.row>
                    <x-table.cell class="font-semibold">Продуктивність</x-table.cell>
                    <x-table.cell>~1–3 м²/год <i>(залежно від типу поверхні)</i></x-table.cell>
                </x-table.row>

                <x-table.row>
                    <x-table.cell class="font-semibold">Мінімальне замовлення</x-table.cell>
                    <x-table.cell>1 одиниця об’єкта або від 30 хв роботи</x-table.cell>
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
            <h2 class="font-display text-2xl md:text-3xl font-bold text-gray-900 mb-8">Що входить у <span
                    class="text-tryit-orange">послугу</span></h2>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
                @foreach ([['icon' => 'sofa', 'title' => 'Хімчистка меблів', 'desc' => 'Дивани, крісла, матраци, офісні стільці — видаляємо плями та запахи'], ['icon' => 'grid-2x2', 'title' => 'Килими та покриття', 'desc' => 'Видалення плям, пилу, пилових кліщів із килимових покриттів'], ['icon' => 'car', 'title' => 'Автомобільний салон', 'desc' => 'Очищення сидінь, оббивки, килимків від бруду та запахів'], ['icon' => 'blinds', 'title' => 'Текстильні вироби', 'desc' => 'Штори, гардини, пледи — делікатне очищення та відновлення'], ['icon' => 'shield-check', 'title' => 'Антиалергенна обробка', 'desc' => 'Знищення пилових кліщів, бактерій, грибків для здорового повітря'], ['icon' => 'leaf', 'title' => 'Безпечні засоби', 'desc' => 'Екологічна чистка без агресивних хімікатів, безпечно для дітей']] as $item)
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
                    class="text-tryit-orange">потрібна</span> послуга</h2>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
                @foreach ([['icon' => 'home', 'text' => 'Власникам будинків і квартир'], ['icon' => 'building-2', 'text' => 'Офісам, ресторанам, готелям'], ['icon' => 'car', 'text' => 'Автовласникам'], ['icon' => 'heart-pulse', 'text' => 'Алергікам та сім\'ям з дітьми']] as $item)
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
                @foreach ([['step' => '01', 'title' => 'Оцінка стану', 'desc' => 'Визначаємо тип забруднень та підбираємо відповідний метод чищення', 'icon' => 'search'], ['step' => '02', 'title' => 'Попередня обробка', 'desc' => 'Наносимо спеціальні засоби для розчинення складних плям', 'icon' => 'flask-conical'], ['step' => '03', 'title' => 'Глибоке очищення', 'desc' => 'Екстракційна або пінна чистка професійним обладнанням', 'icon' => 'sparkles'], ['step' => '04', 'title' => 'Сушка', 'desc' => 'Швидке висихання без залишкової вологи та неприємних запахів', 'icon' => 'wind']] as $step)
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
                @foreach ([['icon' => 'sparkles', 'title' => 'Глибоке очищення', 'desc' => 'Видаляємо навіть найскладніші плями та запахи'], ['icon' => 'timer', 'title' => 'Швидке висихання', 'desc' => 'Меблі та килими готові до використання вже через кілька годин'], ['icon' => 'shield-check', 'title' => 'Безпечні засоби', 'desc' => 'Не шкодять здоров\'ю та підходять для алергіків'], ['icon' => 'palette', 'title' => 'Збереження кольору', 'desc' => 'Ваші речі залишаться яскравими та м\'якими'], ['icon' => 'wallet', 'title' => 'Доступні ціни', 'desc' => 'Індивідуальний підхід та прозоре ціноутворення']] as $item)
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

    <x-order-banner title="Замовити хімчистку" subtitle="Професійна чистка меблів, килимів, авто. Телефонуйте!"
        :service="\App\Enums\ServiceEnum::DRY_CLEANING->value" video="khimchystka/video-bg.mp4" />

    @include('partials.blog-section')
@endsection
