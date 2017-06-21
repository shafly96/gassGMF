<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Homepage;
use App\Customer;
use App\Berita;
use App\Messages;
use DB;
use App\Aftersales;
use App\AftersalesImage;
use Carbon\Carbon;
class customerController extends Controller
{

    public function footer()
    {
        $footer = DB::table('footer_and_contacts')->first();
        return $footer;
    }

    public function home(){
        $data['homepage'] = Homepage::get();
        $data['customer'] = Customer::get();
        $data['latest_news'] = Berita::orderby('berita_date', 'desc')->take(2)->get();
    	return view('customer/pages/welcome', $data);
    }
    
    public function about(){
        $data['footer'] = $this->footer();
    	return view('customer/pages/about', $data);
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

    public function aftersales(){
      return view('customer/pages/as_form');
    }
    
    public function addaftersales(Request $request){
        $as = new Aftersales;
        $as->as_company_name = $request->company;
        $as->as_contact_name = $request->contact;
        $as->as_email = $request->email;
        $as->as_serial = $request->serial;
        $as->as_product_type = $request->tipe;
        $as->as_out = $request->out;
        $as->as_description = $request->description;
        $as->as_timestamp = Carbon::now();
        $as->save();

        if(null!== $request->file('media')){
          $file = $request->file('media');

          for($i=0; $i<sizeof($request->media); $i++)
          {
            $image = new AftersalesImage;
            $image->as_id = $as->as_id;
            $image->filename = hash('md5',$request->contact.$i.$as->as_timestamp).'.'.$file[$i]->getClientOriginalExtension();
            $image->save();
            $destinationPath = public_path('images/aftersales/');
            $file[$i]->move($destinationPath, $image->filename);


          }
        }
        return Redirect('aftersales');
    }

}
