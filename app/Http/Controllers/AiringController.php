<?php

namespace App\Http\Controllers;

use App\Models\Airing;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class AiringController extends Controller
{
    public function index(): JsonResponse
    {
        try {
            Log::info("Request for Airing index method is being handled by worker: " . gethostname());
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
            Log::info("Request for Airing show method is being handled by worker: " . gethostname());
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
        Log::info("Request for Airing store method is being handled by worker: " . gethostname());
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
