@extends('layouts.base')

@section('header')
    <div class="bg-cover bg-center h-dvh"
        style="clip-path: polygon(100% 0%, 0% 0% , 0.00% 99.27%, 1.67% 99.16%, 3.33% 99.01%, 5.00% 98.82%, 6.67% 98.59%, 8.33% 98.33%, 10.00% 98.05%, 11.67% 97.75%, 13.33% 97.44%, 15.00% 97.12%, 16.67% 96.82%, 18.33% 96.52%, 20.00% 96.24%, 21.67% 96.00%, 23.33% 95.78%, 25.00% 95.60%, 26.67% 95.47%, 28.33% 95.38%, 30.00% 95.34%, 31.67% 95.34%, 33.33% 95.40%, 35.00% 95.51%, 36.67% 95.66%, 38.33% 95.85%, 40.00% 96.07%, 41.67% 96.33%, 43.33% 96.62%, 45.00% 96.92%, 46.67% 97.23%, 48.33% 97.54%, 50.00% 97.85%, 51.67% 98.15%, 53.33% 98.42%, 55.00% 98.67%, 56.67% 98.89%, 58.33% 99.07%, 60.00% 99.20%, 61.67% 99.29%, 63.33% 99.33%, 65.00% 99.32%, 66.67% 99.27%, 68.33% 99.16%, 70.00% 99.01%, 71.67% 98.82%, 73.33% 98.59%, 75.00% 98.33%, 76.67% 98.05%, 78.33% 97.75%, 80.00% 97.44%, 81.67% 97.12%, 83.33% 96.82%, 85.00% 96.52%, 86.67% 96.24%, 88.33% 96.00%, 90.00% 95.78%, 91.67% 95.60%, 93.33% 95.47%, 95.00% 95.38%, 96.67% 95.34%, 98.33% 95.34%, 100.00% 95.40%);background-image: url('{{ Vite::asset('resources/images/header.webp') }}');">
        <div class="flex items-center size-full backdrop-blur-xs bg-orange-950/40">
            <div class="max-w-xl xl:max-w-7xl mx-auto grid xl:grid-cols-5 gap-15 px-5 xl:px-0 xl:items-center">
                <div class="col-span-3 flex flex-col gap-y-10">
                    <h1 class="text-3xl uppercase text-center xl:text-left lx:normal-case xl:text-5xl text-white font-bold drop-shadow-lg animate-in duration-500"
                        x-intersect="$el.classList.add('xl:slide-in-from-left', 'zoom-in')">
                        <span class="text-tryit-orange font-black">Чистота</span>, яку варто спробувати
                        <span class="text-tryit-orange font-black">сьогодні</span>!
                    </h1>
                    <div class="text-white text-xl text-center xl:text-left lg:text-2xl animate-in duration-750"
                        x-intersect="$el.classList.add('xl:slide-in-from-left', 'zoom-in')">
                        Шукаєте надійну клінінгову компанію? Ми подбаємо про чистоту вашого офісу, виробництва чи
                        будинку на найвищому рівні!
                    </div>
                    <div class="flex flex-col lg:flex-row gap-5 mx-auto xl:mx-0">
                        <a href="#services" class="relative inline-block group animate-in duration-1000"
                            x-intersect="$el.classList.add('xl:slide-in-from-left', 'zoom-in')">
                            <span
                                class="absolute inset-0 animate-ping bg-tryit-green opacity-75 scale-75 rounded-lg group-hover:hidden"></span>
                            <x-button class="relative py-4 px-5 uppercase text-white rounded-lg"
                                aria-label="Перейти до розділу з нашими послугами">
                                Ознайомитись з послугами
                            </x-button>
                        </a>
                        {{-- <a href="#top">
                            <x-button class="py-4 px-5 uppercase">Переглянути товари</x-button>
                        </a> --}}
                    </div>
                </div>
                <div class="hidden xl:block col-span-2 bg-white/90 rounded-xl w-full p-10 opacity-0 scale-75 duration-500"
                    x-intersect="$el.classList.add('opacity-100', 'scale-100')">
                    @livewire('order')
                </div>
            </div>
        </div>
        <a href="#top"
            class="absolute bottom-16 left-1/2 -translate-x-1/2 cursor-pointer size-12 flex items-center justify-center rounded-full"
            aria-label="Прокрутити сторінку нижче">
            <x-lucide-move-down class="size-6 text-white animate-bounce" />
        </a>
    </div>
@endsection

@section('content')
    <section class="bg-tryit-cream/20 border-b border-tryit-orange/5 -mt-20 pt-32 pb-15 px-5" id="top">
        <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-y-15 gap-x-10 xl:gap-x-20">
            <div class="flex flex-col">
                <div class="relative">
                    <h2 class="text-center text-xl mb-5 font-black text-gray-700 tracking-wide uppercase drop-shadow-lg">
                        Про нас
                    </h2>
                    <div class="mb-5 text-gray-900">Наша клінінгова компанія – це <x-marker>професійний</x-marker>сервіс з
                        прибирання, який допомагає підтримувати чистоту у вашому домі чи офісі. Ми використовуємо
                        <x-marker>сучасні методи</x-marker>, екологічні засоби та відповідально ставимося до кожного
                        замовлення.
                    </div>

                    <div class="mb-10">Ми пропонуємо широкий спектр послуг: від генерального
                        <x-marker>прибирання</x-marker> до спеціалізованого <x-marker>догляду</x-marker> за меблями та
                        покриттями. Наша мета – зробити ваш простір ідеально чистим та комфортним.
                    </div>
                    <img src="{{ Vite::asset('resources/images/cleaning.png') }}"
                        class="w-24 opacity-5 absolute right-0 bottom-0" alt="">
                </div>
                <div>@livewire('callback')</div>
            </div>
            <div class="grid lg:flex-col gap-5">
                <h2 class="text-center text-xl mb-2.5 font-black text-gray-700 tracking-wide uppercase drop-shadow-lg">
                    Три кроки до чистоти
                </h2>

                <ol class="relative lg:border-s lg:border-dashed lg:border-tryit-orange/30">
                    <li class="mb-5 lg:ms-10 flex flex-col">
                        <span
                            class="lg:absolute flex items-center justify-center size-8 bg-tryit-orange -start-3.5 ring-8 ring-tryit-orange rounded-full mb-5">
                            <x-lucide-file-text class="size-10 lg:size-6 stroke-white" stroke-width="1.5" />
                        </span>
                        <span class="flex items-center lg:mb-2.5 text-lg font-semibold text-gray-900 uppercase">
                            1. Замовлення послуги
                        </span>
                        <p class="mb-5 text-base font-medium text-gray-700">
                            Створення замовлення відбувається через просту форму. Ви вибираєте потрібні товари та послуги,
                            після чого підтверджуєте свою заявку.</p>
                    </li>

                    <li class="mb-5 lg:ms-10 flex flex-col">
                        <span
                            class="lg:absolute flex items-center justify-center size-8 bg-tryit-orange -start-3.5 ring-8 ring-tryit-orange rounded-full mb-5">
                            <x-lucide-circle-dollar-sign class="size-10 lg:size-6 stroke-white" stroke-width="1.5" />
                        </span>
                        <span class="flex items-center lg:mb-2.5 text-lg font-semibold text-gray-900 uppercase">
                            2. Оцінка вартості
                        </span>
                        <p class="mb-5 text-base font-medium text-gray-700">Після отримання замовлення здійснюється оцінка
                            вартості, враховуючи всі деталі. Це дозволяє визначити кінцеву суму для оплати.</p>
                    </li>

                    <li class="lg:mb-5 lg:ms-10 flex flex-col">
                        <span
                            class="lg:absolute flex items-center justify-center size-8 bg-tryit-orange -start-3.5 ring-8 ring-tryit-orange rounded-full mb-5">
                            <x-lucide-hand-platter class="size-10 lg:size-6 stroke-white" stroke-width="1.5" />
                        </span>
                        <span class="flex items-center lg:mb-2.5 text-lg font-semibold text-gray-900 uppercase">
                            3. Виконання роботи
                        </span>
                        <p class="mb-5 text-base font-medium text-gray-700">Після підтвердження замовлення ми приступаємо до
                            його виконання. Усі етапи виконання проходять згідно з планом та без затримок.</p>
                    </li>
                </ol>
            </div>
        </div>
    </section>

    <x-section>
        <x-slot:caption>
            <div id="services" class="snap-start scroll-mt-15">Наші послуги</div>
        </x-slot>
        <div class="max-w-7xl mx-auto flex flex-col gap-y-20">
            <x-cards.service orientation="left" link="services.myttia-fasadu-ta-vikon-na-vysoti"
                images="{{ Vite::asset('resources/images/service-1.jpg') }}">
                <x-slot:name>
                    Миття фасадів та вікон на висоті <i>(WFP-система)</i>
                </x-slot>
                <x-slot:description>
                    <p>Забезпечимо ідеальну чистоту вікон та фасадів безпечно та ефективно! Використовуємо сучасну
                        WFP-систему, яка дозволяє мити скло без розводів і слідів.</p>
                    <p>Висотні роботи виконують професійні промислові альпіністи.
                        Ваші вікна засяють, а будівля виглядатиме доглянутою!</p>
                </x-slot>
            </x-cards.service>

            <x-cards.service orientation="right" link="services.myika-ta-ochyshchennia-soniachnykh-panelei"
                images="{{ Vite::asset('resources/images/service-2.jpg') }}">
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
                images="{{ Vite::asset('resources/images/service-3.jpg') }}">
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
                images="{{ Vite::asset('resources/images/service-4.jpg') }}">
                <x-slot:name>
                    Генеральне прибирання цехів та виробництва
                </x-slot>
                <x-slot:description>
                    <p><b>Чистота на виробництві</b> – це не лише порядок, а й безпека! Проводимо комплексне прибирання
                        цехів, складів та виробничих приміщень.</p>
                    <p>Видаляємо пил, бруд, масло та інші забруднення з обладнання та підлоги.
                        Забезпечте комфортні умови для роботи з нашими клінінговими рішеннями!</p>
                </x-slot>
            </x-cards.service>

            <x-cards.service orientation="left" link="services.khimchystka"
                images="{{ Vite::asset('resources/images/service-5.jpg') }}">
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
                images="{{ Vite::asset('resources/images/service-6.jpg') }}">
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
                images="{{ Vite::asset('resources/images/service-7.jpg') }}">
                <x-slot:name>
                    Промисловий альпінізм
                </x-slot>
                <x-slot:description>
                    <p><b>Будь-які висотні роботи</b> – професійно та безпечно! Наші фахівці виконують миття вікон, фасадів,
                        монтажні та ремонтні роботи на висоті.</p>
                    <p>Використовуємо сертифіковане спорядження та перевірені методи. Довірте
                        складні завдання справжнім експертам!</p>
                </x-slot>
            </x-cards.service>
        </div>
    </x-section>
@endsection
