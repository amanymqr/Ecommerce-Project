<?php

namespace App\Models;

use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class OrderItem extends Model
{
    use HasFactory , SoftDeletes;
    protected $guarded=[];

public function user()
{
    return $this->belongsTo(User::class)->withDefault();
}

public function product()
{
    return $this->belongsTo(Product::class)->withDefault();
}

public function order()
{
    return $this->belongsTo(Order::class)->withDefault();
}
}