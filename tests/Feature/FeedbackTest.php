<?php

use App\Models\Feedback;
use App\Enums\FeedbackTopicEnum;
use App\Enums\ServiceEnum;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('can create feedback', function () {
    $feedback = Feedback::factory()->create([
        'name' => 'John Doe',
        'contact' => 'john@example.com',
        'text' => 'Great service!',
        'topic' => FeedbackTopicEnum::GENERAL,
        'service' => ServiceEnum::SUPPORT,
        'rating' => 5,
    ]);

    expect($feedback)->toBeInstanceOf(Feedback::class);
    expect($feedback->name)->toBe('John Doe');
});

test('validates required fields for feedback', function () {
    $this->postJson('/feedback', [])->assertStatus(422);
});

test('feedback casts fields correctly', function () {
    $feedback = Feedback::factory()->create([
        'is_visible_on_homepage' => true,
    ]);

    expect($feedback->is_visible_on_homepage)->toBeTrue();
});

test('feedback topic and service enums work', function () {
    $feedback = Feedback::factory()->create([
        'topic' => FeedbackTopicEnum::GENERAL,
        'service' => ServiceEnum::SUPPORT,
    ]);

    expect($feedback->topic)->toBe(FeedbackTopicEnum::GENERAL);
    expect($feedback->service)->toBe(ServiceEnum::SUPPORT);
});