<?php

namespace App\Livewire;

use Livewire\Component;

class Callback extends Component
{
    public function send()
    {
        sleep(2);

        session()->flash('success');
    }

    public function render()
    {
        return view('livewire.callback');
    }
}
