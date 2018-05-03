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
use Cart;


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
     Cart::destroy();
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
    public  function  cart($id){

        $product = Products::find($id);
        $cartInfo = [
            'id' => $id,
            'name' => $product->Product_Name,
            'price' => $product->Product_Price,
            'qty' => '1'
        ];
        Cart::add($cartInfo);
        $cart = Cart::content();
          echo Cart::count();

//         return redirect()->back()->withInput(['cart'=>$cart]);
    }
    public  function  listcart(){

                $cart=Cart::content();

                return view('Page.cart',['cart'=>$cart]);
    }
    public  function  cart_delete(Request $request){
        $id=$request->product_id;
        $cart = Cart::content(); //Lấy nội dung của giỏ hàng
        $item = Cart::search(function ($cart) use($id) { // Lấy nội dung có id=$id
            return $cart->id == $id;
        })->first();
        $rowId =$item->rowId;
        Cart::remove($rowId);
        return back();

    }
    public function qty_up(Request $request){
        $id=$request->product_id;
        $cart = Cart::content(); //Lấy nội dung của giỏ hàng
        $item = Cart::search(function ($cart) use($id) { // Lấy  object có id=$id
            return $cart->id == $id;
        })->first();
        Cart::update($item->rowId, $item->qty + 1);
        echo $item->qty;
    }
    public function qty_down(Request $request){
        $id=$request->product_id;
        $cart = Cart::content(); //Lấy nội dung của giỏ hàng
        $item = Cart::search(function ($cart) use($id) { // Lấy  object có id=$id
            return $cart->id == $id;
        })->first();
        Cart::update($item->rowId, $item->qty - 1);
        $total=$item->price*$item->qty;
        $qty=$item->qty;
        $data=array($total,$qty,'1111111111111111111');
        die (json_encode($data));


    }
    public function  checkout(){
        $cart=Cart::content();

return view('Page.checkout',['cart'=>$cart]);
    }


}


