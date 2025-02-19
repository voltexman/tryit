<?php

use function Laravel\Folio\name;

name('services.pisliabudivelne-prybyrannia');
?>

@extends('layouts.base')

@section('header')
    <x-page-header image="https://cleaning-group.pro/wp-content/uploads/2019/08/cleaning_appartment_vinnitsa.jpg">
        <x-slot:title>
            Післябудівельне прибирання
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
                <p><x-marker>Будівництво чи ремонт</x-marker> – це завжди оновлення простору, але після завершення робіт
                    залишаються пил, будівельне сміття, залишки фарби, цементний наліт та інші забруднення. Післябудівельне
                    прибирання потребує професійного підходу, адже стандартні методи часто не дають бажаного результату.</p>

                <p>Ми пропонуємо комплексне та глибоке очищення приміщень після ремонту та будівництва. Наші фахівці мають
                    необхідне обладнання та засоби, щоб видалити навіть найстійкіші забруднення, не пошкодивши нові покриття
                    та поверхні.
                </p>
            </div>
        </div>

        <div class="grid lg:grid-cols-5 gap-10 lg:gap-20 mt-10">
            <x-list class="col-span-3">
                <x-slot:caption>
                    Що входить у післябудівельне прибирання?
                </x-slot>
                <x-list.item>
                    Видалення будівельного пилу з усіх поверхонь (стіни, стеля, підлога, меблі)
                </x-list.item>
                <x-list.item>
                    Очищення вікон, рам, підвіконь від пилу, фарби та клейких слідів
                </x-list.item>
                <x-list.item>
                    Вивіз будівельного сміття (за домовленістю)
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
        </div>

        <div class="grid lg:grid-cols-5 gap-10 lg:gap-20 mt-10">
            <x-list class="col-span-3">
                <x-slot:caption>
                    Як ми працюємо?
                </x-slot>
                <x-list.item>
                    Безкоштовна консультація – уточнюємо обсяг робіт та особливості приміщення.
                </x-list.item>
                <x-list.item>
                    Професійний підбір засобів – використовуємо безпечну хімію, яка не пошкоджує поверхні.
                </x-list.item>
                <x-list.item>
                    Глибоке очищення – прибираємо пил, будівельне сміття та складні плями.
                </x-list.item>
                <x-list.item>
                    Контроль якості – перевіряємо кожен куточок, щоб усе було ідеально чистим.
                </x-list.item>
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
                    Чому варто обрати нас?
                </x-slot>
                <x-list.item>
                    Повний комплекс робіт – не залишаємо жодної пилинки після ремонту!
                </x-list.item>
                <x-list.item>
                    Безпечні миючі засоби – екологічні та безпечні для здоров'я.
                </x-list.item>
                <x-list.item>
                    Сучасне обладнання – потужні пилососи, пароочисники, професійна хімія.
                </x-list.item>
                <x-list.item>
                    Швидкість та якість – прибирання виконується максимально оперативно.
                </x-list.item>
                <x-list.item>
                    Гарантія чистоти – ваш простір буде готовий до комфортного використання!
                </x-list.item>
            </x-list>
        </div>

        <p>Замовте післябудівельне прибирання вже зараз!</p>
        <p>Не витрачайте свій час і сили на прибирання після ремонту – довірте це професіоналам! Залиште заявку на
            сайті або
            телефонуйте, і ми швидко приведемо ваше приміщення до ладу.</p>

        <p>Ваше приміщення засяє чистотою – залиште всі турботи нам!</p>
    </x-section>
@endsection
