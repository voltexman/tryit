<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy]
class BlogPosts extends Component
{
    public function render()
    {
        $posts = Post::published()->take(4)->get();

        return view('livewire.blog-posts', [
            'posts' => $posts,
        ]);
    }

    public function placeholder()
    {
        return view('livewire.placeholders.blog-posts');
    }
}
