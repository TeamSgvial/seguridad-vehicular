<?php

namespace App\Http\Livewire\Soat;

use App\Models\Ciudads;
use App\Models\Empleado;
use App\Models\Soat;
use App\Models\Vehiculo;
use Livewire\Component;

class Create extends Component
{
	public Soat $soat;
	public $empleado_id, $vehiculo_id;
	public Ciudads $ciudad;
	public $employees = [];
	public $vehicles = [];
	public $searchEmployees;
	public $searchVehicles;

	public function mount()
	{
		$this->soat = new Soat();
		$this->ciudad = new Ciudads();
	}
    protected function rules()
    {
        return [
            'soat.poliza' => 'required',
            'soat.codigo_aseguradora' => 'required',
            'soat.clave_producto' => 'required',
            'soat.fecha_expedicion' => 'required',
            'soat.fecha_vencimiento' => 'required',
        ];
    }

    public function searchEmployees()
    {
        $this->employees = Empleado::where('identificacion', 'like', '%'.$this->searchEmployees.'%')
            ->where('user_id', auth()->user()->id)->get();
    }

	public function searchVehicles()
	{
        $this->vehicles = Vehiculo::where('placa', 'like', '%'.$this->searchVehicles.'%')
            ->where('user_id', auth()->user()->id)->get();
	}

	public function dataVehicles(Vehiculo $vehicles)
	{
		$this->searchVehicles = $vehicles->placa;
		$this->vehiculo_id = $vehicles->id;
	}

	public function dataEmployeed(Empleado $employees)
	{
		$this->searchEmployees = $employees->identificacion;
		$this->empleado_id = $employees->id;
	}

	public function clearInputs()
	{
		$this->searchEmployees = "";
		$this->searchVehicles = "";
		$this->soat->poliza = "";
		$this->soat->codigo_aseguradora = "";
		$this->soat->clave_producto = "";
		$this->soat->fecha_expedicion = "";
		$this->soat->fecha_vencimiento = "";
	}

	public function create()
	{
		$this->validate();
		Soat::create([
			'user_id' => auth()->user()->id,
			'empleado_id' => $this->empleado_id,
			'vehiculo_id' => $this->vehiculo_id,
			'ciudad_id' => 1,
			'poliza' => $this->soat->poliza,
			'codigo_aseguradora' => $this->soat->codigo_aseguradora,
			'clave_producto' => $this->soat->clave_producto,
			'fecha_expedicion' => $this->soat->fecha_expedicion,
			'fecha_vencimiento' => $this->soat->fecha_vencimiento,
		]);

		$this->clearInputs();
		session()->flash('message', 'Soat successfully created');
		return redirect()->to('/soat');
	}

    public function render()
    {
        return view('livewire.soat.create');
    }
}
