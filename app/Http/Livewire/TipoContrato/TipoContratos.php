<?php

namespace App\Http\Livewire\TipoContrato;

use App\Models\Tipo_contratos;
use Livewire\Component;

class TipoContratos extends Component
{
    public $nombre;

    protected function rules()
    {
        return [
            'nombre' => 'required'
        ];
    }

    public function submit()
    {
        $this->validate();

        Tipo_contratos::create([
            'user_id' => auth()->user()->id,
            'nombre' => $this->nombre
        ]);

        $this->nombre = "";
    }
    public function render()
    {
        return view('livewire.tipo-contrato.tipo-contratos');
    }
}
