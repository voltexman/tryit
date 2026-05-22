<?php

use Illuminate\Foundation\Testing\Concerns\InteractsWithViews;

uses(InteractsWithViews::class);

test('компонент input рендерить червону крапочку якщо він required', function () {
    $html = $this->blade('<x-forms.input required />');

    expect($html)->toContain('animate-ping');
    expect($html)->toContain('bg-red-500');
});

test('компонент input не рендерить червону крапочку якщо він не required', function () {
    $html = $this->blade('<x-forms.input />');

    expect($html)->not->toContain('animate-ping');
    expect($html)->not->toContain('bg-red-500');
});

test('компонент textarea рендерить червону крапочку якщо він required', function () {
    $html = $this->blade('<x-forms.textarea required />');

    expect($html)->toContain('animate-ping');
    expect($html)->toContain('bg-red-500');
});

test('компонент textarea не рендерить червону крапочку якщо він не required', function () {
    $html = $this->blade('<x-forms.textarea />');

    expect($html)->not->toContain('animate-ping');
    expect($html)->not->toContain('bg-red-500');
});
