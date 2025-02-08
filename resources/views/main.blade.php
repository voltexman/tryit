@extends('layouts.base')

@section('header')
    <div class="bg-[url(https://cleaning-group.pro/wp-content/uploads/2019/08/cleaning_appartment_vinnitsa.jpg)] bg-cover bg-center h-dvh"
        style="clip-path: polygon(100% 0%, 0% 0% , 0.00% 99.27%, 1.67% 99.16%, 3.33% 99.01%, 5.00% 98.82%, 6.67% 98.59%, 8.33% 98.33%, 10.00% 98.05%, 11.67% 97.75%, 13.33% 97.44%, 15.00% 97.12%, 16.67% 96.82%, 18.33% 96.52%, 20.00% 96.24%, 21.67% 96.00%, 23.33% 95.78%, 25.00% 95.60%, 26.67% 95.47%, 28.33% 95.38%, 30.00% 95.34%, 31.67% 95.34%, 33.33% 95.40%, 35.00% 95.51%, 36.67% 95.66%, 38.33% 95.85%, 40.00% 96.07%, 41.67% 96.33%, 43.33% 96.62%, 45.00% 96.92%, 46.67% 97.23%, 48.33% 97.54%, 50.00% 97.85%, 51.67% 98.15%, 53.33% 98.42%, 55.00% 98.67%, 56.67% 98.89%, 58.33% 99.07%, 60.00% 99.20%, 61.67% 99.29%, 63.33% 99.33%, 65.00% 99.32%, 66.67% 99.27%, 68.33% 99.16%, 70.00% 99.01%, 71.67% 98.82%, 73.33% 98.59%, 75.00% 98.33%, 76.67% 98.05%, 78.33% 97.75%, 80.00% 97.44%, 81.67% 97.12%, 83.33% 96.82%, 85.00% 96.52%, 86.67% 96.24%, 88.33% 96.00%, 90.00% 95.78%, 91.67% 95.60%, 93.33% 95.47%, 95.00% 95.38%, 96.67% 95.34%, 98.33% 95.34%, 100.00% 95.40%);">
        <div class="flex items-center size-full backdrop-blur-xs bg-orange-950/40">
            <div class="max-w-7xl mx-auto grid lg:grid-cols-5 gap-15 px-5 lg:px-0 lg:items-center">
                <div class="col-span-3 flex flex-col gap-y-10">
                    <h1
                        class="text-4xl uppercase text-center lg:text-left lg:normal-case lg:text-6xl text-white font-bold drop-shadow-lg">
                        Ідеальна <span class="text-tryit-orange font-black">чистота</span> без зайвих турбот!
                    </h1>
                    <div class="text-white text-xl text-center lg:text-left lg:text-2xl">
                        Шукаєте надійну клінінгову компанію? Ми подбаємо про чистоту вашого офісу, виробництва чи
                        будинку на найвищому рівні!
                    </div>
                    <div class="flex flex-col lg:flex-row gap-5 mx-auto lg:mx-0">
                        <a href="#services">
                            <x-button class="py-4 px-5 uppercase">Ознайомитись з послугами</x-button>
                        </a>
                        <a href="#top">
                            <x-button class="py-4 px-5 uppercase">Переглянути товари</x-button>
                        </a>
                    </div>
                </div>
                <div class="hidden lg:block col-span-2 bg-white/90 rounded-xl w-full p-10">
                    @livewire('order')
                </div>
            </div>
        </div>
        <a href="#top"
            class="absolute bottom-16 left-1/2 -translate-x-1/2 cursor-pointer size-12 flex items-center justify-center rounded-full">
            <x-lucide-move-down class="size-6 text-white animate-bounce" />
        </a>
    </div>
@endsection

@section('content')
    <x-section class="bg-tryit-cream/20" id="top">
        {{-- <x-slot:caption>
            Три кроки до чистоти
        </x-slot> --}}

        <div class="grid lg:grid-cols-3 gap-10">
            <div class="flex flex-col gap-y-5">
                <div
                    class="rounded-full flex items-center justify-center mx-auto bg-tryit-orange/5 border-2 border-dashed border-tryit-orange size-28">
                    <x-icons.main-grade />
                </div>
                <div class="text-2xl text-center font-black uppercase">Замовлення</div>
                <div class="text-center">
                    Створення замовлення відбувається через просту форму. Ви вибираєте потрібні товари та послуги, після
                    чого підтверджуєте свою заявку.
                </div>
            </div>

            <div class="flex flex-col gap-y-5">
                <div
                    class="rounded-full flex items-center justify-center mx-auto bg-tryit-orange/5 border-2 border-dashed border-tryit-orange size-28">
                    <x-icons.main-price />
                </div>
                <div class="text-2xl text-center font-black uppercase">Оцінка</div>
                <div class="text-center">
                    Після отримання замовлення здійснюється оцінка вартості, враховуючи всі деталі. Це дозволяє визначити
                    кінцеву суму для оплати.
                </div>
            </div>

            <div class="flex flex-col gap-y-5">
                <div
                    class="rounded-full flex items-center justify-center mx-auto bg-tryit-orange/5 border-2 border-dashed border-tryit-orange size-28">
                    <x-icons.main-work />
                </div>
                <div class="text-2xl text-center font-black uppercase">Виконання</div>
                <div class="text-center">
                    Після підтвердження замовлення ми приступаємо до його виконання. Усі етапи виконання проходять згідно з
                    планом та без затримок.
                </div>
            </div>
        </div>
    </x-section>

    <x-section>
        <x-slot:caption>
            <div id="services" class="snap-start scroll-mt-40">Наші послуги</div>
        </x-slot>
        <div class="max-w-5xl mx-auto flex flex-col gap-y-20">
            <x-cards.service orientation="left" link="services.myttia-fasadu-ta-vikon-na-vysoti"
                image="https://picsum.photos/500/500">
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
                image="https://picsum.photos/500/500">
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
                image="https://picsum.photos/500/500">
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
                    <img src="{{ Vite::asset('resources/images/cleaning-6.png') }}"
                        class="w-24 opacity-5 absolute right-0 bottom-0" alt="">
                </x-slot>
            </x-cards.service>

            <x-cards.service orientation="left" link="services.promyslovyi-alpinizm" image="https://picsum.photos/500/500">
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

    <x-section>
        <x-slot:caption>
            <div id="services" class="snap-start scroll-mt-40">Товари</div>
        </x-slot>

        <x-cards.product>
            <x-slot:name>
                name of product
            </x-slot>
            <x-slot:description>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam, totam? Praesentium dolore eius
                cupiditate quos harum illum labore, optio quisquam, enim delectus nemo architecto, et obcaecati aperiam
                exercitationem iusto numquam?
            </x-slot>
        </x-cards.product>
    </x-section>
@endsection
