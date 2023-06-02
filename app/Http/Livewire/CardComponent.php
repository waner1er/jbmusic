<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class CardComponent extends Component
{
    public string $img;

    public string $title;

    public string $excerpt;

    public int $pricePerHour;

    public string $route;

    public string $routeName;

    public string $model;

    public string $slug;

    public function render(): View
    {
        return view('livewire.card-component');
    }
}
