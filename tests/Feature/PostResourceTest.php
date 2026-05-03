<?php

use App\Filament\Resources\Posts\Pages\CreatePost;
use App\Filament\Resources\Posts\Pages\EditPost;
use App\Filament\Resources\Posts\Pages\ListPosts;
use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Livewire;

uses(RefreshDatabase::class);

beforeEach(function () {
    $this->actingAs(User::factory()->create([
        'email' => 'admin@admin.com',
    ]));
});

it('can render post list page', function () {
    Livewire::test(ListPosts::class)
        ->assertSuccessful();
});

it('can list posts', function () {
    $posts = Post::factory()->count(10)->create();

    Livewire::test(ListPosts::class)
        ->assertCanSeeTableRecords($posts);
});

it('can render create post page', function () {
    Livewire::test(CreatePost::class)
        ->assertSuccessful();
});

it('can create a post', function () {
    Storage::fake('public');
    $file = UploadedFile::fake()->image('post.jpg');

    $title = 'Unique Post Title '.uniqid();
    $body = '<p>Post body content.</p>';
    $slug = Str::slug($title);

    Livewire::test(CreatePost::class)
        ->set('data.title', $title)
        ->set('data.body', $body)
        ->set('data.slug', $slug)
        ->set('data.image', $file)
        ->call('create')
        ->assertHasNoFormErrors();

    $this->assertDatabaseHas(Post::class, [
        'title' => $title,
        'slug' => $slug,
    ]);
});

it('can render edit post page', function () {
    $post = Post::factory()->create();

    Livewire::test(EditPost::class, [
        'record' => $post->getRouteKey(),
    ])
        ->assertSuccessful();
});

it('can retrieve post data for editing', function () {
    $post = Post::factory()->create([
        'body' => '<p>Simple body</p>',
    ]);

    Livewire::test(EditPost::class, [
        'record' => $post->getRouteKey(),
    ])
        ->assertFormSet([
            'title' => $post->title,
            'slug' => $post->slug,
            'body' => $post->body,
        ]);
});

it('can update a post', function () {
    $post = Post::factory()->create();
    $newTitle = 'Updated Post Title '.uniqid();

    Livewire::test(EditPost::class, [
        'record' => $post->getRouteKey(),
    ])
        ->set('data.title', $newTitle)
        ->call('save')
        ->assertHasNoFormErrors();

    expect($post->refresh())
        ->title->toBe($newTitle);
});

it('can delete a post', function () {
    $post = Post::factory()->create();

    Livewire::test(EditPost::class, [
        'record' => $post->getRouteKey(),
    ])
        ->callAction('delete')
        ->assertHasNoFormErrors();

    $this->assertDatabaseMissing(Post::class, [
        'id' => $post->id,
    ]);
});

it('validates required fields on create', function () {
    Livewire::test(CreatePost::class)
        ->set('data.title', null)
        ->set('data.body', null)
        ->call('create')
        ->assertHasFormErrors([
            'title' => 'required',
        ])
        ->assertHasErrors(['data.body']);
});

it('automatically generates slug from title', function () {
    Livewire::test(CreatePost::class)
        ->set('data.title', 'Hello World')
        ->assertFormSet([
            'slug' => 'hello-world',
        ]);
});
