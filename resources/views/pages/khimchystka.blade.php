<?php

use function Laravel\Folio\name;

$meta_title = 'Професійна хімчистка меблів, килимів, авто та глибоке очищення без хімії';
$meta_description = 'Замовте хімчистку меблів, килимів, авто та текстилю! Видалення плям, запахів, алергенів. Швидке висихання, безпечні засоби, відновлення свіжості';

name('services.khimchystka');
?>

@extends('layouts.base')

@section('header')
    <x-page-header image="{{ Vite::asset('resources/images/service-5.jpg') }}">
        <x-slot:title>
            Хімчистка
        </x-slot>
    </x-page-header>
@endsection

@section('content')
    <section class="bg-tryit-cream/20 border-b border-tryit-orange/5 -mt-20 pt-32 pb-15 px-5">
        <div class="max-w-7xl mx-auto grid lg:grid-cols-5 gap-5 lg:gap-10">
            <div class="lg:col-span-2">
                <img src="{{ Vite::asset('resources/images/service-5.jpg') }}"
                    class="h-64 w-full object-cover rounded-tl-xl rounded-br-xl rounded-tr-4xl rounded-bl-4xl shadow-xl"
                    width="300" height="300" alt="">
            </div>
            <div class="lg:col-span-3 self-center">
                <p>Звичайне прибирання не завжди здатне впоратися зі складними плямами, пилом і неприємними запахами.
                    Тканинні поверхні, меблі, килими та автомобільні салони потребують глибокого очищення, яке усуне не
                    лише забруднення, а й бактерії та алергени.</p>

                <p>Ми пропонуємо професійну хімчистку, яка поверне вашим речам первозданну чистоту та свіжість.
                    Використовуємо безпечні мийні засоби, що не шкодять тканинам та навколишньому середовищу.</p>
            </div>
        </div>
    </section>

    <x-section class="pt-0">
        <x-list type="check">
            <x-slot:caption>
                Що <span class="font-bold">входить</span> у <span class="text-tryit-orange">послугу</span>?
            </x-slot>
            <x-list.item>
                <b>Хімчистка меблів</b> – диванів, крісел, матраців, офісних стільців
            </x-list.item>
            <x-list.item>
                <b>Хімчистка килимів та килимових покриттів</b> – видалення плям, пилу, пилових кліщів
            </x-list.item>
            <x-list.item>
                <b>Хімчистка автомобільного салону</b> – очищення сидінь, оббивки, килимків
            </x-list.item>
            <x-list.item>
                <b>Чистка текстильних виробів</b> – штор, гардин, пледів
            </x-list.item>
            <x-list.item>
                <b>Антиалергенна обробка</b> – знищення пилових кліщів, бактерій, грибків
            </x-list.item>
            <x-list.item>
                <b>Безпечні засоби</b> – екологічна чистка без агресивних хімікатів
            </x-list.item>
        </x-list>

        <x-list type="check">
            <x-slot:caption>
                Кому <span class="font-bold">потрібна</span> ця <span class="text-tryit-orange">послуга</span>?
            </x-slot>
            <x-list.item>
                <b>Власникам будинків і квартир</b> – для підтримання свіжості та чистоти
            </x-list.item>
            <x-list.item>
                <b>Офісам, ресторанам, готелям</b> – для догляду за меблями та килимовими покриттями
            </x-list.item>
            <x-list.item>
                <b>Автовласникам</b> – для очищення салону автомобіля від пилу, плям і запахів
            </x-list.item>
            <x-list.item>
                <b>Алергікам</b> – для зменшення пилу та алергенів у приміщенні
            </x-list.item>
        </x-list>

        <x-list type="check">
            <x-slot:caption>
                <span class="font-bold">Як</span> ми <span class="text-tryit-orange">працюємо</span>?
            </x-slot>
            <x-list.item>
                <b>Оцінка стану виробу</b> – визначаємо тип забруднень та підбираємо відповідний метод чищення.
            </x-list.item>
            <x-list.item>
                <b>Попередня обробка</b> – нанесення спеціальних засобів для розчинення складних плям.
            </x-list.item>
            <x-list.item>
                <b>Глибоке очищення</b> – екстракційна або пінна чистка професійним обладнанням.
            </x-list.item>
            <x-list.item>
                <b>Сушка та провітрювання</b> – швидке висихання без залишкової вологи та запахів.
            </x-list.item>
        </x-list>

        <x-list type="check">
            <x-slot:caption>
                Чому <span class="font-bold">обирають</span> <span class="text-tryit-orange">нас</span>?
            </x-slot>
            <x-list.item>
                <b>Глибоке очищення</b> – видаляємо навіть найскладніші плями та запахи
            </x-list.item>
            <x-list.item>
                <b>Швидке висихання</b> – меблі та килими готові до використання вже через кілька годин
            </x-list.item>
            <x-list.item>
                <b>Безпечні засоби</b> – не шкодять здоров’ю та підходять для алергіків
            </x-list.item>
            <x-list.item>
                <b>Збереження кольору та текстури</b> – ваші речі залишаться яскравими та м’якими
            </x-list.item>
            <x-list.item>
                Доступні ціни та індивідуальний підхід
            </x-list.item>
        </x-list>

        <x-blockquote class="mt-10">
            <p>Замовте хімчистку вже сьогодні!</p>
            <p>Подаруйте вашим меблям, килимам і автомобілю друге життя! Оформіть заявку на сайті або зателефонуйте, і ми
                повернемо вашим речам ідеальну чистоту та свіжість.</p>

            <p>Чистота, комфорт і здоров'я – це просто!</p>
        </x-blockquote>
    </x-section>
@endsection
