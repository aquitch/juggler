<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddInputButton extends Component
{
    public $inputs = [0];
    public $name;

    public function addInput()
    {
        array_push($this->inputs, '');
    }

    public function deleteInput()
    {
        array_pop($this->inputs);
    }

    public function render()
    {
        return view('livewire.add-input-button');
    }
}
