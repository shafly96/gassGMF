<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Redirect;
use App\user;
use Illuminate\Support\Facades\Hash;
use App\Aftersales;
use App\Messages;
class userController extends Controller
{
  public $data;
  public function __construct()
   {
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

  public function showlogin(){
    return view('admin.pages.user.login');
  }

  public function login(Request $request){
    if(Auth::attempt(['user_id' => $request->userid, 'password' => $request->password]))
    {
      return Redirect::to('/adminhome');
    }
    else {
      return Redirect::to('/admin');
    }
  }

  public function logout(){
    $this->checklogin();

    Auth::logout();
    return Redirect::to('/admin');
  }

  public function showregister(){
    $this->checklogin();

    $this->data['active'] = "user";
    $this->data['active2'] = "regis";
    return view('admin.pages.user.register',$this->data);
  }

  public function showchangepass(){
    $this->checklogin();

    $this->data['active'] = "user";
    $this->data['active2'] = "update";
    return view('admin.pages.user.changepass', $this->data);
  }

  public function register(Request $request){
    $this->checklogin();

    if($request->verifypass != $request->password){
      return redirect('/user/register')->with('failed','Password does not match');
    }
    else {
      $user = new User;
      $user->user_id = $request->id;
      $user->password = bcrypt($request->password);
      $user->save();
      return redirect('/user/register')->with('success','You have successfully created a new admin account');
    }
  }

  public function changepass(Request $request){
    $this->checklogin();

    if(Hash::check($request->oldpass, Auth::user()->password)){
      if ($request->newpass== $request->verifypass) {
        $user = User::find(Auth::user()->login_id);
        $user->password = bcrypt($request->newpass);
        $user->save();
        return redirect('/user/changepass')->with('success','You have successfully changed your password');

      }
      else {
        return redirect('/user/changepass')->with('failed','New Password does not match');
      }

    }
    else {
      return redirect('/user/changepass')->with('failed','Password Invalid');
    }
  }
}
