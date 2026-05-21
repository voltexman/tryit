<?php

use App\Filament\Resources\Posts\Pages\CreatePost;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;

uses(RefreshDatabase::class);

test('можна створити статтю', function () {
    $post = Post::factory()->create([
        'title' => 'Test Post',
        'slug' => 'test-post',
        'body' => 'This is a test post.',
    ]);

    expect($post)->toBeInstanceOf(Post::class);
    expect($post->title)->toBe('Test Post');
});

test('перевіряє обовʼязкові поля форми статті', function () {
    Livewire::test(CreatePost::class)
        ->fillForm([
            'title' => '',
            'slug' => '',
        ])
        ->call('create')
        ->assertHasFormErrors([
            'title' => 'required',
            'slug' => 'required',
        ]);
});

test('стаття може мати теги', function () {
    $post = Post::factory()->create();
    $tag = Tag::factory()->create();

    $post->tags()->attach($tag);

    expect($post->fresh()->tags->contains($tag))->toBeTrue();
});

test('можна опублікувати статтю', function () {
    $post = Post::factory()->create(['is_published' => false]);

    $post->update(['is_published' => true]);

    expect($post->is_published)->toBeTrue();
});
