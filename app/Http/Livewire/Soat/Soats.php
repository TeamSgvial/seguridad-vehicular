<?php

namespace App\Http\Livewire\Soat;

use App\Models\Empleado;
use App\Models\Soat;
use Livewire\Component;

class Soats extends Component
{
    public $empleado,$vehiculo;
    public Soat $soat;
    public $update = false;

    public function mount()
    {
        $this->soat = new Soat();
    }

    protected function rules()
    {
        return [
            'soat.empleado_id' => ['required', 'max:30'],
            'soat.vehiculo_id' => ['required', 'max:30'],
            'soat.ciudad_id' => ['required', 'max:30'],
            'soat.poliza' => ['required', 'max:30'],
            'soat.codigo_aseguradora' => ['required', 'max:30'],
            'soat.clave_producto' => ['required', 'max:30'],
            'soat.fecha_expedicion' => ['required', 'max:30'],
            'soat.fecha_vencimiento' => ['required', 'max:30'],
        ];
    }

    function updateModal(Soat $soat)
    {
        $this->soat = Soat::findOrFail($soat->id);
        $this->empleado = $this->soat->empleado->nombre ." ". $this->soat->empleado->apellido ;
        $this->vehiculo = $this->soat->vehicle->placa;
        $this->update = !$this->update;
    }
    public function closeModal()
    {
        $this->update = !$this->update;
    }

    public function open()
    {
        return redirect()->to('/create-soats');
    }

    public function create()
    {
        $this->validate();
        Soat::create([
            'user_id' => auth()->user()->id,
            'empleado_id' => $this->empleado_id,
            'vehiculo_id' => $this->vehiculo_id,
            'ciudad_id' => $this->soat->ciudad_id,
            'poliza' => $this->soat->poliza,
            'codigo_aseguradora' => $this->soat->codigo_aseguradora,
            'clave_producto' => $this->soat->clave_producto,
            'fecha_expedicion' => $this->soat->fecha_expedicion,
            'fecha_vencimiento' => $this->soat->fecha_vencimiento
        ]);
    }

    public function show(Soat $soat)
    {
        return redirect()->to('/show-soat/'. $soat->id);
    }

    public function update()
    {
        $this->validate();
        $datos = Soat::findOrFail($this->soat->id);
        $datos->update([
            'empleado_id' => $this->soat->empleado_id,
            'vehiculo_id' => $this->soat->vehiculo_id,
            'poliza' => $this->soat->poliza,
            'codigo_aseguradora' => $this->soat->codigo_aseguradora,
            'clave_producto' => $this->soat->clave_producto,
            'fecha_expedicion' => $this->soat->fecha_expedicion,
            'fecha_vencimiento' => $this->soat->fecha_vencimiento,
        ]);
        $this->update = !$this->update;
        session()->flash('message', 'Soat successfully updated');
    }
    public function render()
    {
        return view('livewire.soat.soats',
            [
                'soats' => Soat::where('user_id', auth()->id())->get()
            ]);
    }
}
