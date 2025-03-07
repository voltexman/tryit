<?php

use function Laravel\Folio\name;

$meta_title = 'Професійне прибирання офісів та чистота, комфорт, порядок';
$meta_description = 'Прибирання офісів: регулярне, генеральне, разове. Очищення меблів, техніки, вікон, санвузлів. Гнучкий графік, екозасоби, гарантія чистоти.';

name('services.kompleksne-ta-pidtrymuiuche-prybyrannia-ofisu');
?>

@extends('layouts.base')

@section('header')
    <x-page-header image="{{ Vite::asset('resources/images/service-6.jpg') }}">
        <x-slot:title>
            Комплексне та підтримуюче прибирання офісу
        </x-slot>
    </x-page-header>
@endsection

@section('content')
    <section class="bg-tryit-cream/20 border-b border-tryit-orange/5 -mt-20 pt-32 pb-15 px-5">
        <div class="max-w-7xl mx-auto grid lg:grid-cols-5 gap-5 lg:gap-10">
            <div class="lg:col-span-2">
                <img src="{{ Vite::asset('resources/images/service-6.jpg') }}"
                    class="size-full object-cover rounded-tl-xl rounded-br-xl rounded-tr-4xl rounded-bl-4xl shadow-xl"
                    width="300" height="300" alt="">
            </div>
            <div class="lg:col-span-3 self-center">
                <p><x-marker>Чистий і доглянутий офіс</x-marker> – це не лише приємна атмосфера для співробітників, а й
                    важливий іміджевий фактор для клієнтів та партнерів. Регулярне прибирання допомагає підтримувати
                    порядок, свіжість повітря та гігієну робочого простору, що сприяє підвищенню продуктивності та
                    комфорту працівників.</p>

                <p>Ми пропонуємо комплексне та підтримуюче прибирання офісних приміщень, яке включає в себе всі
                    необхідні послуги для забезпечення чистоти та затишку в вашому робочому просторі.</p>
            </div>
        </div>
    </section>

    <x-section class="pt-0">
        <x-list type="check">
            <x-slot:caption>
                Що <span class="font-bold">входить</span> у <span class="text-tryit-orange">послугу</span>?
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

        <x-list type="check">
            <x-slot:caption>
                Кому <span class="font-bold">підходить</span> ця <span class="text-tryit-orange">послуга</span>?
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

        <x-list type="check">
            <x-slot:caption>
                <span class="font-bold">Як</span> ми <span class="text-tryit-orange">працюємо</span>?
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

        <x-list type="check">
            <x-slot:caption>
                Чому <span class="font-bold">обирають</span> <span class="text-tryit-orange">нас</span>?
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

        <x-blockquote class="mt-10">
            <p>Замовте професійне прибирання офісу вже сьогодні!</p>
            <p>Не витрачайте час співробітників на прибирання – довірте це професіоналам! Ми подбаємо про ідеальний порядок
                у вашому офісі.</p>

            <p>Чистий офіс – продуктивна робота!</p>
        </x-blockquote>
    </x-section>
@endsection
