@extends('layouts.base')

@section('header')
    <x-page-header
        image="https://www.searchenginejournal.com/wp-content/uploads/2022/09/email-marketing-6331b0ee98b47-sej.png">
        <x-slot:title>
            Зворотрій зв'язок
        </x-slot>
    </x-page-header>
@endsection

@section('content')
    <x-section>
        <div class="gap-10 flex flex-col xl:grid xl:grid-cols-5 xl:gap-15 min-h-screen">
            <div class="max-w-xl flex flex-col gap-y-10 mx-auto xl:col-span-3">
                <div>Ми цінуємо вашу думку та завжди раді допомогти. Якщо у вас є
                    запитання, пропозиції або відгуки, будь ласка, надішліть повідомлення. Ми прагнемо зробити наш сервіс ще
                    кращим, і ваша думка для нас дуже важлива. Дякуємо, що обираєте нас!
                </div>

                <div class="grid md:grid-cols-2 gap-y-10">
                    <div class="flex flex-col gap-y-5">
                        <div class="flex gap-x-5 items-center">
                            <div
                                class="flex flex-none border border-dashed bg-tryit-orange/5 items-center justify-center size-14 rounded-full border-tryit-orange">
                                <x-lucide-phone class="size-6 stroke-tryit-orange" stroke-width="1.5" />
                            </div>
                            <div class="grid">
                                <span class="text-sm font-semibold">Питання та замовлення</span>
                                <span class="text-sm">+380 (97) 877-866-7</span>
                            </div>
                        </div>
                        <div class="flex gap-x-5 items-center">
                            <div
                                class="flex flex-none border border-dashed bg-tryit-orange/5 items-center justify-center size-14 rounded-full border-tryit-orange">
                                <x-lucide-mail class="size-6 stroke-tryit-orange" stroke-width="1.5" />
                            </div>
                            <div class="grid">
                                <span class="text-sm font-semibold">Поштова адреса</span>
                                <span class="text-sm">info@tryit.com.ua</span>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col gap-y-5">
                        <div class="flex gap-x-5 items-center">
                            <div class="flex flex-none items-center justify-center">
                                <img src="{{ Vite::asset('resources/images/icons/instagram.svg') }}" class="size-9" />
                            </div>
                            <div class="grid">
                                <span class="text-sm font-semibold">Ми в Instagram</span>
                                <a href="http://www.instagram.com/try.it_cleaning?igsh=NGJxNDY4cnFwZ29k&utm_source=qr"
                                    target="_blank"
                                    class="text-sm flex items-center space-x-1.5 text-tryit-orange/60 hover:text-tryit-orange transition duration-300 line-clamp-1">
                                    <x-lucide-link class="size-4 flex-none" />
                                    <span
                                        class="truncate">www.instagram.com/try.it_cleaning?igsh=NGJxNDY4cnFwZ29k&utm_source=qr</span>
                                </a>
                            </div>
                        </div>
                        <div class="flex gap-x-5 items-center">
                            <div class="flex flex-none items-center justify-center">
                                <img src="{{ Vite::asset('resources/images/icons/telegram.svg') }}" class="size-9" />
                            </div>
                            <div class="grid">
                                <span class="text-sm font-semibold">Наш Telegram</span>
                                <a href="#"
                                    class="text-sm text-tryit-orange/60 hover:text-tryit-orange transition duration-300 line-clamp-1">
                                    <span class="truncate">@ExampleName</span>
                                </a>
                            </div>
                        </div>
                        <div class="flex gap-x-5 items-center">
                            <div class="flex flex-none items-center justify-center">
                                <img src="{{ Vite::asset('resources/images/icons/viber.svg') }}" class="size-9" />
                            </div>
                            <div class="grid">
                                <span class="text-sm font-semibold">Наш Viber</span>
                                <a href="viber://call?number=380978778667"
                                    class="text-sm text-tryit-orange/60 hover:text-tryit-orange transition duration-300 line-clamp-1">
                                    <span class="truncate">+380978778667</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="xl:col-span-2 mx-auto w-full max-w-md">@livewire('feedback')</div>
        </div>
    </x-section>
@endsection
