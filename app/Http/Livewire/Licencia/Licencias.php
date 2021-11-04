<?php

namespace App\Http\Livewire\Licencia;

use App\Models\Licencia_conduccion;
use Livewire\Component;

class Licencias extends Component
{
    public function open()
    {
        return redirect()->to('/create-licencia');
    }

    public function updateModal(Licencia_conduccion $licencia)
    {
        return redirect()->to('/update-licencia/' .$licencia->id);
    }

    public function delete(Licencia_conduccion $licencia)
    {
        $datos = Licencia_conduccion::find($licencia->id);
        $datos->delete();
        session()->flash('message', 'Dato eliminado correctamente');
    }

    public function render()
    {
        return view('livewire.licencia.licencias',
            [
                'licencias' => Licencia_conduccion::where('user_id', auth()->user()->id)->get()
            ]);
    }
}
