<?php

use App\Enums\FeedbackTopicEnum;
use App\Enums\ServiceEnum;
use App\Models\Feedback;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;

uses(RefreshDatabase::class);

test('можна створити відгук', function () {
    $feedback = Feedback::factory()->create([
        'name' => 'John Doe',
        'contact' => 'john@example.com',
        'text' => 'Great service!',
        'topic' => FeedbackTopicEnum::GENERAL,
        'service' => ServiceEnum::DRY_CLEANING,
        'rating' => 5,
    ]);

    expect($feedback)->toBeInstanceOf(Feedback::class);
    expect($feedback->name)->toBe('John Doe');
});

test('перевіряє обовʼязкові поля форми відгуку', function () {
    Livewire::test('feedback')
        ->set('feedback.name', '')
        ->set('feedback.contact', '')
        ->set('feedback.text', '')
        ->set('feedback.topic', '')
        ->call('save')
        ->assertHasErrors([
            'feedback.text' => 'required',
            'feedback.topic' => 'required',
        ]);
});

test('поля відгуку коректно кастуються', function () {
    $feedback = Feedback::factory()->create([
        'is_visible_on_homepage' => true,
    ]);

    expect($feedback->is_visible_on_homepage)->toBeTrue();
});

test('enum-значення теми та послуги відгуку працюють коректно', function () {
    $feedback = Feedback::factory()->create([
        'topic' => FeedbackTopicEnum::GENERAL,
        'service' => ServiceEnum::DRY_CLEANING,
    ]);

    expect($feedback->topic)->toBe(FeedbackTopicEnum::GENERAL);
    expect($feedback->service)->toBe(ServiceEnum::DRY_CLEANING);
});
