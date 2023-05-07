<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class MidiPlayerController extends Controller
{
    public function index()
    {
        return view('player.index', ['songs' => Song::all()]);
    }

    public function show( Song $song)
    {
        $songEnDur = asset('midi/the-beatles-lady_madonna.gp3');
        return view('player.show', ['song' => $song, 'songEnDur' => $songEnDur]);
    }
}
