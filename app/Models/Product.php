<?php

namespace App\Models;

use App\Models\Cart;
use App\Models\Review;
use App\Models\Category;
use App\Models\OrderItem;
use App\Models\ProductImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Product extends Model
{
    use HasFactory , SoftDeletes;
    protected $guarded=[];

    public function category ()
    {
        return $this->belongsTo(Category::class)->withDefault();
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);

    }

    public function reviews()
    {
        return $this->hasMany(Review::class);

    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function order_items()
    {
        return $this->hasMany(OrderItem::class);
    }

}
