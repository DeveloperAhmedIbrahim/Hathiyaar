<?php

namespace App\Enum;

enum PaymentStatus: String
{
    case Pending = "pending";
    case Completed = "completed";
    case Failed = "failed";
}
