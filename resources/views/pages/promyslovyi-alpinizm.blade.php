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
    <section class="bg-tryit-cream/20 border-b border-tryit-orange/5 -mt-20 pt-32 pb-15 px-5">
        <div class="max-w-7xl mx-auto grid lg:grid-cols-5 gap-5 lg:gap-10">
            <div class="lg:col-span-2 flex justify-center">
                <x-before-after before="https://picsum.photos/500?random=1" after="https://picsum.photos/500?random=2" />
            </div>
            <div class="lg:col-span-3">
                <p>Деякі види робіт на висоті неможливо виконати звичайними методами – саме тоді на допомогу приходять
                    фахівці з промислового альпінізму. Висотні роботи вимагають професіоналізму, досвіду та спеціального
                    обладнання, адже вони проводяться на великій висоті без застосування будівельних лісів чи
                    підйомників.
                </p>

                <p>Наша команда кваліфікованих альпіністів виконує широкий спектр робіт: мийка фасадів, монтаж і
                    демонтаж конструкцій, герметизація швів, очищення дахів від снігу та криги. Ми гарантуємо високу якість,
                    безпеку та оперативність виконання завдань.</p>
            </div>
        </div>
    </section>

    <x-section class="pt-0">
        <x-list type="check">
            <x-slot:caption>
                Що <span class="font-bold">входить</span> у <span class="text-tryit-orange">послугу</span>?
            </x-slot>
            <x-list.item>
                <b>Мийка фасадів та вікон на висоті</b> – без розводів, пилу та забруднень
            </x-list.item>
            <x-list.item>
                Монтаж та демонтаж рекламних банерів, вивісок, кондиціонерів
            </x-list.item>
            <x-list.item>
                <b>Герметизація міжпанельних швів</b> – захист від вологи та холоду
            </x-list.item>
            <x-list.item>
                <b>Очищення дахів від снігу та бурульок</b> – безпечно та швидко
            </x-list.item>
            <x-list.item>
                <b>Фарбування та ремонт фасадів</b> – оновлення зовнішнього вигляду будівлі
            </x-list.item>
        </x-list>

        <x-list type="check">
            <x-slot:caption>
                Кому <span class="font-bold">підходить</span> ця <span class="text-tryit-orange">послуга</span>?
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

        <x-list type="check">
            <x-slot:caption>
                <span class="font-bold">Як</span> ми <span class="text-tryit-orange">працюємо</span>?
            </x-slot>
            <x-list.item>
                <b>Аналіз об’єкта</b> – визначаємо особливості будівлі та підбираємо обладнання
            </x-list.item>
            <x-list.item>
                <b>Підготовка та встановлення страхувальних систем</b> – забезпечуємо безпеку
            </x-list.item>
            <x-list.item>
                <b>Виконання робіт на висоті</b> – чітко, швидко та з гарантією якості
            </x-list.item>
            <x-list.item>
                <b>Перевірка результату та фінальна очистка</b> – залишаємо об'єкт у ідеальному стані
            </x-list.item>
        </x-list>

        <x-list type="check">
            <x-slot:caption>
                Чому <span class="font-bold">варто</span> обрати <span class="text-tryit-orange">нас</span>?
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

        <x-blockquote class="mt-10">
            <p>Замовте послугу промислового альпінізму вже сьогодні!</p>
            <p>Ми допоможемо вирішити будь-яке висотне завдання швидко, безпечно та якісно.
                Залиште заявку або зателефонуйте – і ми підготуємо для вас найкращу пропозицію!</p>

            <p>Промисловий альпінізм – безпечні рішення на висоті!</p>
        </x-blockquote>
    </x-section>
@endsection
