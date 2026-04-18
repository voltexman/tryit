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
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-10">
            @foreach (ServiceEnum::cases() as $service)
                <div
                    class="group relative overflow-hidden rounded-3xl hover:shadow-2xl hover:shadow-black/60 transition-all duration-700 hover:-translate-y-1 min-h-80 sm:min-h-96 lg:min-h-112">
                    {{-- Фонове зображення на всю площу картки --}}
                    <div class="absolute inset-0">
                        <img src="{{ $service->getImage() }}" alt="{{ $service->getTitle() }}"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-[1.04]" />

                        {{-- Легке загальне затемнення --}}
                        <div class="pointer-events-none absolute inset-0 bg-black/20"></div>
                    </div>

                    {{-- Весь контент поверх зображення --}}
                    <div class="pointer-events-none absolute inset-0 flex flex-col justify-between">
                        {{-- Назва на всю ширину --}}
                        <div class="pointer-events-auto w-full">
                            <a href="{{ route($service->getLink()) }}"
                                class="flex w-full items-center gap-3 bg-linear-to-r from-emerald-600/20 via-tryit-green/40 to-emerald-500/30 px-5 sm:px-7 lg:px-8 py-4 sm:py-5 backdrop-blur-xs">
                                <span
                                    class="inline-flex size-7 shrink-0 items-center justify-center rounded-full bg-white/14 ring-1 ring-white/25 text-[0.62rem] font-bold uppercase tracking-[0.22em] text-emerald-50">
                                    SVC
                                </span>
                                <span
                                    class="font-display text-sm sm:text-lg lg:text-xl font-medium text-white leading-snug">
                                    {{ $service->getTitle() }}
                                </span>
                            </a>
                        </div>

                        <div
                            class="pointer-events-auto w-full bg-linear-to-t from-emerald-950/82 via-emerald-900/45 to-transparent px-5 sm:px-7 lg:px-8 py-6 sm:py-8 lg:py-9">
                            <div class="max-w-3xl space-y-4 sm:space-y-5 text-white drop-shadow-lg">
                                {{-- Опис --}}
                                <div
                                    class="text-sm sm:text-base lg:text-[0.98rem] leading-relaxed text-emerald-50/90 space-y-2.5">
                                    {{ $service->getDescription() }}
                                </div>

                                {{-- Кнопка --}}
                                <div class="flex flex-wrap items-center gap-3 pt-1">
                                    <a href="{{ route($service->getLink()) }}">
                                        <button
                                            class="inline-flex items-center gap-1.5 rounded-full bg-white/95 px-5 py-2 text-xs sm:text-sm font-semibold text-gray-900 shadow-md shadow-black/30 hover:bg-tryit-orange hover:text-white hover:shadow-lg hover:shadow-tryit-orange/50 transition duration-300"
                                            aria-label="Відкрити сторінку з детальним описом послуги">
                                            Детальніше
                                            <x-lucide-arrow-right class="size-4" stroke-width="2" />
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </x-section>
@endsection
