<?php

namespace App\Http\Livewire\Tecnicomecanica;

use App\Models\Cda;
use App\Models\Empleado;
use App\Models\Tecnicomecanica;
use App\Models\Vehiculo;
use Livewire\Component;

class CreateTecnicomecanica extends Component
{
	public Tecnicomecanica $tecnicomecanica;
	public $empleado_id, $vehiculo_id;
	public $employees = [];
	public $vehicles = [];
	public Cda $cda;
	public $searchEmployees;
	public $searchVehicles;


	public function mount()
	{
		$this->tecnicomecanica = new Tecnicomecanica();
		$this->cda = new Cda();
	}
	protected function rules()
	{
		return [
			'tecnicomecanica.no_control' => ['required'],
			'tecnicomecanica.numero_control' => ['required'],
			'tecnicomecanica.consecutivo_runt' => ['required'],
			'tecnicomecanica.fecha_expedicion' => ['required'],
			'tecnicomecanica.fecha_vencimiento' => ['required'],
			'tecnicomecanica.certificado_acreditacion' => ['required'],
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

    public function create()
    {
        $this->validate();

        Tecnicomecanica::create([
            'user_id' => auth()->user()->id,
            'empleado_id' => $this->empleado_id,
            'vehiculo_id' => $this->vehiculo_id,
            'cda_id' => 1,
            'no_control' => $this->tecnicomecanica->no_control,
            'numero_control' => $this->tecnicomecanica->numero_control,
            'consecutivo_runt' => $this->tecnicomecanica->consecutivo_runt,
            'fecha_expedicion' => $this->tecnicomecanica->fecha_expedicion,
            'fecha_vencimiento' => $this->tecnicomecanica->fecha_vencimiento,
            'certificado_acreditacion' => $this->tecnicomecanica->certificado_acreditacion
        ]);
        session()->flash('message', 'Creacion exitosa!');
        return redirect()->to('/tecnicomecanica');

    }

    public function render()
    {
        return view('livewire.tecnicomecanica.create-tecnicomecanica');
    }
}
