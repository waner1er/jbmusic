<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CardComponent extends Component
{
    public $img;

    public $title;

    public $excerpt;

    public $pricePerHour;

    public $route;

    public $routeName;

    public $model;

    public function render()
    {
        return view('livewire.card-component');
    }
}
