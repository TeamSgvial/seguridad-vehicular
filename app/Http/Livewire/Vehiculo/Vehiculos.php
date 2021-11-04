<?php

namespace App\Http\Livewire\Vehiculo;

use App\Models\Empleado;
use App\Models\Vehiculo;
use Livewire\Component;
use Livewire\WithFileUploads;


class Vehiculos extends Component
{
    public Vehiculo $vehiculo;
    public $empleado;
    public $search;
    public $foto;
    public $datos = [];
    public $show = false;
    public $modal = false;
    public $create = false;

    use WithFileUploads;

    public function empleado($identificacion, $id)
    {
        $this->search = $identificacion;
        $this->empleado = $id;
    }

    public function mount()
    {
        $this->vehiculo = new Vehiculo();
    }

    public function close($data)
    {
        switch ($data) {
            case 'modal':
                $this->modal = false;
                break;
            case 'show':
                $this->show = false;
                break;
            case 'create':
                $this->create = false;
                break;

            default:
                // code...
                break;
        }
    }
    public function open()
    {
        $this->create = !$this->create;
    }
    protected function rules()
    {
        return [
            'vehiculo.id' => '',
            'vehiculo.tipo_vehiculo' => ['required'],
            'vehiculo.placa' => ['required', 'unique:vehiculos,placa,' .$this->vehiculo->id],
            'vehiculo.marca' => ['required', 'string', 'max:255'],
            'vehiculo.linea' => ['required', 'string', 'max:255'],
            'vehiculo.modelo' => ['required', 'max:10'],
            'vehiculo.cilindrada' => ['required', 'max:20'],
            'vehiculo.color' => ['required', 'string','max:20'],
            'vehiculo.servicio' => ['required', 'string', 'max:20'],
            'vehiculo.clase_vehiculo' => ['required', 'string', 'max:20'],
            'vehiculo.tipo_carroceria' => ['required', 'string', 'max:20'],
            'vehiculo.combustible' => ['required', 'string', 'max:20'],
            'vehiculo.capacidad' => ['required', 'string', 'max:20'],
            'vehiculo.no_motor' => '',
            'vehiculo.no_vin' => '',
            'vehiculo.no_serie' => '',
            'vehiculo.chasis' => '',
            'vehiculo.blindaje' => '',
            'vehiculo.potencia' => '',
            'vehiculo.puertas' => '',
            'vehiculo.fecha_matricula' => ['date'],
            'vehiculo.fecha_vencimiento' => ['date'],
            'foto' => ['image','max:1024'],
        ];
    }

    public function search()
    {
        $this->datos = Empleado::where('identificacion', 'like', '%'.$this->search.'%')
            ->where('user_id', auth()->user()->id)->get();
    }

    public function clearInputs()
    {
        $this->empleado = "";
        $this->vehiculo->tipo_vehiculo = "";
        $this->vehiculo->placa = "";
        $this->vehiculo->marca = "";
        $this->vehiculo->linea = "";
        $this->vehiculo->modelo = "";
        $this->vehiculo->cilindrada = "";
        $this->vehiculo->color = "";
        $this->vehiculo->servicio = "";
        $this->vehiculo->clase_vehiculo = "";
        $this->vehiculo->tipo_carroceria = "";
        $this->vehiculo->combustible = "";
        $this->vehiculo->capacidad = "";
        $this->vehiculo->no_vin = "";
        $this->vehiculo->no_serie = "";
        $this->vehiculo->chasis = "";
        $this->vehiculo->blindaje = "";
        $this->vehiculo->potencia = "";
        $this->vehiculo->puertas = "";
        $this->fotografia = "";
        $this->vehiculo->fecha_matricula = "";
        $this->vehiculo->fecha_vencimiento = "";
    }
    public function saveVehiculo()
    {
        $this->validate();
        $this->foto->store('photos');
        Vehiculo::create([
            'empleado_id' => $this->empleado,
            'user_id' => auth()->user()->id,
            'tipo_vehiculo' => $this->vehiculo->tipo_vehiculo,
            'placa' => $this->vehiculo->placa,
            'marca' => $this->vehiculo->marca,
            'linea' => $this->vehiculo->linea,
            'modelo' => $this->vehiculo->modelo,
            'cilindrada' => $this->vehiculo->cilindrada,
            'color' => $this->vehiculo->color,
            'servicio' => $this->vehiculo->servicio,
            'clase_vehiculo' => $this->vehiculo->clase_vehiculo,
            'tipo_carroceria' => $this->vehiculo->tipo_carroceria,
            'combustible' => $this->vehiculo->combustible,
            'capacidad' => $this->vehiculo->capacidad,
            'no_motor' => $this->vehiculo->no_motor,
            'no_vin' => $this->vehiculo->no_vin,
            'no_serie' => $this->vehiculo->no_serie,
            'chasis' => $this->vehiculo->chasis,
            'blindaje' => $this->vehiculo->blindaje,
            'potencia' => $this->vehiculo->potencia,
            'puertas' => $this->vehiculo->puertas,
            'fotografia' => $this->foto->getFilename(),
            'fecha_matricula' => $this->vehiculo->fecha_matricula,
            'fecha_vencimiento' => $this->vehiculo->fecha_vencimiento
        ]);
        $this->clearInputs();
        $this->create = false;
    }

    public function edit($id)
    {
        $datos = Vehiculo::findOrFail($id);
        $this->vehiculo = $datos;
        $this->search = $this->vehiculo->propietario->identificacion;
        $this->empleado = $this->vehiculo->propietario->id;
        $this->modal = true;
    }

    public function store()
    {
        $this->validate();
        $datos = Vehiculo::find($this->vehiculo->id);
        $datos->update([
            'empleado_id' => $this->empleado,
            'user_id' => auth()->user()->id,
            'tipo_vehiculo' => $this->vehiculo->tipo_vehiculo,
            'placa' => $this->vehiculo->placa,
            'marca' => $this->vehiculo->marca,
            'linea' => $this->vehiculo->linea,
            'modelo' => $this->vehiculo->modelo,
            'cilindrada' => $this->vehiculo->cilindrada,
            'color' => $this->vehiculo->color,
            'servicio' => $this->vehiculo->servicio,
            'clase_vehiculo' => $this->vehiculo->clase_vehiculo,
            'tipo_carroceria' => $this->vehiculo->tipo_carroceria,
            'combustible' => $this->vehiculo->combustible,
            'capacidad' => $this->vehiculo->capacidad,
            'no_motor' => $this->vehiculo->no_motor,
            'no_vin' => $this->vehiculo->no_vin,
            'no_serie' => $this->vehiculo->no_serie,
            'chasis' => $this->vehiculo->chasis,
            'blindaje' => $this->vehiculo->blindaje,
            'potencia' => $this->vehiculo->potencia,
            'puertas' => $this->vehiculo->puertas,
            'fotografia' => $this->foto,
            'fecha_matricula' => $this->vehiculo->fecha_matricula,
            'fecha_vencimiento' => $this->vehiculo->fecha_vencimiento
        ]);
        $this->modal = false;
        $this->clearInputs();
    }

    public function show($id)
    {
        return redirect()->to('/show-vehicles/'. $id);
    }

    public function render()
    {
        return view('livewire.vehiculo.vehiculos',
            [
                'vehiculos' => Vehiculo::where('user_id', auth()->id())->get()
            ]
        );
    }
}
