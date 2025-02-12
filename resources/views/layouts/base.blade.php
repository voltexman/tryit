<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Клінінгова компанія - TryIt</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body dy x-data="{ loading: true }" class ="font-sans antialiased">
    <header class="relative">
        <nav v x-data="navbar" x-init="scrolled"
            class="fixed w-full top-0 z-50 px-5 lg:px-0 transition-all duration-300"
            x-bind:class="(isScrolled || navIsOpen || searchIsOpen) ?
            'bg-stone-800/80 backdrop-blur-xl shadow-lg shadow-black/20 h-16' : 'h-20'"
            @scroll.window="scrolled" x-cloak>
            <div class="flex justify-between h-full max-w-7xl w-full mx-auto items-center px-5">
                <a href="{{ route('main') }}">
                    <img src="{{ Vite::asset('resources/images/logo.png') }}" class="h-10">
                </a>
                <div>
                    <x-navigation>
                        <x-navigation.item>Зворотній зв`язок</x-navigation.item>
                    </x-navigation>
                </div>
            </div>
        </nav>
        @yield('header')
    </header>

    @yield('content')

    <footer class="bg-tryit-dark pt-10">
        <div class="max-w-5xl mx-auto mb-10 grid lg:grid-cols-2 px-5">
            <div class="flex flex-col items-center lg:items-start">
                <span class="text-tryit-cream text-xl font-bold flex items-center gap-x-2">
                    <x-lucide-user-circle class="size-5" />
                    <span>Руслан Мамай</span>
                </span>
                <span class="text-tryit-cream text-xl flex items-center gap-x-2">
                    <x-lucide-phone class="size-5" />
                    <span>+380 (93) 234-52-03</span>
                </span>
            </div>

            <div class="hidden lg:flex items-center justify-end">
                <img src="{{ Vite::asset('resources/images/logo.png') }}" class="h-10">
            </div>
        </div>

        <div class="py-2.5 border-t border-tryit-cream/10">
            <div class="mx-auto max-w-md text-xs text-tryit-cream/50 text-center">
                {{ date('Y') }} &copy; {{ env('APP_NAME') }}. Всі права застережено
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('navbar', () => ({
                navIsOpen: false,
                searchIsOpen: false,
                isScrolled: false,
                navToggle() {
                    this.navIsOpen = !this.navIsOpen;
                    this.searchIsOpen = false;
                },
                searchToggle() {
                    this.searchIsOpen = !this.searchIsOpen;
                    this.navIsOpen = false;
                },
                scrolled() {
                    this.isScrolled = window.pageYOffset >= 80 ? true : false;
                }
            }));

            Alpine.data('scrollProgress', () => ({
                circumference: 30 * 2 * Math.PI,
                percent: 0,
                isVisible: false,
                init() {
                    this.isVisible = window.pageYOffset >= 500 ? true : false;
                    window.addEventListener('scroll', () => {
                        let winScroll = document.body.scrollTop || document.documentElement
                            .scrollTop
                        let height = document.documentElement.scrollHeight - document
                            .documentElement.clientHeight
                        this.percent = Math.round((winScroll / height) * 100)

                        this.isVisible = window.pageYOffset >= 500 ? true : false;
                    });
                }
            }));
        });
    </script>
</body>

</html>
