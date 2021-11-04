<?php

namespace App\Http\Livewire\Cda;

use App\Http\Livewire\Cda\Cdas;
use App\Models\Cda;
use Livewire\Component;

class Cdas extends Component
{
    public $nit;
    public $nombre;

    protected function rules()
    {
        return [
            'nit' => ['required', 'unique:cdas,nit'],
            'nombre' => 'required',
        ];
    }

    public function submit()
    {
        $this->validate();

        Cda::create([
            'user_id' => auth()->user()->id,
            'nit' => $this->nit,
            'nombre' => $this->nombre,
        ]);

        $this->nit = "";
        $this->nombre = "";

    }
    public function render()
    {
        return view('livewire.cda.cdas');
    }
}
