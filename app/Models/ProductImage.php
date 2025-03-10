<?php

namespace App\Models;

use App\Models\Product;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $fillable = ['image_url','is_primary'];

    public function products()
    {
        return $this->belongsTo(Product::class);
    }
}
