<?php

use function Laravel\Folio\name;

$meta_title = 'Професійна хімчистка меблів, килимів, авто та глибоке очищення без хімії';
$meta_description = 'Замовте хімчистку меблів, килимів, авто та текстилю! Видалення плям, запахів, алергенів. Швидке висихання, безпечні засоби, відновлення свіжості';

name('services.khimchystka');
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
    <section class="py-12 md:py-16">
        <div class="max-w-5xl mx-auto px-5">
            <div class="grid lg:grid-cols-2 gap-10 items-center">
                <div>
                    <span class="font-display text-sm font-semibold text-tryit-orange uppercase tracking-wider">Екстракційна
                        технологія</span>
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-gray-900 mt-2 mb-5">Друге життя для ваших
                        меблів та килимів</h2>
                    <p class="text-gray-600 leading-relaxed">Звичайне прибирання не завжди здатне впоратися зі складними
                        плямами, пилом і неприємними запахами. Тканинні поверхні, меблі, килими та автомобільні салони
                        потребують глибокого очищення, яке усуне не лише забруднення, а й бактерії та алергени.</p>
                    <p class="text-gray-600 leading-relaxed">Ми пропонуємо професійну хімчистку, яка поверне вашим речам
                        первозданну чистоту та свіжість. Використовуємо безпечні мийні засоби, що не шкодять тканинам та
                        навколишньому середовищу.</p>
                </div>
                <div class="relative">
                    <img src="{{ Vite::asset('resources/images/service-5.jpg') }}"
                        class="w-full rounded-2xl shadow-lg object-cover aspect-4/3" alt="Хімчистка" loading="lazy" />
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
            <div class="space-y-2.5 mt-10">
                <div class="font-bold font-[Oswald] text-2xl">Наші навички</div>
                <div class="w-full lg:w-3/4">
                    <x-progressbar percentage="100" label="Хімчистка меблів" />
                </div>
                <div class="w-full lg:w-3/4">
                    <x-progressbar percentage="95" label="Очищення килимів" />
                </div>
                <div class="w-full lg:w-3/4">
                    <x-progressbar percentage="90" label="Чистка салонів авто" />
                </div>
                <div class="w-full lg:w-3/4">
                    <x-progressbar percentage="85" label="Антиалергенна обробка" />
                </div>
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

    <x-order-banner image="service-5.jpg" phone="+38 (067) 123-45-67" title="Замовити хімчистку"
        subtitle="Професійна чистка меблів, килимів, авто. Телефонуйте!" />

    @include('partials.blog-section')
@endsection
