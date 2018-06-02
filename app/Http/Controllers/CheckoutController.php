<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Order;
use App\Orderdetail;
use Mail;
use App\Products;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Validator;
use App\Categories;
use App\SubCategory;
use App\Customer;
use Session;


class CheckoutController extends Controller
{
    public function  checkout(){
        $cart=Cart::content();

        return view('Page.checkout',['cart'=>$cart]);
    }
    public function  postcheckout(Request $req)
    {
        if (!empty(Cart::content())) {
            $data = $req->all();
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
            $order->Status = 'Chưa giao hàng';
            $order->Total = $data['total'];
            $order->Confirm ='Chưa xác nhận';

            $order->save();
            foreach (Cart::content() as $item) {

                $order_detail = new Orderdetail();
                $order_detail->OrderId = $order->Id;
                $order_detail->ProductId = $item->id;
                $order_detail->Quantity = $item->qty;
                $order_detail->Unit_Price = $item->price;
                $order_detail->save();

            }
          if(!empty($data["customerEmail"]))
            {$this->sendmail($data);
            }

            Cart::destroy();
            return back()->with('alert','Đặt hàng thành công !Vui lòng kiêm tra thông tin đặt hàng của bạn qua email');
        }

        else return back();
    }

    public function sendmail($input)
    {   $mail=$input["customerEmail"];

        Mail::send('Page.mail', array('name'=>$input['customerName'],'email'=>$input["customerEmail"]), function($message)use($mail){
            $message->to($mail, 'Thông tin đặt hàng')->subject('Chào bạn! Dưới đây là thông tin đặt hàng của bạn');
        });
        Session::flash('flash_message', 'Send message successfully\!');

    }
}
