<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\User\UserServiceContract;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;

use Exception;

class DeleteUserController extends Controller
{
    protected $userService;

    public function __construct(UserServiceContract $userService)
    {
        $this->userService = $userService;
    }

    public function __invoke($id): JsonResponse
    {
        try {
            $this->userService->deleteUser($id);
            return response()->json(['success' => true, 'message' => __('actions.deleted')], JsonResponse::HTTP_NO_CONTENT);
        } catch (Exception $e) {
            Log::error('Error get user' . $e->getMessage());
            return response()->json(['message' => $e->getMessage()], $e->getCode() ?: JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}