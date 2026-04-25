<?php
use function Laravel\Folio\name;
name('feedback');
?>

@extends('layouts.base')

@section('header')
    <x-page-header image="https://images.unsplash.com/photo-1520607162513-77705c0f0d4a?q=80&w=1000&auto=format&fit=crop">
        <x-slot:title>
            Зв'яжіться з нами
        </x-slot>
        <x-slot:description>
            Ми завжди відкриті до ваших запитань, пропозицій та конструктивної критики.
            Ваш відгук допомагає нам ставати кращими.
        </x-slot>
    </x-page-header>
@endsection

@section('content')
    <x-section class="bg-gray-50/50">
        <div class="max-w-6xl mx-auto">

            <!-- Контактні блоки в один ряд -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                <!-- Картка телефону -->
                <div
                    class="group relative overflow-hidden p-5 bg-slate-50 rounded-2xl border border-slate-200/80 flex flex-col items-center text-center">
                    <!-- Background Decor -->
                    <div class="absolute inset-0 z-0">
                        <img src="https://images.unsplash.com/photo-1520607162513-77705c0f0d4a?q=80&w=1000&auto=format&fit=crop"
                            class="w-full h-full object-cover opacity-[0.04] group-hover:opacity-[0.1] transition-opacity duration-500" />
                    </div>
                    <div
                        class="absolute -right-6 -bottom-6 z-0 opacity-[0.05] group-hover:opacity-[0.1] group-hover:-translate-y-2 transition-all duration-500">
                        <x-lucide-phone-call class="size-32 -rotate-12 text-tryit-orange" />
                    </div>

                    <div class="relative z-10 flex flex-col items-center">
                        <div
                            class="size-12 bg-tryit-orange/10 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                            <x-lucide-phone class="size-6 text-tryit-orange" />
                        </div>
                        <h3 class="font-display font-bold text-tryit-dark mb-1 uppercase tracking-wide text-sm">
                            Зателефонуйте нам
                        </h3>
                        <p class="text-xs text-gray-400 mb-2.5 font-medium">Питання та замовлення</p>
                        <a href="tel:+380978778667"
                            class="text-lg font-bold text-tryit-dark hover:text-tryit-orange transition-colors">
                            +380 (97) 877-866-7
                        </a>
                    </div>
                </div>

                <!-- Картка пошти -->
                <div
                    class="group relative overflow-hidden p-5 bg-slate-50 rounded-2xl border border-slate-200/80 flex flex-col items-center text-center">
                    <!-- Background Decor -->
                    <div class="absolute inset-0 z-0">
                        <img src="https://images.unsplash.com/photo-1554415707-6e8cfc93fe23?q=80&w=1000&auto=format&fit=crop"
                            class="w-full h-full object-cover opacity-[0.04] group-hover:opacity-[0.1] transition-opacity duration-500" />
                    </div>
                    <div
                        class="absolute -right-6 -bottom-6 z-0 opacity-[0.05] group-hover:opacity-[0.1] group-hover:-translate-y-2 transition-all duration-500">
                        <x-lucide-mail-open class="size-32 -rotate-12 text-tryit-orange" />
                    </div>

                    <div class="relative z-10 flex flex-col items-center">
                        <div
                            class="size-12 bg-tryit-orange/10 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                            <x-lucide-mail class="size-6 text-tryit-orange" />
                        </div>
                        <h3 class="font-display font-bold text-tryit-dark mb-1 uppercase tracking-wide text-sm">
                            Напишіть нам
                        </h3>
                        <p class="text-xs text-gray-400 mb-2.5 font-medium">Для інформації та пропозицій</p>
                        <a href="mailto:info@tryit.com.ua"
                            class="text-lg font-bold text-tryit-dark hover:text-tryit-orange transition-colors">
                            info@tryit.com.ua
                        </a>
                    </div>
                </div>

                <!-- Соціальні мережі -->
                <div
                    class="group relative overflow-hidden p-5 bg-slate-50 rounded-2xl border border-slate-200/80 flex flex-col items-center text-center">
                    <!-- Background Decor -->
                    <div class="absolute inset-0 z-0">
                        <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?q=80&w=1000&auto=format&fit=crop"
                            class="w-full h-full object-cover opacity-[0.04] group-hover:opacity-[0.1] transition-opacity duration-500" />
                    </div>
                    <div
                        class="absolute -right-6 -bottom-6 z-0 opacity-[0.05] group-hover:opacity-[0.1] group-hover:-translate-y-2 transition-all duration-500">
                        <x-lucide-users class="size-32 -rotate-12 text-tryit-orange" />
                    </div>

                    <div class="relative z-10 flex flex-col items-center">
                        <div
                            class="size-12 bg-tryit-orange/10 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                            <x-lucide-share-2 class="size-6 text-tryit-orange" />
                        </div>
                        <h3 class="font-display font-bold text-tryit-dark mb-1 uppercase tracking-wide text-sm">
                            Ми в соцмережах
                        </h3>
                        <p class="text-xs text-gray-400 mb-2.5 font-medium">Приєднуйтесь до нас</p>
                        <div class="flex gap-4">
                            <a href="http://www.instagram.com/try.it_cleaning?igsh=NGJxNDY4cnFwZ29k&utm_source=qr"
                                target="_blank" class="p-2 hover:bg-orange-50 rounded-lg transition-colors group/icon">
                                <img src="{{ Vite::asset('resources/images/icons/instagram.svg') }}"
                                    class="size-6 group-hover/icon:scale-110 transition-transform" />
                            </a>
                            <a href="#" class="p-2 hover:bg-orange-50 rounded-lg transition-colors group/icon">
                                <img src="{{ Vite::asset('resources/images/icons/telegram.svg') }}"
                                    class="size-6 group-hover/icon:scale-110 transition-transform" />
                            </a>
                            <a href="viber://call?number=380978778667"
                                class="p-2 hover:bg-orange-50 rounded-lg transition-colors group/icon">
                                <img src="{{ Vite::asset('resources/images/icons/viber.svg') }}"
                                    class="size-6 group-hover/icon:scale-110 transition-transform" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Форма зворотного зв'язку -->
            <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-5 md:gap-10 relative">
                <!-- Фонове зображення як водяний знак -->
                <div class="absolute inset-0 z-0 pointer-events-none">
                    <img src="https://demo2.pavothemes.com/cetro/wp-content/uploads/2025/07/h1-asked.png"
                        class="size-full object-contain object-center opacity-8" />
                </div>

                <div class="relative z-10">
                    <x-section.title class="mb-5" size="lg">
                        Ми на зв’язку — <span class="text-emerald-500">пишіть</span> нам
                    </x-section.title>
                    <x-section.caption class="text-base!">
                        Є запитання, цікава ідея чи пропозиція? Ми завжди на зв’язку! Пишіть нам що вас цікавить: від
                        консультацій щодо складних забруднень до пропозицій про співпрацю чи ідей, як зробити
                        наш сервіс ще кращим. Ми готові обговорювати будь-які ваші запити зі світу чистоти!
                    </x-section.caption>
                </div>

                <div class="relative z-10">
                    @livewire('feedback')
                </div>
            </div>
        </div>
    </x-section>
@endsection
