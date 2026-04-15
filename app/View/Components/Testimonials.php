<?php

namespace App\View\Components;

use App\Models\Feedback;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Testimonials extends Component
{
    public function render(): View|Closure|string
    {
        $testimonials = Feedback::where('show', true)->latest()->get();

        return view('components.testimonials', compact('testimonials'));
    }
}
