<?php

namespace App\Services\User;

use App\Models\EmailVerification;
use App\Notifications\VerifyEmailNotification;
use App\Repositories\User\UserRepositoryContract;
use Illuminate\Support\Facades\Log;

class UserService implements UserServiceContract
{
    protected $userRepository;

    public function __construct(UserRepositoryContract $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getAllUsers(): array
    {
        return $this->userRepository->all()->toArray();
    }

    public function create(array $data): array
    {
        $data['password'] = bcrypt($data['password']);

        try {
            $user = $this->userRepository->create($data);

            $token = EmailVerification::generateToken($user->id);
            $user->notify(new VerifyEmailNotification($token));

            return $user->toArray();
        } catch (\Exception $e) {
            Log::error('Error creating user or sending verification email: ' . $e->getMessage());
            throw new \Exception(__('exception.create_user'));
        }
    }
}