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
        $data['messages'] = Messages::orderBy('message_id','desc')->get();
        return view('admin.pages.inbox.messages',$data);
    }
    public function deletemessage($id){
      $deleted = Messages::find($id);
      $deleted->delete();
      return Redirect('inbox/messages')->with('success','You have successfully deleted a message');
    }
    public function aftersales(){
      $data['active'] = "aftersales";
      $data['active2'] = "";
      $data['aftersales'] = Aftersales::orderBy('as_id','desc')->get();
      return view('admin.pages.inbox.aftersales',$data);
    }

    public function showaftersale($id){
      $data['active'] = "aftersales";
      $data['active2'] = "";
      $data['aftersales'] = Aftersales::find($id);
      $data['gambar'] = AftersalesImage::where('as_id','=',$id)->get();
      // dd($data['gambar']);
      return view('admin.pages.inbox.aftersale',$data);
    }
}
