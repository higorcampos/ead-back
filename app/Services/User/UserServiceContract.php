<?php

namespace App\Services\User;

interface UserServiceContract
{
    public function getAllUsers(): array;
    public function create(array $data): array;
}