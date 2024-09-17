<?php

namespace App\Enums;

class UserRoleEnums
{
    public const ADMINISTRATOR = 'ADMINISTRATOR';
    public const TEACHER = 'TEACHER';
    public const STUDENT = 'STUDENT';
    public const GUEST = 'GUEST';
    public const SUPPORT = 'SUPPORT';

    public static function getAllRoles(): array
    {
        return [
            self::ADMINISTRATOR,
            self::TEACHER,
            self::STUDENT,
            self::GUEST,
            self::SUPPORT,
        ];
    }

    public static function rolesPermissionTeacher(): array
    {
        return [
            self::STUDENT,
            self::GUEST,
        ];
    }

    public static function rolesPermissionSUPPORT(): array
    {
        return [
            self::TEACHER,
            self::STUDENT,
            self::GUEST,
        ];
    }
}