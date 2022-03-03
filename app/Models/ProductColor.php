<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class ProductColor extends Model
{
    use HasFactory;

    use HasFactory;
    protected $fillable = ['product_id','color_name','color_code'];
    
    public function Product(){
        return $this->belongsTo(Product::class);
    }
}
