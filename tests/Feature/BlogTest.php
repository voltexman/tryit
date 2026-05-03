<?php

use App\Livewire\BlogIndex;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;

uses(RefreshDatabase::class);

it('can see published posts on the blog index', function () {
    $publishedPost = Post::factory()->create([
        'title' => 'Published Post',
        'is_published' => true,
        'published_at' => now(),
    ]);

    $unpublishedPost = Post::factory()->create([
        'title' => 'Unpublished Post',
        'is_published' => false,
        'published_at' => null,
    ]);

    $this->get('/blog')
        ->assertSuccessful()
        ->assertSee('Published Post')
        ->assertDontSee('Unpublished Post');
});

it('can search posts on the blog index', function () {
    Post::factory()->create(['title' => 'Apple Article', 'is_published' => true, 'published_at' => now()]);
    Post::factory()->create(['title' => 'Banana Article', 'is_published' => true, 'published_at' => now()]);

    Livewire::test(BlogIndex::class)
        ->set('search', 'Apple')
        ->assertSee('Apple Article')
        ->assertDontSee('Banana Article');
});

it('can filter posts by date on the blog index', function () {
    Post::factory()->create([
        'title' => 'Old Post',
        'is_published' => true,
        'published_at' => now()->subYear(),
    ]);

    Post::factory()->create([
        'title' => 'New Post',
        'is_published' => true,
        'published_at' => now(),
    ]);

    Livewire::test(BlogIndex::class)
        ->set('dateFrom', now()->subMonth()->format('Y-m-d'))
        ->assertSee('New Post')
        ->assertDontSee('Old Post');
});

it('can view a single published post', function () {
    $post = Post::factory()->create([
        'title' => 'My Single Post',
        'body' => '<p>This is the post body content.</p>',
        'is_published' => true,
        'published_at' => now(),
    ]);

    $this->get("/blog/{$post->slug}")
        ->assertSuccessful()
        ->assertSee('My Single Post')
        ->assertSee('This is the post body content.');
});

it('cannot view an unpublished post', function () {
    $post = Post::factory()->create([
        'title' => 'My Private Post',
        'is_published' => false,
        'published_at' => null,
    ]);

    $this->get("/blog/{$post->slug}")
        ->assertNotFound();
});

it('can sort posts on the blog index', function () {
    $oldPost = Post::factory()->create([
        'title' => 'Oldest Post',
        'is_published' => true,
        'published_at' => now()->subYear(),
    ]);

    $newPost = Post::factory()->create([
        'title' => 'Newest Post',
        'is_published' => true,
        'published_at' => now(),
    ]);

    Livewire::test(BlogIndex::class)
        ->set('sortBy', 'newest')
        ->assertSeeInOrder(['Newest Post', 'Oldest Post'])
        ->set('sortBy', 'oldest')
        ->assertSeeInOrder(['Oldest Post', 'Newest Post']);
});

it('can filter posts by tag on the blog index', function () {
    $tag = Tag::factory()->create(['name' => 'Specific Tag', 'slug' => 'specific-tag']);

    $taggedPost = Post::factory()->create(['title' => 'Tagged Post', 'is_published' => true, 'published_at' => now()]);
    $taggedPost->tags()->attach($tag);

    $untaggedPost = Post::factory()->create(['title' => 'Untagged Post', 'is_published' => true, 'published_at' => now()]);

    Livewire::test(BlogIndex::class)
        ->set('tag', 'specific-tag')
        ->assertSee('Tagged Post')
        ->assertDontSee('Untagged Post');
});
