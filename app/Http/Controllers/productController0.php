<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product_Image;
use App\Product;
use App\review;
use DB,Redirect;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use File;
use Image;
use Auth;

class productController extends Controller
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

  public function footer()
  {
    $data['footer'] = DB::table('footer_and_contacts')->first();
    $data['berita'] = DB::table('about')->first();
    return $data;
  }

  public function productAjax($id){
    $data['active'] = $id;
    $c1 = $this->footer();
    $data['footer'] = $c1['footer'];
    $data['berita'] = $c1['berita'];
    return view('customer.pages.products', $data);
  }

  public function sendReview(Request $request){
    $review = new review;
    $review->reviews_name = $request->nickname;
    $review->reviews_title = $request->title;
    $review->reviews_description = $request->review;
    $review->reviews_product_id = $request->id;

    if($review->save()){
      return redirect('/products/detail/'.$request->id);
    }else{
      return redirect('/');
    }
  }

  public function type($id){
    $data['product'] = DB::table('product')
    ->join('product_image', 'product_image.product_id', '=', 'product.product_id')
    ->where('product.product_tipe', '=', $id)
    ->wherein('product_image.pi_id', DB::table('product_image')->select(DB::raw('max(pi_id)', 'filename'))->groupby('product_id'))
    ->get();

    return view('customer.pages.productType', $data);
  }

  public function detail($id){
    $data['product'] = DB::table('product')
    ->join('product_image', 'product_image.product_id', '=', 'product.product_id')
    ->where('product.product_id', '=', $id)
    ->get();

    $data['review'] = DB::table('reviews')
    ->where('reviews_product_id', '=', $id)
    ->get();
    // dd($data['review']);
    $c1 = $this->footer();
    $data['footer'] = $c1['footer'];
    $data['berita'] = $c1['berita'];
    return view('customer.pages.productDetail', $data);
  }

  public function showform(){
    $this->checklogin();

    $data['active'] = "products";
    $data['active2'] = "form";
    return view('admin.pages.products.form',$data);
  }
  public function showtable(){
    $this->checklogin();

    $data['active'] = "products";
    $data['active2'] = "tabel";
    $data['products'] = Product::orderBy('product_tipe','desc')->get();
    return view('admin.pages.products.tabel',$data);
  }

  public function delete($id){
    $this->checklogin();

    $deleted = Product::find($id);
    $arr = Product_Image::get()->where('product_id','=',$id);
    $thumbpath = public_path("images\producthumb\\");
    $realpath = public_path("images\product\\");

    // for($i=1;$i<sizeof($arr);$i++){
    // }
    foreach($arr as $key =>$value)
    {
      File::delete($realpath.$arr[$key]->filename);
      File::delete($thumbpath.$arr[$key]->filename);
    }

    DB::table('product_image')->where('product_id','=',$id)->delete();
    $deleted->delete();
    return redirect('products/tabel')->with('success','You have successfully deleted a post');
  }

  public function addproduct(Request $request){
    $this->checklogin();

    $data['active'] = "products";
    $data['active2'] = "form";

    $product = new Product;
    $product->product_name = $request->nama;
    $product->product_tipe = $request->tipe;
    $product->product_description = $request->description;
    $product->product_specification = $request->specification;
    $product->save();
    $file = $request->file('media');

    for($i=0; $i<sizeof($request->media); $i++){
     $image = new Product_Image;
     $image->product_id = $product->product_id;
     $image->filename = $request->nama.$i.'.'.$file[$i]->getClientOriginalExtension();
     $image->save();
     $destinationPath = public_path('images/producthumb/');
     $img = Image::make($file[$i]->getRealPath());
     $img->resize(200, 125, function ($constraint) {
       $constraint->aspectRatio();
     })->save($destinationPath.$image->filename);

     $destinationPath = public_path('images/product/');
     $file[$i]->move($destinationPath, $image->filename);
   }

   return redirect('products/tabel')->with('success','You have successfully inserted a new product data');
 }
 public function showupdate($id){
   $this->checklogin();

  $data['active'] = "products";
  $data['active2'] = "form";
  $data['update'] = Product::find($id);
  $data['gambar'] = Product_Image::where('product_id','=',$id)->get();
  if(isset($data['update'])){
    $data['update']->product_specification = str_replace("\r",'', $data['update']->product_specification);
    $data['update']->product_specification = str_replace("\n",'', $data['update']->product_specification);
    $data['update']->product_specification = str_replace("\r\n",'', $data['update']->product_specification);

    return view('admin.pages.products.formup',$data);
  }
  else {
    return redirect('products/tabel');
  }
}
public function addupdate($id,Request $request){
  $this->checklogin();

  $update = Product::find($id);
  $update->product_name = $request->nama;
  $update->product_tipe = $request->tipe;
  $update->product_description = $request->description;
  $update->product_specification = $request->specification;
  $update->save();
  $file = $request->file('media');
  $date= Carbon::now();
  if( null !== $request->file('media')){

    for($i=0; $i<sizeof($request->media); $i++)
    {
     $image = new Product_Image;
     $image->product_id = $update->product_id;

     $image->filename = hash('ripemd160',$file[$i]->getClientOriginalName().$date.$i).'.'.$file[$i]->getClientOriginalExtension();
     $image->save();
     $destinationPath = public_path('images/producthumb/');
     $img = Image::make($file[$i]->getRealPath());
     $img->resize(200, 125, function ($constraint) {
       $constraint->aspectRatio();
     })->save($destinationPath.$image->filename);

     $destinationPath = public_path('images/product/');
     $file[$i]->move($destinationPath, $image->filename);
   }

 }
 return redirect('products/update/'.$id)->with('success','You have successfully updated a product data');

}
public function deletepic($id){
  $this->checklogin();

  $deleted = Product_Image::find($id);
  $id = $deleted->product_id;
  $thumbpath = public_path("images\producthumb\\");
  $realpath = public_path("images\product\\");

  File::delete($realpath.$deleted->filename);
  File::delete($thumbpath.$deleted->filename);
  $deleted->delete();


  return redirect('products/update/'.$id)->with('success','You have successfully deleted a picture');

}
}
