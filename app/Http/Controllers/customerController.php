<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class customerController extends Controller
{

    public function home(){
    	return view('customer/pages/welcome');
    }

    public function aboutGMF(){
    	return view('customer/pages/aboutGMF');
    }

}
