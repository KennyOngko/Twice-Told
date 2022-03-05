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
        return view('product',['product'=>$dataproduct]);
    }
    public function getdatadetailsproduct(Request $req){
        $dataProductDetail= DB::table('products')
        ->where('id','=',$req->id)
        ->get()->toArray();

        $datacolor = DB::table('product_colors')
        ->where('product_id','=',$dataProductDetail[0]->id)
        ->get()->toArray();

        $datasize = DB::table('product_sizes')
        ->where('product_id','=',$dataProductDetail[0]->id)
        ->get()->toArray();

        $dataimage = DB::table('product_images')
        ->where('product_id','=',$dataProductDetail[0]->id)
        ->get()->toArray();
        foreach($dataProductDetail as &$value)
        {
            $value->datacolor = array_filter($datacolor, function($datacolor) use ($value) {
                return $datacolor->product_id === $value->id;
            });

            $value->datasize = array_filter($datasize, function($datasize) use ($value) {
                return $datasize->product_id === $value->id;
            });
            
            $value->dataimage = array_filter($dataimage, function($dataimage) use ($value) {
                return $dataimage->product_id === $value->id;
            });
        }
        return view('product_details',['productDetail'=>$dataProductDetail]);
    }
}
