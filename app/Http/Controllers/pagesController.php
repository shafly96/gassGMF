<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Homepage;
use App\Contacts;
use App\Customer;
use App\About;
use App\Messages;
use App\Aftersales;
use App\AftersalesImage;
use DB,Redirect;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use File;
use Image;
use Auth;

class pagesController extends Controller
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

  public function showhome(){
    $this->checklogin();

    $data['active'] = "homepage";
    $data['active2'] = "";
    $data['homepage'] = Homepage::find(1);
    return view('admin.pages.editor.homepage',$data);
  }
  
  public function updatehome(Request $request){
    $this->checklogin();

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
    $this->checklogin();

    $data['active'] = "customer";
    $data['active2'] = "tabel";
    $data['customers'] = Customer::get();
    return view('admin.pages.editor.tabelcustomer',$data);
  }
  public function addcustomer(){
    $this->checklogin();

    $data['active'] = "customer";
    $data['active2'] = "form";
    return view('admin.pages.editor.formcustomer',$data);
  }
  public function deletecustomer($id){
    $this->checklogin();

    $deleted = Customer::find($id);
    $deleted->delete();
    $thumbpath = public_path("images\\logo-cust\\");
    File::delete($thumbpath.$deleted->customer_filename);
    return redirect('page-editor/customer-list')->with('success','You have successfully deleted a customer data');

  }
  public function addcust(Request $request){
    $this->checklogin();

    $customer = new Customer;
    $customer->customer_name = $request->name;
    $file = $request->file('media');
    $customer->customer_filename = $request->name.'.'.$file->getClientOriginalExtension();

    $destinationPath = public_path('images/logo-cust');
    $img = Image::make($file->getRealPath());
    $img->resize(200, 125, function ($constraint) {
      $constraint->aspectRatio();
    })->save($destinationPath.'\\'.$customer->customer_filename);
    $customer->save();
    return redirect('page-editor/customer-add')->with('success','You have successfully inserted a customer data');
  }
  public function contacts(){
    $this->checklogin();

    $data['active'] = "contact";
    $data['active2'] = "";
    $data['contacts']= Contacts::find(1);
    return view('admin.pages.editor.contactsform',$data);
  }
  public function contactsed(Request $request){
    $this->checklogin();

    $contact= Contacts::find(1);
    if(null == $contact)
    {
      $contact = new Contacts;
      $contact->fc_id = 1;
    }
    $contact->fc_address = $request->address;
    $contact->fc_address = str_replace("\r",'',   $contact->fc_address);
    $contact->fc_address = str_replace("\n",'',   $contact->fc_address);
    $contact->fc_address = str_replace("\r\n",'',   $contact->fc_address);
    $contact->fc_telp1 = $request->telp1;
    $contact->fc_telp2 = $request->telp2;
    $contact->fc_email = $request->email1;
    $contact->fc_email2 = $request->email2;
    $contact->save();
    return redirect('page-editor/contacts')->with('success','You have successfully updated contact information');
  }

  public function showaboutgmf(){
    $this->checklogin();

    $data['active'] = "about";
    $data['active2'] = "gmf";
    $data['about'] = About::find(1);
    if(isset($data['about'])){
      $data['about']->about_gmf_text = str_replace("\r",'', $data['about']->about_gmf_text);
      $data['about']->about_gmf_text = str_replace("\n",'', $data['about']->about_gmf_text);
      $data['about']->about_gmf_text = str_replace("\r\n",'', $data['about']->about_gmf_text);
    }
    return view('admin.pages.editor.form-aboutgmf',$data);

  }
  public function aboutgmf(Request $request){
    $this->checklogin();

    $about = About::find(1);
    if(null == $about){
      $about = new About;
      $about->about_id = 1;
    }
    $about->about_gmf_text = $request->aboutgmf;
    if(null !==$request->file('media')){
      $file = $request->file('media');
      $about->about_gmf_gambar = 'about-gmf.'.$file->getClientOriginalExtension();
      $destinationPath = public_path('images/about/gmf');
      $file->move($destinationPath, $about->about_gmf_gambar);
    }
    $about->save();
    return redirect('page-editor/addaboutgmf')->with('success','You have successfully updated about gmf page');
  }
  public function showaboutgass(){
    $this->checklogin();

    $data['active'] = "about";
    $data['active2'] = "gass";
    $data['about'] = About::find(1);
    if(isset($data['about'])){
      $data['about']->about_gass_text = str_replace("\r",'', $data['about']->about_gass_text);
      $data['about']->about_gass_text = str_replace("\n",'', $data['about']->about_gass_text);
      $data['about']->about_gass_text = str_replace("\r\n",'', $data['about']->about_gass_text);
    }
    return view('admin.pages.editor.form-aboutgass',$data);

  }
  public function aboutgass(Request $request){
    $this->checklogin();

    $about = About::find(1);
    if(null == $about){
      $about = new About;
      $about->about_id = 1;
    }
    $about->about_gass_text = $request->aboutgass;
    if(null !==$request->file('media')){
      $file = $request->file('media');
      $about->about_gass_gambar = 'about-gass.'.$file->getClientOriginalExtension();
      $destinationPath = public_path('images/about/gass');
      $file->move($destinationPath, $about->about_gass_gambar);
    }
    $about->save();
    return redirect('page-editor/addaboutgass')->with('success','You have successfully updated about gass page');
  }

  public function showaboutfac(){
    $this->checklogin();

    $data['active'] = "about";
    $data['active2'] = "facc";
    $data['about'] = About::find(1);
    if(isset($data['about'])){
      $data['about']->about_facility_text = str_replace("\r",'', $data['about']->about_facility_text);
      $data['about']->about_facility_text = str_replace("\n",'', $data['about']->about_facility_text);
      $data['about']->about_facility_text = str_replace("\r\n",'', $data['about']->about_facility_text);
    }
    return view('admin.pages.editor.form-ourfacility',$data);

  }
  public function aboutfac(Request $request){
    $this->checklogin();

    $about = About::find(1);
    if(null == $about){
      $about = new About;
      $about->about_id = 1;
    }
    $about->about_facility_text = $request->ourfaci;
    if(null !==$request->file('media')){
      $file = $request->file('media');
      $about->about_facility_gambar = 'about-gass.'.$file->getClientOriginalExtension();
      $destinationPath = public_path('images/about/facility');
      $file->move($destinationPath, $about->about_facility_gambar);
    }
    $about->save();
    return redirect('page-editor/addourfacility')->with('success','You have successfully updated about our facility page');
  }

  public function showtestimony(){
    $this->checklogin();

    $data['active'] = "about";
    $data['active2'] = "test";
    $data['about'] = About::find(1);
    return view('admin.pages.editor.form-testimony',$data);

  }
  public function addtestimony(Request $request){
    $this->checklogin();

    $about = About::find(1);
    if(null == $about){
      $about = new About;
      $about->about_id = 1;
    }
    $about->about_testimony_t1 = $request->test1;
    $about->about_testimony_t2 = $request->test2;
    $about->about_testimony_t3 = $request->test3;

    $about->about_testimony_n1 = $request->nama1;
    $about->about_testimony_n2 = $request->nama2;
    $about->about_testimony_n3 = $request->nama3;

    $about->about_testimony_title1 = $request->jabatan1;
    $about->about_testimony_title2 = $request->jabatan2;
    $about->about_testimony_title3 = $request->jabatan3;


    if(null !==$request->file('media1')){
      $file = $request->file('media1');
      $about->about_testimony_g1 = 'test1.'.$file->getClientOriginalExtension();
      $destinationPath = public_path('images/about/testi');
      $file->move($destinationPath,   $about->about_testimony_g1);
    }
    if(null !==$request->file('media2')){
      $file = $request->file('media2');
      $about->about_testimony_g2 = 'test2.'.$file->getClientOriginalExtension();
      $destinationPath = public_path('images/about/testi');
      $file->move($destinationPath,   $about->about_testimony_g2);
    }
    if(null !==$request->file('media3')){
      $file = $request->file('media3');
      $about->about_testimony_g3 = 'test3.'.$file->getClientOriginalExtension();
      $destinationPath = public_path('images/about/testi');
      $file->move($destinationPath,   $about->about_testimony_g3);
    }
    $about->save();
    return redirect('page-editor/addtestimony')->with('success','You have successfully updated about our testimony page');
  }
}
