<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class newsController extends Controller
{
  public function showform(){
    $data['active'] = "news";
    $data['active2'] = "form";
    return view('admin.pages.news.form',$data);
  }
  public function showtable(){
    $data['active'] = "news";
    $data['active2'] = "tabel";
    return view('admin.pages.news.tabel',$data);
  }
}
