<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ["user_id", "item_id", "quantity", "price"];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
