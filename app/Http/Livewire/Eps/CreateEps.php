<?php

namespace App\Http\Livewire\Eps;

use App\Models\Eps;
use Livewire\Component;

class CreateEps extends Component
{
	public Eps $eps;

	public function mount(Eps $eps)
	{
		$this->eps = new Eps();
	}

	protected function rules()
	{
		return [
			'eps.nit' => 'required',
			'eps.nombre' => 'required',
			'eps.cod_proteccion_social' => 'required',
			'eps.telefono' => 'required',
			'eps.direccion' => 'required',
		];
	}
	public function create()
	{
		$this->validate();

		Eps::create([
			'user_id' => auth()->user()->id,
			'nit' => $this->eps->nit,
			'nombre' => $this->eps->nombre,
			'cod_proteccion_social' => $this->eps->cod_proteccion_social,
			'telefono' => $this->eps->telefono,
			'direccion' => $this->eps->direccion,
		]);
		session()->flash('message', 'Creacion exitosa!');
		return redirect()->to('/eps');

	}
    public function render()
    {
        return view('livewire.eps.create-eps');
    }
}
