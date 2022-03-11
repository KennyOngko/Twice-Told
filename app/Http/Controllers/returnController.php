<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class returnController extends Controller
{
    public function returnpage(){
        return view('return_policy');
    }
}
