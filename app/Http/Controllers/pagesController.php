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
use App\homepage_image;
use App\manager;
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
    $data['slides'] = Homepage::join('homepage_image','homepage.homepage_id','=','homepage_image.homepage_id')->get();

    return view('admin.pages.editor.homepage',$data);
  }

  public function showinsert(){
    $this->checklogin();
    $data['active'] = 'homepage';
    $data['active2'] = '';
    return view('admin/pages/editor/homepagebak',$data);
  }
  public function deletehomepage($id){
    $this->checklogin();

    $deleted = DB::table('homepage_image')->where('homepage_id', '=', $id)->get();
    $thumbpath = public_path("images\homepage\\");
    $realpath = public_path("images\homepage\\homepagethumb\\");

    File::delete($realpath.$deleted[0]->homepage_gambar);
    File::delete($thumbpath.$deleted[0]->homepage_gambar);

    DB::table('homepage_image')->where('homepage_id', '=', $id)->delete();
    DB::table('homepage')->where('homepage_id', '=', $id)->delete();


    return redirect('page-editor/homepage')->with('success','You have successfully deleted a homepage slide');

  }



  public function updatehome(Request $request){
    $this->checklogin();

    $data['active'] = "homepage";
    $data['active2'] = "";

    $date = Carbon::now();
    $home = new Homepage;
    $home->homepage_slogan = $request->slogan;
    $home->homepage_slogan_subtext = $request->subtext;
    $home->save();

    if(null !== $request->file('media')){
      $files = $request->file('media');
      $homimg = new homepage_image;
      $homimg->homepage_gambar = hash('md5', $date).'.'.$files->getClientOriginalExtension();

      $destinationPath = public_path('images/homepage/homepagethumb');
      $img = Image::make($files->getRealPath());
      $img->resize(200, 125, function ($constraint) {
        $constraint->aspectRatio();
      })->save($destinationPath.'\\'.$homimg->homepage_gambar);
      $destinationPath = public_path('images/homepage/');
      $files->move($destinationPath, $homimg->homepage_gambar);
      $homimg->homepage_id = $home->homepage_id;
      $homimg->save();
    }
    return redirect('page-editor/homepage')->with('success','You have successfully inserted a homepage slide');
  }

  public function edithomepage(Request $request,$id){
      $updated = Homepage::find($id);
      $date = Carbon::now();
      $updated->homepage_slogan = $request->slogan;
      $updated->homepage_slogan_subtext = $request->subtext;
      $updated->save();

      if(null !== $request->file('media')){
        $files = $request->file('media');
        $homimg = homepage_image::where('homepage_id',$id)->first();

        $thumbpath = public_path("images\homepage\\");
        $realpath = public_path("images\homepage\\homepagethumb\\");

        File::delete($realpath.$homimg->homepage_gambar);
        File::delete($thumbpath.$homimg->homepage_gambar);

        $homepage_gambar = hash('md5', $date).'.'.$files->getClientOriginalExtension();
        $destinationPath = public_path('images/homepage/homepagethumb');
        $img = Image::make($files->getRealPath());
        $img->resize(200, 125, function ($constraint) {
          $constraint->aspectRatio();
        })->save($destinationPath.'\\'.$homepage_gambar);
        $destinationPath = public_path('images/homepage/');
        $files->move($destinationPath, $homepage_gambar);
        $homepage_id = $updated->homepage_id;
        homepage_image::where('homepage_id',$id)->update(['homepage_gambar'=>$homepage_gambar]);
      }
      return redirect('page-editor/homepage')->with('success','You have successfully updated a homepage slide');


  }

  public function showupdate($id){
    $this->checklogin();
    $data['active'] = 'homepage';
    $data['active2'] = '';
    $data['homepage'] = DB::table('homepage')->join('homepage_image','homepage.homepage_id','=','homepage_image.homepage_id')->where('homepage.homepage_id', '=', $id)->first();
  //  dd($data['homepage']);
    return view('admin/pages/editor/homepagebak',$data);

  }

  public function deletepics($id){
    $this->checklogin();
    $deleted = homepage_image::find($id);
    $thumbpath = public_path("images\\homepage\\");
    File::delete($thumbpath.$deleted->homepage_gambar);
    $deleted->delete();
    return redirect('page-editor/homepage')->with('success','You have successfully deleted a cover photo');
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

  public function tabelmanager(){
    $this->checklogin();
    $data['active'] = "about";
    $data['active2'] = "manager";
    $data['manager'] = manager::get();
    return view('admin.pages.editor.tabel-manager',$data);
  }

  public function addmanager(){
    $this->checklogin();
    $data['active'] = "about";
    $data['active2'] = "manager";

    return view('admin.pages.editor.form-manager',$data);
  }
  public function insertmanager(Request $request){
    $this->checklogin();
    $data['active'] = "about";
    $data['active2'] = "manager";

    $date = Carbon::now();
    $date = hash('md5',$date);
    $manager = new manager;
    $manager->manager_nama = $request->name;
    $manager->manager_jabatan = $request->position;
    $manager->manager_bio = $request->bio;

    $file = $request->file('media');
    $manager->manager_filename = $date .'.'. $file->getClientOriginalExtension();
    $destinationPath = public_path('images/managers');
    $file->move($destinationPath,   $manager->manager_filename);
    $manager->save();

    return redirect('page-editor/tabel-manager')->with('success','You have successfully inserted a new manager data');

  }

  public function updmanager($id){
    $data['manager'] = manager::find($id);
    $data['active'] = 'about';
    $data['active2'] = 'manager';

    return view('admin.pages.editor.form-manager',$data);
  }
  public function updatemanager(Request $request,$id){
    $data['active'] = 'about';
    $data['active2'] = 'manager';
    $manager = manager::find($id);
    $manager->manager_nama = $request->name;
    $manager->manager_jabatan =  $request->position;
    $manager->manager_bio = $request->bio;
    $date = Carbon::now();
    $date = hash('md5',$date);

    if(null !== $request->file('media')){
      $realpath = public_path("images\managers\\");
      File::delete($realpath.$manager->manager_filename);
      $file = $request->file('media');
      $manager->manager_filename = $date .'.'. $file->getClientOriginalExtension();
      $destinationPath = public_path('images/managers');
      $file->move($destinationPath,   $manager->manager_filename);
    }

    $manager->save();

    return redirect('page-editor/tabel-manager')->with('success','You have successfully updated a manager data');

  }
  public function deletemanager($id){
    $deleted = manager::find($id);

    $realpath = public_path("images\managers\\");
    File::delete($realpath.$deleted->manager_filename);
    $deleted->delete();
    return redirect('page-editor/tabel-manager')->with('success','You have successfully deleted a manager data');


  }
}
