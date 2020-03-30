<?php

namespace App\Services\Info;

class UserRole
{
    protected const ROLES = [
        'admin' => 1,
        'user' => 2
    ];

    public static function getRoles($param = null)
    {
        return $param ? static::ROLES[$param] : static::ROLES;
    }
}