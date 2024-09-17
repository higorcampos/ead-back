<?php

namespace App\Repositories\User;

use App\Repositories\BaseRepositoryContract;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface UserRepositoryContract extends BaseRepositoryContract
{
    public function getUsersByRoles(array $role): LengthAwarePaginator;
}