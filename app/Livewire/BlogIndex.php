<?php

namespace App\Livewire;

use App\Models\Post;
use App\Models\Tag;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class BlogIndex extends Component
{
    use WithPagination;

    #[Url(history: true)]
    public $search = '';

    #[Url(history: true)]
    public $dateFrom = '';

    #[Url(history: true)]
    public $dateTo = '';

    #[Url(history: true)]
    public $sortBy = 'newest';

    #[Url(history: true)]
    public $readingTime = '';

    #[Url(history: true)]
    public $tag = '';

    public $perPage = 9;

    #[Computed]
    public function tags()
    {
        return Tag::orderBy('name')->get();
    }

    public function updatedSearch()
    {
        $this->resetPage();
        $this->perPage = 9;
    }

    public function updatedDateFrom()
    {
        $this->resetPage();
        $this->perPage = 9;
    }

    public function updatedDateTo()
    {
        $this->resetPage();
        $this->perPage = 9;
    }

    public function updatedSortBy()
    {
        $this->resetPage();
        $this->perPage = 9;
    }

    public function updatedReadingTime()
    {
        $this->resetPage();
        $this->perPage = 9;
    }

    public function updatedTag()
    {
        $this->resetPage();
        $this->perPage = 9;
    }

    public function loadMore()
    {
        $this->perPage += 9;
    }

    #[Computed]
    public function posts()
    {
        return Post::published()
            ->with('tags')
            ->when($this->search, function ($query) {
                $query->where(function ($q) {
                    $q->where('title', 'like', '%'.$this->search.'%')
                        ->orWhere('excerpt', 'like', '%'.$this->search.'%')
                        ->orWhere('body', 'like', '%'.$this->search.'%');
                });
            })
            ->when($this->tag, function ($query) {
                $query->whereHas('tags', function ($q) {
                    $q->where('slug', $this->tag);
                });
            })
            ->when($this->dateFrom, function ($query) {
                $query->whereDate('published_at', '>=', $this->dateFrom);
            })
            ->when($this->dateTo, function ($query) {
                $query->whereDate('published_at', '<=', $this->dateTo);
            })
            ->when($this->readingTime, function ($query) {
                if ($this->readingTime === 'short') {
                    // < 5 min (~1000 words)
                    $query->whereRaw('LENGTH(body) < 5000');
                } elseif ($this->readingTime === 'medium') {
                    // 5-10 min
                    $query->whereRaw('LENGTH(body) >= 5000 AND LENGTH(body) <= 10000');
                } elseif ($this->readingTime === 'long') {
                    // > 10 min
                    $query->whereRaw('LENGTH(body) > 10000');
                }
            })
            ->when($this->sortBy === 'newest', fn ($q) => $q->latest('published_at'))
            ->when($this->sortBy === 'oldest', fn ($q) => $q->oldest('published_at'))
            ->when($this->sortBy === 'alphabetical', fn ($q) => $q->orderBy('title'))
            ->paginate($this->perPage);
    }

    public function render()
    {
        return view('livewire.blog-index');
    }
}
