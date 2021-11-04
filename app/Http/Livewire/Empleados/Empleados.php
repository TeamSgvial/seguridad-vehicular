<?php

namespace App\Http\Livewire\Empleados;

use Illuminate\Support\Facades\Auth;
use App\Models\Empleado;
use Livewire\Component;

class Empleados extends Component
{
    public Empleado $empleado;
    public $user_id;
    public $updateModal = false;


    protected function rules()
    {
        return [
            'empleado.id' => '',
            'empleado.identificacion' => ['unique:empleados,identificacion,' .$this->empleado->id],
            'empleado.nombre' => ['required', 'string', 'max:255'],
            'empleado.apellido' => ['required', 'string', 'max:255'],
            'empleado.telefono' => ['required', 'max:20'],
            'empleado.direccion' => ['required'],
            'empleado.correo' => ['required', 'email', 'max:255'],
            'empleado.estado' => ['required'],
        ];
    }

    public function mount()
    {
        $this->empleado = new Empleado();
    }

    public function clearInputs()
    {
        $this->empleado->identificacion = '';
        $this->empleado->nombre = '';
        $this->empleado->apellido = '';
        $this->empleado->telefono = '';
        $this->empleado->direccion = '';
        $this->empleado->correo = '';
        $this->empleado->estado = '';
    }

    public function submit()
    {
        $this->validate();

        Empleado::create([
            'identificacion' => $this->empleado->identificacion,
            'user_id'   => auth()->user()->id,
            'nombre'    => $this->empleado->nombre,
            'apellido'  => $this->empleado->apellido,
            'telefono'  => $this->empleado->telefono,
            'direccion' => $this->empleado->direccion,
            'correo'    => $this->empleado->correo,
            'estado'    => $this->empleado->estado,
        ]);
        $this->clearInputs();
    }

    public function edit($id)
    {
        $datos = Empleado::findOrFail($id);

        $this->empleado = $datos;
        $this->updateModal = true;
    }

    public function store()
    {
        $this->validate();
        $datos = Empleado::find($this->empleado->id);
        $datos->update([
            'identificacion' => $this->empleado->identificacion,
            'nombre'    => $this->empleado->nombre,
            'apellido'  => $this->empleado->apellido,
            'telefono'  => $this->empleado->telefono,
            'direccion' => $this->empleado->direccion,
            'correo'    => $this->empleado->correo,
            'estado'    => $this->empleado->estado,
        ]);
        $this->updateModal = false;
        $this->clearInputs();
    }

    public function render()
    {
        return view('livewire.empleados.empleados',[
            'userlogeado' => Empleado::where('user_id', auth()->id())->get()]);
    }
}
