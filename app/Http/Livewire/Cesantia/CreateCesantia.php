<?php

namespace App\Http\Livewire\Cesantia;

use App\Models\Cesantia;
use Livewire\Component;

class CreateCesantia extends Component
{
	public Cesantia $cesantia;

	public function mount(Cesantia $cesantia)
	{
		$this->cesantia = new Cesantia();
	}

	protected function rules()
	{
		return
		[
			'cesantia.nit' => 'required',
			'cesantia.nombre' => 'required',
			'cesantia.cod_proteccion_social' => 'required',
			'cesantia.telefono' => 'required',
			'cesantia.direccion' => 'required',
		];
	}

	public function create()
	{
		$this->validate();
		Cesantia::create([
			'user_id' => auth()->user()->id,
			'nit' => $this->cesantia->nit,
			'nombre' => $this->cesantia->nombre,
			'cod_proteccion_social' => $this->cesantia->cod_proteccion_social,
			'telefono' => $this->cesantia->telefono,
			'direccion' => $this->cesantia->direccion,
		]);
		session()->flash('message', 'Creacion exitosa');
		return redirect()->to('/cesantias');
	}
    public function render()
    {
        return view('livewire.cesantia.create-cesantia');
    }
}
