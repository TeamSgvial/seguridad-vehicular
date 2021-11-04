<?php

namespace App\Http\Livewire\Soat;

use App\Models\Soat;
use Livewire\Component;

class ShowSoat extends Component
{
	public Soat $soat;

	public function mount($id)
	{
		$this->soat = Soat::findOrFail($id);
	}
    public function render()
    {
        return view('livewire.soat.show-soat');
    }
}
