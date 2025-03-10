<?php

namespace App\Enum;

enum OrderStatus: String
{
    case Pending = "pending";
    case Processing = "processing";
    case Dispatched = "dispatched";
    case Delivered = "delivered";
    case Cancelled = "cancelled";
}
