<?php

use function Laravel\Folio\name;

name('services.promyslovyi-alpinizm');
?>

@extends('layouts.base')

@section('header')
    <x-page-header image="https://cleaning-group.pro/wp-content/uploads/2019/08/cleaning_appartment_vinnitsa.jpg">
        <x-slot:title>
            Промисловий альпінізм
        </x-slot>
    </x-page-header>
@endsection

@section('content')
    <x-section>
        <div class="grid lg:grid-cols-5 gap-5 lg:gap-10 mb-10">
            <div class="lg:col-span-2 flex justify-center">
                <x-before-after before="https://picsum.photos/500?random=1" after="https://picsum.photos/500?random=2" />
            </div>
            <div class="lg:col-span-3">
                <p>Деякі види робіт на висоті неможливо виконати звичайними методами – саме тоді на допомогу приходять
                    фахівці з промислового альпінізму. Висотні роботи вимагають професіоналізму, досвіду та спеціального
                    обладнання, адже вони проводяться на великій висоті без застосування будівельних лісів чи підйомників.
                </p>

                <p>Наша команда кваліфікованих альпіністів виконує широкий спектр робіт: мийка фасадів, монтаж і демонтаж
                    конструкцій, герметизація швів, очищення дахів від снігу та криги. Ми гарантуємо високу якість, безпеку
                    та оперативність виконання завдань.</p>
            </div>
        </div>

        <div class="grid lg:grid-cols-5 gap-10 lg:gap-20 lg:mt-10">
            <x-list class="lg:col-span-3 order-2 lg:order-1" type="check">
                <x-slot:caption>
                    Що входить у послугу?
                </x-slot>
                <x-list.item>
                    Мийка фасадів та вікон на висоті – без розводів, пилу та забруднень
                </x-list.item>
                <x-list.item>
                    Монтаж та демонтаж рекламних банерів, вивісок, кондиціонерів
                </x-list.item>
                <x-list.item>
                    Герметизація міжпанельних швів – захист від вологи та холоду
                </x-list.item>
                <x-list.item>
                    Очищення дахів від снігу та бурульок – безпечно та швидко
                </x-list.item>
                <x-list.item>
                    Фарбування та ремонт фасадів – оновлення зовнішнього вигляду будівлі
                </x-list.item>
            </x-list>
            <div
                class="lg:col-span-2 flex justify-center perspective-near perspective-origin-bottom-right px-10 2xl:px-0 order-1 lg:order-2">
                <img src="https://picsum.photos/400?random=3"
                    class="rounded-xl rotate-x-6 rotate-z-6 shadow-2xl shadow-black/50 object-cover max-h-96"
                    alt="">
            </div>
        </div>

        <div class="grid lg:grid-cols-5 gap-10 lg:gap-20 lg:mt-10">
            <div
                class="lg:col-span-2 flex justify-center perspective-near perspective-origin-bottom-left px-10 2xl:px-0 order-1 lg:order-1">
                <img src="https://picsum.photos/400?random=4"
                    class="rounded-xl rotate-x-6 -rotate-z-6 shadow-2xl shadow-black/50 object-cover max-h-96"
                    alt="">
            </div>
            <x-list class="lg:col-span-3 order-2 lg:order-2" type="check">
                <x-slot:caption>
                    Кому підходить ця послуга?
                </x-slot>
                <x-list.item>
                    Офісним центрам та бізнес-комплексам
                </x-list.item>
                <x-list.item>
                    Торгово-розважальним центрам та магазинам
                </x-list.item>
                <x-list.item>
                    Будівельним компаніям, житловим комплексам
                </x-list.item>
                <x-list.item>
                    Державним установам, лікарням, навчальним закладам
                </x-list.item>
            </x-list>
        </div>

        <div class="grid lg:grid-cols-5 gap-10 lg:gap-20 lg:mt-10">
            <x-list class="lg:col-span-3 order-2 lg:order-1" type="check">
                <x-slot:caption>
                    Як ми працюємо?
                </x-slot>
                <x-list.item>
                    Аналіз об’єкта – визначаємо особливості будівлі та підбираємо обладнання
                </x-list.item>
                <x-list.item>
                    Підготовка та встановлення страхувальних систем – забезпечуємо безпеку
                </x-list.item>
                <x-list.item>
                    Виконання робіт на висоті – чітко, швидко та з гарантією якості
                </x-list.item>
                <x-list.item>
                    Перевірка результату та фінальна очистка – залишаємо об'єкт у ідеальному стані
                </x-list.item>
            </x-list>
            <div
                class="lg:col-span-2 flex justify-center perspective-near perspective-origin-bottom-right px-10 2xl:px-0 order-1 lg:order-2">
                <img src="https://picsum.photos/400?random=5"
                    class="rounded-xl rotate-x-6 rotate-z-6 shadow-2xl shadow-black/50 object-cover max-h-96"
                    alt="">
            </div>
        </div>

        <div class="grid lg:grid-cols-5 gap-10 lg:gap-20 lg:mt-10 lg:mb-20">
            <div
                class="lg:col-span-2 flex justify-center perspective-near perspective-origin-bottom-left px-10 2xl:px-0 order-1">
                <img src="https://picsum.photos/400?random=6"
                    class="rounded-xl rotate-x-6 -rotate-z-6 shadow-2xl shadow-black/50 object-cover max-h-96"
                    alt="">
            </div>
            <x-list class="lg:col-span-3 order-2" type="check">
                <x-slot:caption>
                    Чому варто обрати нас?
                </x-slot>
                <x-list.item>
                    <span class="font-semibold">Сертифіковані альпіністи</span> – досвідчені майстри з відповідними
                    допусками
                </x-list.item>
                <x-list.item>
                    <span class="font-semibold">Безпечні технології</span> – дотримуємось усіх норм безпеки
                </x-list.item>
                <x-list.item>
                    <span class="font-semibold">Висока якість послуг</span> – навіть у важкодоступних місцях
                </x-list.item>
                <x-list.item>
                    <span class="font-semibold">Гнучкість у виконанні робіт</span> – працюємо швидко та без шкоди для
                    бізнесу
                </x-list.item>
                <x-list.item>
                    <span class="font-semibold">Конкурентні ціни</span> – доступні тарифи без прихованих витрат
                </x-list.item>
            </x-list>
        </div>

        <div class="text-sm">
            <p>Замовте послугу промислового альпінізму вже сьогодні!</p>
            <p>Ми допоможемо вирішити будь-яке висотне завдання швидко, безпечно та якісно. Залиште заявку або зателефонуйте
                – і ми підготуємо для вас найкращу пропозицію!</p>

            <p>Промисловий альпінізм – безпечні рішення на висоті!</p>
        </div>
    </x-section>
@endsection
