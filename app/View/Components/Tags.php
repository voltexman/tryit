<?php

namespace App\View\Components;

use App\Models\Tag;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Tags extends Component
{
    public function render(): View|Closure|string
    {
        $tags = Tag::has('posts')->limit(15)->withCount('posts')->get();

        return view('components.tags', compact('tags'));
    }
}
