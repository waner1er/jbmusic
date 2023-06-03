<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Presta;

class ApiPrestaController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/presta",
     *     summary="Get all presta",
     *
     *     @OA\Response(
     *         response=200,
     *         description="Get all presta",
     *     ),
     * )
     */
    public function index(): \Illuminate\Http\JsonResponse
    {
        return response()->json(Presta::all());
    }

    /**
     * @OA\Get(
     *     path="/api/presta/{presta}",
     *     summary="Get a presta by id",
     *
     *     @OA\Parameter(
     *     name="presta",
     *     in="path",
     *     description="id of presta",
     *     required=true,
     *
     *     @OA\Schema(
     *     type="integer",
     *     format="int64"
     *    )
     *  ),
     *
     *     @OA\Response(
     *         response=200,
     *         description="Get a presta by id",
     *     ),
     * )
     */
    public function show(Presta $presta): \Illuminate\Http\JsonResponse
    {
        return response()->json($presta);
    }
}
