<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class shippingController extends Controller
{
    public function shippingpage(){
        return view('shipping');
    }
}
