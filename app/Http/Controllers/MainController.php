<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Categories;
use App\SubCategory;

class MainController extends Controller
{
 public function login(Request $request)
 {

     echo $request->password;
     $data=[
         'User_name'=>$request->username,
         'User_password'=>$request->password,
     ];
     if(Auth::attempt($data)){
         return view('Page.home')->with('Messenger','Đăng nhập thành công');

     }
     else  return redirect()->back();



 }
}
