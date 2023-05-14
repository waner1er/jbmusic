<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NavMenu extends Component
{
    public $logo;
    public $backgroundImage;
    public bool $cours = false;
    public bool $prestations = false;
    public bool $home = false;

    public function mount()
    {
        $this->logo = '';
//        $this->backgroundImage = asset('img/jbmusic_ban.jpg');
        if ($this->currentUrl = url()->current() === route('courses.index')) {
            $this->cours = true;
            $this->prestations = false;
            $this->home = false;
        } else if ($this->currentUrl = url()->current() === route('prestations.index')) {
            $this->cours = false;
            $this->prestations = true;
            $this->home = false;
        } else if ($this->currentUrl = url()->current() === route('home')) {
            $this->cours = false;
            $this->prestations = false;
            $this->home = true;
        }
    }


    public function render()
    {
        return view('livewire.nav-menu');
    }
}
