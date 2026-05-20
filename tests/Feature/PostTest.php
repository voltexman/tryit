<?php

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('can create a post', function () {
    $post = Post::factory()->create([
        'title' => 'Test Post',
        'slug' => 'test-post',
        'body' => 'This is a test post.',
    ]);

    expect($post)->toBeInstanceOf(Post::class);
    expect($post->title)->toBe('Test Post');
});

test('validates required fields for post', function () {
    $this->postJson('/posts', [])->assertStatus(422);
});

test('post can have tags', function () {
    $post = Post::factory()->create();
    $tag = Tag::factory()->create();

    $post->tags()->attach($tag);

    expect($post->tags)->toContain($tag);
});

test('can publish a post', function () {
    $post = Post::factory()->create(['is_published' => false]);

    $post->update(['is_published' => true]);

    expect($post->is_published)->toBeTrue();
});