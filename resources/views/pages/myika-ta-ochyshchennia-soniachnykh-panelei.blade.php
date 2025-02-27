<?php

use function Laravel\Folio\name;

name('services.myika-ta-ochyshchennia-soniachnykh-panelei');
?>

@extends('layouts.base')

@section('header')
    <x-page-header image="https://cleaning-group.pro/wp-content/uploads/2019/08/cleaning_appartment_vinnitsa.jpg">
        <x-slot:title>
            Мийка та очищення сонячних панелей
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
                <p><x-marker>Сонячні панелі</x-marker> – це вигідна інвестиція в екологічну енергію, але їх ефективність
                    напряму залежить від чистоти. Пил, бруд, пташиний послід, дощові сліди та сажа можуть знижувати
                    продуктивність сонячних батарей до 30%. Регулярне очищення допоможе зберегти максимальну ефективність і
                    продовжити термін служби вашої системи.
                </p>

                <p>Ми пропонуємо професійне миття сонячних панелей із використанням безпечних технологій, що не пошкоджують
                    їхню поверхню. Наші спеціалісти знають, як правильно очищати фотоелементи, щоб уникнути подряпин та
                    механічних пошкоджень.</p>
            </div>
        </div>

        <x-list type="number">
            <x-slot:caption>
                Чому важливо <span class="font-bold">регулярно</span> очищати <span class="text-tryit-orange">сонячні
                    панелі</span>?
            </x-slot>
            <x-list.item index="1">
                Збільшення продуктивності – чисті панелі поглинають більше сонячного світла, що підвищує їхню
                ефективність.
            </x-list.item>
            <x-list.item index="2">
                Подовження терміну служби – відсутність забруднень зменшує ризик перегріву та пошкодження
                батарей.
            </x-list.item>
            <x-list.item index="3">
                Запобігання корозії – своєчасне очищення запобігає появі нальоту, який може пошкодити панелі.
            </x-list.item>
            <x-list.item index="4">
                Зниження витрат на ремонт – регулярний догляд дозволяє уникнути дорогих поломок.
            </x-list.item>
        </x-list>

        <x-list type="check">
            <x-slot:caption>
                <span class="font-bold">Як</span> ми <span class="text-tryit-orange">працюємо</span>?
            </x-slot>
            <x-list.item>
                Діагностика стану – оцінюємо рівень забруднення та визначаємо найбільш ефективний метод очищення.
            </x-list.item>
            <x-list.item>
                Миття панелей – використовуємо демінералізовану воду та м’які щітки, що не залишають подряпин.
            </x-list.item>
            <x-list.item>
                Перевірка результату – контролюємо якість очищення, щоб гарантувати максимальну ефективність панелей.
            </x-list.item>
            <x-list.item>
                Рекомендації щодо догляду – даємо поради щодо частоти миття та профілактичного обслуговування.
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
                Безконтактне та безпечне очищення – не використовуємо абразиви та агресивну хімію.
            </x-list.item>
            <x-list.item index="2">
                Сучасне обладнання – м'які щітки, очищена вода та професійні інструменти.
            </x-list.item>
            <x-list.item index="3">
                Досвідчені спеціалісти – знаємо всі особливості догляду за сонячними батареями.
            </x-list.item>
            <x-list.item index="4">
                Гарантований результат – максимальне видалення забруднень без шкоди для покриття.
            </x-list.item>
            <x-list.item index="5">
                Гнучкий графік – працюємо у зручний для вас час, без відключення електростанції.
            </x-list.item>
        </x-list>

        <p class="text-sm">Замовте очищення сонячних панелей вже зараз! Подбайте про максимальну ефективність ваших сонячних
            батарей – залиште заявку на сайті або зателефонуйте нам, і ми розрахуємо вартість послуги спеціально для вас.
        </p>

        <p class="text-sm">Ваші панелі працюватимуть на 100% – довірте їх очищення професіоналам!</p>
    </x-section>
@endsection
