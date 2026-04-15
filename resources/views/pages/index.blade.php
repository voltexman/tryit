<?php
use function Laravel\Folio\name;
name('main');
?>

@extends('layouts.base')

@section('header')
    <div class="bg-cover bg-center h-dvh overflow-hidden"
        style="background-image: url('{{ Vite::asset('resources/images/header.webp') }}');">
        <div class="flex items-center size-full backdrop-blur-xs bg-orange-950/40">
            <div class="max-w-xl xl:max-w-6xl mx-auto grid xl:grid-cols-5 gap-5 px-5 xl:px-0 xl:items-center">
                <div class="col-span-3 flex flex-col gap-y-10">
                    <h1 class="font-[Oswald] text-3xl uppercase text-center xl:text-left lx:normal-case xl:text-6xl text-white font-bold drop-shadow-lg animate-in duration-500"
                        x-intersect="$el.classList.add('xl:slide-in-from-left', 'zoom-in')">
                        <span class="text-tryit-orange font-black">Чистота</span>, яку варто <br> спробувати
                        <span class="text-tryit-orange font-black">сьогодні</span>!
                    </h1>
                    <div class="text-white text-xl text-center xl:text-left lg:text-xl animate-in duration-750"
                        x-intersect="$el.classList.add('xl:slide-in-from-left', 'zoom-in')">
                        Шукаєте надійну клінінгову компанію? Ми подбаємо про чистоту вашого офісу, виробництва чи
                        будинку на найвищому рівні!
                    </div>
                    <div class="flex flex-col lg:flex-row gap-5 mx-auto xl:mx-0">
                        <a href="#services" class="relative inline-block group animate-in duration-1000"
                            x-intersect="$el.classList.add('xl:slide-in-from-left', 'zoom-in')">
                            <span
                                class="absolute inset-0 animate-ping bg-tryit-green opacity-75 scale-75 rounded-full group-hover:hidden"></span>
                            <x-button variant="green" size="lg" icon class="relative uppercas"
                                aria-label="Перейти до розділу з нашими послугами">
                                Ознайомитись з послугами
                            </x-button>
                        </a>
                    </div>
                </div>

                <div class="hidden xl:block col-span-2 bg-stone-800/90 backdrop-blur-xl p-10 rounded-3xl"
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
    <section class="py-20 px-5 lg:px-10 relative">
        <div class="md:max-w-2xl lg:max-w-5xl mx-auto flex flex-col">
            <x-section.caption class="justify-center text-tryit-dark">Про нашу компанію</x-section.caption>
            <x-section.title class="text-center text-tryit-dark">
                <span class="text-tryit-orange">Чистота</span>, що <span class="text-tryit-green">говорить</span>
                <br> сама <span class="text-tryit-orange">за себе</span>.
            </x-section.title>
            <div class="lg:max-w-3xl mx-auto text-lg text-center text-gray-900 mt-10">
                Наша клінінгова компанія – це професійний сервіс з прибирання, який допомагає підтримувати чистоту у
                вашому домі чи офісі. Ми використовуємо сучасні методи, екологічні засоби та відповідально ставимося
                до кожного замовлення.
            </div>

            <div class="max-w-md lg:w-full mx-auto flex flex-col lg:flex-row gap-y-10 lg:gap-y-5 mt-10">
                <div class="flex flex-col items-center gap-5 relative lg:w-3/4">
                    <div
                        class="absolute lg:relative right-0 top-0 -z-10 opacity-10 lg:opacity-100 flex text-tryit-green font-bold font-[Oswald] text-8xl lg:text-5xl">
                        01
                    </div>
                    <div class="flex flex-col items-center gap-y-1.5">
                        <div class="flex items-center text-lg font-medium font-[Oswald] uppercase">
                            Замовлення послуги
                        </div>
                        <div class="text-gray-600 text-pretty lg:text-balance text-center">
                            Зателефонуйте або створіть замовлення через форму. Оберіть потрібні товари чи послуги та
                            узгодьте замовлення з менеджером.
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-center gap-5 relative lg:w-3/4">
                    <div
                        class="absolute lg:relative right-0 top-0 -z-10 opacity-10 lg:opacity-100 flex text-tryit-green font-bold font-[Oswald] text-8xl lg:text-5xl">
                        02
                    </div>
                    <div class="flex flex-col items-center gap-y-1.5">
                        <div class="flex items-center text-lg font-medium font-[Oswald] uppercase">
                            Оцінка вартості
                        </div>
                        <div class="text-gray-600 text-pretty lg:text-balance text-center">
                            Уточнюємо площу, тип приміщення, забруднення та додаткові послуги. Це дозволяє нам точніше
                            визначити кінцеву суму.
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-center gap-5 relative lg:w-3/4">
                    <div
                        class="absolute lg:relative right-0 top-0 -z-10 opacity-10 lg:opacity-100 flex text-tryit-green font-bold font-[Oswald] text-8xl lg:text-5xl">
                        03
                    </div>
                    <div class="flex flex-col items-center gap-y-1.5">
                        <div class="flex items-center text-lg font-medium font-[Oswald] uppercase">
                            Виконання роботи
                        </div>
                        <div class="text-gray-600 text-pretty lg:text-balance text-center">
                            У погоджений день наша команда прибуває з усім необхідним обладнанням і засобами. Працюємо,
                            враховуючи усі ваші побажання
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ Vite::asset('resources/images/h1-agency.png') }}"
            class="absolute right-0 bottom-10 transform scale-x-[-1] opacity-25" alt="">
    </section>

    <section class="w-full pt-20 relative overflow-hidden bg-center bg-cover bg-no-repeat bg-typography">
        <div
            class="md:max-w-2xl lg:max-w-6xl mx-auto grid lg:grid-cols-3 gap-y-10 gap-x-20 px-5 lg:px-0 relative z-10 pb-100 lg:pb-40">
            <img src="{{ Vite::asset('resources/images/h1-cleaning-team.png') }}"
                class="absolute bottom-0 left-1/2 -translate-x-1/2 w-xs lg:w-md drop-shadow-lg" alt="">
            <div class="lg:col-span-2 relative z-10">
                <x-section.caption class="text-white">Якісний сервіс для вас</x-section.caption>
                <x-section.title class="text-white">
                    Ми <span class="text-tryit-green">знаємо</span>, як <br class="md:hidden"> виглядає
                    <br class="hidden md:block"> <span class="text-tryit-green">порядок</span> <br class="md:hidden">
                    та чистота
                </x-section.title>
                <div class="text-white my-10">
                    Ми пропонуємо широкий спектр послуг: від генерального прибирання до спеціалізованого догляду за
                    меблями та покриттями. Наша мета – зробити ваш простір ідеально чистим та комфортним.
                </div>
                <div class="flex items-center gap-5">
                    <x-lucide-phone-call class="size-8 text-white" stroke-width="1.5" />
                    <div class="flex flex-col">
                        <span class="text-sm font-medium text-white">Потрібна допомога?</span>
                        <span class="font-[Oswald] font-bold text-2xl text-white -tracking-wide">
                            +380 (97) 877-866-7
                        </span>
                    </div>
                </div>
            </div>

            <div class="flex lg:flex-col justify-between gap-y-10 gap-x-2.5 relative">
                <div class="flex flex-col gap-y-2.5">
                    <div class="text-white text-5xl lg:text-7xl font-black font-[Oswald]">12р</div>
                    <div class="flex items-center text-lg font-[Oswald] font-semibold text-white uppercase">
                        На ринку
                    </div>
                    <div class="hidden lg:block text-gray-300">
                        Створення замовлення відбувається через просту форму. Ви вибираєте потрібні товари та
                        послуги.
                    </div>
                </div>

                <div class="flex flex-col gap-y-2.5">
                    <div class="text-white text-5xl lg:text-7xl font-black font-[Oswald]">10+</div>
                    <div class="flex items-center text-lg font-semibold font-[Oswald] text-white uppercase">
                        Послуг
                    </div>
                    <div class="hidden lg:block text-gray-300">Після отримання замовлення здійснюється оцінка вартості,
                        враховуючи всі деталі.
                    </div>
                </div>

                <div class="flex flex-col gap-y-2.5">
                    <div class="text-white text-5xl lg:text-7xl font-black font-[Oswald]">250+</div>
                    <div class="flex items-center text-lg font-semibold font-[Oswald] text-white uppercase">
                        Клієнтів
                    </div>
                    <div class="hidden lg:block text-gray-300">Після підтвердження замовлення ми приступаємо до
                        його виконання. Усі етапи виконання проходять згідно.
                    </div>
                </div>
            </div>
        </div>

        <!-- декоративний текст -->
        <div class="absolute left-1/2 -translate-x-1/2 bottom-0 lg:-bottom-20 mask-b-from-25% z-0">
            <div
                class="font-[Oswald] leading-none text-[clamp(6rem,32vw,32rem)] text-center font-black uppercase opacity-60">
                <span class="text-tryit-orange">try</span><span class="text-tryit-green">it</span>
            </div>
        </div>
    </section>

    <section
        class="relative py-20 before:absolute before:inset-0 before:bg-[url('https://demo2.pavothemes.com/cetro/wp-content/uploads/2025/07/h2-bacground01.jpg')] before:grayscale before:opacity-20 lg:before:opacity-25 before:bg-cover before:bg-right lg:before:bg-center before:content-[''] after:absolute after:inset-0 after:bg-white/15 after:content-['']">
        <div class="max-w-6xl mx-auto px-5 lg:px-0 relative z-10">
            <x-section.caption class="text-tryit-dark">Популярні запитання клієнтів</x-section.caption>
            <div class="flex flex-col md:flex-row gap-10 w-full mb-10">
                <x-section.title class="text-tryit-dark">
                    У вас є <span class="text-tryit-green">запитання, <br> у нас</span> є відповіді.
                </x-section.title>

                <div class="flex md:justify-end md:items-end w-full">
                    <x-button variant="default" size="md" icon link="faq">Переглянути всі питання</x-button>
                </div>
            </div>

            <div class="grid lg:grid-cols-2 gap-10">
                <!-- Slider -->
                <div data-hs-carousel='{
                    "loadingClasses": "opacity-0",
                    "dotsItemClasses": "mb-2.5 hs-carousel-active:bg-tryit-orange hs-carousel-active:border-tryit-green size-3 border-2 border-gray-200 rounded-full cursor-pointer"
                }'
                    class="order-2 lg:order-1 relative">
                    <div class="hs-carousel rounded-3xl shadow-xl relative overflow-hidden w-full min-h-96 bg-white">
                        <div
                            class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap transition-transform duration-700 opacity-0">
                            <div class="hs-carousel-slide">
                                <img src="https://demo2.pavothemes.com/cetro/wp-content/uploads/2025/07/h1-happy-smiling.jpg"
                                    class="rounded-3xl shadow-xl size-full object-cover object-center" alt="">
                            </div>
                            <div class="hs-carousel-slide">
                                <img src="https://demo2.pavothemes.com/cetro/wp-content/uploads/2025/07/blog-12.jpg"
                                    class="rounded-3xl shadow-xl size-full object-cover object-center" alt="">
                            </div>
                            <div class="hs-carousel-slide">
                                <img src="https://demo2.pavothemes.com/cetro/wp-content/uploads/2025/07/blog-8.jpg"
                                    class="rounded-3xl shadow-xl size-full object-cover object-center" alt="">
                            </div>
                            <div class="hs-carousel-slide">
                                <img src="https://demo2.pavothemes.com/cetro/wp-content/uploads/2025/07/blog-5.jpg"
                                    class="rounded-3xl shadow-xl size-full object-cover object-center" alt="">
                            </div>
                            <div class="hs-carousel-slide">
                                <img src="https://demo2.pavothemes.com/cetro/wp-content/uploads/2025/07/blog-2.jpg"
                                    class="rounded-3xl shadow-xl size-full object-cover object-center" alt="">
                            </div>
                        </div>
                    </div>

                    <button type="button"
                        class="hs-carousel-prev hs-carousel-disabled:opacity-50 hs-carousel-disabled:cursor-default absolute top-1/2 start-2 inline-flex justify-center items-center size-10 bg-white border border-gray-100 text-gray-800 rounded-full shadow-2xs hover:bg-gray-100 -translate-y-1/2 focus:outline-hidden">
                        <span class="text-2xl" aria-hidden="true">
                            <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m15 18-6-6 6-6"></path>
                            </svg>
                        </span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <button type="button"
                        class="hs-carousel-next hs-carousel-disabled:opacity-50 hs-carousel-disabled:cursor-default absolute top-1/2 end-2 inline-flex justify-center items-center size-10 bg-white border border-gray-100 text-gray-800 rounded-full shadow-2xs hover:bg-gray-100 -translate-y-1/2 focus:outline-hidden">
                        <span class="sr-only">Next</span>
                        <span class="text-2xl" aria-hidden="true">
                            <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m9 18 6-6-6-6"></path>
                            </svg>
                        </span>
                    </button>

                    <div class="hs-carousel-pagination flex justify-center absolute bottom-3 start-0 end-0 gap-x-2"></div>
                </div>
                <!-- End Slider -->

                <x-accordion default-selected="1" class="rounded-3xl shadow-lg bg-white order-1 lg:order-2">
                    <x-accordion.item index="1">
                        <x-accordion.trigger index="1">
                            Чи потрібно мені бути вдома під час прибирання?
                        </x-accordion.trigger>
                        <x-accordion.content index="1">
                            Ні, присутність власника не обов’язкова. Наші співробітники проходять перевірку та працюють під
                            контролем менеджера. Ви можете залишити ключ або впустити команду на початку прибирання — і
                            повернутись уже в чисту оселю.
                        </x-accordion.content>
                    </x-accordion.item>
                    <x-accordion.item index="2">
                        <x-accordion.trigger index="2">
                            Які засоби для прибирання ви використовуєте?
                        </x-accordion.trigger>
                        <x-accordion.content index="2">
                            Ми застосовуємо лише професійні та безпечні мийні засоби, що не шкодять людям, тваринам і
                            поверхням. За бажанням клієнта можемо використовувати екологічні <i>(eco-friendly)</i> засоби.
                        </x-accordion.content>
                    </x-accordion.item>
                    <x-accordion.item index="3">
                        <x-accordion.trigger index="3">
                            Скільки часу займає прибирання?
                        </x-accordion.trigger>
                        <x-accordion.content index="3">
                            Залежить від типу послуги та площі приміщення.
                            Квартира до 60 м² — приблизно 2–3 години.
                            Генеральне прибирання будинку — 4–6 годин.
                            Після ремонту — від 5 годин і більше.
                            Точний час називаємо після оцінки об’єкта.
                        </x-accordion.content>
                    </x-accordion.item>
                    <x-accordion.item index="4">
                        <x-accordion.trigger index="4">
                            Чи можна замовити прибирання на конкретну дату й час?
                        </x-accordion.trigger>
                        <x-accordion.content index="4">
                            Так, звісно. Ми підлаштовуємося під ваш графік. Бажано зробити замовлення за 1–2 дні наперед,
                            але іноді можливі термінові виїзди в той самий день.
                        </x-accordion.content>
                    </x-accordion.item>
                </x-accordion>
            </div>
        </div>
    </section>

    <x-service default-value="{{ App\Enums\ServiceEnum::WINDOW_CLEANING }}" />

    <x-section class="overflow-hidden" :background="Vite::asset('resources/images/section-background-04.jpg')">
        <x-section.caption class="text-tryit-dark">Найкращі відгуки клієнтів</x-section.caption>
        <div class="flex flex-col md:flex-row gap-10">
            <x-section.title class="text-tryit-dark">
                Нам <span class="text-tryit-green"> довіряють<br> і нас </span>рекомендують.
            </x-section.title>
            <div class="flex md:justify-end md:items-end w-full">
                <a href="{{ route('feedback') }}">
                    <x-button variant="default" size="md" icon>Залишити відгук</x-button>
                </a>
            </div>
        </div>

        <div class="mt-10">
            <x-testimonials />
        </div>
    </x-section>

    <section
        class="relative py-20 lg:pb-70 z-0 bg-[url('https://demo2.pavothemes.com/cetro/wp-content/uploads/2025/07/h1-background02.jpg')] bg-cover bg-center overflow-hidden">
        <div class="absolute inset-0 z-10 bg-neutral-950/50"></div>

        <div class="max-w-6xl size-full mx-auto grid lg:grid-cols-2 gap-10 px-5 relative z-10">
            <div class="flex justify-center items-center ">
                <a href="{{ route('gallery') }}"
                    class="relative size-30 bg-gray-200 rounded-full flex justify-center items-center overflow-visible">
                    <span
                        class="absolute inline-flex size-20 animate-ping rounded-full bg-white opacity-90 -z-10 duration-1500"></span>
                    <x-lucide-images class="size-9 text-tryit-green-700" stroke-width="1.75" />
                </a>
            </div>
            <div class="flex flex-col gap-y-5 mb-20">
                <div
                    class="text-center lg:text-left text-4xl lg:text-7xl text-white lg:leading-18 font-[Oswald] text-nowrap -tracking-wide font-black text-shadow-lg capitalize">
                    Довіра, <span class="text-tryit-green">чистота</span>, <br>
                    досконалість <span class="text-tryit-orange"> <br> кожного дня</span>
                </div>
                <div class="hidden lg:block text-white uppercase font-semibold">Перегляньте нашу галерею</div>
            </div>
        </div>

        <!-- декоративний текст -->
        <div class="absolute left-1/2 -translate-x-1/2 bottom-0 lg:-bottom-20 mask-b-from-35 z-0">
            <div
                class="font-[Oswald] leading-none text-[clamp(6rem,30vw,30rem)] text-center font-black uppercase opacity-80">
                <span class="text-tryit-orange">try</span><span class="text-tryit-green">it</span>
            </div>
        </div>
    </section>

    <section class="py-20">
        <x-section.caption class="text-tryit-dark justify-center">Наші клієнти</x-section.caption>
        <x-section.title class="text-tryit-dark text-center">
            Клієнти, які <span class="text-tryit-green">обрали та<br>довірили</span> нам чистоту.
        </x-section.title>
        <x-marquee direction="left" :items="['Сільпо', 'Нова Пошта', 'Спортмастер', 'Ашан']" class="mt-10" />
        <x-marquee direction="right" :items="['Novus', 'Фора', 'АТБ', 'Еко-Маркет']" class="mt-5" />
        <x-marquee direction="left" :items="['Укрпошта', 'Comfy', 'Eldorado', 'Foxtrot', 'Цитрус', 'Алло']" class="mt-5" />
    </section>

    <section
        class="w-full py-20 bg-[url('https://demo2.pavothemes.com/cetro/wp-content/uploads/2025/07/h1-background03.jpg')] bg-cover bg-center relative">
        <div
            class="absolute inset-0 z-10 bg-linear-to-r from-neutral-950/90 to-transparent mask-r-from-20% backdrop-blur-sm">
        </div>

        <div class="max-w-6xl mx-auto flex flex-col px-5 lg:px-0 relative z-20">
            <x-section.caption class="text-white">Замовте дзвінок менеджера</x-section.caption>
            <x-section.title class="text-white">
                Замовте <span class="text-tryit-green">дзвінок</span> і ми <br> звяжемось
                <span class="text-tryit-green">з вами</span>
            </x-section.title>

            <div class="mt-10">
                @livewire('callback')
            </div>

            <div class="flex flex-col lg:flex-row gap-5 mt-10">
                <div class="flex items-center gap-2.5">
                    <x-lucide-phone-call class="size-8 stroke-white" stroke-width="1.5" />
                    <div class="flex flex-col">
                        <span class="text-sm font-medium text-white">Потрібна допомога?</span>
                        <span class="font-[Oswald] font-bold text-2xl text-white -tracking-wide">
                            +380 (97) 877-866-7
                        </span>
                    </div>
                </div>
                <div class="flex items-center gap-2.5">
                    <x-lucide-clock-4 class="size-8 stroke-white" stroke-width="1.5" />
                    <div class="flex flex-col">
                        <span class="text-sm font-medium text-white">Ми працюємо</span>
                        <span class="font-[Oswald] text-2xl font-bold text-white">24/7</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-section :background="Vite::asset('resources/images/section-background-04.jpg')">
        <x-section.caption class="text-tryit-dark">Наш блог</x-section.caption>
        <div class="flex flex-col md:flex-row gap-10">
            <x-section.title class="text-tryit-dark">
                Корисні <span class="text-tryit-green">для вас<br> поради</span> та статті.
            </x-section.title>
            <div class="flex md:justify-end md:items-end w-full">
                <a href="{{ route('posts') }}">
                    <x-button variant="default" size="md" icon>Переглянути статті</x-button>
                </a>
            </div>
        </div>

        <div class="grid lg:grid-cols-2 gap-10 mt-10">
            <x-latest-posts limit="4" />
        </div>
    </x-section>
@endsection
