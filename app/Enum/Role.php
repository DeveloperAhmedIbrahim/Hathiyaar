<?php

namespace App\Enum;

enum Role: Int
{
    case Admin = 1;
    case Vendor = 2;
    case Client = 3;

    public static function roleByName($name): mixed
    {
        return match($name) {
            'admin' => self::Admin,
            'vendor' => self::Vendor,
            'client' => self::Client,
            default =>  null,
        };
    }
}
