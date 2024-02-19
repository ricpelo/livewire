<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class Escucha extends Component
{
    public $campo = '';


    #[On('disparar')]
    public function escucha()
    {
        $this->campo = 'He escuchado el evento';
    }

    public function render()
    {
        return view('livewire.escucha');
    }
}
