<?php

namespace App\Http\Livewire\Tecnicomecanica;

use App\Models\Tecnicomecanica;
use Livewire\Component;

class ShowTecnicomecanica extends Component
{
	public Tecnicomecanica $tecnicomecanica;

	public function mount($id)
	{
		$this->tecnicomecanica = Tecnicomecanica::findOrFail($id);
	}

    public function render()
    {
        return view('livewire.tecnicomecanica.show-tecnicomecanica');
    }
}
