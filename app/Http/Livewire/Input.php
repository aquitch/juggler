<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Input extends Component
{
    public $message;

    public function render()
    {
        return view('livewire.input');
    }
}
