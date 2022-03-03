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
        ->select('id','product_name','price','gambar')
        ->get()->toArray();
        $datacolor = DB::table('product_colors')
        ->get()->toArray();
        foreach($dataproduct as &$value)
        {
            $value->datacolor = array_filter($datacolor, function($datacolor) use ($value) {
                return $datacolor->product_id === $value->id;
            });
        }

        // $dataproduct=DB::table('products')
        // ->select('id','product_name','price')
        // ->get();
        // dd($dataproduct);
        return view('product',['product'=>$dataproduct]);
    }
    public function getdatadetailsproduct(Request $req){
        $dataProductDetail= DB::table('products')
        ->where('id','=',$req->id)
        ->get();
        return view('product_details');
    }
}
