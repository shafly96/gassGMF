<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Homepage;
use DB;

class customerController extends Controller
{

    public function home(){
        $data['homepage'] = Homepage::get();
    	return view('customer/pages/welcome', $data);
    }

    public function aboutGMF(){
    	return view('customer/pages/aboutGMF');
    }

    public function aboutGASS(){
    	return view('customer/pages/aboutGASS');
    }

    public function testimoni(){
    	return view('customer/pages/testimoni');
    }

    public function product(){
    	return view('customer/pages/products');
    }

    public function news(){
    	return view('customer/pages/news');
    }

}
