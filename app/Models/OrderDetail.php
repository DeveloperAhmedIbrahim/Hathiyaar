<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $fillable = ["order_id", "product_name", "product_image", "product_quantity", "product_price"];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
