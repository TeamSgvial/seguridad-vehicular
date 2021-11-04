<?php

namespace App\Http\Livewire\Afp;

use App\Models\Afp;
use Livewire\Component;

class Afps extends Component
{

    public function open()
    {
        return redirect()->to('/create-afp');
    }

    public function updateModal(Afp $afp)
    {
        return redirect()->to('/update-afp/' .$afp->id);
    }

    public function delete(Afp $afp)
    {
        $datos = Afp::find($afp->id);

        $datos->delete();

        session()->flash('message', 'Dato eliminado correctamente');
    }

    public function render()
    {
        return view('livewire.afp.afps',
            [
                'afps' => Afp::where('user_id', auth()->user()->id)->get()
            ]);
    }
}
