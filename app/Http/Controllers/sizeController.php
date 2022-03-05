<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sizeController extends Controller
{
    public function sizingpage(){
        return view('sizing_guide');
    }
}
