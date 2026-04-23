<?php
use function Laravel\Folio\name;
name('main');
?>

@extends('layouts.base')

@section('header')
    <div class="bg-cover bg-center h-dvh" style="background-image: url('{{ Vite::asset('resources/images/header.webp') }}');">
        <div class="flex items-center justify-center size-full bg-slate-950/65 backdrop-blur-[1px]">
            <div class="max-w-4xl mx-auto flex flex-col items-center gap-y-8 px-5 text-center">
                <h1
                    class="font-display text-3xl md:text-6xl xl:text-7xl text-nowrap uppercase text-slate-100 font-black leading-tight drop-shadow-lg animate-in duration-700">
                    <span class="text-tryit-orange">Чистота</span>, яку варто<br>
                    спробувати <span class="text-tryit-orange">сьогодні</span>
                </h1>

                <div class="w-16 h-0.5 bg-tryit-orange/80 rounded-full"></div>

                <p class="text-white/80 text-lg md:text-xl xl:text-2xl font-light max-w-xl text-balance">
                    Шукаєте надійну клінінгову компанію?<br class="hidden md:block">
                    Ми подбаємо про чистоту вашого офісу, виробництва чи будинку на найвищому рівні
                </p>

                <a href="#services" class="relative inline-block group mt-4">
                    <button
                        class="bg-tryit-orange font-display relative py-4 px-10 uppercase text-white text-base tracking-widest rounded-full border border-white/20 hover:border-tryit-orange/50 hover:bg-tryit-orange/50 backdrop-blur-sm transition-all duration-300 cursor-pointer"
                        aria-label="Перейти до розділу з нашими послугами">
                        Наші послуги
                    </button>
                </a>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <section class="relative py-20 lg:py-30 bg-slate-50 overflow-hidden font-sans">
        <div class="max-w-5xl mx-auto px-5 relative">

            {{-- Subtle Background Image --}}
            <div class="absolute inset-0 opacity-30 pointer-events-none z-0">
                <img src="https://demo2.pavothemes.com/cetro/wp-content/uploads/2025/07/h1-asked.png"
                    class="size-full object-contain object-center grayscale-100 opacity-40" alt="">
            </div>

            <div class="relative z-20 text-center max-w-2xl mx-auto pt-10 pb-10">
                <x-section.badge class="mb-5">Ваш дім у надійних руках</x-section.badge>
                <h2 class="font-display text-4xl/10 md:text-6xl/12 font-black tracking-tight text-slate-800 text-balance">
                    Бо ми знаємо, як важливо
                    <span class="text-emerald-600 inline-block mt-2">бути в гармонії</span>
                    з вашим домом
                </h2>
                <p class="mt-8 text-lg md:text-xl text-slate-600 font-light leading-relaxed">
                    Ми об'єднуємо професіоналів та власників осель, щоб кожен момент вашого відпочинку проходив у
                    бездоганній чистоті.
                </p>

                <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-5">
                    <x-button size="lg">Замовити прибирання</x-button>
                    <x-button size="lg" color="orange">Наші послуги</x-button>
                </div>
            </div>

            <div class="absolute inset-0 z-10 pointer-events-none select-none">

                <div
                    class="absolute top-[5%] left-[2%] lg:left-[5%] animate-float transition-all duration-1000 hidden sm:block">
                    <div
                        class="flex items-center gap-3 bg-white/80 backdrop-blur-md p-2 rounded-full shadow-xl border border-white">
                        <img src="https://i.pravatar.cc/150?u=1"
                            class="w-12 h-12 lg:w-16 lg:h-16 rounded-full object-cover border-2 border-emerald-500">
                        <span class="pr-4 text-xs lg:text-sm font-medium text-slate-700">"Все блищить!"</span>
                    </div>
                </div>

                <div class="absolute top-[45%] -left-[2%] lg:left-[2%] animate-float [animation-delay:1s] hidden md:block">
                    <div class="flex flex-col items-end">
                        <div class="bg-slate-900 text-white text-[10px] px-2 py-1 rounded-md mb-2">Виконали вчасно</div>
                        <img src="https://i.pravatar.cc/150?u=2"
                            class="w-16 h-16 lg:w-20 lg:h-20 rounded-2xl rotate-6 object-cover shadow-2xl border-4 border-white">
                    </div>
                </div>

                <div class="absolute bottom-[10%] left-[8%] animate-float [animation-delay:2s] hidden lg:block">
                    <div class="relative">
                        <img src="https://i.pravatar.cc/150?u=3"
                            class="w-14 h-14 rounded-full border-4 border-white shadow-lg grayscale hover:grayscale-0 transition-all duration-500">
                        <div
                            class="absolute -bottom-2 -right-10 bg-white px-3 py-1 rounded-full shadow-sm border border-slate-100 text-nowrap text-[11px] font-semibold text-emerald-600 italic">
                            #Чисто #Швидко
                        </div>
                    </div>
                </div>

                <div
                    class="absolute top-[10%] right-[2%] lg:right-[8%] animate-float [animation-delay:1.5s] hidden sm:block">
                    <div class="flex items-center flex-row-reverse gap-3">
                        <div class="relative">
                            <img src="https://i.pravatar.cc/150?u=4"
                                class="w-12 h-12 lg:w-16 lg:h-16 rounded-full border-4 border-white shadow-xl">
                            <span
                                class="absolute top-0 right-0 w-4 h-4 bg-green-500 border-2 border-white rounded-full"></span>
                        </div>
                        <div
                            class="bg-white/90 backdrop-blur-sm px-4 py-2 rounded-2xl shadow-lg border border-white text-xs font-medium text-slate-600">
                            Вже їдемо до вас! 🚗
                        </div>
                    </div>
                </div>

                <div
                    class="absolute top-[50%] right-[0%] lg:right-[4%] animate-float [animation-delay:0.5s] hidden md:block">
                    <div class="group relative">
                        <img src="https://i.pravatar.cc/150?u=5"
                            class="w-16 h-16 lg:w-24 lg:h-24 rounded-full border-4 border-white shadow-2xl transition-transform group-hover:scale-110">
                        <div
                            class="absolute -top-4 -left-6 bg-emerald-600 text-white text-[10px] px-3 py-1 rounded-full shadow-lg font-bold">
                            Безпечна хімія
                        </div>
                    </div>
                </div>

                <div class="absolute bottom-[15%] right-[10%] animate-float [animation-delay:2.5s] hidden lg:block">
                    <div
                        class="flex items-center gap-2 bg-white/40 backdrop-blur-[2px] p-2 rounded-full border border-white/50">
                        <img src="https://i.pravatar.cc/150?u=6"
                            class="w-12 h-12 rounded-full border-2 border-white shadow-md">
                        <span class="text-[11px] text-slate-500 font-medium italic pr-2">"Всі види робіт!"</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full z-0">
            <div
                class="absolute top-[10%] left-[15%] size-64 bg-emerald-50 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-pulse">
            </div>
            <div
                class="absolute bottom-[10%] right-[15%] size-80 bg-blue-50 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-pulse [animation-delay:2s]">
            </div>
        </div>
    </section>

    <!-- Секція Послуг -->
    <section x-data="{
        selected: 0,
        services: {{ json_encode(
            collect(App\Enums\ServiceEnum::cases())->map(
                fn($service) => [
                    'title' => $service->getTitle(),
                    'description' => $service->getDescription(),
                    'image' => Vite::asset('resources/images/' . $service->getImage()),
                    'link' => route($service->getLink()),
                ],
            ),
        ) }}
    }" class="relative w-full flex items-center overflow-hidden bg-gray-900 lg:min-h-125">
        <!-- Фонове зображення з плавним переходом -->
        <template x-for="(service, index) in services" :key="index">
            <div x-show="selected === index" x-transition:enter="transition opacity duration-700 ease-in-out"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                x-transition:leave="transition opacity duration-700 ease-in-out" x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0" class="absolute inset-0 z-0">
                <img :src="service.image" :alt="service.title" class="w-full h-full object-cover">
                <div
                    class="absolute inset-0 bg-slate-900/70 lg:bg-linear-to-l lg:from-slate-900/70 lg:via-slate-900/30 lg:to-slate-900/20">
                </div>
            </div>
        </template>

        <!-- Контент -->
        <div
            class="max-w-6xl w-full mx-auto px-5 lg:px-4 relative z-10 py-12 lg:py-16 grid grid-cols-1 lg:grid-cols-[1fr_350px] gap-8 lg:gap-0">

            <!-- ЛІВА ЧАСТИНА: Заголовок та опис (видимо на ПК) -->
            <div class="hidden lg:flex flex-col justify-center text-white">
                <div class="space-y-8">
                    <h2 class="font-display text-5xl xl:text-6xl font-black tracking-wide uppercase leading-tight">
                        Наші<br><span class="text-emerald-500">послуги</span>
                    </h2>

                    <template x-for="(service, index) in services" :key="index">
                        <div x-show="selected === index" x-transition:enter="transition opacity duration-500"
                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                            x-transition:leave="transition opacity duration-300 absolute"
                            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="space-y-6">

                            <p class="text-lg text-white/90 leading-relaxed max-w-xl font-light">
                                <span x-text="service.description"></span>
                            </p>

                            <div class="flex flex-row gap-5 pt-2">
                                <a :href="service.link"
                                    class="px-6 py-3 text-base font-display backdrop-blur-xs bg-slate-500/20 hover:bg-slate-600/20 border border-slate-500/20 text-slate-200/80 hover:text-slate-200 font-semibold rounded-full transition-all duration-300 text-center">
                                    Детальніше
                                    <x-lucide-move-right class="size-4 shrink-0 inline-flex ml-1.5" />
                                </a>
                                <button type="button"
                                    class="px-6 py-3 font-display rounded-full backdrop-blur-xs text-emerald-400/80 hover:text-emerald-400 bg-emerald-500/20 hover:bg-emerald-600/20 border border-emerald-500/20 transition-all duration-300 cursor-pointer">
                                    Замовити послугу
                                </button>
                            </div>
                        </div>
                    </template>
                </div>
            </div>

            <!-- МОБІЛЬНА ВЕРСІЯ: Акордіон на фоні зображення -->
            <div class="lg:hidden flex flex-col justify-center text-white w-full min-h-96">
                <!-- Заголовок на мобільному -->
                <h2 class="font-display text-4xl font-black tracking-wide uppercase leading-tight mb-5">
                    Наші<br><span class="text-emerald-500">послуги</span>
                </h2>

                <template x-for="(service, index) in services" :key="index">
                    <div class="border-b last:border-b-0 border-slate-50/15 py-4">
                        <!-- Кнопка послуги -->
                        <button @click="selected === index ? selected = -1 : selected = index"
                            class="w-full flex items-center justify-between font-display text-left text-xl font-semibold text-white/90 hover:text-white transition-colors duration-200"
                            :class="selected === index ? 'text-emerald-400 text-lg' : 'text-base'">
                            <span x-text="service.title"></span>
                            <x-lucide-chevron-down class="size-6 transition-transform duration-300 shrink-0 ml-2"
                                x-bind:class="selected === index ? 'rotate-180' : 'stroke-slate-50/25'" />
                        </button>

                        <!-- Розгорнута інформація -->
                        <div x-show="selected === index" x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100"
                            x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0 -translate-y-2" class="mt-4 space-y-2">

                            <p class="text-slate-200/80 leading-snug text-base">
                                <span x-text="service.description"></span>
                            </p>

                            <div class="flex flex-row gap-2 pt-2">
                                <a :href="service.link"
                                    class="px-4 py-2.5 bg-slate-500/50 tracking-wide hover:bg-slate-500/30 text-white font-display font-semibold rounded-full transition-all duration-300 text-center text-sm border border-slate-500/30 backdrop-blur-sm">
                                    Детальніше
                                    <x-lucide-move-right class="size-4 shrink-0 inline-flex ml-1.5" />
                                </a>
                                <x-button color="emerald" class="tracking-wide">Замовити послугу</x-button>
                            </div>
                        </div>
                    </div>
                </template>
            </div>

            <!-- СПИСОК ПОСЛУГ (видимо на ПК справа) -->
            <div class="hidden lg:flex flex-col lg:gap-y-2.5">
                <template x-for="(service, index) in services" :key="index">
                    <div @click="selected = index"
                        class="bg-linear-to-r cursor-pointer px-5 py-3 border-s transition-all duration-300 group"
                        :class="selected === index ?
                            'border-emerald-500 from-emerald-500/20 from-5% to-transparent' :
                            'border-slate-100/20 bg-transparent hover:bg-white/5'">
                        <h3 class="font-display text-lg font-semibold transition-colors duration-300"
                            :class="selected === index ? 'text-emerald-400' : 'text-white/70 group-hover:text-white'"
                            x-text="service.title"></h3>
                    </div>
                </template>
            </div>
        </div>
    </section>

    {{-- === CTA: TRY IT + CALLBACK === --}}
    <section class="relative py-32 lg:py-44 bg-white overflow-visible font-sans">
        <div class="max-w-6xl mx-auto px-5">

            {{-- Основний контейнер (Зелена плашка) --}}
            <div class="relative bg-[#2D6A4F] rounded-[45px] lg:rounded-[60px] min-h-100 flex items-center">

                <div class="grid lg:grid-cols-12 w-full">

                    {{-- Ліва частина: Смартфон --}}
                    <div class="lg:col-span-5 relative flex justify-center lg:block">
                        <div
                            class="lg:absolute mt-8 lg:mt-0 lg:left-17.5 lg:top-1/2 lg:-translate-y-1/2 z-30 w-72.5 md:w-82.5">

                            {{-- Корпус смартфона --}}
                            <div
                                class="relative aspect-9/18 rounded-[3.8rem] border-12 border-black bg-[#151515] shadow-[0_60px_100px_-20px_rgba(0,0,0,0.6)] overflow-hidden">

                                {{-- Екран активного виклику --}}
                                <div
                                    class="absolute inset-0 flex flex-col items-center justify-between py-20 px-6 bg-linearfaaA-to-b from-[#1a1a1a] to-black">

                                    <div class="text-center space-y-3 mt-4 animate-pulse">
                                        <p class="text-[10px] text-white/40 uppercase tracking-[0.3em]">Йде виклик...</p>
                                        <h3 class="text-5xl font-black text-white tracking-tighter">Try It</h3>
                                        <p class="text-xs text-white/30 uppercase tracking-wide">Клінінгова компанія</p>
                                    </div>

                                    {{-- Анімоване коло виклику --}}
                                    <div class="relative my-auto">
                                        <div class="absolute inset-5 rounded-full bg-white/10 animate-ping z-0"></div>

                                        <div class="absolute z-10 size-30 lg:size-36 rounded-full bg-black"></div>
                                        <div
                                            class="relative z-10 size-30 lg:size-36 rounded-full bg-white/15 flex items-center justify-center border border-white/20 backdrop-blur-xl">
                                            <span class="text-5xl lg:text-6xl font-black text-white/90">T</span>
                                        </div>
                                    </div>

                                    {{-- Кнопка скидання (як на фото) --}}
                                    <div class="w-full mt-auto">
                                        <div class="flex items-end justify-around">

                                            {{-- Клавіатура (або Повідомлення) --}}
                                            <div class="flex flex-col items-center gap-3">
                                                <div
                                                    class="size-12 rounded-full bg-white/10 backdrop-blur-md flex items-center justify-center text-white hover:bg-white/20 transition-colors">
                                                    <x-lucide-hash class="size-5" />
                                                </div>
                                                <span
                                                    class="text-[9px] text-white/40 uppercase tracking-widest font-medium">
                                                    Клавіші
                                                </span>
                                            </div>

                                            {{-- Кнопка скидання (Центральна) --}}
                                            <div class="flex flex-col items-center">
                                                <div
                                                    class="size-14 rounded-full bg-red-500 flex items-center justify-center shadow-[0_0_30px_rgba(239,68,68,0.5)]">
                                                    <x-lucide-phone class="size-8 fill-white stroke-white rotate-135" />
                                                </div>
                                                <span
                                                    class="text-[10px] text-white/70 mt-3 uppercase tracking-wide font-bold">
                                                    Скасувати</span>
                                            </div>

                                            {{-- Динамік --}}
                                            <div class="flex flex-col items-center gap-3">
                                                <div
                                                    class="size-12 rounded-full bg-white/10 backdrop-blur-md flex items-center justify-center text-white hover:bg-white/20 transition-colors">
                                                    <x-lucide-volume-2 class="size-5" />
                                                </div>
                                                <span
                                                    class="text-[9px] text-white/40 uppercase tracking-widest font-medium">
                                                    Динамік</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Dynamic Island --}}
                                <div class="absolute top-0 left-1/2 -translate-x-1/2 w-32 h-8 bg-black rounded-b-3xl">
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Права частина: Текст --}}
                    <div class="lg:col-span-7 p-10 lg:p-20 lg:pl-0 text-white">
                        <div class="max-w-xl space-y-6">
                            <h2 class="font-display text-3xl md:text-5xl font-bold tracking-tight">
                                Чистота в один клік!
                            </h2>

                            <p class="text-white/80 text-base md:text-lg leading-relaxed font-light text-balance">
                                Поки ви керуєте справами, ми створюємо ідеальну чистоту. TryIt — професійний клінінг
                                для тих, хто цінує свій час та бездоганний результат.
                            </p>

                            <div class="font-display text-3xl text-slate-50 font-black">
                                +380 (97) 877-866-7
                            </div>

                            <div class="text-white/70 text-base font-semibold mb-2">
                                Передзвонити вам? Просто вкажіть свій номер.
                            </div>

                            {{-- Кнопки маркетів --}}
                            <div class="flex flex-wrap gap-4">
                                {{-- Google Play --}}
                                <div
                                    class="flex items-center gap-3 bg-black/20 border border-white/15 backdrop-blur-md rounded-2xl px-5 py-2.5 transition-all focus-within:bg-black/40 focus-within:border-white/40 w-full max-w-70">
                                    {{-- Іконка телефону --}}
                                    <div class="size-8 flex items-center justify-center shrink-0">
                                        <x-lucide-phone class="size-6 stroke-white opacity-70" />
                                    </div>

                                    {{-- Поле введення --}}
                                    <div class="text-left w-full">
                                        <label for="phone" class="text-xs uppercase leading-none opacity-60 block">
                                            Ваш номер телефону
                                        </label>
                                        <input type="tel" id="phone" x-mask="+380 (99) 999-99-99"
                                            placeholder="+380 (63)  123-45-67"
                                            class="bg-transparent border-none p-0 focus:ring-0 text-white text-base font-bold focus:outline-none leading-none mt-1 w-full placeholder:text-white/20 placeholder:font-normal">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section x-data="{ scroll: 0 }" x-init="window.addEventListener('scroll', () => { scroll = window.scrollY })"
        class="relative overflow-hidden shadow-inner bg-cover bg-no-repeat bg-fixed"
        :style="`background-image: url('{{ Vite::asset('resources/images/header.webp') }}');`">

        <div class="absolute inset-0 bg-slate-900/70 z-0"></div>

        <div class="max-w-5xl mx-auto py-20 px-5 relative z-20">
            <div class="flex flex-col items-center">
                <x-section.badge color="slate">Про компанію</x-section.badge>

                <x-section.title tag="h3" color="white" size="sm">
                    Чому обирають <span class="text-emerald-400">нас</span>?
                </x-section.title>

                <div class="max-w-3xl space-y-5 text-slate-50 leading-relaxed text-center text-balance mt-5">
                    <p>
                        Наша клінінгова компанія — це професійний сервіс, який допомагає підтримувати чистоту у вашому
                        домі чи офісі. Ми використовуємо сучасні методи та відповідально ставимося до кожного
                        замовлення.
                    </p>
                    <p>
                        Від генерального прибирання до спеціалізованого догляду за меблями. Наша мета — зробити ваш
                        простір ідеально чистим, де кожен вдих приносить задоволення.
                    </p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-5 mt-10">
                    <div class="flex flex-col items-center text-center md:items-start md:text-left">
                        <div class="size-12 bg-emerald-500/20 rounded-xl flex items-center justify-center mb-4">
                            <x-lucide-award class="size-7 stroke-emerald-500" />
                        </div>
                        <h4 class="font-display text-slate-100 uppercase font-semibold mb-2.5">
                            12+ років досвіду
                        </h4>
                        <p class="text-slate-50/80 text-base leading-normal">
                            Понад десятиліття допомагаємо підтримувати чистоту, відточуючи кожну деталь сервісу.
                        </p>
                    </div>

                    <div class="flex flex-col items-center text-center md:items-start md:text-left">
                        <div class="size-12 bg-emerald-500/20 rounded-xl flex items-center justify-center mb-4">
                            <x-lucide-users class="size-7 stroke-emerald-500" />
                        </div>
                        <h4 class="font-display text-slate-100 uppercase font-semibold mb-2.5">
                            300+ задоволених клієнтів
                        </h4>
                        <p class="text-slate-100/80 text-base leading-normal">
                            Нам довіряють і рекомендують — більшість клієнтів повертаються до нас знову.
                        </p>
                    </div>

                    <div class="flex flex-col items-center text-center md:items-start md:text-left">
                        <div class="size-12 bg-emerald-500/20 rounded-xl flex items-center justify-center mb-4">
                            <x-lucide-badge-check class="size-7 stroke-emerald-500" />
                        </div>
                        <h4 class="font-display text-slate-100 uppercase font-semibold mb-2.5">
                            100% гарантія якості
                        </h4>
                        <p class="text-slate-100/80 text-base leading-normal">
                            Ми впевнені у результаті: якщо щось не влаштує — безкоштовно виправимо.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white relative overflow-hidden">
        <div
            class="absolute top-1/2 left-0 w-full h-1 bg-linear-to-r from-transparent via-emerald-100 to-transparent -translate-y-1/2 hidden lg:block">
        </div>

        <div class="max-w-7xl mx-auto px-5 relative">
            {{-- Subtle Background Image --}}
            <div class="absolute inset-0 opacity-30 pointer-events-none z-0">
                <img src="https://demo2.pavothemes.com/cetro/wp-content/uploads/2025/07/h1-asked.png"
                    class="size-full object-cover grayscale-100 opacity-40 scale-75" alt="">
            </div>
            <div class="text-center mb-10 lg:mb-20">
                <x-section.badge class="mb-2.5">3 кроки до чистоти</x-section.badge>
                <x-section.title tag="h4">
                    Ваш час занадто <span class="text-emerald-500">дорогий</span>, <br>
                    щоб <span class="text-emerald-500">витрачати</span> його на бруд
                </x-section.title>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 lg:gap-10 relative">

                <div class="group relative pt-5">
                    <div
                        class="absolute top-0 left-0 text-[10rem] font-black text-slate-50 leading-none select-none z-0 transition-colors">
                        01</div>

                    <div
                        class="relative z-10 bg-slate-200/80 p-8 rounded-3xl border border-slate-200 transition-all duration-500 group-hover:shadow-2xl group-hover:-translate-y-2 group-hover:border-emerald-200">
                        <div
                            class="size-16 bg-slate-900 rounded-2xl flex items-center justify-center mb-8 shadow-xl group-hover:bg-emerald-600 group-hover:rotate-10 transition-all duration-500">
                            <x-lucide-timer class="size-8 stroke-slate-100" />
                        </div>

                        <h3 class="font-display text-2xl font-bold text-slate-900 mb-4">Домовимось за хвилину</h3>
                        <p class="text-slate-500 leading-relaxed mb-6 text-sm">
                            Досить витрачати вечори на <span class="text-slate-950 font-medium">планування</span>.
                            Ми відійшли від довгих форм. Просто вкажіть
                            <span class="text-slate-950 font-medium">адресу</span> та час
                            — решту ми беремо <span class="text-slate-950 font-medium">на себе</span>.
                        </p>

                        <div class="flex items-center gap-2 text-emerald-600 font-bold text-xs uppercase tracking-wider">
                            <span class="w-8 h-px bg-emerald-600"></span>
                            Займає ~60 секунд
                        </div>
                    </div>
                </div>

                <div class="group relative pt-5 lg:mt-15">
                    <div
                        class="absolute top-0 left-0 text-[10rem] font-black text-slate-50 leading-none select-none z-0 transition-colors group-hover:text-blue-50">
                        02</div>

                    <div
                        class="relative z-10 bg-slate-900 p-8 rounded-3xl shadow-2xl transition-all duration-500 group-hover:-translate-y-2">
                        <div
                            class="size-16 bg-emerald-500 rounded-2xl flex items-center justify-center mb-8 shadow-lg shadow-emerald-500/40 group-hover:scale-110 transition-transform">
                            <x-lucide-sparkles class="size-8 stroke-slate-100" />
                        </div>

                        <h3 class="font-display text-2xl font-bold text-white mb-2.5">Усе необхідне - з нас</h3>
                        <p class="text-slate-400 leading-relaxed mb-5 text-sm">
                            Ми приїжджаємо з повним арсеналом: від потужного промислового
                            <span class="text-slate-100 font-medium">обладнання</span> до сертифікованої
                            <span class="text-slate-100 font-medium">еко-хімії</span>. Вам не потрібно забезпечувати
                            інвентар. Процес налагоджений так, щоб
                            <span class="text-slate-100 font-medium">не відволікати</span>
                            вас від основних справ.
                        </p>

                        <div
                            class="inline-flex items-center gap-2 px-4 py-2 bg-slate-800 rounded-full text-emerald-400 text-[10px] font-bold uppercase tracking-tighter border border-slate-700">
                            <span class="flex h-2 w-2 rounded-full bg-emerald-500 animate-pulse"></span>
                            Клінер вже в дорозі
                        </div>
                    </div>
                </div>

                <div class="group relative pt-5">
                    <div
                        class="absolute top-0 left-0 text-[10rem] font-black text-slate-50 leading-none select-none z-0 transition-colors group-hover:text-emerald-50">
                        03</div>

                    <div
                        class="relative z-10 bg-zinc-200/80 p-8 rounded-3xl border border-zinc-200 transition-all duration-500 group-hover:shadow-2xl group-hover:-translate-y-2">
                        <div
                            class="size-16 bg-emerald-500 border-2 border-slate-700 rounded-2xl flex items-center justify-center mb-8 shadow-xl group-hover:border-emerald-600 transition-all duration-500">
                            <x-lucide-smile-plus
                                class="size-8 stroke-slate-700 group-hover:stroke-emerald-600 transition-all duration-500" />
                        </div>

                        <h3 class="font-display text-2xl font-bold text-slate-800 mb-2.5">Насолоджуйтесь</h3>
                        <p class="text-slate-500 leading-relaxed mb-5 text-sm">
                            Перевірте <span class="text-slate-950 font-medium">якість</span> роботи та насолоджуйтеся
                            свіжістю. Оплата списується лише після вашого
                            <span class="text-slate-950 font-medium">схвалення</span>. Ви отримуєте не просто прибирання, а
                            <span class="text-slate-950 font-medium">ідеальний простір</span> для життя.
                        </p>

                        <div class="text-xs text-slate-400 font-medium">300+ чистих об'єктів</div>
                    </div>
                </div>

            </div>

            <div class="mt-20 flex justify-center">
                <x-button size="lg">Спробувати цей досвід</x-button>
            </div>
        </div>
    </section>

    <section class="relative min-h-150 flex items-center overflow-hidden bg-slate-900 px-6 py-20">
        <!-- Фонове зображення з затемненням -->
        <div class="absolute inset-0 z-0">
            <img src="{{ Vite::asset('resources/images/header.webp') }}" class="size-full object-cover opacity-60"
                alt="">
            <div
                class="absolute inset-0 bg-linear-to-t md:bg-linear-to-r from-slate-900/80 via-slate-900/40 to-transparent">
            </div>
        </div>

        <!-- Величезний фоновий текст (TryIt) -->
        <div class="absolute bottom-[-0.05em] left-1/2 -translate-x-1/2 z-10 select-none pointer-events-none">
            <span class="text-[25vw] font-black uppercase leading-[0.75] tracking-tighter inline-flex">
                <!-- Частина "Try" з градієнтом від смарагдового -->
                <span class="bg-linear-to-b from-emerald-500/40 to-emerald-500/10 bg-clip-text text-transparent">
                    Try
                </span>
                <!-- Частина "It" з градієнтом від помаранчевого -->
                <span class="bg-linear-to-b from-orange-500/40 to-orange-500/10 bg-clip-text text-transparent">
                    It
                </span>
            </span>
        </div>

        <div class="max-w-6xl mx-auto relative z-20">
            <div class="flex flex-col md:flex-row items-center gap-10">

                <!-- Кнопка Play (Відео) -->
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = true"
                        class="group relative size-24 md:size-32 bg-emerald-500/20 rounded-full flex items-center justify-center backdrop-blur-md border border-white/30 transition-transform hover:scale-110">
                        <!-- Анімовані хвилі -->
                        <span class="absolute inset-0 rounded-full bg-emerald-500 animate-ping opacity-20"></span>

                        <div
                            class="size-16 md:size-20 bg-emerald-500 rounded-full flex items-center justify-center shadow-xl shadow-emerald-500/40 group-hover:bg-emerald-400 transition-colors">
                            <x-lucide-play class="size-8 text-white fill-current ml-1" />
                        </div>
                    </button>

                    <!-- Модалка для відео (спрощена) -->
                    <template x-if="open">
                        <div class="fixed inset-0 z-100 flex items-center justify-center bg-slate-900/95 p-4"
                            @click.self="open = false">
                            <button @click="open = false"
                                class="absolute top-10 right-10 text-white/50 hover:text-white text-4xl">&times;</button>
                            <div class="aspect-video w-full max-w-4xl bg-black shadow-2xl">
                                <!-- Сюди вставити iframe відео -->
                            </div>
                        </div>
                    </template>
                </div>

                <!-- Текстовий блок -->
                <div class="max-w-2xl text-center md:text-left">
                    <h2 class="font-display text-4xl md:text-6xl font-black text-white leading-[0.95] text-balance mb-5">
                        Хочете побачити нас <span class="text-emerald-500">у справі</span>?
                        Наша робота <span class="text-emerald-500">говорить</span> сама за себе!
                    </h2>

                    <div class="flex flex-col md:flex-row items-center justify-center md:justify-start gap-3">
                        <div class="flex gap-1">
                            @foreach (range(1, 5) as $i)
                                <x-lucide-star class="size-4 text-tryit-orange fill-current" />
                            @endforeach
                        </div>
                        <span class="text-slate-300 text-sm font-medium tracking-wide uppercase">
                            <span class="font-black">5-ти</span> зірковий стандарт чистоти
                        </span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-20 relative overflow-hidden bg-slate-100" x-data="{ active: 1 }">
        <div class="max-w-3xl relative z-10 mx-auto px-5">
            <div class="mb-10 flex flex-col lg:flex-row lg:items-center lg:justify-between">
                <div>
                    <h2 class="font-display text-3xl font-black text-slate-900 tracking-tight">
                        Питання та <span class="text-emerald-500">відповіді</span>
                    </h2>
                    <p class="text-slate-500 text-xs mt-1">Все, що варто знати перед замовленням</p>
                </div>
                <a href="{{ route('feedback') }}"
                    class="inline-flex items-center gap-1.5 mt-5 lg:mt-0 text-xs font-semibold uppercase tracking-wide text-emerald-600 hover:text-emerald-700 transition-colors">
                    Задати запитання <x-lucide-arrow-right class="size-4" stroke-width="2" />
                </a>
            </div>

            <div class="space-y-2">
                @foreach (require resource_path('data/faqs.php') as $item)
                    <div class="bg-white overflow-hidden transition-all duration-300 rounded-2xl border border-gray-200 cursor-pointer hover:bg-slate-50"
                        :class="active === {{ $loop->index }} ? 'shadow-xl shadow-emerald-500/5' : ''">
                        <button @click="active = active === {{ $loop->index }} ? null : {{ $loop->index }}"
                            class="w-full flex items-center justify-between p-4 md:p-5 text-left transition-all cursor-pointer">
                            <div class="flex items-center gap-4">
                                <div class="size-10 rounded-xl flex items-center justify-center shrink-0 transition-[colors, transform]"
                                    :class="active === {{ $loop->index }} ? 'bg-emerald-600 rotate-45 text-white' :
                                        'bg-slate-100 text-slate-400'">
                                    <span class="font-display text-sm font-bold"
                                        :class="active === {{ $loop->index }} ? '-rotate-45' : ''">0{{ $loop->index + 1 }}</span>
                                </div>
                                <span class="font-bold text-sm md:text-base transition-colors"
                                    :class="active === {{ $loop->index }} ? 'text-slate-900' : 'text-slate-700'">
                                    {{ $item['q'] }}
                                </span>
                            </div>
                            <div class="transition-transform duration-500 text-slate-300"
                                :class="active === {{ $loop->index }} ? 'rotate-180 text-emerald-600' : ''">
                                <i class="fas fa-chevron-down text-[10px]"></i>
                            </div>
                        </button>

                        <div x-show="active === {{ $loop->index }}" x-collapse x-cloak>
                            <div class="px-5 pb-5 ml-0 md:ml-14">
                                <p class="text-slate-500 text-sm leading-relaxed max-w-xl">
                                    {{ $item['a'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- === BLOG === --}}
    <section class="py-20 bg-stone-50 relative overflow-hidden">
        {{-- Subtle Background Image --}}
        {{-- <div class="absolute inset-0 opacity-30 pointer-events-none z-0">
            <img src="https://demo2.pavothemes.com/cetro/wp-content/uploads/2025/07/h2-background04.jpg"
                class="size-full object-cover grayscale-100" alt="">
        </div> --}}

        <div class="max-w-6xl mx-auto px-5 relative z-10">
            <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4 mb-12">
                <div>
                    <x-section.badge class="mb-2.5">Корисні статті</x-section.badge>
                    <x-section.title tag="h3" size="sm">
                        Наш <span class="text-emerald-500">Блог</span>
                    </x-section.title>
                </div>
                <a href="{{ route('blog') }}"
                    class="inline-flex items-center gap-1.5 text-sm font-semibold text-tryit-green hover:gap-3 transition-all duration-300">
                    Всі статті <x-lucide-arrow-right class="size-4" stroke-width="2" />
                </a>
            </div>

            @php $posts = \App\Models\Post::published()->take(6)->get(); @endphp

            {{-- Mobile: horizontal scroll --}}
            <div class="md:hidden" x-data="{ scrollEl: null, active: 0, count: {{ $posts->count() }} }" x-init="scrollEl = $refs.blogScroll;
            scrollEl.addEventListener('scroll', () => { active = Math.round(scrollEl.scrollLeft / (scrollEl.scrollWidth / count)) })">
                <div x-ref="blogScroll"
                    class="flex gap-4 overflow-x-auto scroll-smooth snap-x snap-mandatory pb-4 -mx-5 px-5 scroll-pl-5"
                    style="scrollbar-width: none; -ms-overflow-style: none;">
                    @foreach ($posts as $post)
                        <a href="{{ route('blog.show', ['slug' => $post->slug]) }}"
                            class="group flex-none w-[75vw] flex flex-col bg-gray-50 rounded-2xl overflow-hidden snap-start">
                            <div class="aspect-16/10 overflow-hidden">
                                <img src="{{ $post->cover_image }}" alt="{{ $post->title }}"
                                    class="size-full object-cover group-hover:scale-105 transition-transform duration-700"
                                    loading="lazy" />
                            </div>
                            <div class="flex flex-col flex-1 p-4">
                                <div class="flex items-center gap-3 text-xs text-gray-400 mb-2">
                                    <span class="inline-flex gap-1.5">
                                        <x-lucide-calendar class="size-3 shrink-0" />
                                        {{ $post->published_at->translatedFormat('d M Y') }}
                                    </span>
                                    <span class="size-1 rounded-full bg-gray-300"></span>
                                    <span>{{ $post->reading_time }} хв</span>
                                </div>
                                <h3 class="font-display text-sm font-bold text-gray-900 leading-snug mb-1.5 line-clamp-2">
                                    {{ $post->title }}</h3>
                                <p class="text-xs text-gray-500 leading-relaxed line-clamp-2 mb-0">{{ $post->excerpt }}
                                </p>
                                <div
                                    class="mt-auto pt-3 flex items-center gap-1.5 text-xs font-semibold text-tryit-orange">
                                    Читати <x-lucide-arrow-right class="size-3.5" stroke-width="2" />
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
                <div class="flex justify-center gap-1.5 mt-4">
                    <template x-for="i in count" :key="i">
                        <button
                            @click="scrollEl.scrollTo({ left: (i - 1) * (scrollEl.scrollWidth / count), behavior: 'smooth' })"
                            class="size-2 rounded-full transition-all duration-300 cursor-pointer"
                            :class="active === i - 1 ? 'bg-tryit-orange w-5' : 'bg-gray-300'"></button>
                    </template>
                </div>
            </div>

            {{-- Desktop: grid --}}
            <div class="hidden md:grid md:grid-cols-3 gap-6">
                @foreach ($posts as $post)
                    <a href="{{ route('blog.show', ['slug' => $post->slug]) }}"
                        class="group flex flex-col bg-gray-50 rounded-2xl overflow-hidden hover:shadow-xl transition-all duration-500">
                        <div class="aspect-16/10 overflow-hidden">
                            <img src="{{ $post->cover_image }}" alt="{{ $post->title }}"
                                class="size-full object-cover group-hover:scale-105 transition-transform duration-700"
                                loading="lazy" />
                        </div>
                        <div class="flex flex-col flex-1 p-5">
                            <div class="flex items-center gap-3 text-xs text-gray-400 mb-3">
                                <span>{{ $post->published_at->translatedFormat('d M Y') }}</span>
                                <span class="size-1 rounded-full bg-gray-300"></span>
                                <span>{{ $post->reading_time }} хв читання</span>
                            </div>
                            <h3
                                class="font-display text-base font-bold text-gray-900 leading-snug mb-2 group-hover:text-tryit-green transition-colors line-clamp-2">
                                {{ $post->title }}</h3>
                            <p class="text-sm text-gray-500 leading-relaxed line-clamp-2 mb-0">{{ $post->excerpt }}</p>
                            <div
                                class="mt-auto pt-4 flex items-center gap-1.5 text-xs font-semibold text-tryit-orange group-hover:gap-2.5 transition-all duration-300">
                                Читати <x-lucide-arrow-right class="size-3.5" stroke-width="2" />
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endsection

<style>
    @keyframes float {
        0% {
            transform: translateY(0px) rotate(var(--tw-rotate, 0deg));
        }

        50% {
            transform: translateY(-20px) rotate(var(--tw-rotate, 0deg));
        }

        100% {
            transform: translateY(0px) rotate(var(--tw-rotate, 0deg));
        }
    }

    .animate-float {
        animation: float 6s ease-in-out infinite;
    }

    .glass-card {
        background: rgba(255, 255, 255, 0.7);
        backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.3);
    }

    .blob {
        position: absolute;
        width: 400px;
        height: 400px;
        background: linear-gradient(180deg, rgba(52, 211, 153, 0.2) 0%, rgba(59, 130, 246, 0.2) 100%);
        filter: blur(80px);
        border-radius: 50%;
        z-index: -1;
    }
</style>
