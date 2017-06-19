<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB,Redirect;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use File;
use Image;

use App\Messages;
use App\AftersalesImage;
use App\Aftersales;

class inboxController extends Controller
{
    public function messages(){
        $data['active'] = "messages";
        $data['active2'] = "";
        $data['messages'] = Messages::get();
        return view('admin.pages.inbox.messages',$data);
    }
    public function aftersales(){
      $data['active'] = "aftersales";
      $data['active2'] = "";
      $data['aftersales'] = Aftersales::get();
      return view('admin.pages.inbox.aftersales',$data);
    }
}
