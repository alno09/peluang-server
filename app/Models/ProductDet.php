<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Products;

class ProductDet extends Model
{
    use HasFactory;
    protected $table = 'product_det';

    public function product()
    {
        return $this->belongsTo(Products::class);
    }
}
