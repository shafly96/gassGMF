<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB,Redirect;
use Carbon\Carbon;
use Response;
use Illuminate\Support\Facades\Storage;
use File;
use Image;
use Auth;
use App\Messages;
use App\AftersalesImage;
use App\Aftersales;

class inboxController extends Controller
{

    public $data;
    public function __construct()
     {
       $this->data['unread_as'] = Aftersales::where('as_read',0)->count();
       $this->data['unread_message'] = Messages::where('message_read',0)->count();
     }

    public function checkread(){
      $this->data['unread_as'] = Aftersales::where('as_read',0)->count();
      $this->data['unread_message'] = Messages::where('message_read',0)->count();
    }

    public function checklogin(){
      if(Auth::check()){
        return;
      }
      else
      {
        return Redirect('/admin')->send();
      }
    }

    public function readmessage($id){
        $read = Messages::find($id);
        $read->message_read = 1;
        $read->save();

        $counts = Messages::where('message_read',0)->count();
        return Response::json($counts);

    }

    public function deleteafter($id){
      $this->checklogin();

      $deleted = Aftersales::find($id);
      $arr = AftersalesImage::get()->where('as_id','=',$id);
      $thumbpath = public_path("images\aftersales\\");

      foreach($arr as $key =>$value)
      {
        File::delete($thumbpath.$arr[$key]->filename);
      }

      DB::table('after_sales_image')->where('as_id','=',$id)->delete();
      $deleted->delete();
      return redirect('inbox/aftersales')->with('success','You have successfully deleted aftersales data');
    }

    public function messages(){
        $this->checklogin();
        $this->data['active'] = "messages";
        $this->data['active2'] = "";
        $this->data['messages'] = Messages::orderBy('message_id','desc')->get();
        return view('admin.pages.inbox.messages',$this->data);
    }

    public function deletemessage($id){
      $this->checklogin();
      $deleted = Messages::find($id);
      $deleted->delete();
      return Redirect('inbox/messages')->with('success','You have successfully deleted a message');
    }

    public function aftersales(){
      $this->checklogin();

      $this->data['active'] = "aftersales";
      $this->data['active2'] = "";
      $this->data['aftersales'] = DB::table('after_sales')
      ->join('product','after_sales.as_product_type','=','product.product_id')
      ->orderBy('after_sales.as_id','desc')->get();
      return view('admin.pages.inbox.aftersales',$this->data);
    }

    public function showaftersale($id){
      $this->checklogin();
      $get = Aftersales::find($id);
      $get->as_read = 1;
      $get->save();
      $this->checkread();
      $this->data['unread_as'] -= 1;
      $this->data['active'] = "aftersales";
      $this->data['active2'] = "";
      $this->data['aftersales'] =  DB::table('after_sales')
      ->join('product','after_sales.as_product_type','=','product.product_id')
      ->where('after_sales.as_id','=',$id)
      ->orderBy('after_sales.as_id','desc')->first();
      $this->data['gambar'] = AftersalesImage::where('as_id','=',$id)->get();

      // dd($this->data['gambar']);
      return view('admin.pages.inbox.aftersale',$this->data);
    }
}
