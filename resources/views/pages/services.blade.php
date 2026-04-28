<?php
use function Laravel\Folio\name;
use App\Enums\ServiceEnum;
name('services');
?>

@extends('layouts.base')

@section('header')
    <x-page-header image="https://cleaning-group.pro/wp-content/uploads/2019/08/cleaning_appartment_vinnitsa.jpg">
        <x-slot:title>
            Спектр наших послуг
        </x-slot>
    </x-page-header>
@endsection

@section('content')
    <x-section>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-20">

            @foreach (ServiceEnum::cases() as $service)
                <div
                    class="group relative bg-slate-100 border-slate-100 rounded-3xl p-5 pt-15 shadow-[0_15px_50px_-12px_rgba(0,0,0,0.08)] hover:shadow-[0_30px_60px_-15px_rgba(0,0,0,0.12)] transition-all duration-500 text-center flex flex-col items-center border">

                    <!-- Icon/Image Header (Винесений нагору) -->
                    <div
                        class="absolute -top-10 left-1/2 -translate-x-1/2 w-24 h-24 bg-white rounded-3xl shadow-xl shadow-emerald-900/10 flex items-center justify-center border border-emerald-50 overflow-hidden p-1 transition-transform duration-500 group-hover:scale-110 group-hover:-rotate-3">
                        <div
                            class="relative size-full rounded-2xl overflow-hidden bg-emerald-50 flex items-center justify-center">
                            {{-- Якщо в Enum є іконка, краще використати її, якщо ні - маленьке прев'ю фото --}}
                            <img src="{{ Vite::asset('resources/images/' . $service->getImage()) }}"
                                alt="{{ $service->getTitle() }}"
                                class="w-full h-full object-cover opacity-90 group-hover:opacity-100 transition-opacity" />

                            {{-- Декоративний елемент під іконкою --}}
                            <div
                                class="absolute bottom-0 w-full h-1 bg-emerald-500 transition-all duration-500 transform scale-x-0 group-hover:scale-x-100">
                            </div>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="grow flex flex-col items-center">
                        <span
                            class="text-[0.65rem] font-black uppercase tracking-widest text-emerald-600 mb-2.5 opacity-60">
                            Сервіс
                        </span>

                        <h3 class="text-xl font-display text-balance font-bold text-gray-900 mb-4 leading-tight">
                            {{ $service->getTitle() }}
                        </h3>

                        <p class="text-gray-500 text-sm lg:text-base leading-relaxed mb-5 line-clamp-3">
                            {{ $service->getDescription() }}
                        </p>
                    </div>

                    <!-- Action Button -->
                    <div class="mt-auto">
                        <a href="{{ route($service->getLink()) }}"
                            class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-gray-50 text-gray-400 group-hover:bg-emerald-600 group-hover:text-white group-hover:shadow-lg group-hover:shadow-emerald-200 transition-all duration-300 transform group-hover:scale-110">
                            <x-lucide-arrow-right class="size-6" stroke-width="2.5" />
                        </a>
                    </div>

                    {{-- Invisible link for the whole card area (optional) --}}
                    <a href="{{ route($service->getLink()) }}" class="absolute inset-0 z-10 rounded-[2.5rem]"
                        aria-label="{{ $service->getTitle() }}"></a>
                </div>
            @endforeach

        </div>
    </x-section>
@endsection
