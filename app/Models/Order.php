<?php

namespace App\Models;

use App\Models\User;
use App\Models\OrderItem;
use App\Models\Payment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Order extends Model
{
    use HasFactory , SoftDeletes;
    protected $guarded=[];

    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }

    public function order_items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
