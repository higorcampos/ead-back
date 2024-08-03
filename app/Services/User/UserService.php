<?php

namespace App\Services\User;

use App\Repositories\User\UserRepositoryContract;

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
        $user = $this->userRepository->create($data);
        return $user->toArray();
    }
}