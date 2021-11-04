<?php

namespace App\Http\Livewire\Eps;

use App\Models\Eps;
use Livewire\Component;

class Epses extends Component
{

    public function open()
    {
        return redirect()->to('/create-eps');
    }

    public function updateModal(Eps $eps)
    {
        return redirect()->to('/update-eps/' .$eps->id);
    }

    public function delete(Eps $eps)
    {
        $datos = Eps::find($eps->id);
        $datos->delete();
        Session()->flash('message', 'Dato eliminado correctamente!');
    }

    public function render()
    {
        return view('livewire.eps',
            [
                'eps' => Eps::where('user_id', auth()->user()->id)->get()
            ]);
    }
}
