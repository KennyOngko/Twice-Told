<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class ProductSize extends Model
{
    use HasFactory;

    protected $fillable = ['product_id','size'];
    
    public function Product(){
        return $this->belongsTo(Product::class);
    }
}
