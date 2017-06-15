<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use File;
use Image;
class newsController extends Controller
{
  public function showform(){
    $data['active'] = "news";
    $data['active2'] = "form";
    return view('admin.pages.news.form',$data);
  }
  public function showtable(){
    $data['active'] = "news";
    $data['active2'] = "tabel";
    $data['news'] = Berita::orderBy('berita_id', 'desc')->get();
    return view('admin.pages.news.tabel',$data);
  }
  public function showupdate($id){
    $data['update'] = Berita::find($id);
    $data['active'] = "news";
    $data['active2'] = "form";
    return view('admin.pages.news.form',$data);
  }
  public function test($id){
    $data['active'] = "news";
    $data['active2'] = "tabel";
    $data['news'] = Berita::find($id);
    return view('admin.pages.news.test',$data);
  }

  public function delete($id){
    $deleted = Berita::find($id);
    $thumbpath = public_path("newsthumb\\");
    $realpath = public_path("news\\");
    File::delete($realpath.$deleted->berita_filename);
    File::delete($thumbpath.$deleted->berita_filename);
    $deleted->delete();
    return redirect('news/tabel')->with('success','You have successfully deleted a post');
  }

  public function addnews(Request $request){
    $data['active'] = "news";
    $data['active'] = "tabel";
    $date = Carbon::now();
    $date = $date->toDateString();
    $news = new Berita;
    $news->berita_title = $request->title;
    $news->berita_text = $request->content;
    $file = $request->file('media');
    $news->berita_filename = $request->title.$date.'.'.$file->getClientOriginalExtension();

    $destinationPath = public_path('images/newsthumb');
    $img = Image::make($file->getRealPath());
    $img->resize(200, 125, function ($constraint) {

        $constraint->aspectRatio();

    })->save($destinationPath.'\\'.$news->berita_filename);

    $destinationPath = public_path('images/news/');

    $file->move($destinationPath, $news->berita_filename);

    $news->berita_date = $date;
    $news->save();

    return redirect('news/tabel')->with('success','You have successfully created a new post');

  }
}
