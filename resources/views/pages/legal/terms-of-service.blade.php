<?php

use function Laravel\Folio\name;

name('legal.terms-of-service');
?>

@extends('layouts.base')

@section('header')
    <x-page-header image="{{ Vite::asset('resources/images/service-3.jpg') }}">
        <x-slot:title>
            Умови надання послуг
        </x-slot>
        <x-slot:description>
            Умови, що регулюють відносини між компанією Try It та замовниками клінінгових послуг
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

            <div class="flex flex-col gap-10">
                <x-policy-section icon="scroll-text" number="01">
                    <h2 class="font-display text-lg md:text-xl font-bold text-gray-900 mb-3">Загальні положення</h2>
                    <div class="text-sm text-gray-600 leading-relaxed space-y-2">
                        <p class="mb-0">Ці Умови надання послуг (далі — «Умови») регулюють відносини між ФОП «Try It» (далі — «Компанія», «ми») та фізичною або юридичною особою (далі — «Замовник», «ви»), яка замовляє клінінгові послуги.</p>
                        <p class="mb-0">Замовляючи послуги через сайт <b>www.tryit.com.ua</b>, по телефону або іншим способом, ви підтверджуєте, що ознайомилися з цими Умовами та погоджуєтесь їх дотримуватися.</p>
                    </div>
                </x-policy-section>

                <x-policy-section icon="list-checks" number="02">
                    <h2 class="font-display text-lg md:text-xl font-bold text-gray-900 mb-3">Перелік послуг</h2>
                    <div class="text-sm text-gray-600 leading-relaxed space-y-2">
                        <p class="mb-0">Компанія надає наступні види клінінгових послуг:</p>
                        <ul class="list-none space-y-1.5 pl-0">
                            <li class="flex items-start gap-2"><x-lucide-check class="size-4 text-tryit-green shrink-0 mt-0.5" stroke-width="2" /> Комплексне та підтримуюче прибирання офісів</li>
                            <li class="flex items-start gap-2"><x-lucide-check class="size-4 text-tryit-green shrink-0 mt-0.5" stroke-width="2" /> Генеральне прибирання цехів та виробництв</li>
                            <li class="flex items-start gap-2"><x-lucide-check class="size-4 text-tryit-green shrink-0 mt-0.5" stroke-width="2" /> Миття фасадів та вікон на висоті</li>
                            <li class="flex items-start gap-2"><x-lucide-check class="size-4 text-tryit-green shrink-0 mt-0.5" stroke-width="2" /> Хімчистка меблів та покриттів</li>
                            <li class="flex items-start gap-2"><x-lucide-check class="size-4 text-tryit-green shrink-0 mt-0.5" stroke-width="2" /> Післябудівельне прибирання</li>
                            <li class="flex items-start gap-2"><x-lucide-check class="size-4 text-tryit-green shrink-0 mt-0.5" stroke-width="2" /> Мийка та очищення сонячних панелей</li>
                            <li class="flex items-start gap-2"><x-lucide-check class="size-4 text-tryit-green shrink-0 mt-0.5" stroke-width="2" /> Промисловий альпінізм</li>
                        </ul>
                        <p class="mb-0">Повний перелік та детальний опис послуг розміщено на сторінці <a href="{{ route('services') }}" class="text-tryit-green font-semibold hover:underline">Послуги</a>.</p>
                    </div>
                </x-policy-section>

                <x-policy-section icon="file-signature" number="03">
                    <h2 class="font-display text-lg md:text-xl font-bold text-gray-900 mb-3">Порядок замовлення</h2>
                    <div class="text-sm text-gray-600 leading-relaxed space-y-2">
                        <p class="mb-0">Замовлення послуг здійснюється через форму на сайті, телефоном або через месенджери. Після отримання заявки, наш менеджер зв'яжеться з вами для уточнення деталей та формування остаточної вартості.</p>
                        <p class="mb-0">Замовлення вважається підтвердженим після узгодження обсягу робіт, вартості, дати та часу виконання. Компанія залишає за собою право відмовити у наданні послуг без пояснення причин.</p>
                    </div>
                </x-policy-section>

                <x-policy-section icon="banknote" number="04">
                    <h2 class="font-display text-lg md:text-xl font-bold text-gray-900 mb-3">Вартість та оплата</h2>
                    <div class="text-sm text-gray-600 leading-relaxed space-y-2">
                        <p class="mb-0">Вартість послуг визначається індивідуально на основі типу послуги, площі приміщення, ступеня забруднення та інших факторів. Остаточна ціна повідомляється замовнику до початку робіт.</p>
                        <p class="mb-0">Оплата здійснюється готівкою або безготівковим розрахунком після виконання робіт та підписання акту прийому-передачі. При постійній співпраці можливе погодження індивідуальних умов оплати.</p>
                    </div>
                </x-policy-section>

                <x-policy-section icon="clock" number="05">
                    <h2 class="font-display text-lg md:text-xl font-bold text-gray-900 mb-3">Терміни виконання</h2>
                    <div class="text-sm text-gray-600 leading-relaxed space-y-2">
                        <p class="mb-0">Терміни виконання послуг узгоджуються індивідуально. Стандартний час реагування на заявку — 1–2 робочих дні. У термінових випадках можливий виїзд у день звернення.</p>
                        <p class="mb-0">У разі виникнення форс-мажорних обставин, компанія зобов'язується повідомити замовника про зміну термінів та запропонувати альтернативну дату.</p>
                    </div>
                </x-policy-section>

                <x-policy-section icon="shield-check" number="06">
                    <h2 class="font-display text-lg md:text-xl font-bold text-gray-900 mb-3">Відповідальність сторін</h2>
                    <div class="text-sm text-gray-600 leading-relaxed space-y-2">
                        <p class="mb-0">Компанія несе матеріальну відповідальність за збереження майна замовника під час виконання робіт. У разі пошкодження майна з вини працівників компанії, збитки компенсуються в повному обсязі.</p>
                        <p class="mb-0">Замовник зобов'язується забезпечити безперешкодний доступ до приміщення у погоджений час, повідомити про наявність цінних або крихких предметів, а також забезпечити підключення до водо- та електропостачання.</p>
                    </div>
                </x-policy-section>

                <x-policy-section icon="x-circle" number="07">
                    <h2 class="font-display text-lg md:text-xl font-bold text-gray-900 mb-3">Скасування та перенесення</h2>
                    <div class="text-sm text-gray-600 leading-relaxed space-y-2">
                        <p class="mb-0">Замовник може скасувати або перенести замовлення не пізніше ніж за 24 години до початку виконання робіт без будь-яких штрафних санкцій.</p>
                        <p class="mb-0">У разі скасування менше ніж за 24 години, компанія залишає за собою право стягнути компенсацію у розмірі до 30% від вартості замовлення.</p>
                    </div>
                </x-policy-section>

                <x-policy-section icon="scale" number="08">
                    <h2 class="font-display text-lg md:text-xl font-bold text-gray-900 mb-3">Вирішення спорів</h2>
                    <div class="text-sm text-gray-600 leading-relaxed space-y-2">
                        <p class="mb-0">Усі спори та розбіжності вирішуються шляхом переговорів. У разі неможливості досягнення згоди — у судовому порядку відповідно до чинного законодавства України.</p>
                        <p class="mb-0">З питань щодо умов надання послуг звертайтесь: <a href="mailto:info@tryit.com.ua" class="text-tryit-green font-semibold hover:underline">info@tryit.com.ua</a></p>
                    </div>
                </x-policy-section>
            </div>

            {{-- Footer note --}}
            <div class="mt-12 pt-8 border-t border-gray-200">
                <div class="flex items-start gap-3 text-xs text-gray-400">
                    <x-lucide-info class="size-4 shrink-0 mt-0.5" stroke-width="1.5" />
                    <p class="mb-0">Компанія залишає за собою право змінювати ці Умови. Актуальна версія завжди доступна на цій сторінці. Продовжуючи користуватися послугами після внесення змін, ви погоджуєтесь з оновленою версією Умов.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
