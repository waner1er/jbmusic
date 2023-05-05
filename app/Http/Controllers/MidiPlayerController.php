<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MidiPlayerController extends Controller
{
    public function index()
    {
        return view('player.index');
    }

    public function show($id)
    {
        return view('player.show', ['id' => $id]);
    }
}
