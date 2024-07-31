<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

use Exception;

class LoginController extends Controller
{
    public function __invoke(LoginRequest $request): JsonResponse
    {
        try {
            if (!Auth::attempt($request->only('email', 'password'))) {
                return response()->json(['message' => __('auth.failed')], JsonResponse::HTTP_UNAUTHORIZED);
            }

            $user = Auth::user();
            $token = $user->createToken('ead')->accessToken;

            return response()->json(['token' => $token], JsonResponse::HTTP_OK);
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return response()->json(['message' => $e->getMessage()], $e->getCode() ?: JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}