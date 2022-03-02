<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductDetail;
class productController extends Controller
{
    public function getdataProduct(){
        DB::table('products')->get();
        return view('product');
    }
}
