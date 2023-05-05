<?php

namespace App\Http\Livewire;

use App\Models\Menu;
use Livewire\Component;

class NavMenu extends Component
{
    public $logo;

    public function mount()
    {
        $this->logo = '';
    }

    public function render()
    {
        return view('livewire.nav-menu');
    }
}
