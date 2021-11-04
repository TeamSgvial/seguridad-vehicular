<?php

namespace App\Http\Livewire\Cesantia;

use App\Models\Cesantia;
use Livewire\Component;

class UpdateCesantia extends Component
{
	public Cesantia $cesantia;

	public function mount($id)
	{
		$this->cesantia = Cesantia::findOrFail($id);
		$this->nit = $this->cesantia->nit;
		$this->nombre = $this->cesantia->nombre;
		$this->cod_proteccion_social = $this->cesantia->cod_proteccion_social;
		$this->telefono = $this->cesantia->telefono;
		$this->direccion = $this->cesantia->direccion;
	}

	public function rules()
	{
		return
		[
			'nit' => 'required',
			'nombre' => 'required',
			'cod_proteccion_social' => 'required',
			'telefono' => 'required',
			'direccion' => 'required',
		];
	}

	public function store()
	{
		$datos = Cesantia::findOrFail($this->cesantia->id);
		$datos->update([
			'nit' => $this->nit,
			'nombre' => $this->nombre,
			'cod_proteccion_social' => $this->cod_proteccion_social,
			'telefono' => $this->telefono,
			'direccion' => $this->direccion,
		]);
		session()->flash('message', 'Actualizacion exitosa');
		return redirect()->to('/cesantias');
	}
    public function render()
    {
        return view('livewire.cesantia.update-cesantia');
    }
}
