<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;


class ProductDetail extends Model
{
    use HasFactory;
    // protected $fillable = ['product_id', 'color', 'size'];
    
    // public function Product(){
    //     return $this->belongsTo(Product::class);
    // }
}
