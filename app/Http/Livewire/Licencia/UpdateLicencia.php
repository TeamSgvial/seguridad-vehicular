<?php

namespace App\Http\Livewire\Licencia;

use App\Models\Categoria_licencia;
use App\Models\Empleado;
use App\Models\Licencia_conduccion;
use Livewire\Component;

class UpdateLicencia extends Component
{
	public Licencia_conduccion $licencia;
	public $employees = [];
	public $searchEmployees;
	public $empleado;

	public function mount($id)
	{
		$this->licencia = Licencia_conduccion::findOrFail($id);
		$this->empleado = $this->licencia->empleado_id;
		$this->searchEmployees = $this->licencia->propietario->nombre ." ". $this->licencia->propietario->apellido;
		$this->categoria_id = $this->licencia->categoria_id;
		$this->restricciones = $this->licencia->restricciones;
		$this->tipo_sangre = $this->licencia->tipo_sangre;
		$this->fecha_expedicion = $this->licencia->fecha_expedicion;
		$this->vigencia = $this->licencia->vigencia;
	}

	protected function rules()
	{
		return
		[
			'categoria_id' => 'required',
			'restricciones' => 'required',
			'tipo_sangre' => 'required',
			'fecha_expedicion' => 'required',
			'vigencia' => 'required',
		];
	}

    public function searchEmployees()
    {
        $this->employees = Empleado::where('identificacion', 'like', '%'.$this->searchEmployees.'%')
            ->where('user_id', auth()->user()->id)->get();
    }

	public function dataEmployeed(Empleado $employees)
	{
		$this->searchEmployees = $employees->identificacion;
		$this->empleado = $employees->id;
	}

	public function store()
	{
		$this->validate();
		$datos = Licencia_conduccion::findOrFail($this->licencia->id);
		$datos->update([
			'empleado_id' => $this->empleado,
			'categoria_id' => $this->categoria_id,
			'restricciones' => $this->restricciones,
			'tipo_sangre' => $this->tipo_sangre,
			'fecha_expedicion' => $this->fecha_expedicion,
			'vigencia' => $this->vigencia
		]);
		session()->flash('message', 'Actualizacion exitosa');
		return redirect()->to('/licencia');
	}
    public function render()
    {
        return view('livewire.licencia.update-licencia',
        	[
        		'categorias' => Categoria_licencia::all()
        	]);
    }
}
