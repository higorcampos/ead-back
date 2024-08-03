<?php

namespace App\Repositories\User;

use App\Models\User;
use App\Repositories\BaseRepository;

class UserRepositoryEloquent extends BaseRepository implements UserRepositoryContract
{
    public function __construct(User $user)
    {
        parent::__construct($user);
    }
}