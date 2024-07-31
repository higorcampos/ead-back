<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        try {
            $user = Auth::guard('api')->user();
        } catch (\Exception $e) {
            return response()->json(['message' => __('auth.unauthorized')], JsonResponse::HTTP_UNAUTHORIZED);
        }

        if (!$user) {
            return response()->json(['message' => __('auth.unauthorized')], JsonResponse::HTTP_UNAUTHORIZED);
        }

        return $next($request);
    }
}