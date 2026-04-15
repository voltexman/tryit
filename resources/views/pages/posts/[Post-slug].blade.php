<?php
use function Laravel\Folio\name;
name('post.show');
?>

@extends('layouts.base')

@section('header')
    <x-page-header image="{{ $post->getFirstMediaUrl('posts', 'preview-large') }}">
        <x-slot:title>
            {{ $post->title }}
        </x-slot>

        <x-slot:breadcrumbs>
            <x-breadcrumbs>
                <x-breadcrumbs.item icon="house" href="{{ route('main') }}" />
                <x-breadcrumbs.separator />
                <x-breadcrumbs.item icon="file-text" href="{{ route('posts') }}">Статті</x-breadcrumbs.item>
            </x-breadcrumbs>
        </x-slot:breadcrumbs>
    </x-page-header>
@endsection

@section('content')
    <x-section orientation="right">
        <x-slot:sidebar class="space-y-10">
            <livewire:post.widget-search />
            <x-recent-posts :slug="$post->slug" />
            <x-tags />
        </x-slot>

        <div class="space-y-5">
            <h1 class="font-[Oswald] text-3xl text-tryit-dark">
                {{ $post->title }}
            </h1>

            <div class="flex items-center gap-1.5">
                <x-lucide-calendar class="size-4 stroke-tryit-green inline-block" />
                <span class="text-sm text-gray-600 font-medium">
                    {{ $post->created_at->format('M d, Y') }}
                </span>
            </div>

            <img src="{{ $post->getFirstMediaUrl('posts', 'preview-large') }}" class="w-full h-auto lg:h-100 rounded-3xl"
                alt="">

            <div>
                {{ $post->content }}
            </div>

            <div class="flex flex-wrap gap-2.5">
                @foreach ($post->tags as $tag)
                    <x-tag variant="soft">{{ $tag->name }}</x-tag>
                @endforeach
            </div>
        </div>
    </x-section>
@endsection
