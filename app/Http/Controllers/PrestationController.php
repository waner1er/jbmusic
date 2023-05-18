<?php

namespace App\Http\Controllers;

use App\Models\Presta;
use Illuminate\View\View;

class PrestationController extends Controller
{
    public function index(): View
    {
        return view('prestations.index', [
            'prestations' => Presta::all(),
        ]);
    }

    public function show(Presta $prestation): View
    {
        return view('prestations.show', ['prestation' => $prestation]);
    }
}
