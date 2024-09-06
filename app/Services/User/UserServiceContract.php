<?php

namespace App\Services\User;

use App\Models\User;

interface UserServiceContract
{
    public function getAllUsers(): array;
    public function create(array $data): array;
    public function getUser(): User;
}