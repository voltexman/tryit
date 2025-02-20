<?php

use function Laravel\Folio\name;

name('services.kompleksne-ta-pidtrymuiuche-prybyrannia-ofisu');
?>

@extends('layouts.base')

@section('header')
    <x-page-header image="https://cleaning-group.pro/wp-content/uploads/2019/08/cleaning_appartment_vinnitsa.jpg">
        <x-slot:title>
            Комплексне та підтримуюче прибирання офісу
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
                <p><x-marker>Чистий і доглянутий офіс</x-marker> – це не лише приємна атмосфера для співробітників, а й
                    важливий іміджевий фактор для клієнтів та партнерів. Регулярне прибирання допомагає підтримувати
                    порядок, свіжість повітря та гігієну робочого простору, що сприяє підвищенню продуктивності та комфорту
                    працівників.</p>

                <p>Ми пропонуємо комплексне та підтримуюче прибирання офісних приміщень, яке включає в себе всі необхідні
                    послуги для забезпечення чистоти та затишку в вашому робочому просторі.</p>
            </div>
        </div>

        <div class="grid lg:grid-cols-5 gap-10 lg:gap-20 mt-10">
            <x-list class="col-span-3" type="check">
                <x-slot:caption>
                    Що входить у послугу?
                </x-slot>
                <x-list.item>
                    Щоденне або планове прибирання – підмітання, вологе миття підлоги, видалення пилу
                </x-list.item>
                <x-list.item>
                    Очищення офісних меблів та техніки – протирання столів, стільців, шаф, оргтехніки
                </x-list.item>
                <x-list.item>
                    Винесення сміття – заміна сміттєвих пакетів, сортування відходів
                </x-list.item>
                <x-list.item>
                    Мийка вікон та скляних перегородок – без розводів і пилу
                </x-list.item>
                <x-list.item>
                    Дезінфекція санвузлів та кухонної зони – чистота та гігієна в місцях загального користування
                </x-list.item>
                <x-list.item>
                    Полив та догляд за офісними рослинами (за бажанням)
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
            <x-list class="col-span-3" type="check">
                <x-slot:caption>
                    Кому підходить ця послуга?
                </x-slot>
                <x-list.item>
                    Офісам, бізнес-центрам та коворкінгам
                </x-list.item>
                <x-list.item>
                    Магазинам, салонам краси, клінікам
                </x-list.item>
                <x-list.item>
                    Державним установам та навчальним закладам
                </x-list.item>
                <x-list.item>
                    Приватним кабінетам, студіям та агентствам
                </x-list.item>
            </x-list>
        </div>

        <div class="grid lg:grid-cols-5 gap-10 lg:gap-20 mt-10">
            <x-list class="col-span-3" type="check">
                <x-slot:caption>
                    Як ми працюємо?
                </x-slot>
                <x-list.item>
                    Консультація та вибір графіка – підлаштовуємо прибирання під ваш розклад
                </x-list.item>
                <x-list.item>
                    Прибирання з урахуванням особливостей офісу – дбайливо чистимо техніку, меблі, поверхні
                </x-list.item>
                <x-list.item>
                    Використання екологічних засобів – безпечних для людей та довкілля
                </x-list.item>
                <x-list.item>
                    Контроль якості – кожне прибирання виконується на вищому рівні
                </x-list.item>
            </x-list>
            <div class="col-span-2 perspective-near perspective-origin-bottom-right">
                <img src="https://picsum.photos/400?random=5"
                    class="rounded-xl rotate-x-6 rotate-z-6 shadow-2xl shadow-black/50" alt="">
            </div>
        </div>

        <div class="grid lg:grid-cols-5 gap-10 lg:gap-20 mt-10 mb-20">
            <div class="col-span-2 perspective-near perspective-origin-bottom-left">
                <img src="https://picsum.photos/400?random=6"
                    class="rounded-xl rotate-x-6 -rotate-z-6 shadow-2xl shadow-black/50" alt="">
            </div>
            <x-list class="col-span-3" type="check">
                <x-slot:caption>
                    Чому обирають нас?
                </x-slot>
                <x-list.item>
                    Гнучкий графік роботи – щоденне, разове або генеральне прибирання
                </x-list.item>
                <x-list.item>
                    Професійні засоби та обладнання – безпечні та ефективні миючі засоби
                </x-list.item>
                <x-list.item>
                    Досвідчені співробітники – акуратність, швидкість, відповідальність
                </x-list.item>
                <x-list.item>
                    Гарантія чистоти – ваш офіс завжди виглядатиме ідеально
                </x-list.item>
            </x-list>
        </div>

        <p>Замовте професійне прибирання офісу вже сьогодні!</p>
        <p>Не витрачайте час співробітників на прибирання – довірте це професіоналам! Ми подбаємо про ідеальний порядок
            у вашому офісі.</p>

        <p>Чистий офіс – продуктивна робота!</p>
    </x-section>
@endsection
