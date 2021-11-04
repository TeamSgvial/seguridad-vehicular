<?php

namespace App\Http\Livewire\Afp;

use App\Models\Afp;
use Livewire\Component;

class CreateAfp extends Component
{
	public Afp $afp;

	public function mount(Afp $afp)
	{
		$this->afp = new Afp();
	}

	protected function rules()
	{
		return
		[
			'afp.nit' => 'required',
			'afp.nombre' => 'required',
			'afp.cod_proteccion_social' => 'required',
			'afp.telefono' => 'required',
			'afp.direccion' => 'required',
		];
	}

	public function create()
	{
		$this->validate();
		Afp::create([
			'user_id' => auth()->user()->id,
			'nit' => $this->afp->nit,
			'nombre' => $this->afp->nombre,
			'cod_proteccion_social' => $this->afp->cod_proteccion_social,
			'telefono' => $this->afp->telefono,
			'direccion' => $this->afp->direccion,
		]);

		session()->flash('message', 'Creacion exitosa');
		return redirect()->to('/afp');
	}

    public function render()
    {
        return view('livewire.afp.create-afp');
    }
}
