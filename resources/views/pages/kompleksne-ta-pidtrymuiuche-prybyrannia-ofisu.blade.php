<?php

use function Laravel\Folio\name;

$meta_title = 'Професійне прибирання офісів та чистота, комфорт, порядок';
$meta_description = 'Прибирання офісів: регулярне, генеральне, разове. Очищення меблів, техніки, вікон, санвузлів. Гнучкий графік, екозасоби, гарантія чистоти.';

name('services.kompleksne-ta-pidtrymuiuche-prybyrannia-ofisu');
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

    {{-- Image section --}}
    <section class="py-12 md:py-16 bg-gray-50">
        <div class="max-w-5xl mx-auto px-5">
            <x-before-after before="{{ Vite::asset('resources/images/service-6.jpg') }}"
                after="{{ Vite::asset('resources/images/service-7.jpg') }}" />
        </div>
    </section>

    <section class="mt-10">
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
        subtitle="Створимо ідеальну чистоту у вашому робочому просторі. Телефонуйте!"
        :service="\App\Enums\ServiceEnum::OFFICE_CLEANING->value" />

    @include('partials.blog-section')
@endsection
