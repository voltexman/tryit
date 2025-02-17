<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Клінінгова компанія - TryIt</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body x-data="{ loading: true }" class="font-sans antialiased">
    <header class="relative overflow-hidden">
        <nav x-data="navbar" x-init="scrolled"
            class="absolute bg-transparent h-20 w-full top-0 z-50 px-5 xl:px-0 transition-all duration-300"
            {{-- x-bind:class="(isScrolled || navIsOpen) ?
            'bg-tryit-green/85 backdrop-blur-xl shadow-lg shadow-black/20 h-16' : 'h-20'" --}} @scroll.window="scrolled" x-cloak>
            <div class="flex justify-between h-full max-w-7xl mx-auto items-center">
                <a href="{{ route('main') }}">
                    <img src="{{ Vite::asset('resources/images/logo.png') }}" class="h-12  ">
                </a>

                <div class="lg:hidden">
                    <x-sidebar>
                        <x-slot:trigger>
                            <button type="button" x-on:click="open = true">
                                <x-lucide-menu class="size-6 stroke-white" />
                            </button>
                        </x-slot>
                        <x-slot:title>Головне меню</x-slot>

                        <x-slot:body>
                            <x-navigation class="lg:hidden">
                                <x-navigation.item :link="route('feedback')" icon="hand-platter">
                                    Послуги
                                </x-navigation.item>
                                <x-navigation.item :link="route('feedback')" icon="message-circle-more">
                                    Товари
                                </x-navigation.item>
                                <x-navigation.item :link="route('gallery')" icon="image">
                                    Галерея
                                </x-navigation.item>
                                <x-navigation.item :link="route('feedback')" icon="book-user">
                                    Контакти
                                </x-navigation.item>
                            </x-navigation>
                            <a href="{{ route('privacy-policy') }}" class="flex gap-x-1.5 items-center text-sm">
                                <x-lucide-shield-check class="size-5" />
                                <span class="">Політика конфіденційності</span>
                            </a>
                        </x-slot>
                    </x-sidebar>
                </div>

                <x-navigation class="hidden lg:flex">
                    <x-navigation.item :link="route('feedback')">
                        Послуги
                    </x-navigation.item>
                    <x-navigation.item :link="route('gallery')">
                        Товари
                    </x-navigation.item>
                    <x-navigation.item :link="route('gallery')">
                        Галерея
                    </x-navigation.item>
                    <x-navigation.item :link="route('feedback')">
                        Контакти
                    </x-navigation.item>
                </x-navigation>
            </div>
        </nav>
        @yield('header')
    </header>

    @yield('content')

    <x-modal>
        <x-slot:trigger>
            <button x-data="orderModal" x-show="isVisible" @scroll.window="showModal" x-init="showModal"
                type="button" x-on:click="open = true" x-transition.opacity.duration.500ms x-cloak
                class="flex justify-center items-center fixed bottom-5 right-5 lg:bottom-8 lg:right-8 rounded-full size-14 bg-tryit-orange/80 cursor-pointer shadow-lg hover:bg-tryit-orange transition duration-300">
                <x-lucide-list-todo class="size-6 stroke-white" stroke-width="1.5" />
            </button>
        </x-slot>
        <x-slot:body>@livewire('order')</x-slot>
    </x-modal>

    <footer class="bg-tryit-dark pt-10">
        <div class="max-w-5xl mx-auto mb-10 px-5 flex flex-col lg:flex-row gap-y-5 justify-between">
            <div class="flex flex-col items-center lg:items-start gap-y-1.5">
                <div class="text-tryit-cream flex items-center gap-x-2">
                    <x-lucide-user-round class="size-5" />
                    <span class="text-tryit-cream text-sm font-semibold text-center">Руслан Мамай</span>
                </div>
                <div class="text-tryit-cream flex items-center gap-x-2">
                    <x-lucide-phone class="size-5" />
                    <span class="text-tryit-cream text-sm font-semibold text-center">+380 (97) 87-78-667</span>
                </div>
                <div class="text-tryit-cream flex items-center gap-x-2">
                    <x-lucide-mail class="size-5" />
                    <span class="text-tryit-cream text-sm font-semibold text-center">examplemail@gmail.com</span>
                </div>
            </div>

            <div class="mx-auto flex flex-col justify-center gap-y-2.5">
                <div class="flex items-center mx-auto gap-x-5">
                    <x-lucide-instagram class="size-6 stroke-tryit-cream" />
                    <x-lucide-facebook class="size-6 stroke-tryit-cream" />
                    <x-lucide-youtube class="size-6 stroke-tryit-cream" />
                </div>
            </div>

            <div class="hidden xl:flex flex-col gap-y-1.5 lg:items-start lg:justify-end">
                <a href="{{ route('privacy-policy') }}"
                    class="flex gap-x-1.5 text-tryit-cream text-center items-center text-sm">
                    <x-lucide-message-circle-more class="size-5" />
                    <span class="">Зворотній зв'язок</span>
                </a>
                <a href="{{ route('privacy-policy') }}"
                    class="flex gap-x-1.5 text-tryit-cream text-center items-center text-sm">
                    <x-lucide-shield-check class="size-5" />
                    <span class="">Політика конфіденційності</span>
                </a>
            </div>
        </div>

        <div class="py-2.5 border-t border-tryit-cream/5">
            <div class="mx-auto max-w-md text-xs text-tryit-cream/50 text-center">
                {{ date('Y') }} &copy; {{ env('APP_NAME') }}. Всі права застережено
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('navbar', () => ({
                navIsOpen: false,
                isScrolled: false,
                navToggle() {
                    this.navIsOpen = !this.navIsOpen;
                },
                scrolled() {
                    this.isScrolled = window.pageYOffset >= 80 ? true : false;
                },
            }));

            Alpine.data('orderModal', () => ({
                isVisible: false,
                showModal() {
                    this.isVisible = window.pageYOffset >= 550 ? true : false;
                }
            }));
        });
    </script>
</body>

</html>
