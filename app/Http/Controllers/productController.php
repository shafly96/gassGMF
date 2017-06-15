<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product_Image;
use App\Product;
use DB,Redirect;

class productController extends Controller
{
    public function showform(){
      $data['active'] = "products";
      $data['active2'] = "form";
      return view('admin.pages.products.form',$data);
    }
    public function showtable(){
      $data['active'] = "products";
      $data['active2'] = "tabel";
      return view('admin.pages.products.tabel',$data);
    }
}
