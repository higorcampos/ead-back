<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $permission): Response
    {
        $user = Auth::guard('api')->user();

        $id = Role::where('name', $permission)->pluck('id')->first();

        if (!$user->hasPermission($id)) {
            return response()->json(['message' => __('actions.unauthorized')], JsonResponse::HTTP_FORBIDDEN);
        }

        return $next($request);
    }
}