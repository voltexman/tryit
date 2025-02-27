<?php

use function Laravel\Folio\name;

name('services.myttia-fasadu-ta-vikon-na-vysoti');
?>

@extends('layouts.base')

@section('header')
    <x-page-header image="{{ Vite::asset('resources/images/service-1.jpg') }}">
        <x-slot:title>
            Миття фасадів<br class="md:hidden">та вікон на висоті <br><i>(WFP-система)</i>
        </x-slot>
    </x-page-header>
@endsection

@section('content')
    <section class="bg-tryit-cream/20 border-b border-tryit-orange/5 -mt-20 pt-32 pb-15 px-5">
        <div class="max-w-7xl mx-auto grid lg:grid-cols-5 gap-5 lg:gap-10">
            <div class="lg:col-span-2 flex justify-center">
                <x-before-after before="https://picsum.photos/500?random=1" after="https://picsum.photos/500?random=2" />
            </div>
            <div class="lg:col-span-3">
                <p><x-marker>Чисті вікна та фасади</x-marker> – це не лише естетика, а й імідж вашого бізнесу чи
                    житлового
                    комплексу. Забруднення, пил, дощові патьоки та міський смог з часом роблять будівлю тьмяною,
                    зменшуючи
                    її привабливість. Ми пропонуємо професійне миття фасадів і вікон на висоті за допомогою сучасної
                    WFP-системи (Water-Fed Pole), що забезпечує бездоганний результат без розводів і слідів.</p>

                <p><span class="font-bold">Що таке WFP-система та чому вона ефективна?</span><br>
                    <x-marker>WFP-система</x-marker> – це інноваційна технологія миття вікон і фасадів без використання
                    драбин або підйомників. Вона складається з телескопічних карбонових штанг, через які подається
                    очищена
                    демінералізована вода під тиском.
                </p>
            </div>
        </div>
    </section>

    <x-section class="pt-0">
        <x-list type="number">
            <x-slot:caption>
                Завдяки цьому
            </x-slot>
            <x-list.item index="1">
                Вода розчиняє бруд, залишаючи поверхню ідеально чистою без застосування хімічних засобів.
            </x-list.item>
            <x-list.item index="2">
                Вікна та фасади висихають природним чином без розводів.
            </x-list.item>
            <x-list.item index="3">
                Метод безпечний для людей, оскільки не потребує використання підйомників або промислового
                альпінізму на середніх висотах.
            </x-list.item>
            <x-list.item index="4">
                Це екологічний спосіб очищення, адже не залишає хімічних слідів на поверхні та в повітрі.
            </x-list.item>
        </x-list>

        <x-list type="check">
            <x-slot:caption>
                Для яких <span class="font-bold">об’єктів</span> підходить ця
                <span class="text-tryit-orange">послуга</span>?
            </x-slot>
            <x-list.item>Бізнес-центри та офісні будівлі</x-list.item>
            <x-list.item>Торгові комплекси та магазини</x-list.item>
            <x-list.item>Житлові багатоповерхові будинки</x-list.item>
            <x-list.item>Готелі та ресторани</x-list.item>
            <x-list.item>Промислові та складські приміщення</x-list.item>
            <x-list.item>Вітрини, скляні перегородки, фасади будь-якого типу</x-list.item>
        </x-list>

        <x-list type="number">
            <x-slot:caption>
                Як <span class="font-bold">відбувається</span> процес <span class="text-tryit-orange">миття</span>?
            </x-slot>
            <x-list.item index="1">
                <span class="font-semibold">Оцінка об’єкта</span> – наші фахівці виїжджають на місце для визначення
                рівня забруднення, типу поверхні та підбору оптимальної технології очищення.
            </x-list.item>
            <x-list.item index="2">
                <span class="font-semibold">Підготовка обладнання</span> – використовуємо карбонові штанги з подачею
                демінералізованої води для ефективного очищення.
            </x-list.item>
            <x-list.item index="3">
                <span class="font-semibold">Миття поверхонь</span> – видаляємо бруд, пил, залишки смогу та водяних
                патьоків.
            </x-list.item>
            <x-list.item index="4">
                <span class="font-semibold">Контроль якості</span> – перевіряємо результат, щоб кожне вікно та фасад
                були ідеально чистими.
            </x-list.item>
        </x-list>

        <x-list type="number">
            <x-slot:caption>
                Чому варто <span class="font-bold">обрати</span> <span class="text-tryit-orange">нас</span>?
            </x-slot>
            <x-list.item index="1">
                <span class="font-semibold">Безпека та якість</span> – досвідчені фахівці та сертифіковане обладнання.
            </x-list.item>
            <x-list.item index="2">
                <span class="font-semibold">Екологічність</span> – використовуємо тільки очищену воду без хімічних
                засобів.
            </x-list.item>
            <x-list.item index="3">
                <span class="font-semibold">Гарантія результату</span> – чистота без розводів і слідів.
            </x-list.item>
            <x-list.item index="4">
                <span class="font-semibold">Доступні ціни</span> – індивідуальний підхід та гнучка система знижок для
                корпоративних клієнтів.
            </x-list.item>
            <x-list.item index="5">
                <span class="font-semibold">Оперативність</span> – швидке виконання замовлень у зручний для вас час.
            </x-list.item>
        </x-list>
    </x-section>
@endsection
