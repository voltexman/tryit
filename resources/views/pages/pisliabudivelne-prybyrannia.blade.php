<?php

use function Laravel\Folio\name;

name('services.pisliabudivelne-prybyrannia');
?>

@extends('layouts.base')

@section('header')
    <x-page-header image="{{ Vite::asset('resources/images/service-3.jpg') }}">
        <x-slot:title>
            Післябудівельне прибирання
        </x-slot>
    </x-page-header>
@endsection

@section('content')
    <section class="bg-tryit-cream/20 border-b border-tryit-orange/5 -mt-20 pt-32 pb-15 px-5">
        <div class="max-w-7xl mx-auto grid lg:grid-cols-5 gap-5 lg:gap-10">
            <div class="lg:col-span-2">
                <x-before-after before="https://picsum.photos/500?random=1" after="https://picsum.photos/500?random=2" />
            </div>
            <div class="lg:col-span-3 self-center">
                <p><x-marker>Будівництво чи ремонт</x-marker> – це завжди оновлення простору, але після завершення робіт
                    залишаються пил, будівельне сміття, залишки фарби, цементний наліт та інші забруднення.
                    Післябудівельне прибирання потребує професійного підходу, адже стандартні методи часто не дають бажаного
                    результату.
                </p>

                <p>Ми пропонуємо комплексне та глибоке очищення приміщень після ремонту та будівництва. Наші фахівці
                    мають необхідне обладнання та засоби, щоб видалити навіть найстійкіші забруднення, не пошкодивши нові
                    покриття та поверхні.
                </p>
            </div>
        </div>
    </section>

    <x-section class="pt-0">
        <x-list type="check">
            <x-slot:caption>
                Що <span class="font-bold">входить</span> у <span class="text-tryit-orange">післябудівельне
                    прибирання</span>?
            </x-slot>
            <x-list.item>
                Видалення будівельного пилу з усіх поверхонь <i>(стіни, стеля, підлога, меблі)</i>
            </x-list.item>
            <x-list.item>
                Очищення вікон, рам, підвіконь від пилу, фарби та клейких слідів
            </x-list.item>
            <x-list.item>
                Вивіз будівельного сміття <i>(за домовленістю)</i>
            </x-list.item>
            <x-list.item>
                Видалення плям цементу, фарби, клею та монтажної піни
            </x-list.item>
            <x-list.item>
                Очищення сантехніки, кухонних поверхонь, освітлювальних приладів
            </x-list.item>
            <x-list.item>
                Глибоке миття підлог та полірування покриттів
            </x-list.item>
            <x-list.item>
                Дезінфекція приміщення
            </x-list.item>
        </x-list>

        <x-list type="check">
            <x-slot:caption>
                Кому <span class="font-bold">потрібна</span> ця <span class="text-tryit-orange">послуга</span>?
            </x-slot>
            <x-list.item>
                Власникам квартир і будинків після ремонту
            </x-list.item>
            <x-list.item>
                Бізнес-центрам і офісам після реконструкції
            </x-list.item>
            <x-list.item>
                Магазинам, ресторанам, салонам після оновлення інтер'єру
            </x-list.item>
            <x-list.item>
                Будівельним компаніям перед здачею об'єкта замовнику
            </x-list.item>
            <x-list.item>
                Орендодавцям, які готують приміщення до заселення
            </x-list.item>
        </x-list>

        <x-list type="check">
            <x-slot:caption>
                <span class="font-bold">Як</span> ми <span class="text-tryit-orange">працюємо</span>?
            </x-slot>
            <x-list.item>
                <b>Безкоштовна консультація</b> – уточнюємо обсяг робіт та особливості приміщення.
            </x-list.item>
            <x-list.item>
                <b>Професійний підбір засобів</b> – використовуємо безпечну хімію, яка не пошкоджує поверхні.
            </x-list.item>
            <x-list.item>
                <b>Глибоке очищення</b> – прибираємо пил, будівельне сміття та складні плями.
            </x-list.item>
            <x-list.item>
                <b>Контроль якості</b> – перевіряємо кожен куточок, щоб усе було ідеально чистим.
            </x-list.item>
        </x-list>

        <x-list type="check">
            <x-slot:caption>
                Чому <span class="font-bold">варто</span> обрати <span class="text-tryit-orange">нас</span>?
            </x-slot>
            <x-list.item>
                <b>Повний комплекс робіт</b> – не залишаємо жодної пилинки після ремонту!
            </x-list.item>
            <x-list.item>
                <b>Безпечні миючі засоби</b> – екологічні та безпечні для здоров'я.
            </x-list.item>
            <x-list.item>
                <b>Сучасне обладнання</b> – потужні пилососи, пароочисники, професійна хімія.
            </x-list.item>
            <x-list.item>
                <b>Швидкість та якість</b> – прибирання виконується максимально оперативно.
            </x-list.item>
            <x-list.item>
                <b>Гарантія чистоти</b> – ваш простір буде готовий до комфортного використання!
            </x-list.item>
        </x-list>

        <x-blockquote class="mt-10">
            <p>Замовте післябудівельне прибирання вже зараз!</p>
            <p>Не витрачайте свій час і сили на прибирання після ремонту – довірте це професіоналам! Залиште заявку на
                сайті або телефонуйте, і ми швидко приведемо ваше приміщення до ладу.</p>

            <p>Ваше приміщення засяє чистотою – залиште всі турботи нам!</p>
        </x-blockquote>
    </x-section>
@endsection
