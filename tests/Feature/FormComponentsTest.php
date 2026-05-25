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

test('компонент input рендерить плаваючий лейбл з плейсхолдера', function () {
    $html = $this->blade('<x-forms.input placeholder="Введіть текст" />');

    expect($html)->toContain('Введіть текст');
    expect($html)->toContain('absolute');
});

test('компонент input рендерить плаваючий лейбл з явно вказаного пропсу label', function () {
    $html = $this->blade('<x-forms.input label="Ім\'я" placeholder="Інший текст" />');

    expect($html)->toContain('Ім\'я');
    expect($html)->not->toContain('Інший текст');
});

test('компонент input не рендерить лейбл якщо немає ні плейсхолдера ні label', function () {
    $html = $this->blade('<x-forms.input />');

    expect($html)->not->toContain('<label');
});

test('компонент input рендерить іконку lucide якщо передано проп icon', function () {
    $html = $this->blade('<x-forms.input icon="user" />');

    expect($html)->toContain('lucide-user');
    expect($html)->toContain('pl-11'); // For md size default left padding shift
});

test('компонент input не рендерить іконку якщо проп icon не передано', function () {
    $html = $this->blade('<x-forms.input />');

    expect($html)->not->toContain('lucide-');
    expect($html)->toContain('pl-4'); // Standard md size left padding
});
