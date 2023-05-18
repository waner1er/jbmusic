<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ResourceController extends Controller
{
    public function index(): View
    {
        return view('resources.index', [
            'resources' => Resource::all(),
        ]);
    }

    public function userIndex(): View
    {
        $user = Auth::user();

        return view('resources.index', [
            'resources' => $user->resources,
        ]);
    }

    public function show(Resource $resource): View
    {
        return view('resources.show', [
            'resource' => $resource,
        ]);
    }
}
