<?php

use function Laravel\Folio\name;

$meta_title = 'Генеральне прибирання виробничих приміщень та очищення цехів, складів, заводів';
$meta_description = 'Професійне прибирання промислових приміщень, цехів, складів та заводів. Видалення пилу, мастил, сажі, дезінфекція та відповідність санітарним нормам';

name('services.heneralne-prybyrannia-tsekhiv-ta-vyrobnytstva');
?>

@extends('layouts.base')

@section('header')
    <x-page-header image="{{ Vite::asset('resources/images/service-4.jpg') }}">
        <x-slot:title>
            Генеральне прибирання цехів та виробництва
        </x-slot>
    </x-page-header>
@endsection

@section('content')
    <section class="bg-tryit-cream/20 border-b border-tryit-orange/5 -mt-20 pt-32 pb-15 px-5">
        <div class="max-w-7xl mx-auto grid lg:grid-cols-5 gap-5 lg:gap-10">
            <div class="lg:col-span-2">
                <img src="{{ Vite::asset('resources/images/service-4.jpg') }}"
                    class="h-72 w-full object-cover object-bottom rounded-tl-xl rounded-br-xl rounded-tr-4xl rounded-bl-4xl shadow-xl"
                    width="300" height="300" alt="">
            </div>
            <div class="lg:col-span-3">
                <p><x-marker>Чистота на виробництві</x-marker> – це не лише естетика, а й безпека, ефективність роботи
                    обладнання та відповідність санітарним нормам. В умовах постійного виробничого процесу накопичуються
                    пил, жир, технічні забруднення, що можуть впливати на працездатність персоналу та обладнання.</p>

                <p>Ми пропонуємо професійне генеральне прибирання промислових приміщень, цехів, складів та фабрик. Наша
                    команда має досвід роботи на підприємствах різних галузей та використовує спеціальне обладнання і
                    мийні засоби для очищення навіть найскладніших забруднень.</p>
            </div>
        </div>
    </section>

    <x-section class="pt-0">
        <x-list type="check">
            <x-slot:caption>
                Що <span class="font-bold">входить</span> у <span class="text-tryit-orange">послугу</span>?
            </x-slot>
            <x-list.item>Очищення виробничих площ від пилу, бруду, технічних рідин</x-list.item>
            <x-list.item>Дезінфекція робочих зон відповідно до санітарних норм</x-list.item>
            <x-list.item>Видалення промислових відкладень, мастил, сажі та нальоту</x-list.item>
            <x-list.item>Очищення конвеєрів, верстатів, агрегатів від пилу та залишків матеріалів</x-list.item>
            <x-list.item>Миття підлог, стін, стель, вентиляційних систем</x-list.item>
            <x-list.item>Очищення освітлювальних приладів, розеток, вимикачів</x-list.item>
            <x-list.item>Вивіз промислового сміття <i>(за домовленістю)</i></x-list.item>
        </x-list>

        <x-list type="check">
            <x-slot:caption>
                Кому <span class="font-bold">потрібна</span> ця <span class="text-tryit-orange">послуга</span>?
            </x-slot>
            <x-list.item>Виробничим підприємствам</x-list.item>
            <x-list.item>Складам і логістичним центрам</x-list.item>
            <x-list.item>Заводам і фабрикам</x-list.item>
            <x-list.item>Магазинам і торговим базам</x-list.item>
            <x-list.item>Агрокомплексам і харчовим підприємствам</x-list.item>
        </x-list>

        <x-list type="check">
            <x-slot:caption>
                <span class="font-bold">Як</span> ми <span class="text-tryit-orange">працюємо</span>?
            </x-slot>
            <x-list.item><b>Оцінка об’єкта</b> – визначаємо рівень забруднення та особливості приміщення.</x-list.item>
            <x-list.item><b>Підбір обладнання</b> – використовуємо професійні мийні засоби та техніку.</x-list.item>
            <x-list.item><b>Глибоке очищення</b> – працюємо навіть у важкодоступних місцях.</x-list.item>
            <x-list.item><b>Перевірка результату</b> – забезпечуємо ідеальну чистоту.</x-list.item>
        </x-list>

        <x-list type="check">
            <x-slot:caption>
                Чому <span class="font-bold">обирають</span> <span class="text-tryit-orange">нас</span>?
            </x-slot>
            <x-list.item>
                <b>Спеціалізоване обладнання</b> – потужні пилососи, пароочисники, індустріальні мийні
                машини.</x-list.item>
            <x-list.item>
                <b>Безпечні методи</b> – екологічні та безпечні для виробничого процесу засоби.
            </x-list.item>
            <x-list.item>
                <b>Дотримання стандартів</b> – виконуємо прибирання відповідно до вимог безпеки та санітарних норм.
            </x-list.item>
            <x-list.item>
                <b>Досвід роботи на промислових об’єктах</b> – знаємо, як працювати в умовах виробництва.
            </x-list.item>
            <x-list.item>
                <b>Гнучкий графік</b> – виконуємо роботи в неробочий час або поетапно, без зупинки процесів.
            </x-list.item>
        </x-list>

        <x-blockquote class="mt-10">
            <p>Замовте генеральне прибирання виробництва вже сьогодні!</p>
            <p>Регулярний догляд за виробничими приміщеннями – це не лише чистота, а й підвищення ефективності роботи.
                Довірте це професіоналам!</p>

            Чистота – запорука безпеки та продуктивності!
        </x-blockquote>
    </x-section>
@endsection
