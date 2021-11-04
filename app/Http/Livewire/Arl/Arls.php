<?php

namespace App\Http\Livewire\Arl;

use App\Models\Arl;
use Livewire\Component;

class Arls extends Component
{
    public function mount(Arl $arl)
    {
        $this->arl = new Arl();
    }
    public function open()
    {
        return redirect()->to('/create-arl');
    }

    public function updateModal(Arl $arl)
    {
        return redirect()->to('/update-arl/' .$arl->id);
    }

    public function delete(Arl $arl)
    {
        $dato = Arl::find($arl->id);

        $dato->delete();

        session()->flash('message', 'Dato eliminado correctamente');

    }

    public function render()
    {
        return view('livewire.arl.arls',
            [
                'arls' => Arl::where('user_id', auth()->user()->id)->get()
            ]);
    }
}
