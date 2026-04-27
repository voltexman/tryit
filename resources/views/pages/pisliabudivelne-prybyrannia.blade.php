<?php

use function Laravel\Folio\name;

$meta_title = 'Післябудівельне прибирання у Києві та професійне очищення після ремонту';
$meta_description = 'Післябудівельне прибирання у Києві. Видалення пилу, вивіз сміття, очищення вікон, підлог і поверхонь після ремонту. Гарантія чистоти та швидкість роботи';

name('services.pisliabudivelne-prybyrannia');
?>

@extends('layouts.base')

@section('header')
    <x-page-header image="{{ Vite::asset('resources/images/service-3.jpg') }}">
        <x-slot:title>Післябудівельне прибирання</x-slot>
        <x-slot:description>Комплексне очищення приміщень після ремонту та будівництва</x-slot>
    </x-page-header>
@endsection

@section('content')
    {{-- Intro --}}
    <section class="py-12 md:py-16">
        <div class="max-w-5xl mx-auto px-5">
            <div class="grid lg:grid-cols-2 gap-10 items-start">
                <div>
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-gray-900 mt-2 mb-5">Чистий простір після
                        будь-якого ремонту</h2>
                    <p class="text-gray-600 leading-relaxed">Будівництво чи ремонт — це завжди оновлення простору, але після
                        завершення робіт залишаються пил, будівельне сміття, залишки фарби, цементний наліт та інші
                        забруднення. Стандартні методи часто не дають бажаного результату.</p>
                    <p class="text-gray-600 leading-relaxed">Ми пропонуємо комплексне та глибоке очищення приміщень після
                        ремонту. Наші фахівці мають необхідне обладнання та засоби, щоб видалити навіть найстійкіші
                        забруднення, не пошкодивши нові покриття та поверхні.</p>
                </div>
                <div class="space-y-2.5">
                    <div class="font-bold font-[Oswald] text-2xl">Наші навички</div>
                    <div class="w-full">
                        <x-progressbar percentage="100" label="Видалення будівельного пилу" />
                    </div>
                    <div class="w-full">
                        <x-progressbar percentage="95" label="Очищення вікон та рам" />
                    </div>
                    <div class="w-full">
                        <x-progressbar percentage="90" label="Видалення залишків фарби та клею" />
                    </div>
                    <div class="w-full">
                        <x-progressbar percentage="90" label="Полірування та дезінфекція підлог" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Image section --}}
    <div class="max-w-5xl mx-auto px-5">
        <x-before-after before="{{ Vite::asset('resources/images/service-3.jpg') }}"
            after="{{ Vite::asset('resources/images/service-4.jpg') }}" />
    </div>

    <section class="mt-10">
        <div class="max-w-5xl mx-auto px-5">

            @include('partials.services-standarts')

            <x-table class="mt-15" striped>
                <x-table.row>
                    <x-table.cell class="font-semibold">Площа/год</x-table.cell>
                    <x-table.cell>100–200 м²</x-table.cell>
                </x-table.row>

                <x-table.row>
                    <x-table.cell class="font-semibold">Мінімальне замовлення</x-table.cell>
                    <x-table.cell>1–2 години роботи</x-table.cell>
                </x-table.row>

                <x-table.row>
                    <x-table.cell class="font-semibold">Тип поверхонь</x-table.cell>
                    <x-table.cell>Стінові покриття, підлоги, скляні та металеві поверхні</x-table.cell>
                </x-table.row>

                <x-table.row>
                    <x-table.cell class="font-semibold">Обладнання</x-table.cell>
                    <x-table.cell>Потужні пилососи, пароочисники, миючі машини</x-table.cell>
                </x-table.row>

                <x-table.row>
                    <x-table.cell class="font-semibold">Засоби</x-table.cell>
                    <x-table.cell>Професійна хімія для будівельних забруднень</x-table.cell>
                </x-table.row>

                <x-table.row>
                    <x-table.cell class="font-semibold">Видалення сміття</x-table.cell>
                    <x-table.cell>Так, організований вивіз <i>(за домовленістю)</i></x-table.cell>
                </x-table.row>

                <x-table.row>
                    <x-table.cell class="font-semibold">Температура виконання</x-table.cell>
                    <x-table.cell>5–35°C <i>(залежно від внутрішніх умов)</i></x-table.cell>
                </x-table.row>

                <x-table.row>
                    <x-table.cell class="font-semibold">Вологість поверхні</x-table.cell>
                    <x-table.cell>до 60% перед нанесенням хімії</x-table.cell>
                </x-table.row>
            </x-table>

        </div>
    </section>

    {{-- What's included --}}
    <section class="py-12 md:py-16 bg-gray-50">
        <div class="max-w-5xl mx-auto px-5">
            <h2 class="font-display text-2xl md:text-3xl font-bold text-gray-900 mb-8">Що входить у <span
                    class="text-tryit-orange">прибирання</span></h2>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
                @foreach ([['icon' => 'wind', 'title' => 'Видалення пилу', 'desc' => 'Повне очищення стін, стелі, підлоги та меблів від будівельного пилу'], ['icon' => 'square-asterisk', 'title' => 'Вікна та рами', 'desc' => 'Очищення вікон, рам, підвіконь від пилу, фарби та клейких слідів'], ['icon' => 'trash-2', 'title' => 'Вивіз сміття', 'desc' => 'Збір та вивіз будівельного сміття за домовленістю'], ['icon' => 'eraser', 'title' => 'Видалення плям', 'desc' => 'Очищення від цементу, фарби, клею та монтажної піни'], ['icon' => 'bath', 'title' => 'Сантехніка та кухня', 'desc' => 'Очищення сантехніки, кухонних поверхонь та освітлювальних приладів'], ['icon' => 'sparkles', 'title' => 'Полірування підлог', 'desc' => 'Глибоке миття підлог, полірування покриттів та дезінфекція']] as $item)
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
            <h2 class="font-display text-2xl md:text-3xl font-bold text-gray-900 mb-8">Для яких <span
                    class="text-tryit-orange">об'єктів</span></h2>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach ([['icon' => 'home', 'text' => 'Квартири та будинки після ремонту'], ['icon' => 'building-2', 'text' => 'Бізнес-центри після реконструкції'], ['icon' => 'store', 'text' => 'Магазини та ресторани після оновлення'], ['icon' => 'hard-hat', 'text' => 'Об\'єкти перед здачею замовнику'], ['icon' => 'key', 'text' => 'Приміщення перед заселенням орендарів']] as $item)
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
                @foreach ([['step' => '01', 'title' => 'Консультація', 'desc' => 'Уточнюємо обсяг робіт та особливості приміщення безкоштовно', 'icon' => 'message-circle'], ['step' => '02', 'title' => 'Підбір засобів', 'desc' => 'Використовуємо безпечну хімію, яка не пошкоджує нові поверхні', 'icon' => 'flask-conical'], ['step' => '03', 'title' => 'Глибоке очищення', 'desc' => 'Прибираємо пил, будівельне сміття та складні плями', 'icon' => 'sparkles'], ['step' => '04', 'title' => 'Контроль якості', 'desc' => 'Перевіряємо кожен куточок, щоб усе було ідеально чистим', 'icon' => 'check-circle']] as $step)
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
                @foreach ([['icon' => 'layers', 'title' => 'Повний комплекс', 'desc' => 'Не залишаємо жодної пилинки після ремонту'], ['icon' => 'leaf', 'title' => 'Безпечні засоби', 'desc' => 'Екологічні та безпечні для здоров\'я миючі засоби'], ['icon' => 'cpu', 'title' => 'Сучасне обладнання', 'desc' => 'Потужні пилососи, пароочисники, професійна хімія'], ['icon' => 'zap', 'title' => 'Швидкість та якість', 'desc' => 'Прибирання виконується максимально оперативно'], ['icon' => 'badge-check', 'title' => 'Гарантія чистоти', 'desc' => 'Ваш простір буде готовий до комфортного використання']] as $item)
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

    <x-order-banner image="service-3.jpg" phone="+38 (067) 123-45-67" title="Замовити прибирання"
        subtitle="Швидко усунемо наслідки ремонту чи будівництва. Телефонуйте!" :service="\App\Enums\ServiceEnum::POST_CONSTRUCTION_CLEANING->value" />

    @include('partials.blog-section')
@endsection
