<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Contracts\View\View;

/**
 * @OA\Info(
 *    title="Page API",
 *    version="1.0.0",
 * )
 */
class PageController extends Controller
{
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
