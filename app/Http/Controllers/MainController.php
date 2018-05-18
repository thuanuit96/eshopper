<?php

namespace App\Http\Controllers;
use App\Orderdetail;
use App\Product_detail;
use App\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Validator;
use App\Categories;
use App\SubCategory;
use App\Customer;
use Session;
use Cart;
use App\Order;
use Mail;


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
        $products=Products::paginate(4);

        return view('Page.Home',['Products'=>$products]);
    }

    public  function  getproduct_detail(Request $rq)
    {
       $id=$rq->id;
        $product_detail=Products::find($id);
        $subcate_id=$product_detail->SubCategoryId;
        $relate_pro=SubCategory::find($subcate_id)->products;
//        dd($relate_pro);
        return view('Page.product_detail',['product_detail'=>$product_detail,'relate_pro'=>$relate_pro]);
    }
    public  function  cart($id){

        $product = Products::find($id);
        $cartInfo = [
            'id' => $id,
            'name' => $product->Name,
            'price' => $product->Price,
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
    public function update(Request $request,$id){

        $cart = Cart::content(); //Lấy nội dung của giỏ hàng
        $item = Cart::search(function ($cart) use($id) { // Lấy  object có id=$id
            return $cart->id == $id;
        })->first();
//        Cart::update($item->rowId, $item->qty + $request->qty);
        Cart::update($item->rowId, $request->qty);
        $result=array('price'=>$item->subtotal,'total_price'=>Cart::subtotal());
        echo (json_encode($result));

    }

    public function  checkout(){
        $cart=Cart::content();

     return view('Page.checkout',['cart'=>$cart]);
    }
    public function  postcheckout(Request $req)
    {
        if (!empty(Cart::content())) {
            $data = $req->all();
//         dd($data);
            $order = new Order();
            $order->Name = $data['customerName'];
            $order->Address = $data['customerAddress'];
            $order->PhoneNumber = $data['customerMobile'];
            $order->Email = $data['customerEmail'];
            $order->Order_date = date('Y/m/d');
            $order->Total = $data['total'];
            $order->Note = $data['description'];
            if ($data['paymentMethod'] == 1) {
                $order->Payment_Method = 'COD';
            } else
                $order->Payment_Method = 'Ngân Lượng';
            $order->Payment_Status = 'Chưa Thanh Toán';
            $order->Order_Status = 1;
            $order->Total = $data['total'];
            $order->save();
            foreach (Cart::content() as $item) {

                $order_detail = new Orderdetail();
                $order_detail->OrderId = $order->id;
                $order_detail->ProductID = $item->id;
                $order_detail->Quantity = $item->qty;
                $order_detail->Unit_Price = $item->price;
                $order_detail->save();



            }

            $this->sendmail($data);
            return back();
        }

        else return back();
    }

    public function sendmail($input)
    {
        Mail::send('Page.mail', array('name'=>$input['customerName'],'email'=>$input["customerEmail"]), function($message){
            $message->to('thuan7181996@gmail.com', 'Thông tin đặt hàng')->subject('Chào bạn! Dưới đây là thông tin đặt hàng của bạn');
        });
        Session::flash('flash_message', 'Send message successfully!');

    }

}


