<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Homepage;
use App\Contacts;
use App\Customer;
use DB,Redirect;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use File;
use Image;

class pagesController extends Controller
{
    public function showhome(){
      $data['active'] = "homepage";
      $data['active2'] = "";
      $data['homepage'] = Homepage::find(1);
      return view('admin.pages.editor.homepage',$data);
    }
    public function updatehome(Request $request){
      $data['active'] = "homepage";
      $data['active2'] = "";
      $home = Homepage::find(1);
      if(null == $home){
        $home_n = new Homepage;
        $home_n->homepage_id = 1;
        $home_n->homepage_slogan = $request->slogan;
        $home_n->homepage_slogan_subtext = $request->subtext;
        if(null !== $request->file('cover')){
          $file = $request->file('cover');
          $home_n->homepage_gambar = 'homepage.'.$file->getClientOriginalExtension();
          $destinationPath = public_path('images/homepage/');
          $file->move($destinationPath, $home_n->homepage_gambar);
        }
        $home_n->save();
      }
      else{
        $home->homepage_slogan = $request->slogan;
        $home->homepage_slogan_subtext = $request->subtext;
        if(null !== $request->file('cover')){
          $file = $request->file('cover');
          $home->homepage_gambar = 'homepage.'.$file->getClientOriginalExtension();
          $destinationPath = public_path('images/homepage/');
          $file->move($destinationPath, $home->homepage_gambar);
        }
        $home->save();
      }
      return redirect('page-editor/homepage')->with('success','You have successfully updated the homepage');
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
      $data['contacts']= Contacts::find(1);
      return view('admin.pages.editor.contactsform',$data);
    }
    public function contactsed(Request $request){
      $contact= Contacts::find(1);
      if(null == $contact)
      {
        $contact = new Contacts;
        $contact->fc_id = 1;
      }
      $contact->fc_address = $request->address;
      $contact->fc_telp1 = $request->telp1;
      $contact->fc_telp2 = $request->telp2;
      $contact->fc_email = $request->email1;
      $contact->fc_email2 = $request->email2;
      $contact->save();
      return redirect('page-editor/contacts')->with('success','You have successfully updated contact information');
    }
}
