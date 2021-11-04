<?php

namespace App\Http\Livewire\Arl;

use App\Models\Arl;
use Livewire\Component;

class UpdateArl extends Component
{
	public Arl $arl;

	public function mount($id)
	{
		$this->arl = Arl::findOrFail($id);
		$this->nit = $this->arl->nit;
		$this->nombre = $this->arl->nombre;
		$this->cod_proteccion_social = $this->arl->cod_proteccion_social;
		$this->telefono = $this->arl->telefono;
		$this->direccion = $this->arl->direccion;
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

		$datos = Arl::findOrFail($this->arl->id);

		$datos->update([
			'nit' => $this->nit,
			'nombre' => $this->nombre,
			'cod_proteccion_social' => $this->cod_proteccion_social,
			'telefono' => $this->telefono,
			'direccion' => $this->direccion,
		]);

		session()->flash('message', 'Actualizacion exitosa!');

		return redirect()->to('/arl');
	}
    public function render()
    {
        return view('livewire.arl.update-arl');
    }
}
