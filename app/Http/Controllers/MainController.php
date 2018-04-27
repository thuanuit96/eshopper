<?php

namespace App\Http\Controllers;
use App\Product_detail;
use App\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Validator;
use App\Categories;
use App\SubCategory;
use Session;

use Hash;


class MainController extends Controller
{
 public function login(Request $request)
 {

     $data=[
         'name'=>$request->username,
         'password'=>$request->password,
     ];
     if(Auth::attempt($data)){

         Session::put('account',Auth::user()->name);
         return redirect()->back();

     }else{
         return redirect()->back()->with('alert','Đăng nhập thất bại! Sai tài khoản hoặc mật khẩu');
     }



 }
 public function logout(){

     Auth::logout();
     Session::forget('account');
     return redirect()->back();


 }

    protected function validator(array $data)

    {
        return Validator::make($data, [
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|',
        ]);
    }
    public function register(Request $request)

     {
         $this->validate($request, [
             'username' => 'required|string|max:255',
             'email' => 'required|string|email|max:255|unique:users',
             'password' => 'required|string|min:6|',
         ],
             ['min'=> 'Mật khẩu ít nhất 6 ký tự']);

         $data = $request->all();
//        $validator = $this->validator($data)->validate();
//        var_dump($validator);
//        if ($validator && $validator->fails()) {
//            $this->throwValidationException(
//                $request, $validator
//            );
//        }
        $password=$data['password'];
        $user = new User();
        $user->name =$data['username'];
        $user->Email = $data['email'];
        $user->password = bcrypt($password);
        $user->save();
//
//        Session::flash('message', 'User registered, please check your email!');
        Session::flash('alert', 'alert-success');
        return redirect()->back();

    }
    public  function  getproducts()
    {
        $products=Products::paginate(6);

        return view('Page.Home',['Products'=>$products]);
    }

    public  function  getproduct_detail($id)
    {
        $product_detail=Products::find($id);
        return view('Page.product_detail',['product_detail'=>$product_detail]);
    }
}
