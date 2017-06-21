<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB,Redirect;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use File;
use Image;
use Auth;
use App\Messages;
use App\AftersalesImage;
use App\Aftersales;

class inboxController extends Controller
{

    public function checklogin(){
      if(Auth::check()){
        return;
      }
      else
      {
        return Redirect('/admin')->send();
      }
    }


    public function messages(){
      $this->checklogin();

        $data['active'] = "messages";
        $data['active2'] = "";
        $data['messages'] = Messages::orderBy('message_id','desc')->get();
        return view('admin.pages.inbox.messages',$data);
    }
    public function deletemessage($id){
      $this->checklogin();

      $deleted = Messages::find($id);
      $deleted->delete();
      return Redirect('inbox/messages')->with('success','You have successfully deleted a message');
    }
    public function aftersales(){
      $this->checklogin();

      $data['active'] = "aftersales";
      $data['active2'] = "";
      $data['aftersales'] = Aftersales::orderBy('as_id','desc')->get();
      return view('admin.pages.inbox.aftersales',$data);
    }

    public function showaftersale($id){
      $this->checklogin();
      $data['active'] = "aftersales";
      $data['active2'] = "";
      $data['aftersales'] = Aftersales::find($id);
      $data['gambar'] = AftersalesImage::where('as_id','=',$id)->get();
      // dd($data['gambar']);
      return view('admin.pages.inbox.aftersale',$data);
    }
}
