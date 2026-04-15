<?php
use function Laravel\Folio\{name};
name('posts');
?>

@extends('layouts.base')

@section('header')
    <x-page-header image="{{ Vite::asset('resources/images/breadcrumb-default.jpg') }}">
        <x-slot:title>Наш блог</x-slot:title>

        <x-slot:breadcrumbs>
            <x-breadcrumbs>
                <x-breadcrumbs.item icon="house" href="{{ route('main') }}" />
                <x-breadcrumbs.separator />
                <x-breadcrumbs.item icon="file-text" href="{{ route('posts') }}">Блог</x-breadcrumbs.item>
            </x-breadcrumbs>
        </x-slot:breadcrumbs>
    </x-page-header>
@endsection

@section('content')
    <x-section>
        <livewire:post.page-search />
    </x-section>
@endsection
