<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TryIt</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body dy x-data="{ loading: true }" class ="font-sans antialiased">
    <header class="relative">
        <nav v x-data="navbar" x-init="scrolled"
            class="fixed w-full top-0 z-50 px-5 lg:px-0 transition-all duration-300"
            x-bind:class="(isScrolled || navIsOpen || searchIsOpen) ?
            'bg-stone-800/80 backdrop-blur-xl shadow-lg shadow-black/20 h-16' : 'h-20'"
            @scroll.window="scrolled" x-cloak>
            <div class="flex justify-between h-full max-w-7xl w-full mx-auto items-center">
                <a href="{{ route('main') }}">
                    <img src="{{ Vite::asset('resources/images/logo.png') }}" class="h-10">
                </a>
                <div>menu</div>
            </div>
        </nav>
        @yield('header')
    </header>

    @yield('content')

    <footer class="bg-tryit-dark py-10"
        style="clip-path: polygon(100% 100%, 0% 100% , 0.00% 34.43%, 1.67% 33.18%, 3.33% 31.29%, 5.00% 28.82%, 6.67% 25.90%, 8.33% 22.65%, 10.00% 19.21%, 11.67% 15.73%, 13.33% 12.36%, 15.00% 9.26%, 16.67% 6.55%, 18.33% 4.36%, 20.00% 2.77%, 21.67% 1.87%, 23.33% 1.69%, 25.00% 2.23%, 26.67% 3.48%, 28.33% 5.38%, 30.00% 7.84%, 31.67% 10.77%, 33.33% 14.02%, 35.00% 17.46%, 36.67% 20.94%, 38.33% 24.31%, 40.00% 27.41%, 41.67% 30.12%, 43.33% 32.31%, 45.00% 33.89%, 46.67% 34.79%, 48.33% 34.98%, 50.00% 34.43%, 51.67% 33.18%, 53.33% 31.29%, 55.00% 28.82%, 56.67% 25.90%, 58.33% 22.65%, 60.00% 19.21%, 61.67% 15.73%, 63.33% 12.36%, 65.00% 9.26%, 66.67% 6.55%, 68.33% 4.36%, 70.00% 2.77%, 71.67% 1.87%, 73.33% 1.69%, 75.00% 2.23%, 76.67% 3.48%, 78.33% 5.38%, 80.00% 7.84%, 81.67% 10.77%, 83.33% 14.02%, 85.00% 17.46%, 86.67% 20.94%, 88.33% 24.31%, 90.00% 27.41%, 91.67% 30.12%, 93.33% 32.31%, 95.00% 33.89%, 96.67% 34.79%, 98.33% 34.98%, 100.00% 34.43%);">
        Footer</footer>

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
