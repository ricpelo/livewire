<?php

namespace App\Livewire;

use Livewire\Component;

class Dispara extends Component
{
    public function disparar()
    {
        $this->dispatch('disparar');
    }

    public function render()
    {
        return view('livewire.dispara');
    }
}
