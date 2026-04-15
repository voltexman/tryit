<?php

use function Laravel\Folio\name;

name('feedback');
?>

@extends('layouts.base')

@section('header')
    <x-page-header image="{{ Vite::asset('resources/images/page-header-feedback.jpg') }}">
        <x-slot:title>
            Зворотрій зв'язок
        </x-slot>
    </x-page-header>
@endsection

@section('content')
    <x-section class="min-h-screen relative">
        <img src="https://demo2.pavothemes.com/cetro/wp-content/uploads/2025/07/decore.png"
            class="absolute left-0 bottom-10 transform scale-x-[-1] opacity-25 -z-10" alt="">
        <div class="grid xl:grid-cols-5 gap-5 relative">
            <div
                class="flex flex-col gap-5 text-center justify-center items-center bg-zinc-50 border border-zinc-100 rounded-2xl px-2.5 py-5">
                <div
                    class="flex flex-none border border-dashed bg-tryit-orange/5 items-center justify-center size-15 rounded-full border-tryit-orange">
                    <x-lucide-phone class="size-6 stroke-tryit-orange" stroke-width="1.5" />
                </div>
                <div class="grid">
                    <span class="font-[Oswald] text-tryit-dark text-lg font-bold">
                        Питання та замовлення
                    </span>
                    <span class="font-[Oswald] font-semibold -tracking-wide text-gray-600">
                        +380 (97) 877-866-7
                    </span>
                </div>
            </div>
            <div
                class="flex flex-col gap-5 text-center justify-center items-center bg-zinc-50 border border-zinc-100 rounded-2xl px-2.5 py-5">
                <div
                    class="flex flex-none border border-dashed bg-tryit-orange/5 items-center justify-center size-15 rounded-full border-tryit-orange">
                    <x-lucide-mail class="size-6 stroke-tryit-orange" stroke-width="1.5" />
                </div>
                <div class="grid">
                    <span class="font-[Oswald] text-tryit-dark text-lg font-bold">
                        Поштова адреса
                    </span>
                    <span class="font-[Oswald] font-semibold -tracking-wide text-gray-600">
                        info@tryit.com.ua
                    </span>
                </div>
            </div>
            <div
                class="flex lg:flex-col gap-5 lg:justify-center items-center bg-zinc-50 border border-zinc-100 rounded-2xl px-5 lg:px-2.5 py-5">
                <div class="flex flex-none items-center justify-center">
                    <img src="{{ Vite::asset('resources/images/icons/instagram.svg') }}" class="size-9" />
                </div>
                <div class="grid lg:text-center">
                    <span class="font-[Oswald] text-tryit-dark text-lg font-bold">
                        Ми в Instagram
                    </span>
                    <a href="http://www.instagram.com/try.it_cleaning?igsh=NGJxNDY4cnFwZ29k&utm_source=qr" target="_blank"
                        class="font-semibold flex lg:items-center space-x-1.5 text-tryit-orange/80 hover:text-tryit-orange transition duration-300 line-clamp-1">
                        <x-lucide-link class="size-4 flex-none" />
                        <span class="truncate mask-r-from-5%">
                            www.instagram.com/try.it_cleaning?igsh=NGJxNDY4cnFwZ29k&utm_source=qr
                        </span>
                    </a>
                </div>
            </div>
            <div
                class="flex lg:flex-col gap-5 lg:justify-center items-center bg-zinc-50 border border-zinc-100 rounded-2xl px-5 lg:px-2.5 py-5">
                <div class="flex flex-none items-center justify-center">
                    <img src="{{ Vite::asset('resources/images/icons/telegram.svg') }}" class="size-9" />
                </div>
                <div class="grid lg:text-center">
                    <span class="font-[Oswald] text-tryit-dark text-lg font-bold">
                        Наш Telegram
                    </span>
                    <a href="#"
                        class="font-semibold text-tryit-orange/80 hover:text-tryit-orange transition duration-300 line-clamp-1">
                        <span class="truncate">@ExampleName</span>
                    </a>
                </div>
            </div>
            <div
                class="flex lg:flex-col gap-5 lg:justify-center items-center bg-zinc-50 border border-zinc-100 rounded-2xl px-5 lg:px-2.5 py-5">
                <div class="flex flex-none items-center justify-center">
                    <img src="{{ Vite::asset('resources/images/icons/viber.svg') }}" class="size-9" />
                </div>
                <div class="grid lg:text-center">
                    <span class="font-[Oswald] text-tryit-dark text-lg font-bold">
                        Наш Viber
                    </span>
                    <a href="viber://call?number=380978778667"
                        class="font-semibold text-tryit-orange/80 hover:text-tryit-orange transition duration-300 line-clamp-1">
                        <span class="truncate">+380978778667</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="grid xl:grid-cols-2 gap-10 mt-20">
            <div class="space-y-5">
                <x-section.title>
                    Маєте <span class="text-tryit-green">запитання?<br>Зверніться</span> до нас
                </x-section.title>
                <div class="text-gray-600">
                    Ми цінуємо вашу думку та завжди раді допомогти. Якщо у вас є запитання, пропозиції або відгуки, будь
                    ласка, надішліть повідомлення. Ми прагнемо зробити наш сервіс ще кращим, і ваша думка для нас дуже
                    важлива. Дякуємо, що обираєте нас!
                </div>
            </div>
            <div class="">@livewire('feedback')</div>
        </div>
    </x-section>
@endsection
