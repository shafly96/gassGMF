<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Redirect;
use App\user;
class userController extends Controller
{
    public function showlogin(){
      return view('admin.pages.user.login');
    }
    public function login(Request $request){

    }
    public function logout(){

    }
    public function showregister(){
      $data['active'] = "user";
      $data['active2'] = "regis";
      return view('admin.pages.user.register',$data);
    }
    public function showchangepass(){

    }
    public function register(Request $request){
      if($request->verifypass != $request->password){
          return redirect('/user/register')->with('failed','Password does not match');
      }
      else {
          $user = new User;
          $user->user_id = $request->id;
          $user->password = bcrypt($request->password);
          $user->save();
          return redirect('/user/register')->with('Success','You have successfully created a new admin account');
      }
    }
    public function changepass(Request $request){

    }
}
