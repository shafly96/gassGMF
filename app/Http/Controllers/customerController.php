<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Homepage;
use App\Customer;
use App\Berita;
use App\Messages;
use DB;

class customerController extends Controller
{

    public function home(){
        $data['homepage'] = Homepage::get();
        $data['customer'] = Customer::get();
        $data['latest_news'] = Berita::orderby('berita_date', 'desc')->take(2)->get();
    	return view('customer/pages/welcome', $data);
    }

    
    public function about(){
    	return view('customer/pages/about');
    }

    public function contact(){
        return view('customer/pages/contact');
    }

    public function testimoni(){
    	return view('customer/pages/testimoni');
    }

    public function product(){
    	return view('customer/pages/products');
    }

    public function news(){
        $data['news'] = Berita::paginate(5);
    	return view('customer/pages/news', $data);
    }

    public function sendMessage(Request $request){
        $message = new Messages;
        $message->message_email = $request->email;
        $message->message_telephone = $request->telp;
        $message->message_comment = $request->message;

        if($message->save()){
            return redirect('/contact');
        }else{
            return redirect('/');
        }
    }

}
