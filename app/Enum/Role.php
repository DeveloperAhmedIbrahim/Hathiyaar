<?php

namespace App\Enum;

enum Role: Int
{
    case Admin = 1;
    case Vendor = 2;
    case Client = 3;
}
