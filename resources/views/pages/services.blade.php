<?php

use function Laravel\Folio\name;

name('services');
?>

@extends('layouts.base')

@section('header')
    <x-page-header image="https://cleaning-group.pro/wp-content/uploads/2019/08/cleaning_appartment_vinnitsa.jpg">
        <x-slot:title>
            Спектр наших послуг
        </x-slot>
    </x-page-header>
@endsection

@section('content')
    <x-section>
        <div class="max-w-5xl mx-auto flex flex-col gap-y-20">
            <x-cards.service orientation="left" link="services.myttia-fasadu-ta-vikon-na-vysoti"
                image="https://www.telegraf.in.ua/uploads/posts/2024-03/1711798407_klining.jpg">
                <x-slot:name>
                    Миття фасадів та вікон на висоті (WFP-система)
                </x-slot>
                <x-slot:description>
                    <p>Забезпечимо ідеальну чистоту вікон та фасадів безпечно та ефективно! Використовуємо сучасну
                        WFP-систему, яка дозволяє мити скло без розводів і слідів.</p>
                    <p>Висотні роботи виконують професійні промислові альпіністи.
                        Ваші вікна засяють, а будівля виглядатиме доглянутою!</p>
                </x-slot>
            </x-cards.service>

            <x-cards.service orientation="right" link="services.myika-ta-ochyshchennia-soniachnykh-panelei"
                image="https://www.telegraf.in.ua/uploads/posts/2024-03/1711798407_klining.jpg">
                <x-slot:name>
                    Мийка та очищення сонячних панелей
                </x-slot>
                <x-slot:description>
                    <p>Максимальна продуктивність ваших сонячних батарей починається з чистоти! Видаляємо пил, бруд і наліт,
                        які знижують ефективність панелей.</p>
                    <p>Використовуємо спеціальні технології, що не пошкоджують поверхню. З
                        нами ваші сонячні батареї працюватимуть на повну потужність!</p>
                </x-slot>
            </x-cards.service>

            <x-cards.service orientation="left" link="services.pisliabudivelne-prybyrannia"
                image="https://www.telegraf.in.ua/uploads/posts/2024-03/1711798407_klining.jpg">
                <x-slot:name>
                    Післябудівельне прибирання
                </x-slot>
                <x-slot:description>
                    <p>Будівництво чи ремонт позаду, а хаос залишився? Ми швидко та якісно приберемо будівельне сміття, пил
                        та бруд.</p>
                    <p>Працюємо з усіма видами покриттів та поверхонь, використовуючи професійні засоби. Ваш простір буде
                        ідеально чистим та готовим до використання!</p>
                </x-slot>
            </x-cards.service>

            <x-cards.service orientation="right" link="services.heneralne-prybyrannia-tsekhiv-ta-vyrobnytstva"
                image="https://picsum.photos/500/500">
                <x-slot:name>
                    Генеральне прибирання цехів та виробництва
                </x-slot>
                <x-slot:description>
                    <p>Чистота на виробництві – це не лише порядок, а й безпека! Проводимо комплексне прибирання цехів,
                        складів та виробничих приміщень.</p>
                    <p>Видаляємо пил, бруд, масло та інші забруднення з обладнання та підлоги.
                        Забезпечте комфортні умови для роботи з нашими клінінговими рішеннями!</p>
                </x-slot>
            </x-cards.service>

            <x-cards.service orientation="left" link="services.khimchystka" image="https://picsum.photos/500/500">
                <x-slot:name>
                    Хімчистка
                </x-slot>
                <x-slot:description>
                    <p>Оновіть свої меблі, килими та текстиль без зайвих клопотів! Видаляємо плями, пилових кліщів та
                        неприємні запахи за допомогою безпечних засобів.</p>
                    <p>Використовуємо сучасне обладнання для глибокого очищення тканин.
                        Ваша оселя чи офіс стануть свіжими та доглянутими!</p>
                </x-slot>
            </x-cards.service>

            <x-cards.service orientation="right" link="services.kompleksne-ta-pidtrymuiuche-prybyrannia-ofisu"
                image="https://picsum.photos/500/500">
                <x-slot:name>
                    Комплексне та підтримуюче прибирання офісу
                </x-slot>
                <x-slot:description>
                    <p>Створюємо комфортну атмосферу для вашої команди та клієнтів! Регулярне прибирання офісу дозволяє
                        підтримувати порядок без відволікання на дрібниці.</p>
                    <p>Ми подбаємо про чистоту робочих місць, санвузлів і
                        загальних зон. Працюйте продуктивно, а про чистоту подбаємо ми!</p>
                </x-slot>
            </x-cards.service>

            <x-cards.service orientation="left" link="services.promyslovyi-alpinizm"
                image="https://www.telegraf.in.ua/uploads/posts/2024-03/1711798407_klining.jpg">
                <x-slot:name>
                    Промисловий альпінізм
                </x-slot>
                <x-slot:description>
                    <p>Будь-які висотні роботи – професійно та безпечно! Наші фахівці виконують миття вікон, фасадів,
                        монтажні та ремонтні роботи на висоті.</p>
                    <p>Використовуємо сертифіковане спорядження та перевірені методи. Довірте
                        складні завдання справжнім експертам!</p>
                </x-slot>
            </x-cards.service>
        </div>
    </x-section>
@endsection
