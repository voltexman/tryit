<?php
use function Laravel\Folio\name;
name('main');
?>

<x-layouts::app>
    <x-slot:meta_title>Клінінгова компанія Київ | Професійне прибирання {{ env('APP_NAME') }}</x-slot:meta_title>
    <x-slot:meta_description>
        Професійний клінінг у Києві для дому, офісів та виробництв. Прибирання після ремонту, миття вікон та фасадів
        еко-засобами. 100% гарантія якості!
    </x-slot:meta_description>
    <x-slot:meta_robots>index, follow</x-slot:meta_robots>
    <x-slot:meta_image>{{ Vite::asset('resources/images/header-bg.png') }}</x-slot:meta_image>

    <x-slot:header>
        <header class="relative h-dvh overflow-hidden bg-black text-white">
            <!-- Background image -->
            <!-- Mobile -->
            <div class="absolute inset-0 bg-cover bg-center lg:hidden"
                style="background-image: url('{{ Vite::asset('resources/images/header-bg-mobile.png') }}');">
            </div>

            <!-- Desktop -->
            <div class="absolute inset-0 hidden bg-cover bg-center lg:block"
                style="background-image: url('{{ Vite::asset('resources/images/header-bg-desktop.png') }}');">
            </div>

            <!-- Overlay -->
            <div
                class="absolute inset-0 bg-linear-to-b lg:bg-linear-to-r from-slate-950/70 via-slate-950/40 to-slate-950/10">
            </div>

            <!-- Content -->
            <div
                class="relative mt-10 lg:mt-0 z-10 mx-auto flex h-full max-w-5xl justify-center items-center lg:justify-start">
                <div>
                    <!-- Title -->
                    <h1
                        class="font-display drop-shadow-xl italic font-black text-center lg:text-left uppercase tracking-tight">
                        <span class="block text-6xl md:text-9xl lg:text-8xl text-tryit-orange/80">
                            Чистота,
                        </span>

                        <span class="inline-block text-6xl lg:text-5xl text-tryit-cream mt-2">яку варто</span>

                        <span class="inline-block text-5xl lg:text-5xl text-tryit-orange/80"> спробувати!</span>
                    </h1>

                    <!-- Description -->
                    <p
                        class="mt-5 max-w-140 text-xl text-balance text-center lg:text-left px-5 lg:px-0 leading-relaxed text-tryit-cream sm:text-xl">
                        Професійне прибирання для <span class="font-extrabold">бізнесу, виробництва та
                            складів</span>, а також квартир та ваших осель
                    </p>

                    <!-- Features -->
                    <div
                        class="grid mt-5 lg:mt-10 grid-cols-3 lg:grid-cols-4 gap-1.5 lg:gap-10 justify-center items-center justify-items-center lg:justify-items-start">
                        <!-- Item -->
                        <div class="text-center lg:text-left flex flex-col items-center lg:items-start">
                            <div class="mb-2 flex items-center justify-center">
                                <x-lucide-shield-check class="size-12 text-orange-500" stroke-width="1" />
                            </div>

                            <h3 class="text-base text-tryit-cream font-semibold">
                                Надійність
                            </h3>

                            <p class="mt-1 text-sm text-tryit-cream/60">
                                Гарантія якості
                            </p>
                        </div>

                        <!-- Item -->
                        <div class="text-center lg:text-left flex flex-col items-center lg:items-start">
                            <div class="mb-2 flex items-center justify-center">
                                <x-lucide-clock class="size-12 text-orange-500" stroke-width="1" />
                            </div>

                            <h3 class="text-base text-tryit-cream font-semibold">
                                Оперативність
                            </h3>

                            <p class="mt-1 text-sm text-tryit-cream/60">
                                Швидкий виїзд
                            </p>
                        </div>

                        <!-- Item -->
                        <div class="text-center lg:text-left flex flex-col items-center lg:items-start">
                            <div class="mb-2 flex items-center justify-center">
                                <x-lucide-leaf class="size-12 text-orange-500" stroke-width="1" />
                            </div>

                            <h3 class="text-base text-tryit-cream font-semibold">
                                Екологічність
                            </h3>

                            <p class="mt-1 text-sm text-tryit-cream/60">
                                Безпечні засоби
                            </p>
                        </div>

                        <!-- Item -->
                        <div class="hidden lg:flex text-center lg:text-left flex-col items-center lg:items-start">
                            <div class="mb-2 flex items-center justify-center">
                                <x-lucide-badge-check class="size-12 text-orange-500" stroke-width="1" />
                            </div>

                            <h3 class="text-base text-tryit-cream font-semibold">
                                Професіоналізм
                            </h3>

                            <p class="mt-1 text-sm text-tryit-cream/60">
                                Досвідчені команди
                            </p>
                        </div>
                    </div>

                    <!-- Buttons -->
                    <div class="mt-5 lg:mt-10 flex flex-wrap items-center gap-5 justify-center lg:justify-start">
                        <a href="#"
                            @click="Livewire.dispatch('setService', { service: '' }); window.openOffcanvas('orderOffcanvas')"
                            class="inline-flex font-[Oswald] h-14 text-lg items-center tracking-wide justify-center group rounded-full bg-tryit-orange/40 hover:bg-tryit-orange/50 backdrop-blur-xs border border-orange-500/40 px-6 text-[#F5E9D3] font-semibold transition">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                class="mr-1 size-6 group-hover:rotate-45 transition-transform"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16 3 C16.8 8.5 18.5 11.2 21 13 C23.8 14.8 26.5 15.5 29 16 C26.5 16.5 23.8 17.2 21 19 C18.5 20.8 16.8 23.5 16 29 C15.2 23.5 13.5 20.8 11 19 C8.2 17.2 5.5 16.5 3 16 C5.5 15.5 8.2 14.8 11 13 C13.5 11.2 15.2 8.5 16 3Z"
                                    fill="#F5E9D3" />
                            </svg>
                            Замовити послугу
                        </a>

                        <a href="#services"
                            class="hidden lg:inline-flex group items-center gap-3 text-base text-tryit-cream transition hover:text-orange-500">
                            <span class="h-px w-10 bg-orange-500 transition group-hover:w-14"></span>
                            Детальніше про послуги
                        </a>
                    </div>
                </div>
            </div>
        </header>

        <div class="hidden bg-cover bg-center h-dvh"
            style="background-image: url('{{ Vite::asset('resources/images/header.webp') }}');">
            <div class="flex items-center justify-center size-full bg-slate-950/65 backdrop-blur-[1px]">
                <div class="max-w-4xl mx-auto flex flex-col items-center gap-y-5 px-5 text-center">
                    <div
                        class="font-[Lora] text-4xl md:text-6xl xl:text-7xl text-nowrap uppercase text-tryit-cream font-black italic tracking-tight drop-shadow-xl">
                        <span class="text-tryit-orange text-5xl lg:text-8xl font-[Oswald]">Чистота</span>, яку<br>
                        варто <br class="lg:hidden">спробувати<br>
                        <span class="text-tryit-orange text-5xl lg:text-7xl font-[Oswald]">сьогодні</span>
                    </div>

                    <div class="w-16 h-0.5 bg-tryit-orange/80 rounded-full"></div>

                    <p class="text-tryit-cream text-lg md:text-xl xl:text-2xl font-light max-w-xl text-balance">
                        Шукаєте надійну клінінгову компанію?<br class="hidden md:block">
                        Ми подбаємо про чистоту вашого офісу, виробництва чи будинку на найвищому рівні
                    </p>

                    <a href="#services"
                        class="bg-tryit-orange font-display relative py-4 px-8 uppercase text-tryit-cream font-black text-lg tracking-wider rounded-full hover:bg-tryit-orange/90 transition-all duration-300 cursor-pointer"
                        aria-label="Перейти до розділу з нашими послугами">
                        Наші послуги
                    </a>
                </div>
            </div>
        </div>
    </x-slot:header>

    <section class="relative py-10 lg:py-30 bg-slate-50">
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
                    class="size-full object-contain object-center grayscale-100 opacity-50" width="1920"
                    height="1080" loading="lazy" alt="Background pattern">
            </div>

            <div class="relative z-20 text-center max-w-3xl mx-auto pt-10 pb-10">
                <x-section.badge class="mb-5">Ваш дім у надійних руках</x-section.badge>
                <div class="font-[Oswald] text-4xl/9 md:text-6xl/14 tracking-tight text-slate-700 text-balance">
                    Бо ми знаємо, як важливо
                    <span class="text-emerald-700 font-[Lora] font-bold italic">бути в гармонії</span>
                    з чистотою у вашому <span class="text-emerald-700 font-[Lora] font-bold italic">просторі</span>
                </div>
                <p
                    class="max-w-2xl mx-auto mt-8 text-lg md:text-xl text-slate-700 font-light text-balance leading-relaxed">
                    Ми об'єднуємо професіоналів та власників осель, щоб кожен момент вашого відпочинку проходив у
                    бездоганній чистоті.
                </p>

                <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-5">
                    <x-button size="lg" color="emerald" class="group"
                        @click="Livewire.dispatch('setService', { service: '' }); window.openOffcanvas('orderOffcanvas')">
                        <x-lucide-hand-coins class="mr-1 size-6 shrink-0" />
                        Розрахувати вартість
                    </x-button>
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
                    'value' => $service->value,
                    'title' => $service->getTitle(),
                    'description' => $service->getDescription(),
                    'image' => Vite::asset('resources/images/' . $service->getImage()),
                    'link' => route($service->getLink()),
                ],
            ),
        ) }}
    }"
        class="relative w-full flex items-center py-10 lg:py-20 overflow-hidden bg-gray-900 lg:min-h-125"
        id="services">
        <!-- Фонове зображення з плавним переходом -->
        <template x-for="(service, index) in services" :key="index">
            <div x-show="selected === index" x-transition:enter="transition opacity duration-700 ease-in-out"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                x-transition:leave="transition opacity duration-700 ease-in-out"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                class="absolute inset-0 z-0">
                <img :src="service.image" :alt="service.title" class="w-full h-full object-cover" loading="lazy"
                    width="1200" height="600">
                <div
                    class="absolute inset-0 bg-slate-900/70 lg:bg-linear-to-l lg:from-slate-900/70 lg:via-slate-900/30 lg:to-slate-900/20">
                </div>
            </div>
        </template>

        <!-- Контент -->
        <div
            class="max-w-6xl w-full mx-auto px-5 relative z-10 grid grid-cols-1 lg:grid-cols-[1fr_350px] gap-10 lg:gap-0">

            <!-- ЛІВА ЧАСТИНА: Заголовок та опис (видимо на ПК) -->
            <div class="hidden lg:flex flex-col justify-center text-white">
                <div class="space-y-8">
                    <div class="font-display text-5xl xl:text-6xl font-black tracking-wide uppercase leading-tight">
                        Наші<br><span class="text-emerald-500 font-black font-[Lora] italic">послуги</span>
                    </div>

                    <template x-for="(service, index) in services" :key="index">
                        <div x-show="selected === index" x-transition:enter="transition opacity duration-500"
                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                            x-transition:leave="transition opacity duration-300 absolute"
                            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                            class="space-y-6">

                            <p class="text-lg text-white/90 leading-relaxed max-w-xl font-light">
                                <span x-text="service.description"></span>
                            </p>

                            <div class="flex flex-row gap-5 pt-2">
                                <a :href="service.link" wire:navigate
                                    class="px-6 py-3 text-base font-display backdrop-blur-xs bg-slate-500/20 hover:bg-slate-600/20 border border-slate-500/20 text-slate-200/80 hover:text-slate-200 font-semibold rounded-full transition-all duration-300 text-center">
                                    Детальніше
                                    <x-lucide-move-right class="size-4 shrink-0 inline-flex ml-1.5" />
                                </a>
                                <button type="button"
                                    @click="openOffcanvas('orderOffcanvas'), Livewire.dispatch('setService', { service: service.value })"
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
                <div class="font-display text-4xl font-black tracking-wide uppercase leading-tight mb-5">
                    Наші<br><span class="text-emerald-500">послуги</span>
                </div>

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
                            x-transition:leave="transition ease-in duration-200"
                            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0 -translate-y-2"
                            class="mt-4 space-y-2">

                            <p class="text-slate-200/60 leading-snug text-base">
                                <span x-text="service.description"></span>
                            </p>

                            <div class="flex flex-row gap-2 pt-2">
                                <a :href="service.link" wire:navigate
                                    class="px-5 py-2 inline-flex justify-center items-center w-fit bg-slate-500/25 tracking-wide hover:bg-slate-500/30 text-white font-display font-semibold rounded-full transition-all duration-300 text-center text-sm border border-slate-500/30 backdrop-blur-xs">
                                    Детальніше
                                    <x-lucide-move-right class="size-4 shrink-0 inline-flex ml-1.5" />
                                </a>
                                <button type="button"
                                    @click="Livewire.dispatch('setService', { service: service.value }); window.openOffcanvas('orderOffcanvas')"
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
                        <div class="font-display text-xl font-semibold transition-colors duration-300"
                            :class="selected === index ? 'text-emerald-400' : 'text-white/70 group-hover:text-white'"
                            x-text="service.title"></div>
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
                                        <div
                                            class="text-5xl font-semibold font-[Lora] text-orange-500 tracking-tighter flex">
                                            Try
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 54 54"
                                                class="size-5 self-center ml-1.5 text-slate-100">
                                                <g fill="none" class="nc-icon-wrapper">
                                                    <g clip-path="url(#1751600403171-8248782_clip0_1948_4490)">
                                                        <mask style="mask-type:luminance" maskUnits="userSpaceOnUse"
                                                            x="0" y="0" width="54" height="54">
                                                            <path d="M54 0H0V54H54V0Z" fill="#fff"></path>
                                                        </mask>
                                                        <g mask="url(#1751600403171-8248782_mask0_1948_4490)">
                                                            <path
                                                                d="M27.7371 0.655207C28.7745 14.36 39.64 25.2255 53.3448 26.2629C54.273 26.3175 54.273 27.6279 53.3448 27.7371C39.64 28.7745 28.7745 39.64 27.7371 53.3448C27.6825 54.273 26.3721 54.273 26.2629 53.3448C25.2255 39.64 14.36 28.7745 0.655207 27.7371C-0.218402 27.6825 -0.218402 26.3721 0.655207 26.2629C14.36 25.2255 25.2255 14.36 26.2629 0.655207C26.3721 -0.218402 27.6825 -0.218402 27.7371 0.655207Z"
                                                                fill="currentColor"></path>
                                                        </g>
                                                    </g>
                                                    <defs>
                                                        <clipPath>
                                                            <path fill="currentColor" d="M0 0H54V54H0z"></path>
                                                        </clipPath>
                                                    </defs>
                                                </g>
                                            </svg>
                                            It
                                        </div>
                                        <p class="text-xs text-white/90 uppercase tracking-wide">Клінінгова компанія
                                        </p>
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
                                                    class="text-[9px] text-white uppercase tracking-widest font-medium">
                                                    Клавіші
                                                </span>
                                            </div>

                                            {{-- Кнопка скидання (Центральна) --}}
                                            <div class="flex flex-col items-center">
                                                <div
                                                    class="size-14 rounded-full bg-red-500 flex items-center justify-center shadow-[0_0_30px_rgba(239,68,68,0.5)]">
                                                    <x-lucide-phone
                                                        class="size-8 fill-white stroke-white rotate-135" />
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
                                                <span
                                                    class="text-[9px] text-white uppercase tracking-widest font-medium">
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
                            <div class="font-[Lora] italic text-3xl md:text-5xl font-black tracking-tight">
                                Чистота в один клік!
                            </div>

                            <p class="text-white text-base md:text-lg leading-relaxed font-light lg:text-balance">
                                Поки ви керуєте справами, ми створюємо ідеальну чистоту. TryIt — професійний клінінг
                                для тих, хто цінує свій час та бездоганний результат.
                            </p>

                            <div class="font-display text-3xl text-slate-50 font-black">
                                +380 (97) 877-866-7
                            </div>

                            <div class="text-white text-sm font-medium mb-2">
                                Передзвонити вам? <br><span class="text-xs text-white/90">
                                    Просто вкажіть свій номер.</span>
                            </div>

                            {{-- Кнопки маркетів --}}
                            <livewire:callback />
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
                <x-section.title tag="div" color="white" size="lg" class="text-center">
                    Чому обирають <span
                        class="text-emerald-400 font-[Lora] text-5xl lg:text-7xl font-black italic">нас</span>?
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

                <div class="grid grid-cols-3 gap-5 mt-10">
                    <div class="flex flex-col items-center text-center md:items-start md:text-left">
                        <div class="font-display text-4xl lg:text-5xl font-black text-slate-50 mb-4">
                            12+
                        </div>
                        <div class="font-display text-base lg:text-lg text-slate-50 uppercase font-semibold mb-2.5">
                            років <br class="lg:hidden">досвіду
                        </div>
                        <p class="hidden lg:block text-slate-50/50 text-base leading-normal">
                            Понад десятиліття допомагаємо підтримувати чистоту, відточуючи кожну деталь нашого сервісу.
                        </p>
                    </div>

                    <div class="flex flex-col items-center text-center md:items-start md:text-left">
                        <div class="font-display text-4xl lg:text-5xl font-black text-slate-50 mb-4">
                            300+
                        </div>
                        <div class="font-display text-base lg:text-lg text-slate-50 uppercase font-semibold mb-2.5">
                            задоволених <br class="lg:hidden">клієнтів
                        </div>
                        <p class="hidden lg:block text-slate-50/50 text-base leading-normal">
                            Нам довіряють і рекомендують — більшість клієнтів, з задоволенням, повертаються до нас
                            знову.
                        </p>
                    </div>

                    <div class="flex flex-col items-center text-center md:items-start md:text-left">
                        <div class="font-display text-4xl lg:text-5xl font-black text-slate-50 mb-4">
                            100%
                        </div>
                        <div class="font-display text-base lg:text-lg text-slate-50 uppercase font-semibold mb-2.5">
                            гарантія <br class="lg:hidden">якості
                        </div>
                        <p class="hidden lg:block text-slate-50/50 text-base leading-normal">
                            Ми впевнені у нашому результаті: якщо вас щось не влаштує в роботі — ми безкоштовно
                            виправимо.
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
                <x-section.title tag="div" size="lg">
                    Ваш час занадто <span class="text-emerald-500 font-[Lora] font-black italic">дорогий</span>, <br>
                    щоб <span class="text-emerald-500 font-[Lora] font-black italic">витрачати</span> його на бруд
                </x-section.title>
            </div>

            <div x-data x-init="window.animateFeatures($el)" class="grid grid-cols-1 lg:grid-cols-3 gap-5 lg:gap-10 relative">

                <div class="feature-animate-item group relative pt-5 z-10">
                    <div
                        class="absolute top-3 right-3 text-[9rem] font-black text-slate-500/8 leading-none select-none z-20 transition-colors">
                        01</div>

                    <div
                        class="relative z-10 bg-slate-100 p-8 rounded-3xl border border-slate-100 transition-all duration-500 group-hover:shadow-2xl group-hover:-translate-y-2">
                        <div
                            class="size-16 bg-slate-900 rounded-2xl flex items-center justify-center mb-5 shadow-xl group-hover:bg-emerald-600 group-hover:rotate-10 transition-all duration-500">
                            <x-lucide-timer class="size-8 stroke-slate-100" />
                        </div>

                        <div class="font-display text-2xl font-bold text-slate-700 mb-2.5">Домовимось за хвилину</div>
                        <p class="text-slate-500 leading-relaxed mb-5 text-base">
                            Досить витрачати вечори на <span class="text-slate-800 font-medium">планування</span>.
                            Ми відійшли від довгих форм. Просто вкажіть
                            <span class="text-slate-950 font-medium">адресу</span> та час
                            — решту ми беремо <span class="text-slate-950 font-medium">на себе</span>.
                        </p>

                        <div
                            class="flex items-center gap-2 text-emerald-700 font-bold text-xs uppercase tracking-wider">
                            <span class="w-8 h-px bg-emerald-700"></span>
                            Займає ~60 секунд
                        </div>
                    </div>
                </div>

                <div class="feature-animate-item group relative z-10 pt-5 lg:mt-15">
                    <div
                        class="absolute top-3 right-3 text-[9rem] font-black text-slate-500/15 leading-none select-none z-20 transition-colors">
                        02</div>

                    <div
                        class="relative z-10 bg-slate-900 p-8 rounded-3xl shadow-2xl transition-all duration-500 group-hover:-translate-y-2">
                        <div
                            class="size-16 bg-emerald-500 rounded-2xl flex items-center justify-center mb-5 shadow-lg shadow-emerald-500/40 group-hover:scale-110 transition-transform">
                            <x-lucide-sparkles class="size-8 stroke-slate-100" />
                        </div>

                        <div class="font-display text-2xl font-bold text-white mb-2.5">Усе необхідне - з нас</div>
                        <p class="text-slate-400 leading-relaxed mb-5 text-base">
                            Ми приїжджаємо з повним арсеналом: від потужного промислового
                            <span class="text-slate-50 font-medium">обладнання</span> до сертифікованої
                            <span class="text-slate-50 font-medium">еко-хімії</span>. Вам не потрібно забезпечувати
                            інвентар. Процес налагоджений так, щоб
                            <span class="text-slate-50 font-medium">не відволікати</span>
                            вас від основних справ.
                        </p>

                        <div
                            class="inline-flex items-center gap-2 px-4 py-2 bg-slate-800 rounded-full text-emerald-400 text-[10px] font-bold uppercase tracking-tighter border border-slate-700">
                            <span class="flex size-2 rounded-full bg-emerald-500 animate-pulse"></span>
                            Клінер вже в дорозі
                        </div>
                    </div>
                </div>

                <div class="feature-animate-item group relative pt-5 z-10">
                    <div
                        class="absolute top-3 right-3 text-[9rem] font-black text-slate-500/8 leading-none select-none z-20 transition-colors">
                        03</div>

                    <div
                        class="relative z-10 bg-slate-100 p-8 rounded-3xl border border-slate-100 transition-all duration-500 group-hover:shadow-2xl group-hover:-translate-y-2">
                        <div
                            class="size-16 bg-emerald-500 border-2 border-slate-700 rounded-2xl flex items-center justify-center mb-5 shadow-xl transition-all duration-500">
                            <x-lucide-smile-plus class="size-8 stroke-slate-700 transition-all duration-500" />
                        </div>

                        <div class="font-display text-2xl font-bold text-slate-700 mb-2.5">Насолоджуйтесь</div>
                        <p class="text-slate-500 leading-relaxed mb-5 text-base">
                            Перевірте <span class="text-slate-950 font-medium">якість</span> роботи та насолоджуйтеся
                            свіжістю. Оплата списується лише після вашого
                            <span class="text-slate-950 font-medium">схвалення</span>. Ви отримуєте не просто
                            прибирання,
                            а
                            <span class="text-slate-950 font-medium">ідеальний простір</span> для життя.
                        </p>

                        <div class="text-xs text-slate-600 font-medium">300+ чистих об'єктів</div>
                    </div>
                </div>

            </div>

            <div class="mt-10 lg:mt-20 flex justify-center">
                <x-button size="lg"
                    @click="Livewire.dispatch('setService', { service: '' }); window.openOffcanvas('orderOffcanvas')">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                        class="mr-1 size-6 fill-white group-hover:rotate-45 transition-transform"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M16 3 C16.8 8.5 18.5 11.2 21 13 C23.8 14.8 26.5 15.5 29 16 C26.5 16.5 23.8 17.2 21 19 C18.5 20.8 16.8 23.5 16 29 C15.2 23.5 13.5 20.8 11 19 C8.2 17.2 5.5 16.5 3 16 C5.5 15.5 8.2 14.8 11 13 C13.5 11.2 15.2 8.5 16 3Z" />
                    </svg>
                    Позбутися бруду
                </x-button>
            </div>
        </div>
    </section>

    <section class="relative min-h-140 lg:min-h-150 flex items-center overflow-hidden bg-slate-900 px-6 py-20" x-data
        x-init="window.animateCta($el)">
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
        <div id="cta-logo-bg"
            class="absolute bottom-[-1.3em] lg:bottom-[-4.2em] left-1/2 -translate-x-1/2 z-10 select-none pointer-events-none">
            <img src="{{ Vite::asset('resources/images/logo.png') }}"
                class="size-full scale-150 opacity-20 pointer-events-none z-30" alt="Decorative element">
        </div>

        <div class="max-w-6xl mx-auto relative z-20">
            <div class="flex flex-col md:flex-row items-center gap-10">

                <!-- Кнопка Play (Відео) -->
                <div x-data="{ open: false }" class="relative" id="cta-play-wrapper">
                    <button @click="open = true" aria-label="Відтворити відео"
                        class="group relative size-32 bg-tryit-orange/20 rounded-full flex items-center justify-center backdrop-blur-md border border-white/30 transition-transform hover:scale-110">
                        <!-- Анімовані хвилі -->
                        <span class="absolute inset-0 rounded-full bg-tryit-orange animate-ping opacity-20"></span>

                        <div id="cta-play-inner"
                            class="size-20 bg-tryit-orange rounded-full flex items-center justify-center shadow-xl shadow-tryit-orange/40 group-hover:bg-tryit-orange/80 transition-colors">
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
                    <div id="cta-headline"
                        class="font-[Oswald] text-5xl md:text-7xl drop-shadow-xl font-semibold text-white text-balance mb-5">
                        Хочете побачити нас <span class="text-6xl text-emerald-500 font-[Lora] font-black italic">
                            у справі</span>? Наша робота
                        <span class="text-emerald-500 font-[Lora] font-black italic">говорить</span> сама
                        за себе!
                    </div>

                    <div id="cta-stars-block"
                        class="flex flex-col md:flex-row items-center justify-center md:justify-start gap-3">
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

    {{-- === FEEDBACKS === --}}
    <livewire:feedback-section />

    <section class="py-20 relative overflow-hidden bg-slate-100" x-data="{ active: 1 }" x-init="window.animateFaq($el)">
        <div class="max-w-3xl relative z-10 mx-auto px-5">
            <div class="mb-10 flex flex-col lg:flex-row lg:items-center lg:justify-between">
                <div>
                    <x-section.badge class="mb-2.5">FAQs</x-section.badge>
                    <x-section.title tag="div" size="lg">
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
                    <div class="faq-animate-item bg-white overflow-hidden rounded-2xl border border-gray-200 cursor-pointer hover:bg-slate-50 transition-[background-color,border-color,box-shadow] duration-300"
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

    {{-- === BLOG === --}}
    <section class="py-24 bg-slate-200/60 text-white overflow-hidden relative">
        <div class="absolute inset-0 z-0">
            <img src="{{ Vite::asset('resources/images/h2-background04.jpg') }}" alt=""
                class="size-full object-cover opacity-25 grayscale" />
            <div class="absolute inset-0 bg-slate-50/15"></div>
        </div>

        <div class="max-w-6xl mx-auto px-6 relative z-10">
            <livewire:blog-posts lazy />
        </div>
    </section>
</x-layouts::app>
