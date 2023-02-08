<?php

namespace App\Http\Controllers;

use App\Models\Airing;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AiringController extends Controller
{
    public function index(): JsonResponse
    {
        try {
            $airing = Airing::all();
        } catch (Exception $e) {
            return response()->json([
                'data' => [],
                'message'=> $e->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        return response()->json([
            'data' => $airing,
            'message' => 'succeed'
        ], Response::HTTP_OK);
    }

    public function show($id): JsonResponse
    {
        try {
            $airing = Airing::find($id);
        } catch (Exception $e) {
            return response()->json([
                'data' => [],
                'message' => $e->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        return response()->json([
            'data' => $airing,
            'message' => 'succeed'
        ], Response::HTTP_OK);
    }

    public function store(Request $request): JsonResponse
    {
        try {
            $airing = Airing::create($request->all());
        } catch (Exception $e) {
            return response()->json([
                'data' => [],
                'message' => $e->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        return response()->json([
            'data' => $airing,
            'message' => 'succeed'
        ], Response::HTTP_OK);
    }
}
