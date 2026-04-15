<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <title>{{ $meta_title ?? config('app.name') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $meta_description ?? 'Опис за замовчуванням' }}">
    <meta name="google-site-verification" content="fsrylmGFBJ7d7DJ_JlXie1uxWstE-InnV6R0eFJKphE" />

    <link rel="shortcut icon" href="favicon.ico">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>

<body x-data="{ loading: true }" class="font-sans antialiased">
    <header class="relative overflow-hidden">
        <nav class="absolute bg-transparent h-20 w-full top-0 z-50 px-5 xl:px-0 transition-all duration-300">
            <div class="flex justify-between h-full max-w-6xl mx-auto items-center">
                <div class="relative w-auto mt-5">
                    <a href="{{ route('main') }}" aria-label="Перейти на головну сторінку натиснувши на логотип">
                        <img src="{{ Vite::asset('resources/images/logo.png') }}"
                            class="relative top-0 left-0 h-10 z-50" width="120" height="40"
                            alt="Логотип компанії" />
                    </a>
                </div>

                <x-offcanvas class="lg:hidden">
                    <x-slot:trigger>
                        <button type="button" aria-label="Відкрити головне меню" x-on:click="open = true">
                            <x-lucide-menu class="size-6 stroke-white" />
                        </button>
                    </x-slot>

                    <x-navigation class="lg:hidden my-auto px-5">
                        <x-navigation.item :link="route('main')" icon="home" :active="request()->routeIs('main')">
                            Головна
                        </x-navigation.item>
                        <x-navigation.item :link="route('services')" icon="hand-platter" :active="request()->routeIs('services')">
                            Послуги
                        </x-navigation.item>
                        <x-navigation.item :link="route('gallery')" icon="images" :active="request()->routeIs('gallery')">
                            Галерея
                        </x-navigation.item>
                        <x-navigation.item :link="route('posts')" icon="newspaper" :active="request()->routeIs('posts')">
                            Статті
                        </x-navigation.item>
                        <x-navigation.item :link="route('faq')" icon="circle-question-mark" :active="request()->routeIs('faq')">
                            FAQ
                        </x-navigation.item>
                        <x-navigation.item :link="route('feedback')" icon="book-user" :active="request()->routeIs('feedback')">
                            Контакти
                        </x-navigation.item>
                    </x-navigation>

                    <x-slot:footer class="mx-auto justify-center bg-tryit-orange/5 border-tryit-orange/10!">
                        <a href="{{ route('privacy-policy') }}"
                            class="flex gap-x-1.5 items-center text-sm font-semibold">
                            <x-lucide-shield-check class="size-5" />
                            <span>Політика конфіденційності</span>
                        </a>
                    </x-slot>
                </x-offcanvas>

                <x-navigation class="hidden lg:flex">
                    <x-navigation.item :link="route('main')" icon="book-user" :active="request()->routeIs('main')">
                        <x-lucide-home class="size-4" />
                    </x-navigation.item>
                    <x-navigation.item :link="route('services')" :active="request()->routeIs('services')">
                        Послуги
                    </x-navigation.item>
                    <x-navigation.item :link="route('gallery')" :active="request()->routeIs('gallery')">
                        Галерея
                    </x-navigation.item>
                    <x-navigation.item :link="route('posts')" :active="request()->routeIs('posts')">
                        Статті
                    </x-navigation.item>
                    <x-navigation.item :link="route('faq')" :active="request()->routeIs('faq')">
                        FAQ
                    </x-navigation.item>
                    <x-navigation.item :link="route('feedback')" :active="request()->routeIs('feedback')">
                        Контакти
                    </x-navigation.item>
                </x-navigation>

                <div class="hidden lg:flex text-white text-xl font-semibold items-center gap-2.5">
                    <x-lucide-phone-call class="size-6" />
                    <span class="font-[Oswald] font-semibold text-xl">+380 (97) 877-866-7</span>
                </div>
            </div>
        </nav>
        @yield('header')
    </header>

    @yield('content')

    {{-- <x-modal>
        <x-slot:trigger>
            <button x-data="orderModal" x-show="isVisible" @scroll.window="showModal" x-init="showModal"
                type="button" x-on:click="open = true" x-transition.opacity.duration.500ms x-cloak
                class="flex justify-center items-center fixed bottom-5 right-5 lg:bottom-8 lg:right-8 rounded-full size-14 bg-tryit-orange/80 cursor-pointer shadow-lg hover:bg-tryit-orange transition duration-300">
                <x-lucide-list-todo class="size-6 stroke-white" stroke-width="1.5" />
            </button>
        </x-slot>
        <x-slot:body>
            <livewire:order />
        </x-slot>
    </x-modal> --}}

    <footer class="relative overflow-hidden">
        <!-- фонове зображення (чорно-біле) -->
        <div
            class="absolute inset-0 z-0 bg-[url('https://demo2.pavothemes.com/cetro/wp-content/uploads/2025/07/footer-background.jpg')] bg-cover bg-center bg-no-repeat filter grayscale">
        </div>

        <!-- напівпрозоре затемнення -->
        <div class="absolute inset-0 z-10 bg-black/65"></div>

        <!-- контент футера -->
        <div class="max-w-2xl mx-auto my-20 px-5 lg:px-0 relative z-10">
            <h3
                class="font-[Oswald] text-white text-4xl lg:text-5xl text-center font-semibold text-nowrap text-shadow-lg -tracking-wide capitalize">
                Приєднуйтесь <span class="text-tryit-green">до нас<br>
                    і будьте</span> в курсі подій.
            </h3>
            <div class="mt-10">
                @livewire('subscribe')
            </div>
        </div>
        <div class="max-w-6xl mx-auto mb-10 px-5 xl:px-0 relative z-10">
            <div class="grid md:grid-cols-3 xl:grid-cols-4 justify-center md:justify-start gap-x-5 gap-y-10">
                <div class="hidden xl:block text-white order-1">
                    Звертайтесь в нашу компанію і ми подбаємо про чистоту вашого офісу, виробництва чи будинку на
                    найвищому рівні!
                </div>

                <x-navigation.footer class="hidden md:block order-2 lg:order-2">
                    <x-navigation.footer.item>Зворотній зв'язок</x-navigation.footer.item>
                    <x-navigation.footer.item>Часті запитання</x-navigation.footer.item>
                    <x-navigation.footer.item>Наша галерея</x-navigation.footer.item>
                    <x-navigation.footer.item>Політика конфіденційності</x-navigation.footer.item>
                </x-navigation.footer>

                <div class="flex flex-col items-center xl:items-start order-3 lg:order-3">
                    <div class="text-3xl font-[Oswald] font-medium text-white capitalize mb-2.5">Розклад роботи</div>
                    <div class="text-gray-200">
                        <span class="text-white font-bold">Пн–Пт:</span> 08:00–20:00
                    </div>
                    <div class="text-gray-200">
                        <span class="text-white font-bold">Сб:</span> 09:00–18:00
                    </div>
                    <div class="text-gray-200">
                        <span class="text-white font-bold">Нд:</span> 10:00–16:00
                    </div>
                    <div class="text-gray-200">
                        <span class="text-white font-bold">Консультації:</span> 24/7
                    </div>
                </div>

                <div class="flex flex-col items-center md:items-start ms-auto gap-y-2.5 order-4 lg:order-4">
                    <div class="flex items-center gap-x-2.5">
                        <x-lucide-phone class="size-6 stroke-tryit-green flex-none" />
                        <span class="text-tryit-green font-[Oswald] text-2xl font-bold -tracking-wide">
                            +380 (97) 877-866-7
                        </span>
                    </div>
                    <div class="flex items-center gap-x-2.5">
                        <x-lucide-mail class="size-6 stroke-white flex-none" />
                        <span class="text-white font-[Oswald] text-xl font-semibold text-center">
                            info@tryit.com.ua
                        </span>
                    </div>
                    <div class="flex justify-center items-center md:justify-start md:items-start gap-x-5 mt-2.5">
                        <a href="https://www.instagram.com/try.it_cleaning?igsh=NGJxNDY4cnFwZ29k&utm_source=qr"
                            target="_blank" aria-label="Відкрити нашу сторінку Instagram">
                            <img src="{{ Vite::asset('resources/images/icons/footer-instagram.svg') }}" class="size-8"
                                loading="lazy" alt="" />
                        </a>
                        <a href="#" aria-label="Перейти до нашого Telegram">
                            <img src="{{ Vite::asset('resources/images/icons/footer-telegram.svg') }}" class="size-8"
                                loading="lazy" alt="" />
                        </a>
                        <a href="viber://chat?number=380978778667" aria-label="Написати нам у Viber">
                            <img src="{{ Vite::asset('resources/images/icons/footer-viber.svg') }}" class="size-8"
                                loading="lazy" alt="" />
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-10 border-t border-tryit-cream/5 relative z-10">
            <div class="mx-auto max-w-md text-xs text-tryit-cream/70 font-normal text-center">
                {{ date('Y') }} &copy; {{ env('APP_NAME') }}. Всі права застережено
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('orderModal', () => ({
                isVisible: false,
                showModal() {
                    this.isVisible = window.pageYOffset >= 550 ? true : false;
                }
            }));
        });
    </script>
    @stack('scripts')
</body>

</html>
