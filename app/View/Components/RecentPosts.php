<?php

namespace App\View\Components;

use App\Models\Post;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class RecentPosts extends Component
{
    public function __construct(
        public ?string $slug = null,
    ) {}

    public function render(): View|Closure|string
    {
        $posts = Post::latest()->whereNot('slug', $this->slug)->limit(5)->get();

        return view('components.recent-posts', compact('posts'));
    }
}
