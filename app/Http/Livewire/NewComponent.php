<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NewComponent extends Component
{
    public function render()
    {
        return view('livewire.new-component')-> layout ('layouts.base');
    }
}
