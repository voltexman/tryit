<?php

use function Laravel\Folio\name;

$text = 'examplte text';

name('privacy-policy');
?>

@extends('layouts.base')

@section('header')
    <x-page-header image="https://cleaning-group.pro/wp-content/uploads/2019/08/cleaning_appartment_vinnitsa.jpg">
        <x-slot:title>
            Політика конфіденційності
        </x-slot>
    </x-page-header>
@endsection

@section('content')
    <x-section>{{ $text }}</x-section>
@endsection
