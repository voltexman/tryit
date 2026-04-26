<?php

use function Laravel\Folio\name;
use App\Models\Gallery;

$images = Gallery::all();

name('gallery');
?>

@extends('layouts.base')

@section('header')
    <x-page-header
        image="https://thumbs.dreamstime.com/b/timeless-office-cleaning-scene-vintage-charm-meets-modern-efficiency-retro-business-workspace-step-back-time-witness-350463863.jpg">
        <x-slot:title>
            Галерея
        </x-slot>
        <x-slot:description>
            Перегляньте наші робочі будні - так виглядає чистота, порядок та професіоналізм у дії.
        </x-slot>
    </x-page-header>
@endsection

@section('content')
    <main class="max-w-7xl mx-auto px-4 pb-20">
        <div class="mt-20 bg-[#2D6A4F] rounded-3xl p-8 md:p-12 text-center text-white shadow-xl relative overflow-hidden">
            <div class="relative z-10">
                <h2 class="text-3xl font-bold mb-4">Бажаєте такий самий результат?</h2>
                <p class="text-blue-100 mb-8 text-lg">Залиште заявку сьогодні та отримайте знижку 10% на перше замовлення!
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <x-button size="lg" color="white" @click="Livewire.dispatch('setService', { service: '' }); window.openOffcanvas('orderOffcanvas')">
                        Замовити прибирання
                    </x-button>
                    <x-button size="lg" color="white" variant="outline" @click="window.openOffcanvas('callbackOffcanvas')">
                        Консультація
                    </x-button>
                </div>
            </div>
            <div class="absolute -top-10 -right-10 w-40 h-40 bg-green-500 rounded-full opacity-50"></div>
            <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-green-700 rounded-full opacity-50"></div>
        </div>
    </main>
@endsection
