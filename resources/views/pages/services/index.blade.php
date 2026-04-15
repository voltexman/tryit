<?php
use function Laravel\Folio\name;
name('services');
?>

@extends('layouts.base')

@section('header')
    <x-page-header image="{{ Vite::asset('resources/images/breadcrumb-default.jpg') }}">
        <x-slot:title>Наші послуги</x-slot:title>

        <x-slot:breadcrumbs>
            <x-breadcrumbs>
                <x-breadcrumbs.item icon="house" href="{{ route('main') }}" />
                <x-breadcrumbs.separator />
                <x-breadcrumbs.item icon="file-text" href="{{ route('services') }}">Послуги</x-breadcrumbs.item>
            </x-breadcrumbs>
        </x-slot:breadcrumbs>
    </x-page-header>
@endsection

@section('content')
    <x-section>
        <div class="grid lg:grid-cols-3 gap-10">
            @foreach (App\Enums\ServiceEnum::cases() as $service)
                <div
                    class="relative rounded-3xl overflow-hidden p-5 lg:p-10 flex flex-col h-100 bg-[url('{{ $service->image() }}')] bg-cover bg-center bg-no-repeat group">

                    <!-- overlay тільки знизу -->
                    <div
                        class="absolute inset-0 bg-linear-to-t from-black/85 from-10% via-black/0 to-black/0 group-hover:bg-black/40 group-hover:backdrop-blur-xs transition-all duration-500">
                    </div>

                    <div
                        class="group-hover:opacity-0 absolute left-3 top-3 size-12 bg-white rounded-full border border-zinc-200 flex justify-center items-center transition-opacity duration-300">
                        <x-dynamic-component :component="'lucide-' . $service->icon()" class="size-6 stroke-tryit-green" stroke-width="1.5" />
                    </div>

                    <!-- content -->
                    <div class="relative translate-y-65 group-hover:translate-y-0 transition-all duration-500">
                        <a href="{{ route($service->link()) }}" class="text-2xl font-[Oswald] font-medium text-white">
                            {{ $service->getLabel() }}
                        </a>
                        <div class="mt-5 text-gray-200 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            {{ $service->description() }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </x-section>
@endsection
