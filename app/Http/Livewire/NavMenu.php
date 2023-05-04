<?php

namespace App\Http\Livewire;

use App\Models\Menu;
use Livewire\Component;

class NavMenu extends Component
{

    public $items;
    public $logo;

    public function mount()
    {
        $this->items = Menu::orderBy('order_id')->get();
        $this->logo = '';
    }

    public function render()
    {
        return view('livewire.nav-menu');
    }
}
