<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class RegisterUserController extends Controller
{
    public function __invoke(Request $request): JsonResponse
    {
        try {

            $test = [];

            return response()->json($test, JsonResponse::HTTP_OK);
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return response()->json(['message' => $e->getMessage()], $e->getCode() ?: JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}