<?php

namespace App\Http\Livewire\Tecnicomecanica;

use App\Models\Tecnicomecanica;
use Livewire\Component;

class Tecnicomecanicas extends Component
{
    public $empleado,$vehiculo;
    public Tecnicomecanica $tecnicomecanica;
    public $update = false;

    public function mount(Tecnicomecanica $tecnicomecanica)
    {
        $this->tecnicomecanica = new Tecnicomecanica();
    }

    protected function rules()
    {
        return [
            'tecnicomecanica.empleado_id' => 'required',
            'tecnicomecanica.vehiculo_id' => 'required',
            'tecnicomecanica.cda_id' => 'required',
            'tecnicomecanica.no_control' => 'required',
            'tecnicomecanica.numero_control' => 'required',
            'tecnicomecanica.consecutivo_runt' => 'required',
            'tecnicomecanica.fecha_expedicion' => 'required',
            'tecnicomecanica.fecha_vencimiento' => 'required',
            'tecnicomecanica.certificado_acreditacion' => 'required'
        ];
    }

    public function show(Tecnicomecanica $tecnicomecanica)
    {
        return redirect()->to('/show-tecnicomecanica/' .$tecnicomecanica->id);
    }

    public function updateModal(Tecnicomecanica $tecnicomecanica)
    {
        $this->tecnicomecanica = Tecnicomecanica::findOrFail($tecnicomecanica->id);
        $this->empleado = $this->tecnicomecanica->empleado->nombre ." ". $this->tecnicomecanica->empleado->apellido;
        $this->vehiculo = $this->tecnicomecanica->vehiculo->placa;
        $this->update = !$this->update;
    }

    public function update()
    {
        $this->validate();

        $datos = Tecnicomecanica::findOrFail($this->tecnicomecanica->id);
        $datos->update([
            'empleado_id' => $this->tecnicomecanica->empleado_id,
            'vehiculo_id' => $this->tecnicomecanica->vehiculo_id,
            'cda_id' => $this->tecnicomecanica->cda_id,
            'no_control' => $this->tecnicomecanica->no_control,
            'numero_control' => $this->tecnicomecanica->numero_control,
            'consecutivo_runt' => $this->tecnicomecanica->consecutivo_runt,
            'fecha_expedicion' => $this->tecnicomecanica->fecha_expedicion,
            'fecha_vencimiento' => $this->tecnicomecanica->fecha_vencimiento,
            'certificado_acreditacion' => $this->tecnicomecanica->certificado_acreditacion,
        ]);
        $this->update = !$this->update;
        session()->flash('message', 'Actualizacion exitosa!');

    }

    public function open()
    {
        return redirect()->to('/create-tecnicomecanica');
    }

    public function render()
    {
        return view('livewire.tecnicomecanica.tecnicomecanicas',
            [
                'tecnicomecanicas' => Tecnicomecanica::where('user_id', auth()->id())->get()
            ]);
    }
}
