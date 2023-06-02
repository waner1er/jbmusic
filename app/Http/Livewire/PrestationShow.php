<?php

namespace App\Http\Livewire;

use App\Models\Presta;
use Livewire\Component;

class PrestationShow extends Component
{
    public $prestation;

    public function mount(Presta $prestation)
    {
        $this->prestation = $prestation;
    }

    public function render()
    {
        return view('livewire.prestation-show');
    }
}
