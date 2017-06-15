<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function showhome(){
      $data['active'] = "homepage";
      $data['active2'] = "";
      return view('admin.pages.editor.homepage',$data);
    }
    public function showcustomer(){
      $data['active'] = "customer";
      $data['active2'] = "tabel";
      return view('admin.pages.editor.tabelcustomer',$data);
    }
    public function addcustomer(){
      $data['active'] = "customer";
      $data['active2'] = "form";
      return view('admin.pages.editor.formcustomer',$data);

    }
    public function contacts(){
      $data['active'] = "contact";
      $data['active2'] = "";
      return view('admin.pages.editor.contactsform',$data);

    }
}
