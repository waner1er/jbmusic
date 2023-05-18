<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\View\View;

class MidiPlayerController extends Controller
{
    public function index(): View
    {
        //    $path = public_path('midi');
        //    $songs = scandir($path);
        //    $songs = array_diff($songs, ['.', '..']);

        //    $songs = array_map(function($song) {
        //        if (strpos($song, '.gp3') !== false) {
        //            return $song;
        //        }

        //    }, $songs);

        return view('player.index', ['songs' => Song::all()]);
    }

    public function show(Song $song): View
    {
        $songEnDur = asset('midi/the-beatles-lady_madonna.gp3');

        return view('player.show', ['song' => $song, 'songEnDur' => $songEnDur]);
    }
}
