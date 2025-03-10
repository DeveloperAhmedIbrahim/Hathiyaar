<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ["name", "category_id", "brand_id", "images", "sku", "description"];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function stock()
    {
        return $this->hasOne(Stock::class);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }
}
