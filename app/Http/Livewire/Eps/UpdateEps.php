<?php

namespace App\Http\Livewire\Eps;

use App\Models\Eps;
use Livewire\Component;

class UpdateEps extends Component
{
	public Eps $eps;

	public function mount($id)
	{
		$this->eps = Eps::findOrFail($id);
		$this->nit = $this->eps->nit;
		$this->nombre = $this->eps->nombre;
		$this->cod_proteccion_social = $this->eps->cod_proteccion_social;
		$this->telefono = $this->eps->telefono;
		$this->direccion = $this->eps->direccion;
	}

	protected function rules()
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
		$this->validate();
		$datos = Eps::findOrFail($this->eps->id);
		$datos->update([
			'nit' => $this->nit,
			'nombre' => $this->nombre,
			'cod_proteccion_social' => $this->cod_proteccion_social,
			'telefono' => $this->telefono,
			'direccion' => $this->direccion,
		]);
		session()->flash('message', 'Actializacion exitosa!');
		return redirect()->to('/eps');
	}

    public function render()
    {
        return view('livewire.eps.update-eps');
    }
}
