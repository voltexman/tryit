<?php

use function Laravel\Folio\name;

name('services.heneralne-prybyrannia-tsekhiv-ta-vyrobnytstva');
?>

@extends('layouts.base')

@section('header')
    <x-page-header image="https://cleaning-group.pro/wp-content/uploads/2019/08/cleaning_appartment_vinnitsa.jpg">
        <x-slot:title>
            Генеральне прибирання цехів та виробництва
        </x-slot>
    </x-page-header>
@endsection

@section('content')
    <x-section>
        <div class="lg:grid lg:grid-cols-5 gap-10">
            <div class="lg:col-span-2">
                <x-before-after before="https://picsum.photos/500?random=1" after="https://picsum.photos/500?random=2" />
            </div>
            <div class="col-span-3">
                <p><x-marker>Чистота на виробництві</x-marker> – це не лише естетика, а й безпека, ефективність роботи
                    обладнання та відповідність санітарним нормам. В умовах постійного виробничого процесу накопичуються
                    пил, жир, технічні забруднення, що можуть впливати на працездатність персоналу та обладнання.</p>

                <p>Ми пропонуємо професійне генеральне прибирання промислових приміщень, цехів, складів та фабрик. Наша
                    команда має досвід роботи на підприємствах різних галузей та використовує спеціальне обладнання і мийні
                    засоби для очищення навіть найскладніших забруднень.</p>
            </div>
        </div>

        <div class="grid lg:grid-cols-5 gap-10 lg:gap-20 mt-10">
            <x-list class="col-span-3">
                <x-slot:caption>
                    Що входить у послугу?
                </x-slot>
                <x-list.item>Очищення виробничих площ від пилу, бруду, технічних рідин</x-list.item>
                <x-list.item>Дезінфекція робочих зон відповідно до санітарних норм</x-list.item>
                <x-list.item>Видалення промислових відкладень, мастил, сажі та нальоту</x-list.item>
                <x-list.item>Очищення конвеєрів, верстатів, агрегатів від пилу та залишків матеріалів</x-list.item>
                <x-list.item>Миття підлог, стін, стель, вентиляційних систем</x-list.item>
                <x-list.item>Очищення освітлювальних приладів, розеток, вимикачів</x-list.item>
                <x-list.item>Вивіз промислового сміття (за домовленістю)</x-list.item>
            </x-list>
            <div class="col-span-2 perspective-near perspective-origin-bottom-right">
                <img src="https://picsum.photos/400?random=3"
                    class="rounded-xl rotate-x-6 rotate-z-6 shadow-2xl shadow-black/50" alt="">
            </div>
        </div>

        <div class="grid lg:grid-cols-5 gap-10 lg:gap-20 mt-10">
            <div class="col-span-2 perspective-near perspective-origin-bottom-left">
                <img src="https://picsum.photos/400?random=4"
                    class="rounded-xl rotate-x-6 -rotate-z-6 shadow-2xl shadow-black/50" alt="">
            </div>
            <x-list class="col-span-3">
                <x-slot:caption>
                    Кому потрібна ця послуга?
                </x-slot>
                <x-list.item>Виробничим підприємствам</x-list.item>
                <x-list.item>Складам і логістичним центрам</x-list.item>
                <x-list.item>Заводам і фабрикам</x-list.item>
                <x-list.item>Магазинам і торговим базам</x-list.item>
                <x-list.item>Агрокомплексам і харчовим підприємствам</x-list.item>
            </x-list>
        </div>

        <div class="grid lg:grid-cols-5 gap-10 lg:gap-20 mt-10">
            <x-list class="col-span-3">
                <x-slot:caption>
                    Як ми працюємо?
                </x-slot>
                <x-list.item>Оцінка об’єкта – визначаємо рівень забруднення та особливості приміщення.</x-list.item>
                <x-list.item>Підбір обладнання – використовуємо професійні мийні засоби та техніку.</x-list.item>
                <x-list.item>Глибоке очищення – працюємо навіть у важкодоступних місцях.</x-list.item>
                <x-list.item>Перевірка результату – забезпечуємо ідеальну чистоту.</x-list.item>
            </x-list>
            <div class="col-span-2 perspective-near perspective-origin-bottom-right">
                <img src="https://picsum.photos/400?random=5"
                    class="rounded-xl rotate-x-6 rotate-z-6 shadow-2xl shadow-black/50" alt="">
            </div>
        </div>

        <div class="grid lg:grid-cols-5 gap-10 lg:gap-20 mt-10">
            <div class="col-span-2 perspective-near perspective-origin-bottom-left">
                <img src="https://picsum.photos/400?random=6"
                    class="rounded-xl rotate-x-6 -rotate-z-6 shadow-2xl shadow-black/50" alt="">
            </div>
            <x-list class="col-span-3">
                <x-slot:caption>
                    Чому обирають нас?
                </x-slot>
                <x-list.item>
                    Спеціалізоване обладнання – потужні пилососи, пароочисники, індустріальні мийні
                    машини.</x-list.item>
                <x-list.item>
                    Безпечні методи – екологічні та безпечні для виробничого процесу засоби.
                </x-list.item>
                <x-list.item>
                    Дотримання стандартів – виконуємо прибирання відповідно до вимог безпеки та санітарних норм.
                </x-list.item>
                <x-list.item>
                    Досвід роботи на промислових об’єктах – знаємо, як працювати в умовах виробництва.
                </x-list.item>
                <x-list.item>
                    Гнучкий графік – виконуємо роботи в неробочий час або поетапно, без зупинки процесів.
                </x-list.item>
            </x-list>
        </div>

        <p>Замовте генеральне прибирання виробництва вже сьогодні!</p>
        <p>Регулярний догляд за виробничими приміщеннями – це не лише чистота, а й підвищення ефективності роботи.
            Довірте
            це професіоналам!</p>

        Чистота – запорука безпеки та продуктивності!
    </x-section>
@endsection
