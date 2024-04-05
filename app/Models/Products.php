<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categories;
use App\Models\ProductDet;

class Products extends Model
{
    use HasFactory;
    protected $table = 'products';

    public function categories()
    {
        return $this->belongsTo(Categories::class);
    }

    public function productDet()
    {
        return $this->hasMany(ProductDet::class);
    }
}
