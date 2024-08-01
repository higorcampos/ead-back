<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class UsersPermission extends Model
{
    use HasUuids;

    protected $fillable = [
        'user_id',
        'role_id'
    ];

    public $incrementing = false;

    protected $keyType = 'string';
}