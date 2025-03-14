<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ["name", "category_id", "brand_id", "sku", "description"];

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

    public function images()
    {
        return $this->hasMany(ItemImage::class);
    }
}
