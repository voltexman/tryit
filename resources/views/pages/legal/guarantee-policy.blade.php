<?php

use function Laravel\Folio\name;

name('legal.guarantee-policy');
?>

@extends('layouts.base')

@section('header')
    <x-page-header image="{{ Vite::asset('resources/images/service-5.jpg') }}">
        <x-slot:title>
            Гарантії та повернення
        </x-slot>
        <x-slot:description>
            Наші гарантійні зобов'язання щодо якості наданих клінінгових послуг
        </x-slot>
    </x-page-header>
@endsection

@section('content')
    <section class="py-12 md:py-16">
        <div class="max-w-3xl mx-auto px-5">
            {{-- Document header --}}
            <div class="flex items-center gap-3 mb-2 text-sm text-gray-400">
                <x-lucide-calendar class="size-4" stroke-width="1.5" />
                <span>Останнє оновлення: 15 квітня 2026 р.</span>
            </div>
            <div class="w-full h-px bg-gray-200 mb-10"></div>

            {{-- Guarantee highlight --}}
            <div class="bg-tryit-green/5 border border-tryit-green/15 rounded-2xl p-6 md:p-8 mb-10">
                <div class="flex items-center gap-3 mb-3">
                    <x-lucide-badge-check class="size-6 text-tryit-green" stroke-width="1.5" />
                    <span class="font-display text-lg font-bold text-gray-900">Гарантія якості 100%</span>
                </div>
                <p class="text-sm text-gray-600 leading-relaxed mb-0">Ми гарантуємо високу якість кожної послуги. Якщо результат вас не задовольняє — ми безкоштовно виправимо недоліки протягом <b>24 годин</b> після звернення. Ваша довіра — наш головний пріоритет.</p>
            </div>

            <div class="flex flex-col gap-10">
                <x-policy-section number="01">
                    <h2 class="font-display text-lg md:text-xl font-bold text-gray-900 mb-3">Гарантія на виконані роботи</h2>
                    <div class="text-sm text-gray-600 leading-relaxed space-y-2">
                        <p class="mb-0">Компанія гарантує якість усіх наданих клінінгових послуг. Гарантійний термін становить 24 години з моменту завершення робіт та підписання акту прийому-передачі.</p>
                        <p class="mb-0">Протягом гарантійного терміну Замовник має право заявити про виявлені недоліки. Компанія зобов'язується усунути їх безкоштовно у найкоротші терміни.</p>
                    </div>
                </x-policy-section>

                <x-policy-section number="02">
                    <h2 class="font-display text-lg md:text-xl font-bold text-gray-900 mb-3">Порядок подачі рекламації</h2>
                    <div class="text-sm text-gray-600 leading-relaxed space-y-2">
                        <p class="mb-0">Для звернення щодо якості послуг необхідно:</p>
                        <ul class="list-none space-y-1.5 pl-0">
                            <li class="flex items-start gap-2"><x-lucide-circle-dot class="size-4 text-tryit-orange shrink-0 mt-0.5" stroke-width="2" /> Зв'язатися з нами телефоном або на e-mail протягом 24 годин</li>
                            <li class="flex items-start gap-2"><x-lucide-circle-dot class="size-4 text-tryit-orange shrink-0 mt-0.5" stroke-width="2" /> Описати характер недоліків та надати фотофіксацію (бажано)</li>
                            <li class="flex items-start gap-2"><x-lucide-circle-dot class="size-4 text-tryit-orange shrink-0 mt-0.5" stroke-width="2" /> Надати доступ до приміщення для повторного виконання робіт</li>
                        </ul>
                    </div>
                </x-policy-section>

                <x-policy-section number="03">
                    <h2 class="font-display text-lg md:text-xl font-bold text-gray-900 mb-3">Повернення коштів</h2>
                    <div class="text-sm text-gray-600 leading-relaxed space-y-2">
                        <p class="mb-0">Повернення коштів можливе у наступних випадках:</p>
                        <ul class="list-none space-y-1.5 pl-0">
                            <li class="flex items-start gap-2"><x-lucide-check class="size-4 text-tryit-green shrink-0 mt-0.5" stroke-width="2" /> Послуга не була надана з вини Компанії — повне повернення</li>
                            <li class="flex items-start gap-2"><x-lucide-check class="size-4 text-tryit-green shrink-0 mt-0.5" stroke-width="2" /> Якість не відповідає узгодженим стандартам після повторного виконання — часткове або повне повернення</li>
                            <li class="flex items-start gap-2"><x-lucide-check class="size-4 text-tryit-green shrink-0 mt-0.5" stroke-width="2" /> Скасування замовлення більше ніж за 24 години — повне повернення передоплати</li>
                        </ul>
                        <p class="mb-0">Повернення коштів здійснюється протягом 5 робочих днів на банківський рахунок Замовника або готівкою.</p>
                    </div>
                </x-policy-section>

                <x-policy-section number="04">
                    <h2 class="font-display text-lg md:text-xl font-bold text-gray-900 mb-3">Компенсація за пошкодження</h2>
                    <div class="text-sm text-gray-600 leading-relaxed space-y-2">
                        <p class="mb-0">Компанія несе повну матеріальну відповідальність за майно Замовника. У разі пошкодження меблів, покриттів або іншого майна під час виконання робіт:</p>
                        <p class="mb-0">Складається акт пошкодження у присутності обох сторін. Компанія відшкодовує вартість ремонту або заміни пошкодженого майна у повному обсязі. Термін виплати компенсації — до 10 робочих днів.</p>
                    </div>
                </x-policy-section>

                <x-policy-section number="05">
                    <h2 class="font-display text-lg md:text-xl font-bold text-gray-900 mb-3">Обмеження гарантії</h2>
                    <div class="text-sm text-gray-600 leading-relaxed space-y-2">
                        <p class="mb-0">Гарантійні зобов'язання не поширюються на випадки:</p>
                        <ul class="list-none space-y-1.5 pl-0">
                            <li class="flex items-start gap-2"><x-lucide-x class="size-4 text-red-400 shrink-0 mt-0.5" stroke-width="2" /> Забруднення, що виникли після завершення прибирання</li>
                            <li class="flex items-start gap-2"><x-lucide-x class="size-4 text-red-400 shrink-0 mt-0.5" stroke-width="2" /> Застарілі забруднення, які неможливо видалити без пошкодження поверхні</li>
                            <li class="flex items-start gap-2"><x-lucide-x class="size-4 text-red-400 shrink-0 mt-0.5" stroke-width="2" /> Пошкодження, спричинені дефектами матеріалів або зносом покриттів</li>
                        </ul>
                    </div>
                </x-policy-section>
            </div>

            {{-- Contact --}}
            <div class="mt-12 pt-8 border-t border-gray-200">
                <div class="flex items-start gap-3 text-xs text-gray-400">
                    <x-lucide-message-circle class="size-4 shrink-0 mt-0.5" stroke-width="1.5" />
                    <p class="mb-0">З питань гарантій та повернень зверніться до нас: <a href="mailto:info@tryit.com.ua" class="text-tryit-green font-semibold hover:underline">info@tryit.com.ua</a> або за телефоном <b>+380 (97) 877-866-7</b></p>
                </div>
            </div>
        </div>
    </section>
@endsection
