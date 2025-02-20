<?php

use function Laravel\Folio\name;

name('services.khimchystka');
?>

@extends('layouts.base')

@section('header')
    <x-page-header image="https://cleaning-group.pro/wp-content/uploads/2019/08/cleaning_appartment_vinnitsa.jpg">
        <x-slot:title>
            Хімчистка
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
                <p>Звичайне прибирання не завжди здатне впоратися зі складними плямами, пилом і неприємними запахами.
                    Тканинні поверхні, меблі, килими та автомобільні салони потребують глибокого очищення, яке усуне не лише
                    забруднення, а й бактерії та алергени.</p>

                <p>Ми пропонуємо професійну хімчистку, яка поверне вашим речам первозданну чистоту та свіжість.
                    Використовуємо безпечні мийні засоби, що не шкодять тканинам та навколишньому середовищу.</p>
            </div>
        </div>

        <div class="grid lg:grid-cols-5 gap-10 lg:gap-20 mt-10">
            <x-list class="col-span-3" type="check">
                <x-slot:caption>
                    Що входить у послугу?
                </x-slot>
                <x-list.item>
                    Хімчистка меблів – диванів, крісел, матраців, офісних стільців
                </x-list.item>
                <x-list.item>
                    Хімчистка килимів та килимових покриттів – видалення плям, пилу, пилових кліщів
                </x-list.item>
                <x-list.item>
                    Хімчистка автомобільного салону – очищення сидінь, оббивки, килимків
                </x-list.item>
                <x-list.item>
                    Чистка текстильних виробів – штор, гардин, пледів
                </x-list.item>
                <x-list.item>
                    Антиалергенна обробка – знищення пилових кліщів, бактерій, грибків
                </x-list.item>
                <x-list.item>
                    Безпечні засоби – екологічна чистка без агресивних хімікатів
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
                    Кому потрібна ця послуга?
                </x-slot>
                <x-list.item>
                    Власникам будинків і квартир – для підтримання свіжості та чистоти
                </x-list.item>
                <x-list.item>
                    Офісам, ресторанам, готелям – для догляду за меблями та килимовими покриттями
                </x-list.item>
                <x-list.item>
                    Автовласникам – для очищення салону автомобіля від пилу, плям і запахів
                </x-list.item>
                <x-list.item>
                    Алергікам – для зменшення пилу та алергенів у приміщенні
                </x-list.item>
            </x-list>
        </div>

        <div class="grid lg:grid-cols-5 gap-10 lg:gap-20 mt-10">
            <x-list class="col-span-3" type="check">
                <x-slot:caption>
                    Як ми працюємо?
                </x-slot>
                <x-list.item>
                    Оцінка стану виробу – визначаємо тип забруднень та підбираємо відповідний метод чищення.
                </x-list.item>
                <x-list.item>
                    Попередня обробка – нанесення спеціальних засобів для розчинення складних плям.
                </x-list.item>
                <x-list.item>
                    Глибоке очищення – екстракційна або пінна чистка професійним обладнанням.
                </x-list.item>
                <x-list.item>
                    Сушка та провітрювання – швидке висихання без залишкової вологи та запахів.
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
            <x-list class="col-span-3" type="check">
                <x-slot:caption>
                    Чому обирають нас?
                </x-slot>
                <x-list.item>
                    Глибоке очищення – видаляємо навіть найскладніші плями та запахи
                </x-list.item>
                <x-list.item>
                    Швидке висихання – меблі та килими готові до використання вже через кілька годин
                </x-list.item>
                <x-list.item>
                    Безпечні засоби – не шкодять здоров’ю та підходять для алергіків
                </x-list.item>
                <x-list.item>
                    Збереження кольору та текстури – ваші речі залишаться яскравими та м’якими
                </x-list.item>
                <x-list.item>
                    Доступні ціни та індивідуальний підхід
                </x-list.item>
            </x-list>
        </div>

        <p>Замовте хімчистку вже сьогодні!</p>
        <p>Подаруйте вашим меблям, килимам і автомобілю друге життя! Оформіть заявку на сайті або зателефонуйте, і ми
            повернемо вашим речам ідеальну чистоту та свіжість.</p>

        <p>Чистота, комфорт і здоров'я – це просто!</p>
    </x-section>
@endsection
