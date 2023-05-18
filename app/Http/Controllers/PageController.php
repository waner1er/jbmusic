<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Contracts\View\View;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('welcome', [
            'pages' => Page::all(),
        ]);
    }

    public function welcome(Page $page): View
    {
        $welcome = $page->where('slug', '=', 'welcome')->first();

        return view('pages.show', [
            'page' => $welcome,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Page $page): View
    {
        return view('pages.show', [
            'page' => $page,
        ]);
    }
}
