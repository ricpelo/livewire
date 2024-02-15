<?php

namespace App\Livewire;

use App\Models\Etiqueta;
use Illuminate\Support\Collection;
use Livewire\Component;

class Formulario extends Component
{
    public $campo = '';
    public $busqueda = '';

    public function insertar()
    {
        Etiqueta::create(['etiqueta' => $this->campo]);
    }

    public function render()
    {
        return view('livewire.formulario', [
            'etiquetas' => Etiqueta::where('etiqueta', 'like', "%{$this->busqueda}%")->get(),
        ]);
    }
}
