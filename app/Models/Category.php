<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory , SoftDeletes;
    protected $guarded=[];

    public function children()
    {
        return$this->hasMany(Category::class ,'parent_id');
    }

    public function parent()
    {
        return$this->belongsTo(Category::class,'parent_id')->withDefault();
    }

    public function product()
    {
        return$this->hasMany(Product::class);
    }
}
