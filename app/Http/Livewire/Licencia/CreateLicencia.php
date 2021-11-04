<?php

namespace App\Http\Livewire\Licencia;

use App\Models\Categoria_licencia;
use App\Models\Empleado;
use App\Models\Licencia_conduccion;
use Livewire\Component;

class CreateLicencia extends Component
{
	public Licencia_conduccion $licencia;
	public $employees = [];
	public $searchEmployees;
	public $empleado;

	public function mount(Licencia_conduccion $licencia)
	{
		$this->licencia = new Licencia_conduccion();
	}

	protected function rules()
	{
		return
		[
			'licencia.categoria_id' => 'required',
			'licencia.restricciones' => 'required',
			'licencia.tipo_sangre' => 'required',
			'licencia.fecha_expedicion' => 'required',
			'licencia.vigencia' => 'required',
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

	public function create()
	{
		$this->validate();
		Licencia_conduccion::create([
			'user_id' => auth()->user()->id,
			'categoria_id' => $this->licencia->categoria_id,
			'empleado_id' => $this->empleado,
			'restricciones' => $this->licencia->restricciones,
			'tipo_sangre' => $this->licencia->tipo_sangre,
			'fecha_expedicion' => $this->licencia->fecha_expedicion,
			'vigencia' => $this->licencia->vigencia,
		]);
		session()->flash('message', 'Creacion exitosa');
		return redirect()->to('/licencia');
	}

    public function render()
    {
        return view('livewire.licencia.create-licencia',
        	[
        		'categorias' => Categoria_licencia::all()
        	]);
    }
}
