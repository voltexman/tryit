<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- SEO Meta Tags --}}
    <title>{{ $meta_title ?? config('app.name') }}</title>
    <meta name="description"
        content="{{ $meta_description ?? 'Професійна клінінгова компанія TryIt. Чистота вашого офісу, виробництва та дому — наша відповідальність.' }}">
    <link rel="canonical" href="{{ request()->url() }}">
    <meta name="robots" content="index, follow">

    {{-- Open Graph / Facebook --}}
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ request()->url() }}">
    <meta property="og:title" content="{{ $meta_title ?? config('app.name') }}">
    <meta property="og:description"
        content="{{ $meta_description ?? 'Професійна клінінгова компанія TryIt. Чистота вашого офісу, виробництва та дому — наша відповідальність.' }}">
    <meta property="og:image"
        content="{{ isset($meta_image) ? asset($meta_image) : Vite::asset('resources/images/header.webp') }}">
    <meta property="og:site_name" content="{{ config('app.name') }}">
    <meta property="og:locale" content="{{ str_replace('_', '-', app()->getLocale()) }}">

    {{-- Twitter --}}
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ request()->url() }}">
    <meta property="twitter:title" content="{{ $meta_title ?? config('app.name') }}">
    <meta property="twitter:description"
        content="{{ $meta_description ?? 'Професійна клінінгова компанія TryIt. Чистота вашого офісу, виробництва та дому — наша відповідальність.' }}">
    <meta property="twitter:image"
        content="{{ isset($meta_image) ? asset($meta_image) : Vite::asset('resources/images/header.webp') }}">

    {{-- Favicons --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicons/favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="48x48" href="{{ asset('favicons/favicon-48x48.png') }}">
    <link rel="manifest" href="{{ asset('favicons/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('favicons/safari-pinned-tab.svg') }}" color="#f59e0b">
    <link rel="shortcut icon" href="{{ asset('favicons/favicon.ico') }}">
    <meta name="msapplication-TileColor" content="#f59e0b">
    <meta name="theme-color" content="#ffffff">

    <meta name="google-site-verification" content="fsrylmGFBJ7d7DJ_JlXie1uxWstE-InnV6R0eFJKphE" />

    {{-- Preconnect to Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">

    {{-- Preload LCP Image --}}
    @if(request()->routeIs('main'))
        <link rel="preload" as="image" href="{{ Vite::asset('resources/images/header.webp') }}" fetchpriority="high">
    @endif

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
    @stack('styles')
</head>

<body x-data="{ loading: true }" class="font-sans antialiased">
    {{-- Main loader for better CLS if needed --}}
    <div x-show="loading" x-init="window.onload = () => loading = false" class="fixed inset-0 z-100 flex items-center justify-center bg-white transition-opacity duration-500" :class="{ 'opacity-0 pointer-events-none': !loading }">
         <div class="size-12 border-4 border-emerald-500 border-t-transparent rounded-full animate-spin"></div>
    </div>
        <nav class="absolute bg-transparent h-20 w-full top-0 z-50 px-5 xl:px-0 transition-all duration-300">
            <div class="flex justify-between h-full max-w-6xl mx-auto items-center">
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
                            <div class="grow flex flex-col items-center justify-center w-full">
                                <x-navigation class="lg:hidden">
                                    <x-navigation.item :link="route('main')" icon="home" :active="request()->routeIs('main')">
                                        Головна
                                    </x-navigation.item>
                                    <x-navigation.item :link="route('services')" icon="hand-platter" :active="request()->routeIs('services')">
                                        Послуги
                                    </x-navigation.item>
                                    <x-navigation.item :link="route('blog')" icon="newspaper" :active="request()->routeIs('blog*')">
                                        Блог
                                    </x-navigation.item>
                                    <x-navigation.item :link="route('feedback')" icon="contact" :active="request()->routeIs('feedback')">
                                        Контакти
                                    </x-navigation.item>
                                </x-navigation>
                            </div>

                            <div class="flex flex-col items-center gap-5 w-full pt-10 mt-auto">
                                {{-- Social Icons --}}
                                <div class="flex items-center justify-center gap-5">
                                    <a href="https://www.instagram.com/try.it_cleaning?igsh=NGJxNDY4cnFwZ29k&utm_source=qr"
                                        target="_blank" aria-label="Instagram"
                                        class="size-12 rounded-full bg-slate-50 hover:bg-tryit-orange/10 flex items-center justify-center transition-all duration-300 group shadow-xs">
                                        <img src="{{ Vite::asset('resources/images/icons/instagram.svg') }}"
                                            class="size-6 group-hover:scale-110 transition-transform" loading="lazy"
                                            alt="" />
                                    </a>
                                    <a href="#" aria-label="Telegram"
                                        class="size-12 rounded-full bg-slate-50 hover:bg-tryit-orange/10 flex items-center justify-center transition-all duration-300 group shadow-xs">
                                        <img src="{{ Vite::asset('resources/images/icons/telegram.svg') }}"
                                            class="size-6 group-hover:scale-110 transition-transform" loading="lazy"
                                            alt="" />
                                    </a>
                                    <a href="viber://chat?number=380978778667" aria-label="Viber"
                                        class="size-12 rounded-full bg-slate-50 hover:bg-tryit-orange/10 flex items-center justify-center transition-all duration-300 group shadow-xs">
                                        <img src="{{ Vite::asset('resources/images/icons/viber.svg') }}"
                                            class="size-6 group-hover:scale-110 transition-transform" loading="lazy"
                                            alt="" />
                                    </a>
                                </div>

                                {{-- Phone Number --}}
                                <a href="tel:+380978778667"
                                    class="text-xl font-display font-bold text-slate-900 flex items-center gap-2 hover:text-tryit-orange transition-colors">
                                    <x-lucide-phone class="size-5 text-tryit-orange animate-pulse" />
                                    <span>+380 (97) 877-866-7</span>
                                </a>

                                {{-- Legal Links --}}
                                <div class="flex gap-5 items-center justify-center w-full">
                                    <a href="{{ route('legal.privacy-policy') }}"
                                        class="text-slate-400 hover:text-tryit-orange text-xs uppercase tracking-wideк transition-colors">
                                        Політика
                                    </a>
                                    <span class="size-1 rounded-full bg-slate-200"></span>
                                    <a href="{{ route('legal.terms-of-service') }}"
                                        class="text-slate-400 hover:text-tryit-orange text-xs uppercase tracking-wider transition-colors">
                                        Умови
                                    </a>
                                </div>
                            </div>
                        </x-slot>
                    </x-sidebar>
                </div>

                <x-navigation class="hidden lg:flex mx-auto justify-center items-center">
                    <x-navigation.item :link="route('main')" icon="home" :active="request()->routeIs('main')">
                        Головна
                    </x-navigation.item>
                    <x-navigation.item :link="route('services')" icon="hand-platter" :active="request()->routeIs('services')">
                        Послуги
                    </x-navigation.item>
                    <x-navigation.item :link="route('blog')" icon="newspaper" :active="request()->routeIs('blog*')">
                        Блог
                    </x-navigation.item>
                    <x-navigation.item :link="route('feedback')" icon="contact" :active="request()->routeIs('feedback')">
                        Контакти
                    </x-navigation.item>
                </x-navigation>

                <div class="hidden lg:flex text-white w-fit text-xl font-display font-semibold items-center gap-2.5">
                    <x-lucide-phone class="size-6" />
                    <span class="text-nowrap">+380 (97) 877-866-7</span>
                </div>
            </div>
        </nav>
        @yield('header')
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="relative overflow-hidden bg-slate-950">
        <!-- Фонове зображення з затемненням -->
        <div class="absolute inset-0 z-0"
            style="background-image: url('{{ Vite::asset('resources/images/footer-background.jpg') }}'); background-size: cover; background-position: center;">
        </div>
        <!-- Затемнення слейт кольором -->
        <div class="absolute inset-0 bg-neutral-950/85 z-0"></div>

        <!-- Контент -->
        <div class="relative z-10">
            {{-- Main footer --}}
            <div class="max-w-6xl mx-auto px-5 pt-15 pb-10">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">

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
                                <img src="{{ Vite::asset('resources/images/icons/footer-instagram.svg') }}"
                                    class="size-4" width="16" height="16" loading="lazy" alt="Instagram" />
                            </a>
                            <a href="#" aria-label="Telegram"
                                class="size-9 rounded-full bg-white/5 hover:bg-tryit-orange/20 flex items-center justify-center transition-colors duration-300">
                                <img src="{{ Vite::asset('resources/images/icons/footer-telegram.svg') }}"
                                    class="size-4" width="16" height="16" loading="lazy" alt="Telegram" />
                            </a>
                            <a href="viber://chat?number=380978778667" aria-label="Viber"
                                class="size-9 rounded-full bg-white/5 hover:bg-tryit-orange/20 flex items-center justify-center transition-colors duration-300">
                                <img src="{{ Vite::asset('resources/images/icons/footer-viber.svg') }}"
                                    class="size-4" width="16" height="16" loading="lazy" alt="Viber" />
                            </a>
                        </div>
                    </div>

                    {{-- Column 2: Services --}}
                    <div class="hidden lg:block">
                        <h4 class="font-display font-bold text-white text-sm uppercase tracking-wider mb-4">Послуги
                        </h4>
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
                        <h4 class="font-display font-bold text-white text-sm uppercase tracking-wider mb-4">Компанія
                        </h4>
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
                        <h4 class="font-display font-bold text-white text-sm uppercase tracking-wider mb-4">Контакти
                        </h4>
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
                                    <div
                                        class="size-8 rounded-lg bg-white/5 flex items-center justify-center shrink-0">
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
                                    <div
                                        class="size-8 rounded-lg bg-white/5 flex items-center justify-center shrink-0">
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
            <div class="relative z-10 border-t border-white/5">
                <div
                    class="max-w-7xl mx-auto px-5 py-2.5 flex flex-col md:flex-row items-center justify-between gap-0.5">
                    <span class="text-xs text-tryit-cream/40 text-center">
                        &copy; {{ date('Y') }} {{ config('app.name') }}. Всі права застережено.
                    </span>
                    <span class="text-xs text-tryit-cream/30">
                        Розробка сайту &mdash; <a href="#" class="text-orange-400/60">LEV</a>
                    </span>
                </div>
            </div>
        </div> <!-- Закриття .relative.z-10 контенту -->
    </footer>

    @livewire('order')

    @livewireScripts
    @stack('scripts')
</body>

</html>
