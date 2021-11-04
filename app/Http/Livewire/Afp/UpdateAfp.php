<?php

namespace App\Http\Livewire\Afp;

use App\Models\Afp;
use Livewire\Component;

class UpdateAfp extends Component
{
	public Afp $afp;

	public function mount($id)
	{
		$this->afp = Afp::findOrFail($id);
		$this->nit = $this->afp->nit;
		$this->nombre = $this->afp->nombre;
		$this->cod_proteccion_social = $this->afp->cod_proteccion_social;
		$this->telefono = $this->afp->telefono;
		$this->direccion = $this->afp->direccion;
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
		$datos = Afp::findOrFail($this->afp->id);
		$datos->update([
			'nit' => $this->nit,
			'nombre' => $this->nombre,
			'cod_proteccion_social' => $this->cod_proteccion_social,
			'telefono' => $this->telefono,
			'direccion' => $this->direccion,
		]);

		session()->flash('message', 'Actualizacion exitosa');
		return redirect()->to('/afp');
	}

    public function render()
    {
        return view('livewire.afp.update-afp');
    }
}
