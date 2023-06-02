<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class ApiPageController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/page",
     *     summary="Get all pages",
     *     @OA\Response(
     *         response=200,
     *         description="Get all pages",
     *     ),
     * )
     */
    public function index(): \Illuminate\Http\JsonResponse
    {
        return response()->json(Page::all());
    }

    /**
     * @OA\Get(
     *     path="/api/page/{page}",
     *     summary="Get a page by id",
     *     @OA\Parameter(
     *     name="page",
     *     in="path",
     *     description="id of page",
     *     required=true,
     *     @OA\Schema(
     *     type="integer",
     *     format="int64"
     *    )
     *  ),
     *     @OA\Response(
     *         response=200,
     *         description="Get a page by id",
     *     ),
     * )
     */
    public function show(Page $page): \Illuminate\Http\JsonResponse
    {
        return response()->json($page);
    }
}
