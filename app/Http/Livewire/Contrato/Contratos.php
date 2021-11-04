<?php

namespace App\Http\Livewire\Contrato;

use App\Models\Contrato;
use Livewire\Component;

class Contratos extends Component
{
    public $empleado_id,$contrato_id,$eps_id,$arl_id,$afp_id,$cesantia_id,$codigo,$fechaIngreso,$fechaEgreso,$no_personas,$profesion,$cargo,$educacion,$salario;

    protected function rules()
    {
        return [
            'empleado_id' => 'required',
            'contrato_id' => 'required',
            'eps_id' => 'required',
            'arl_id' => 'required',
            'afp_id' => 'required',
            'cesantia_id' => 'required',
            'codigo' => 'required',
            'fechaIngreso' => 'required',
            'fechaEgreso' => 'required',
            'no_personas' => 'required',
            'profesion' => 'required',
            'cargo' => 'required',
            'educacion' => 'required',
            'salario' => 'required'];
    }

    public function submit()
    {
        $this->validate();

        Contrato::create([
            'user_id' => auth()->user()->id,
            'empleado_id' => $this->empleado_id,
            'contrato_id' => $this->contrato_id,
            'eps_id' => $this->eps_id,
            'arl_id' => $this->arl_id,
            'afp_id' => $this->afp_id,
            'cesantia_id' => $this->cesantia_id,
            'codigo' => $this->codigo,
            'fecha_ingreso' => $this->fechaIngreso,
            'fecha_egreso' => $this->fechaEgreso,
            'no_personas' => $this->no_personas,
            'profesion' => $this->profesion,
            'cargo' => $this->cargo,
            'educacion' => $this->educacion,
            'salario' => $this->salario,
        ]);
        $this->empleado_id = "";
        $this->contrato_id = "";
        $this->eps_id = "";
        $this->arl_id = "";
        $this->afp_id = "";
        $this->cesantia_id = "";
        $this->codigo = "";
        $this->fechaIngreso = "";
        $this->fechaEgreso = "";
        $this->no_personas = "";
        $this->profesion = "";
        $this->cargo = "";
        $this->educacion = "";
        $this->salario = "";
    }
    public function render()
    {
        return view('livewire.contrato.contratos');
    }
}
