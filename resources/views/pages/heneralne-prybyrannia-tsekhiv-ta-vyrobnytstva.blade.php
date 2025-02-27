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
            <x-list.item>Вивіз промислового сміття (за домовленістю)</x-list.item>
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
            <x-list.item>Оцінка об’єкта – визначаємо рівень забруднення та особливості приміщення.</x-list.item>
            <x-list.item>Підбір обладнання – використовуємо професійні мийні засоби та техніку.</x-list.item>
            <x-list.item>Глибоке очищення – працюємо навіть у важкодоступних місцях.</x-list.item>
            <x-list.item>Перевірка результату – забезпечуємо ідеальну чистоту.</x-list.item>
        </x-list>

        <x-list type="check">
            <x-slot:caption>
                Чому <span class="font-bold">обирають</span> <span class="text-tryit-orange">нас</span>?
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

        <p>Замовте генеральне прибирання виробництва вже сьогодні!</p>
        <p>Регулярний догляд за виробничими приміщеннями – це не лише чистота, а й підвищення ефективності роботи.
            Довірте це професіоналам!</p>

        Чистота – запорука безпеки та продуктивності!
    </x-section>
@endsection
