<?php

use function Laravel\Folio\name;

$meta_title = 'Миття сонячних панелей та професійне очищення для максимальної ефективності';
$meta_description = 'Замовте миття сонячних панелей! Безпечне очищення без подряпин, збільшення продуктивності до 30%, продовження терміну служби батарей. Працюємо швидко та якісно!';

name('services.myika-ta-ochyshchennia-soniachnykh-panelei');
?>

@extends('layouts.base')

@section('header')
    <x-page-header image="{{ Vite::asset('resources/images/service-2.jpg') }}">
        <x-slot:title>
            Мийка та очищення сонячних панелей
        </x-slot>
    </x-page-header>
@endsection

@section('content')
    <section class="bg-tryit-cream/20 border-b border-tryit-orange/5 -mt-20 pt-32 pb-15 px-5">
        <div class="max-w-7xl mx-auto grid lg:grid-cols-5 gap-5 lg:gap-10">
            <div class="lg:col-span-2">
                <img src="{{ Vite::asset('resources/images/service-2.jpg') }}"
                    class="size-full object-cover rounded-tl-xl rounded-br-xl rounded-tr-4xl rounded-bl-4xl shadow-xl"
                    width="300" height="300" alt="">
            </div>
            <div class="lg:col-span-3">
                <p><x-marker>Сонячні панелі</x-marker> – це вигідна інвестиція в екологічну енергію, але їх ефективність
                    напряму залежить від чистоти. Пил, бруд, пташиний послід, дощові сліди та сажа можуть знижувати
                    продуктивність сонячних батарей до 30%. Регулярне очищення допоможе зберегти максимальну
                    ефективність і продовжити термін служби вашої системи.
                </p>

                <p>Ми пропонуємо професійне миття сонячних панелей із використанням безпечних технологій, що не
                    пошкоджують їхню поверхню. Наші спеціалісти знають, як правильно очищати фотоелементи, щоб уникнути
                    подряпин та механічних пошкоджень.</p>
            </div>
        </div>
    </section>

    <x-section class="pt-0">
        <x-list type="number">
            <x-slot:caption>
                Чому важливо <span class="font-bold">регулярно</span> очищати <span class="text-tryit-orange">сонячні
                    панелі</span>?
            </x-slot>
            <x-list.item index="1">
                <b>Збільшення продуктивності</b> – чисті панелі поглинають більше сонячного світла, що підвищує їхню
                ефективність.
            </x-list.item>
            <x-list.item index="2">
                <b>Подовження терміну служби</b> – відсутність забруднень зменшує ризик перегріву та пошкодження
                батарей.
            </x-list.item>
            <x-list.item index="3">
                <b>Запобігання корозії</b> – своєчасне очищення запобігає появі нальоту, який може пошкодити панелі.
            </x-list.item>
            <x-list.item index="4">
                <b>Зниження витрат на ремонт</b> – регулярний догляд дозволяє уникнути дорогих поломок.
            </x-list.item>
        </x-list>

        <x-list type="check">
            <x-slot:caption>
                <span class="font-bold">Як</span> ми <span class="text-tryit-orange">працюємо</span>?
            </x-slot>
            <x-list.item>
                <b>Діагностика стану</b> – оцінюємо рівень забруднення та визначаємо найбільш ефективний метод очищення.
            </x-list.item>
            <x-list.item>
                <b>Миття панелей</b> – використовуємо демінералізовану воду та м’які щітки, що не залишають подряпин.
            </x-list.item>
            <x-list.item>
                <b>Перевірка результату</b> – контролюємо якість очищення, щоб гарантувати максимальну ефективність панелей.
            </x-list.item>
            <x-list.item>
                <b>Рекомендації щодо догляду</b> – даємо поради щодо частоти миття та профілактичного обслуговування.
            </x-list.item>
        </x-list>

        <x-list type="check">
            <x-slot:caption>
                Які <span class="font-bold">об'єкти</span> ми <span class="text-tryit-orange">обслуговуємо</span>?
            </x-slot>
            <x-list.item>
                Приватні будинки та дачі
            </x-list.item>
            <x-list.item>
                Бізнес-центри та офіси
            </x-list.item>
            <x-list.item>
                Промислові підприємства
            </x-list.item>
            <x-list.item>
                Сільськогосподарські комплекси
            </x-list.item>
            <x-list.item>
                Автономні сонячні станції
            </x-list.item>
        </x-list>

        <x-list type="number">
            <x-slot:caption>
                <span class="font-bold">Чому</span> варто обрати <span class="text-tryit-orange">нас</span>?
            </x-slot>
            <x-list.item index="1">
                <b>Безконтактне та безпечне очищення</b> – не використовуємо абразиви та агресивну хімію.
            </x-list.item>
            <x-list.item index="2">
                <b>Сучасне обладнання</b> – м'які щітки, очищена вода та професійні інструменти.
            </x-list.item>
            <x-list.item index="3">
                <b>Досвідчені спеціалісти</b> – знаємо всі особливості догляду за сонячними батареями.
            </x-list.item>
            <x-list.item index="4">
                <b>Гарантований результат</b> – максимальне видалення забруднень без шкоди для покриття.
            </x-list.item>
            <x-list.item index="5">
                <b>Гнучкий графік</b> – працюємо у зручний для вас час, без відключення електростанції.
            </x-list.item>
        </x-list>

        <x-blockquote class="mt-10">
            <p>Замовте очищення сонячних панелей вже зараз! Подбайте про максимальну ефективність ваших сонячних батарей –
                залиште заявку на сайті або зателефонуйте нам, і ми розрахуємо вартість послуги спеціально для вас.
            </p>

            <p>Ваші панелі працюватимуть на 100% – довірте їх очищення професіоналам!</p>
        </x-blockquote>
    </x-section>
@endsection
