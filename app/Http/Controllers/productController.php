<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product_Image;
use App\Product;
use DB,Redirect;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use File;
use Image;

class productController extends Controller
{
    public function type($id){

      $data['product'] = DB::table('product')
                          ->join('product_image', 'product_image.product_id', '=', 'product.product_id')
                          ->where('product.product_tipe', '=', $id)
                          ->wherein('product_image.pi_id', DB::table('product_image')->select(DB::raw('max(pi_id)', 'filename'))->groupby('product_id'))
                          ->paginate(9);
      
      return view('customer.pages.productType', $data);
    }

    public function showform(){
      $data['active'] = "products";
      $data['active2'] = "form";
      return view('admin.pages.products.form',$data);
    }
    public function showtable(){
      $data['active'] = "products";
      $data['active2'] = "tabel";
      $data['products'] = Product::orderBy('product_tipe','desc')->get();
      return view('admin.pages.products.tabel',$data);
    }

    public function delete($id){
      $deleted = Product::find($id);
      $thumbpath = public_path("images\producthumb\\");
      $realpath = public_path("images\product\\");
      $arr = Product_Image::get()->where('product_id','=',$id);

      for($i=0;$i<sizeof($arr);$i++){
        File::delete($realpath.$arr[$i]->filename);
        File::delete($thumbpath.$arr[$i]->filename);
      }
      DB::table('product_image')->where('product_id','=',$id)->delete();
      $deleted->delete();
      return redirect('products/tabel')->with('success','You have successfully deleted a post');
    }

    public function addproduct(Request $request){
      $data['active'] = "products";
      $data['active2'] = "form";

      $product = new Product;
      $product->product_name = $request->nama;
      $product->product_tipe = $request->tipe;
      $product->product_description = $request->description;
      $product->product_specification = $request->specification;
      $product->save();
      $file = $request->file('media');

      for($i=0; $i<sizeof($request->media); $i++)
      {
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
}
