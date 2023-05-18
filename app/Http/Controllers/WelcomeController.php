<?php

namespace App\Http\Controllers;

use App\Models\Welcome;
use Illuminate\View\View;

class WelcomeController extends Controller
{
    public function index(): View
    {
        return view('welcome', [
            'welcomes' => Welcome::all(),
        ]);
    }
}
