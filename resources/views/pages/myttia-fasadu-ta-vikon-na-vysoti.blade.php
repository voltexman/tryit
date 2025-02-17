<?php

use function Laravel\Folio\name;

name('services.myttia-fasadu-ta-vikon-na-vysoti');
?>

@extends('layouts.base')

@section('header')
    <x-page-header image="https://cleaning-group.pro/wp-content/uploads/2019/08/cleaning_appartment_vinnitsa.jpg">
        <x-slot:title>
            Миття фасадів та вікон на висоті <br>(WFP-система)
        </x-slot>
    </x-page-header>
@endsection

@section('content')
    <x-section>
        <div class="lg:grid lg:grid-cols-5 gap-10">
            <div class="lg:col-span-2 flex justify-center">
                <x-before-after before="https://picsum.photos/500?random=1" after="https://picsum.photos/500?random=2" />
            </div>
            <div class="lg:col-span-3">
                <p><x-marker>Чисті вікна та фасади</x-marker> – це не лише естетика, а й імідж вашого бізнесу чи житлового
                    комплексу. Забруднення, пил, дощові патьоки та міський смог з часом роблять будівлю тьмяною, зменшуючи
                    її привабливість. Ми пропонуємо професійне миття фасадів і вікон на висоті за допомогою сучасної
                    WFP-системи (Water-Fed Pole), що забезпечує бездоганний результат без розводів і слідів.</p>

                <p><span class="font-bold">Що таке WFP-система та чому вона ефективна?</span><br>
                    <x-marker>WFP-система</x-marker> – це інноваційна технологія миття вікон і фасадів без використання
                    драбин або підйомників. Вона складається з телескопічних карбонових штанг, через які подається очищена
                    демінералізована вода під тиском.
                </p>
            </div>
        </div>

        <div class="grid lg:grid-cols-5 gap-10 lg:gap-20 mt-10">
            <x-list class="lg:col-span-3 order-2 lg:order-1">
                <x-slot:caption>
                    Завдяки цьому:
                </x-slot>
                <x-list.item>
                    Вода розчиняє бруд, залишаючи поверхню ідеально чистою без застосування хімічних засобів.
                </x-list.item>
                <x-list.item>
                    Вікна та фасади висихають природним чином без розводів.
                </x-list.item>
                <x-list.item>
                    Метод безпечний для людей, оскільки не потребує використання підйомників або промислового
                    альпінізму на середніх висотах.
                </x-list.item>
                <x-list.item>
                    Це екологічний спосіб очищення, адже не залишає хімічних слідів на поверхні та в повітрі.
                </x-list.item>
            </x-list>
            <div
                class="lg:col-span-2 flex justify-center perspective-near perspective-origin-bottom-right px-10 2xl:px-0 order-1 lg:order-2">
                <img src="https://picsum.photos/400?random=3"
                    class="rounded-xl rotate-x-6 rotate-z-6 shadow-2xl shadow-black/50 object-cover max-h-96" alt="">
            </div>
        </div>

        <div class="grid lg:grid-cols-5 gap-10 lg:gap-20 lg:mt-10">
            <div
                class="lg:col-span-2 flex justify-center perspective-near perspective-origin-bottom-left px-10 2xl:px-0 order-2 lg:order-1">
                <img src="https://picsum.photos/400?random=4"
                    class="rounded-xl rotate-x-6 -rotate-z-6 shadow-2xl shadow-black/50 object-cover max-h-96" alt="">
            </div>
            <x-list class="lg:col-span-3 order-2 lg:order-1">
                <x-slot:caption>
                    Для яких об’єктів підходить ця послуга?
                </x-slot>
                <x-list.item>Бізнес-центри та офісні будівлі</x-list.item>
                <x-list.item>Торгові комплекси та магазини</x-list.item>
                <x-list.item>Житлові багатоповерхові будинки</x-list.item>
                <x-list.item>Готелі та ресторани</x-list.item>
                <x-list.item>Промислові та складські приміщення</x-list.item>
                <x-list.item>Вітрини, скляні перегородки, фасади будь-якого типу</x-list.item>
            </x-list>
        </div>

        <div class="grid lg:grid-cols-5 gap-10 lg:gap-20 lg:mt-10">
            <x-list class="lg:col-span-3 order-2 lg:order-1">
                <x-slot:caption>
                    Як відбувається процес миття?
                </x-slot>
                <x-list.item>
                    Оцінка об’єкта – наші фахівці виїжджають на місце для визначення рівня забруднення, типу поверхні та
                    підбору
                    оптимальної технології очищення.
                </x-list.item>
                <x-list.item>
                    Підготовка обладнання – використовуємо карбонові штанги з подачею демінералізованої води для
                    ефективного
                    очищення.
                </x-list.item>
                <x-list.item>
                    Миття поверхонь – видаляємо бруд, пил, залишки смогу та водяних патьоків.
                </x-list.item>
                <x-list.item>
                    Контроль якості – перевіряємо результат, щоб кожне вікно та фасад були ідеально чистими.
                </x-list.item>
            </x-list>
            <div
                class="lg:col-span-2 flex justify-center perspective-near perspective-origin-bottom-right px-10 2xl:px-0 order-1 lg:order-2">
                <img src="https://picsum.photos/400?random=5"
                    class="rounded-xl rotate-x-6 rotate-z-6 shadow-2xl shadow-black/50 object-cover max-h-96" alt="">
            </div>
        </div>

        <div class="grid lg:grid-cols-5 gap-10 lg:gap-20 lg:mt-10">
            <div class="lg:col-span-2 flex justify-center perspective-near perspective-origin-bottom-left px-10 2xl:px-0">
                <img src="https://picsum.photos/400?random=6"
                    class="rounded-xl rotate-x-6 -rotate-z-6 shadow-2xl shadow-black/50 object-cover max-h-96" alt="">
            </div>
            <x-list class="lg:col-span-3">
                <x-slot:caption>
                    Чому варто обрати нас?
                </x-slot>
                <x-list.item>
                    Безпека та якість – досвідчені фахівці та сертифіковане обладнання.
                </x-list.item>
                <x-list.item>
                    Екологічність – використовуємо тільки очищену воду без хімічних засобів.
                </x-list.item>
                <x-list.item>
                    Гарантія результату – чистота без розводів і слідів.
                </x-list.item>
                <x-list.item>
                    Доступні ціни – індивідуальний підхід та гнучка система знижок для корпоративних клієнтів.
                </x-list.item>
                <x-list.item>
                    Оперативність – швидке виконання замовлень у зручний для вас час.
                </x-list.item>
            </x-list>
    </x-section>
@endsection
