<?php

namespace App\Livewire;

use Livewire\Component;

class Callback extends Component
{
    public function send()
    {
        sleep(500);
    }

    public function render()
    {
        return view('livewire.callback');
    }
}
