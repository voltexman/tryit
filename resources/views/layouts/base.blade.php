<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $meta_title ?? config('app.name') }}</title>
    <meta name="description" content="{{ $meta_description ?? 'Опис за замовчуванням' }}">

    <meta name="google-site-verification" content="fsrylmGFBJ7d7DJ_JlXie1uxWstE-InnV6R0eFJKphE" />

    <link rel="shortcut icon" href="favicon.ico">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>

<body x-data="{ loading: true }" class="font-sans antialiased">
    <header class="relative overflow-hidden">
        <nav class="absolute bg-transparent h-20 w-full top-0 z-50 px-5 xl:px-0 transition-all duration-300">
            <div class="flex justify-between h-full max-w-7xl mx-auto items-center">
                <div class="relative w-auto mt-5">
                    <a href="{{ route('main') }}" aria-label="Перейти на головну сторінку натиснувши на логотип">
                        <img src="{{ Vite::asset('resources/images/logo.png') }}"
                            class="relative top-0 left-0 h-10 z-50" width="120" height="40"
                            alt="Логотип компанії" />
                    </a>
                </div>

                <div class="lg:hidden">
                    <x-sidebar>
                        <x-slot:trigger>
                            <button type="button" aria-label="Відкрити головне меню" x-on:click="open = true">
                                <x-lucide-menu class="size-6 stroke-white" />
                            </button>
                        </x-slot>
                        <x-slot:title>Головне меню</x-slot>

                        <x-slot:body>
                            <x-navigation class="lg:hidden">
                                <x-navigation.item :link="route('main')" icon="home" :active="request()->routeIs('main')">
                                    Головна
                                </x-navigation.item>
                                <x-navigation.item :link="route('services')" icon="hand-platter" :active="request()->routeIs('services')">
                                    Послуги
                                </x-navigation.item>
                                <x-navigation.item :link="route('feedback')" icon="book-user" :active="request()->routeIs('feedback')">
                                    Контакти
                                </x-navigation.item>
                                <x-navigation.item :link="route('blog')" icon="newspaper" :active="request()->routeIs('blog*')">
                                    Блог
                                </x-navigation.item>
                            </x-navigation>
                            <a href="{{ route('legal.privacy-policy') }}" class="flex gap-x-1.5 items-center text-sm">
                                <x-lucide-shield-check class="size-5" />
                                <span>Політика конфіденційності</span>
                            </a>
                            <a href="{{ route('legal.terms-of-service') }}" class="flex gap-x-1.5 items-center text-sm">
                                <x-lucide-scroll-text class="size-5" />
                                <span>Умови надання послуг</span>
                            </a>
                        </x-slot>
                    </x-sidebar>
                </div>

                <x-navigation class="hidden lg:flex">
                    <x-navigation.item :link="route('main')" icon="book-user" :active="request()->routeIs('main')">
                        <x-lucide-home class="size-4" />
                    </x-navigation.item>
                    <x-navigation.item :link="route('services')" :active="request()->routeIs('services')">
                        Послуги
                    </x-navigation.item>
                    <x-navigation.item :link="route('feedback')" :active="request()->routeIs('feedback')">
                        Контакти
                    </x-navigation.item>
                    <x-navigation.item :link="route('blog')" :active="request()->routeIs('blog*')">
                        Блог
                    </x-navigation.item>
                </x-navigation>

                <div class="hidden lg:flex text-white text-xl font-display font-semibold items-center gap-2.5">
                    <x-lucide-phone class="size-6" />
                    <span>+380 (97) 877-866-7</span>
                </div>
            </div>
        </nav>
        @yield('header')
    </header>

    @yield('content')

    <footer class="bg-stone-900">
        {{-- Main footer --}}
        <div class="max-w-6xl mx-auto px-5 pt-14 pb-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 lg:gap-8">

                {{-- Column 1: Brand --}}
                <div class="lg:col-span-1">
                    <a href="{{ route('main') }}" class="inline-block mb-4">
                        <img src="{{ Vite::asset('resources/images/logo.png') }}" class="h-10" width="120"
                            height="40" alt="Логотип Try It" loading="lazy" />
                    </a>
                    <p class="text-tryit-cream/60 text-sm leading-relaxed mb-5">
                        Професійна клінінгова компанія. Чистота вашого офісу, виробництва та дому &mdash; наша
                        відповідальність.
                    </p>
                    <div class="flex items-center gap-3">
                        <a href="https://www.instagram.com/try.it_cleaning?igsh=NGJxNDY4cnFwZ29k&utm_source=qr"
                            target="_blank" aria-label="Instagram"
                            class="size-9 rounded-full bg-white/5 hover:bg-tryit-orange/20 flex items-center justify-center transition-colors duration-300">
                            <img src="{{ Vite::asset('resources/images/icons/footer-instagram.svg') }}" class="size-4"
                                loading="lazy" alt="" />
                        </a>
                        <a href="#" aria-label="Telegram"
                            class="size-9 rounded-full bg-white/5 hover:bg-tryit-orange/20 flex items-center justify-center transition-colors duration-300">
                            <img src="{{ Vite::asset('resources/images/icons/footer-telegram.svg') }}" class="size-4"
                                loading="lazy" alt="" />
                        </a>
                        <a href="viber://chat?number=380978778667" aria-label="Viber"
                            class="size-9 rounded-full bg-white/5 hover:bg-tryit-orange/20 flex items-center justify-center transition-colors duration-300">
                            <img src="{{ Vite::asset('resources/images/icons/footer-viber.svg') }}" class="size-4"
                                loading="lazy" alt="" />
                        </a>
                    </div>
                </div>

                {{-- Column 2: Services --}}
                <div class="hidden lg:block">
                    <h4 class="font-display font-bold text-white text-sm uppercase tracking-wider mb-4">Послуги</h4>
                    <ul class="space-y-2.5">
                        <li><a href="{{ route('services.kompleksne-ta-pidtrymuiuche-prybyrannia-ofisu') }}"
                                class="text-tryit-cream/60 text-sm hover:text-tryit-orange transition-colors">Прибирання
                                офісів</a></li>
                        <li><a href="{{ route('services.heneralne-prybyrannia-tsekhiv-ta-vyrobnytstva') }}"
                                class="text-tryit-cream/60 text-sm hover:text-tryit-orange transition-colors">Прибирання
                                виробництв</a></li>
                        <li><a href="{{ route('services.myttia-fasadu-ta-vikon-na-vysoti') }}"
                                class="text-tryit-cream/60 text-sm hover:text-tryit-orange transition-colors">Миття
                                фасадів та вікон</a></li>
                        <li><a href="{{ route('services.khimchystka') }}"
                                class="text-tryit-cream/60 text-sm hover:text-tryit-orange transition-colors">Хімчистка</a>
                        </li>
                        <li><a href="{{ route('services.pisliabudivelne-prybyrannia') }}"
                                class="text-tryit-cream/60 text-sm hover:text-tryit-orange transition-colors">Післябудівельне
                                прибирання</a></li>
                        <li><a href="{{ route('services') }}"
                                class="text-tryit-orange text-sm font-semibold hover:text-tryit-orange/80 transition-colors">Всі
                                послуги &rarr;</a></li>
                    </ul>
                </div>

                {{-- Column 3: Company --}}
                <div>
                    <h4 class="font-display font-bold text-white text-sm uppercase tracking-wider mb-4">Компанія</h4>
                    <ul class="space-y-2.5">
                        <li><a href="{{ route('blog') }}"
                                class="text-tryit-cream/60 text-sm hover:text-tryit-orange transition-colors">Блог</a>
                        </li>
                        <li><a href="{{ route('gallery') }}"
                                class="text-tryit-cream/60 text-sm hover:text-tryit-orange transition-colors">Галерея</a>
                        </li>
                        <li><a href="{{ route('feedback') }}"
                                class="text-tryit-cream/60 text-sm hover:text-tryit-orange transition-colors">Зворотній
                                зв'язок</a></li>
                        <li class="pt-2 border-t border-white/5">
                            <a href="{{ route('legal.privacy-policy') }}"
                                class="text-tryit-cream/40 text-xs hover:text-tryit-cream/70 transition-colors">Політика
                                конфіденційності</a>
                        </li>
                        <li><a href="{{ route('legal.terms-of-service') }}"
                                class="text-tryit-cream/40 text-xs hover:text-tryit-cream/70 transition-colors">Умови
                                надання послуг</a></li>
                        <li><a href="{{ route('legal.guarantee-policy') }}"
                                class="text-tryit-cream/40 text-xs hover:text-tryit-cream/70 transition-colors">Гарантії
                                та повернення</a></li>
                        <li><a href="{{ route('legal.cookie-policy') }}"
                                class="text-tryit-cream/40 text-xs hover:text-tryit-cream/70 transition-colors">Політика
                                cookies</a></li>
                    </ul>
                </div>

                {{-- Column 4: Contacts --}}
                <div>
                    <h4 class="font-display font-bold text-white text-sm uppercase tracking-wider mb-4">Контакти</h4>
                    <ul class="space-y-3">
                        <li>
                            <a href="tel:+380978778667" class="flex items-center gap-2.5 group">
                                <div
                                    class="size-8 rounded-lg bg-white/5 flex items-center justify-center group-hover:bg-tryit-orange/20 transition-colors">
                                    <x-lucide-phone class="size-4 text-tryit-cream/70" stroke-width="1.5" />
                                </div>
                                <span
                                    class="text-tryit-cream/80 text-sm font-semibold group-hover:text-white transition-colors">+380
                                    (97) 877-866-7</span>
                            </a>
                        </li>
                        <li>
                            <a href="mailto:info@tryit.com.ua" class="flex items-center gap-2.5 group">
                                <div
                                    class="size-8 rounded-lg bg-white/5 flex items-center justify-center group-hover:bg-tryit-orange/20 transition-colors">
                                    <x-lucide-mail class="size-4 text-tryit-cream/70" stroke-width="1.5" />
                                </div>
                                <span
                                    class="text-tryit-cream/80 text-sm group-hover:text-white transition-colors">info@tryit.com.ua</span>
                            </a>
                        </li>
                        <li>
                            <div class="flex items-start gap-2.5">
                                <div class="size-8 rounded-lg bg-white/5 flex items-center justify-center shrink-0">
                                    <x-lucide-clock class="size-4 text-tryit-cream/70" stroke-width="1.5" />
                                </div>
                                <div class="text-sm">
                                    <span class="text-tryit-cream/80 font-semibold">Пн–Пт:</span> <span
                                        class="text-tryit-cream/60">08:00 – 20:00</span><br>
                                    <span class="text-tryit-cream/80 font-semibold">Сб–Нд:</span> <span
                                        class="text-tryit-cream/60">09:00 – 18:00</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-start gap-2.5">
                                <div class="size-8 rounded-lg bg-white/5 flex items-center justify-center shrink-0">
                                    <x-lucide-map-pin class="size-4 text-tryit-cream/70" stroke-width="1.5" />
                                </div>
                                <span class="text-tryit-cream/60 text-sm">м. Київ, Україна</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- Bottom bar --}}
        <div class="border-t border-white/5">
            <div class="max-w-7xl mx-auto px-5 py-5 flex flex-col md:flex-row items-center justify-between gap-0.5">
                <span class="text-xs text-tryit-cream/40 text-center">
                    &copy; {{ date('Y') }} {{ config('app.name') }}. Всі права застережено.
                </span>
                <span class="text-xs text-tryit-cream/30">
                    Розробка сайту &mdash; <a href="#" class="">LEV</a>
                </span>
            </div>
        </div>
    </footer>

    @livewireScripts
</body>

</html>
