<?php

namespace App\Http\Livewire\Cesantia;

use App\Models\Cesantia;
use Livewire\Component;

class Cesantias extends Component
{
    public function open()
    {
        return redirect()->to('/create-cesantia');
    }

    public function updateModal(Cesantia $cesantia)
    {
        return redirect()->to('/update-cesantia/' .$cesantia->id);
    }

    public function delete(Cesantia $cesantia)
    {
        $datos = Cesantia::find($cesantia->id);
        $datos->delete();
        session()->flash('message', 'Dato eliminado correctamente');
    }

    public function render()
    {
        return view('livewire.cesantia.cesantias',
            [
                'cesantias' => Cesantia::where('user_id', auth()->user()->id)->get()
            ]);
    }
}
