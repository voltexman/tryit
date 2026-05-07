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
                    class="font-[Lora] text-3xl md:text-6xl xl:text-7xl text-nowrap uppercase text-slate-100 font-black italic tracking-tight drop-shadow-lg animate-in duration-700">
                    <span class="text-tryit-orange">Чистота</span>, яку варто<br>
                    спробувати <span class="text-tryit-orange">сьогодні</span>
                </h1>

                <div class="w-16 h-0.5 bg-tryit-orange/80 rounded-full"></div>

                <p class="text-white/90 text-lg md:text-xl xl:text-2xl font-light max-w-xl text-balance">
                    Шукаєте надійну клінінгову компанію?<br class="hidden md:block">
                    Ми подбаємо про чистоту вашого офісу, виробництва чи будинку на найвищому рівні
                </p>

                <a href="#services"
                    class="bg-orange-700 font-display relative py-4 px-10 uppercase text-white font-black text-lg tracking-wider rounded-full hover:bg-tryit-orange/90 transition-all duration-300 cursor-pointer"
                    aria-label="Перейти до розділу з нашими послугами">
                    Наші послуги
                </a>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <section class="relative py-10 lg:py-30 bg-slate-50 overflow-hidden font-sans">
        {{-- Decorative Image --}}
        <img src="{{ Vite::asset('resources/images/decore.png') }}"
            class="absolute top-5 right-0 w-48 md:w-64 lg:w-80 opacity-50 pointer-events-none z-10"
            alt="Decorative element">
        <img src="{{ Vite::asset('resources/images/h1-agency.png') }}"
            class="absolute bottom-0 left-0 w-80 md:w-110 lg:w-150 opacity-50 pointer-events-none z-10"
            alt="Decorative element">

        <div class="max-w-5xl mx-auto px-5 relative">
            {{-- Subtle Background Image --}}
            <div class="absolute inset-0 opacity-30 pointer-events-none z-0">
                <img src="{{ Vite::asset('resources/images/h1-asked.png') }}"
                    class="size-full object-contain object-center grayscale-100 opacity-50" width="1920" height="1080"
                    loading="lazy" alt="Background pattern">
            </div>

            <div class="relative z-20 text-center max-w-3xl mx-auto pt-10 pb-10">
                <x-section.badge class="mb-5">Ваш дім у надійних руках</x-section.badge>
                <div class="font-[Oswald] text-4xl/9 md:text-6xl/14 tracking-tight text-slate-700 text-balance">
                    Бо ми знаємо, як важливо
                    <span class="text-emerald-700 font-[Lora] font-bold italic">бути в гармонії</span>
                    з чистотою у вашому <span class="text-emerald-700 font-[Lora] font-bold italic">просторі</span>
                </div>
                <p class="max-w-2xl mx-auto mt-8 text-lg md:text-xl text-slate-700 font-light text-balance leading-relaxed">
                    Ми об'єднуємо професіоналів та власників осель, щоб кожен момент вашого відпочинку проходив у
                    бездоганній чистоті.
                </p>

                <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-5">
                    <x-button size="lg" color="emerald"
                        @click="Livewire.dispatch('setService', { service: '' }); window.openOffcanvas('orderOffcanvas')">
                        Замовити прибирання
                    </x-button>
                    <a href="#services">
                        <x-button size="lg" color="orange" href="#services">Наші послуги</x-button>
                    </a>
                </div>
            </div>
        </div>

        {{-- Фон з блюром --}}
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
    }"
        class="relative w-full flex items-center py-10 lg:py-20 overflow-hidden bg-gray-900 lg:min-h-125" id="services">
        <!-- Фонове зображення з плавним переходом -->
        <template x-for="(service, index) in services" :key="index">
            <div x-show="selected === index" x-transition:enter="transition opacity duration-700 ease-in-out"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                x-transition:leave="transition opacity duration-700 ease-in-out" x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0" class="absolute inset-0 z-0">
                <img :src="service.image" :alt="service.title" class="w-full h-full object-cover" loading="lazy"
                    width="1200" height="600">
                <div
                    class="absolute inset-0 bg-slate-900/70 lg:bg-linear-to-l lg:from-slate-900/70 lg:via-slate-900/30 lg:to-slate-900/20">
                </div>
            </div>
        </template>

        <!-- Контент -->
        <div class="max-w-6xl w-full mx-auto px-5 relative z-10 grid grid-cols-1 lg:grid-cols-[1fr_350px] gap-10 lg:gap-0">

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
                                    @click="openOffcanvas('orderOffcanvas'), Livewire.dispatch('setService', { service: service })"
                                    class="px-6 py-3 font-display rounded-full backdrop-blur-xs text-emerald-400 hover:text-emerald-400 bg-emerald-500/20 hover:bg-emerald-600/20 border border-emerald-500/20 transition-all duration-300 cursor-pointer">
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

                            <p class="text-slate-200/60 leading-snug text-base">
                                <span x-text="service.description"></span>
                            </p>

                            <div class="flex flex-row gap-2 pt-2">
                                <a :href="service.link"
                                    class="px-5 py-2 inline-flex justify-center items-center w-fit bg-slate-500/25 tracking-wide hover:bg-slate-500/30 text-white font-display font-semibold rounded-full transition-all duration-300 text-center text-sm border border-slate-500/30 backdrop-blur-xs">
                                    Детальніше
                                    <x-lucide-move-right class="size-4 shrink-0 inline-flex ml-1.5" />
                                </a>
                                <button type="button"
                                    @click="Livewire.dispatch('setService', { service: service }); window.openOffcanvas('orderOffcanvas')"
                                    class="px-5 py-2 font-display rounded-full backdrop-blur-xs text-emerald-400 hover:text-emerald-400 bg-emerald-500/20 hover:bg-emerald-600/20 border border-emerald-500/20 transition-all duration-300 cursor-pointer">
                                    Замовити послугу
                                </button>
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
                        <h3 class="font-display text-xl font-semibold transition-colors duration-300"
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
                                        <p class="text-[10px] text-white uppercase tracking-[0.3em]">Йде виклик...</p>
                                        <h3 class="text-5xl font-black font-[Lora] text-white tracking-tighter">TryIt</h3>
                                        <p class="text-xs text-white/90 uppercase tracking-wide">Клінінгова компанія</p>
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
                                                <span class="text-[9px] text-white uppercase tracking-widest font-medium">
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
                                                    class="text-[10px] text-white mt-3 uppercase tracking-wide font-bold">
                                                    Скасувати</span>
                                            </div>

                                            {{-- Динамік --}}
                                            <div class="flex flex-col items-center gap-3">
                                                <div
                                                    class="size-12 rounded-full bg-white/10 backdrop-blur-md flex items-center justify-center text-white hover:bg-white/20 transition-colors">
                                                    <x-lucide-volume-2 class="size-5" />
                                                </div>
                                                <span class="text-[9px] text-white uppercase tracking-widest font-medium">
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
                    <div class="lg:col-span-7 p-8 lg:p-20 lg:pl-0 text-white">
                        <div class="max-w-xl text-center lg:text-left space-y-5">
                            <h2 class="font-[Lora] italic text-3xl md:text-5xl font-black tracking-tight">
                                Чистота в один клік!
                            </h2>

                            <p class="text-white text-base md:text-lg leading-relaxed font-light lg:text-balance">
                                Поки ви керуєте справами, ми створюємо ідеальну чистоту. TryIt — професійний клінінг
                                для тих, хто цінує свій час та бездоганний результат.
                            </p>

                            <div class="font-display text-3xl text-slate-50 font-black">
                                +380 (97) 877-866-7
                            </div>

                            <div class="text-white text-sm font-medium mb-2">
                                Передзвонити вам? <br><span class="text-xs text-white/90">Просто вкажіть свій номер.</span>
                            </div>

                            {{-- Кнопки маркетів --}}
                            <div class="flex flex-wrap gap-4 mx-auto lg:mx-0">
                                {{-- Google Play --}}
                                <div
                                    class="flex items-center gap-3 bg-black/20 border border-white/15 backdrop-blur-md rounded-2xl px-5 py-2.5 transition-all focus-within:bg-black/40 focus-within:border-white/40 w-full max-w-70">
                                    {{-- Іконка телефону --}}
                                    <div class="size-8 flex items-center justify-center shrink-0">
                                        <x-lucide-phone class="size-6 stroke-white" />
                                    </div>

                                    {{-- Поле введення --}}
                                    <div class="text-left w-full">
                                        <label for="phone" class="text-xs uppercase leading-none block font-bold">
                                            Ваш номер телефону
                                        </label>
                                        <input type="tel" id="phone" x-mask="+380 (99) 999-99-99"
                                            placeholder="+380 (63)  123-45-67"
                                            class="bg-transparent border-none p-0 focus:ring-0 text-white text-base font-bold focus:outline-none leading-none mt-1 w-full placeholder:text-white/60 placeholder:font-normal">
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
        class="relative overflow-hidden shadow-inner bg-cover bg-center bg-no-repeat bg-fixed"
        :style="`background-image: url('{{ Vite::asset('resources/images/about-section-bg.jpg') }}');`">

        <div class="absolute inset-0 bg-slate-900/80 z-0"></div>

        <div class="max-w-5xl mx-auto py-20 px-5 relative z-20">
            <div class="flex flex-col items-center">
                <x-section.badge color="slate" class="mb-2.5">Про компанію</x-section.badge>
                <x-section.title tag="h3" color="white" size="lg" class="text-center">
                    Чому обирають <span class="text-emerald-400 font-[Lora] font-black italic">нас</span>?
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
                        <div class="font-display text-5xl font-black text-slate-50 mb-4">
                            12+
                        </div>
                        <h4 class="font-display text-slate-50 uppercase font-semibold mb-2.5">
                            років досвіду
                        </h4>
                        <p class="text-slate-50/60 text-base leading-normal">
                            Понад десятиліття допомагаємо підтримувати чистоту, відточуючи кожну деталь сервісу.
                        </p>
                    </div>

                    <div class="flex flex-col items-center text-center md:items-start md:text-left">
                        <div class="font-display text-5xl font-black text-slate-50 mb-4">
                            300+
                        </div>
                        <h4 class="font-display text-slate-50 uppercase font-semibold mb-2.5">
                            задоволених клієнтів
                        </h4>
                        <p class="text-slate-50/60 text-base leading-normal">
                            Нам довіряють і рекомендують — більшість клієнтів повертаються до нас знову.
                        </p>
                    </div>

                    <div class="flex flex-col items-center text-center md:items-start md:text-left">
                        <div class="font-display text-5xl font-black text-slate-50 mb-4">
                            100%
                        </div>
                        <h4 class="font-display text-slate-50 uppercase font-semibold mb-2.5">
                            гарантія якості
                        </h4>
                        <p class="text-slate-50/60 text-base leading-normal">
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
                <img src="{{ Vite::asset('resources/images/h1-asked.png') }}"
                    class="size-full object-cover grayscale-100 opacity-50 scale-75" width="1920" height="1080"
                    loading="lazy" alt="Background pattern">
            </div>
            <div class="text-center mb-10">
                <x-section.badge class="mb-2.5">3 кроки до чистоти</x-section.badge>
                <x-section.title tag="h4" size="lg">
                    Ваш час занадто <span class="text-emerald-500 font-[Lora] font-black italic">дорогий</span>, <br>
                    щоб <span class="text-emerald-500 font-[Lora] font-black italic">витрачати</span> його на бруд
                </x-section.title>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 lg:gap-10 relative">

                <div class="group relative pt-5 z-10">
                    <div
                        class="absolute top-2 right-2 text-[9rem] font-black text-slate-500/8 leading-none select-none z-20 transition-colors">
                        01</div>

                    <div
                        class="relative z-10 bg-slate-100 p-8 rounded-3xl border border-slate-200 transition-all duration-500 group-hover:shadow-2xl group-hover:-translate-y-2 group-hover:border-emerald-200">
                        <div
                            class="size-16 bg-slate-900 rounded-2xl flex items-center justify-center mb-8 shadow-xl group-hover:bg-emerald-600 group-hover:rotate-10 transition-all duration-500">
                            <x-lucide-timer class="size-8 stroke-slate-100" />
                        </div>

                        <h3 class="font-display text-2xl font-bold text-slate-900 mb-4">Домовимось за хвилину</h3>
                        <p class="text-slate-700 leading-relaxed mb-6 text-sm">
                            Досить витрачати вечори на <span class="text-slate-950 font-medium">планування</span>.
                            Ми відійшли від довгих форм. Просто вкажіть
                            <span class="text-slate-950 font-medium">адресу</span> та час
                            — решту ми беремо <span class="text-slate-950 font-medium">на себе</span>.
                        </p>

                        <div class="flex items-center gap-2 text-emerald-700 font-bold text-xs uppercase tracking-wider">
                            <span class="w-8 h-px bg-emerald-700"></span>
                            Займає ~60 секунд
                        </div>
                    </div>
                </div>

                <div class="group relative z-10 pt-5 lg:mt-15">
                    <div
                        class="absolute top-2 right-2 text-[9rem] font-black text-slate-500/8 leading-none select-none z-20 transition-colors">
                        02</div>

                    <div
                        class="relative z-10 bg-slate-900 p-8 rounded-3xl shadow-2xl transition-all duration-500 group-hover:-translate-y-2">
                        <div
                            class="size-16 bg-emerald-500 rounded-2xl flex items-center justify-center mb-8 shadow-lg shadow-emerald-500/40 group-hover:scale-110 transition-transform">
                            <x-lucide-sparkles class="size-8 stroke-slate-100" />
                        </div>

                        <h3 class="font-display text-2xl font-bold text-white mb-2.5">Усе необхідне - з нас</h3>
                        <p class="text-slate-300 leading-relaxed mb-5 text-sm">
                            Ми приїжджаємо з повним арсеналом: від потужного промислового
                            <span class="text-slate-100 font-medium">обладнання</span> до сертифікованої
                            <span class="text-slate-100 font-medium">еко-хімії</span>. Вам не потрібно забезпечувати
                            інвентар. Процес налагоджений так, щоб
                            <span class="text-slate-100 font-medium">не відволікати</span>
                            вас від основних справ.
                        </p>

                        <div
                            class="inline-flex items-center gap-2 px-4 py-2 bg-slate-800 rounded-full text-emerald-400 text-[10px] font-bold uppercase tracking-tighter border border-slate-700">
                            <span class="flex size-2 rounded-full bg-emerald-500 animate-pulse"></span>
                            Клінер вже в дорозі
                        </div>
                    </div>
                </div>

                <div class="group relative pt-5 z-10">
                    <div
                        class="absolute top-2 right-2 text-[9rem] font-black text-slate-500/8 leading-none select-none z-20 transition-colors">
                        03</div>

                    <div
                        class="relative z-10 bg-zinc-100 p-8 rounded-3xl border border-zinc-200 transition-all duration-500 group-hover:shadow-2xl group-hover:-translate-y-2">
                        <div
                            class="size-16 bg-emerald-500 border-2 border-slate-700 rounded-2xl flex items-center justify-center mb-8 shadow-xl group-hover:border-emerald-600 transition-all duration-500">
                            <x-lucide-smile-plus
                                class="size-8 stroke-slate-700 group-hover:stroke-emerald-600 transition-all duration-500" />
                        </div>

                        <h3 class="font-display text-2xl font-bold text-slate-800 mb-2.5">Насолоджуйтесь</h3>
                        <p class="text-slate-700 leading-relaxed mb-5 text-sm">
                            Перевірте <span class="text-slate-950 font-medium">якість</span> роботи та насолоджуйтеся
                            свіжістю. Оплата списується лише після вашого
                            <span class="text-slate-950 font-medium">схвалення</span>. Ви отримуєте не просто прибирання, а
                            <span class="text-slate-950 font-medium">ідеальний простір</span> для життя.
                        </p>

                        <div class="text-xs text-slate-600 font-medium">300+ чистих об'єктів</div>
                    </div>
                </div>

            </div>

            <div class="mt-10 lg:mt-20 flex justify-center">
                <x-button size="lg">Спробувати цей досвід</x-button>
            </div>
        </div>
    </section>

    <section class="relative min-h-140 lg:min-h-150 flex items-center overflow-hidden bg-slate-900 px-6 py-20">
        <!-- Фонове зображення з затемненням -->
        <div class="absolute inset-0 z-0">
            <picture>
                <source srcset="{{ Vite::asset('resources/images/gallery-section.webp') }}" type="image/webp">
                <img src="{{ Vite::asset('resources/images/gallery-section.jpg') }}"
                    class="size-full object-cover opacity-40" width="1920" height="1080" loading="lazy"
                    alt="Gallery preview">
            </picture>
            <div
                class="absolute inset-0 bg-linear-to-t md:bg-linear-to-r from-slate-900/80 via-slate-900/40 to-transparent">
            </div>
        </div>

        <!-- Величезний фоновий текст (TryIt) -->
        <div
            class="absolute bottom-[-1.3em] lg:bottom-[-4.2em] left-1/2 -translate-x-1/2 z-10 select-none pointer-events-none">
            <img src="{{ Vite::asset('resources/images/logo.png') }}"
                class="size-full scale-150 opacity-20 pointer-events-none z-30" alt="Decorative element">
            {{-- <span class="text-[25vw] font-black uppercase leading-[0.75] tracking-tighter inline-flex">
                <!-- Частина "Try" з градієнтом від смарагдового -->
                <span class="bg-linear-to-b from-emerald-500/40 to-emerald-500/10 bg-clip-text text-transparent">
                    Try
                </span>
                <!-- Частина "It" з градієнтом від помаранчевого -->
                <span class="bg-linear-to-b from-orange-500/40 to-orange-500/10 bg-clip-text text-transparent">
                    It
                </span>
            </span> --}}
        </div>

        <div class="max-w-6xl mx-auto relative z-20">
            <div class="flex flex-col md:flex-row items-center gap-10">

                <!-- Кнопка Play (Відео) -->
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = true" aria-label="Відтворити відео"
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
                            <button @click="open = false" aria-label="Закрити відео"
                                class="absolute top-10 right-10 text-white/50 hover:text-white text-4xl">&times;</button>
                            <div class="aspect-video w-full max-w-4xl bg-black shadow-2xl">
                                <!-- Сюди вставити iframe відео -->
                            </div>
                        </div>
                    </template>
                </div>

                <!-- Текстовий блок -->
                <div class="max-w-3xl text-center md:text-left">
                    <h2
                        class="font-[Oswald] text-4xl/10 md:text-7xl/16 drop-shadow-xl font-semibold text-white text-balance mb-5">
                        Хочете побачити нас <span class="text-emerald-500 font-[Lora] font-black italic">у справі</span>?
                        Наша робота <span class="text-emerald-500 font-[Lora] font-black italic">говорить</span> сама за
                        себе!
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
                    <x-section.badge class="mb-2.5">FAQs</x-section.badge>
                    <x-section.title tag="h2" size="lg">
                        Питання та <span class="text-emerald-600 font-[Lora] font-black italic">відповіді</span>
                    </x-section.title>
                    <x-section.description>
                        Все, що варто знати перед замовленням
                    </x-section.description>
                </div>
                <a href="{{ route('feedback') }}"
                    class="inline-flex font-display items-center gap-1.5 mt-5 lg:mt-0 text-xs font-semibold uppercase tracking-wider text-emerald-700 hover:text-emerald-800 transition-colors">
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
                                    :class="active === {{ $loop->index }} ? 'bg-emerald-700 rotate-45 text-white' :
                                        'bg-slate-100 text-slate-700'">
                                    <span class="font-display text-sm font-bold"
                                        :class="active === {{ $loop->index }} ? '-rotate-45' : ''">0{{ $loop->index + 1 }}</span>
                                </div>
                                <span class="font-bold text-sm md:text-base transition-colors"
                                    :class="active === {{ $loop->index }} ? 'text-slate-900' : 'text-slate-800'">
                                    {{ $item['q'] }}
                                </span>
                            </div>
                            <div class="transition-transform duration-500 text-slate-500"
                                :class="active === {{ $loop->index }} ? 'rotate-180 text-emerald-600' : ''">
                                <i class="fas fa-chevron-down text-[10px]"></i>
                            </div>
                        </button>

                        <div x-show="active === {{ $loop->index }}" x-collapse x-cloak>
                            <div class="px-5 pb-5 ml-0 md:ml-14">
                                <p class="text-slate-700 text-base leading-relaxed max-w-xl">
                                    {{ $item['a'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @include('partials.blog-section')
@endsection

@push('styles')
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
            will-change: transform;
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
@endpush
