<?php

namespace App\Http\Livewire\Sucursales;

use App\Models\Sucursales;
use Livewire\Component;

class Sucursal extends Component
{
    public $departamento_id,$ciudad_id,$direccion;

    protected function rules()
    {
        return [
            'departamento_id' => 'required',
            'ciudad_id' => 'required',
            'direccion' => 'required'
        ];
    }

    public function submit()
    {
        $this->validate();

        Sucursales::create([
            'user_id' => auth()->user()->id,
            'departamento_id' => $this->departamento_id,
            'ciudad_id' => $this->ciudad_id,
            'direccion' => $this->direccion
        ]);
        $this->departamento_id = "";
        $this->ciudad_id = "";
        $this->direccion = "";
    }
    public function render()
    {
        return view('livewire.sucursales.sucursales');
    }
}
