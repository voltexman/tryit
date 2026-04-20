<?php

namespace App\Livewire;

use App\Livewire\Forms\FeedbackForm;
use Livewire\Component;
use Livewire\WithFileUploads;

class Feedback extends Component
{
    use WithFileUploads;

    public FeedbackForm $feedback;

    public $images = [];

    public function updatedImages()
    {
        $this->validate([
            'images.*' => 'image|max:5120', // 5MB max
        ]);
    }

    public function removeImage($index)
    {
        array_splice($this->images, $index, 1);
    }

    public function save()
    {
        $this->feedback->store($this->images);

        $this->images = [];
        session()->flash('success');
    }

    public function render()
    {
        return view('livewire.feedback');
    }
}
