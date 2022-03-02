<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductDetail;
use DB;
class productController extends Controller
{
    public function getdataProduct(){
        $dataproduct=DB::table('products')
        ->distinct()
        ->get();
        return view('product',['product'=>$dataproduct]);
    }
    public function getdatadetailsproduct(){
        return view('product_details');
    }
}
