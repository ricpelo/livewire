<?php

namespace App\Livewire;

use Livewire\Component;

class Contador extends Component
{
    public $contar = 1;

    public function incrementar()
    {
        $this->contar++;
    }

    public function decrementar()
    {
        $this->contar--;
    }

    public function render()
    {
        return view('livewire.contador');
    }
}
