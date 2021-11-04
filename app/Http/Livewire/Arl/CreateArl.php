<?php

namespace App\Http\Livewire\Arl;

use App\Models\Arl;
use Livewire\Component;

class CreateArl extends Component
{
	public Arl $arl;

	public function mount(Arl $arl)
	{
		$this->arl = new Arl();
	}

	public function rules()
	{
		return
		[
			'arl.nit' => 'required',
			'arl.nombre' => 'required',
			'arl.cod_proteccion_social' => 'required',
			'arl.telefono' => 'required',
			'arl.direccion' => 'required',
		];
	}

	public function create()
	{
		$this->validate();
		Arl::create([
			'user_id' => auth()->user()->id,
			'nit' => $this->arl->nit,
			'nombre' => $this->arl->nombre,
			'cod_proteccion_social' => $this->arl->cod_proteccion_social,
			'telefono' => $this->arl->telefono,
			'direccion' => $this->arl->direccion,
		]);
		session()->flash('message', 'Creacion exitosa!');
		return redirect()->to('/arl');
	}

    public function render()
    {
        return view('livewire.arl.create-arl');
    }
}
