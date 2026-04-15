<?php

namespace App\View\Components;

use App\Models\Post;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LatestPosts extends Component
{
    public function __construct(
        public int $limit = 5,
    ) {}

    public function render(): View|Closure|string
    {
        $posts = Post::latest()->take($this->limit)->get();

        return view('components.latest-posts', compact('posts'));
    }
}
