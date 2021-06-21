<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    // $productImages -> product
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
