<?php

namespace App\Livewire;

use App\Livewire\Forms\FeedbackForm;
use Livewire\Component;

class Feedback extends Component
{
    public FeedbackForm $feedback;

    public function save()
    {
        $this->feedback->store();

        session()->flash('success');
    }

    public function render()
    {
        return view('livewire.feedback');
    }
}
