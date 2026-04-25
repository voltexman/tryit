<?php

use function Laravel\Folio\name;

name('blog');
?>

@extends('layouts.base')

@section('header')
    <x-page-header image="https://images.unsplash.com/photo-1455390582262-044cdead277a?w=1200">
        <x-slot:title>
            Блог
        </x-slot>
        <x-slot:description>
            Корисні поради, новини та статті про професійне прибирання
        </x-slot>
    </x-page-header>
@endsection

@section('content')
    <section class="py-16">
        <div class="max-w-6xl mx-auto px-5">
            <livewire:blog-index />
        </div>
    </section>
@endsection
