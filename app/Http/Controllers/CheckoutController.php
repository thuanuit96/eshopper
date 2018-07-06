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
use vendor\GuzzleHttp\Client;
use Nexmo;

use GuzzleHttp\Exception\RequestException;
use DB;

class CheckoutController extends Controller
{
    public function  checkout( Request $rq){

        if(isset($rq->order_code))
        {
            $id=$rq->order_code;
            $order=Order::findorfail($id);
            $order->Payment_Status = 'Đã thanh toán';
            $order->save();
            return redirect('/')->with(['flash_level'=>'result_msg','flash_massage'=>' Đã thanh toán thành công đơn hàng ' ]);
        }
        $client = new \GuzzleHttp\Client();
        $res = $client->get('https://thongtindoanhnghiep.co/api/city');
//       'application/json; charset=utf8';
        $data=json_decode($res->getBody(),true);
        $cart=Cart::content();

        return view('Page.checkout',['cart'=>$cart,'address'=>$data]);


        }

    public function  postcheckout(Request $req)
    {
        if (!empty(Cart::content())) {

            $data = $req->all();

            $order = new Order();
            if (Auth::check()) {
                $order->UserId=Auth::user()->id;

            }
            $order->Name = $data['customerName'];
            $order->Address = $data['customerAddress'].'-'.$data['customerDistrictId'].'-Tỉnh '.$data['customerCityId'];
            $order->PhoneNumber = $data['customerMobile'];
            $order->Email = $data['customerEmail'];
            $order->Order_date = date('Y/m/d');
            $order->Total = $data['total'];
            $order->Note = $data['description'];
            $order->Payment_Status = 'Chưa Thanh Toán';
            $order->Status = 'Chưa giao hàng';
            $order->Total = $data['total'];
            $order->Confirm ='Chưa xác nhận';
            if ($data['paymentMethod'] == 1){
                $order->Payment_Method='COD';
            }
            else
                $order->Payment_Method='Ngân lượng';



            $order->save();
            foreach (Cart::content() as $item) {

                $order_detail = new Orderdetail();
                $order_detail->OrderId = $order->Id;
                $order_detail->pro_id = $item->id;
                $order_detail->Quantity = $item->qty;
                $order_detail->Unit_Price = $item->price;
                $order_detail->save();

            }
                $order_mail=Order::findorfail($order->Id);
            $product_mail=DB::table('Order_detail')
                ->join('Product_detail', 'Product_detail.id', '=', 'order_detail.pro_id')
                ->join('Products','Products.Id','=','Product_detail.product_id')->where('OrderId',$order->Id)->get();



            if(!empty($data["customerEmail"]))
            {$this->sendmail($data,$product_mail,$order_mail);
            }

            Cart::destroy();
    //            $this->sendsms();
            if ($data['paymentMethod'] == 1) {
                return redirect('/')->with(['flash_level'=>'result_msg','flash_massage'=>' Bạn Đã đặt hàng thành công !Vui lòng vào kiểm tra thông tin đơn hàng qua mail ' ]);

            } else{
                $order->Payment_Method = 'Ngân Lượng';
                return redirect('https://www.nganluong.vn/button_payment.php?receiver=songheo718@gmail.com&product_name='.$order->Id.'&price='.$order->Total.'return_url=eshopper.test/xacnhanthanhtoan?order_id='.$order->Id);


            }
        }

        else return back();
    }
public  function sendsms (){
    $text="Ban da dat hang thanh cong ! moi thâc mac vui long lien he 05003556789";
    $nexmoClient = new Nexmo\Client(new Nexmo\Client\Credentials\Basic('206f4f31', 'U4uT0rNbInTOK3ym'));
    $message = $nexmoClient->message()->send([
        'from' => '@leggetter',
        'to' => 84973962984,
        'text' => $text
    ]);
    }
    public function sendmail($input, $product_mail,$order_mail)
    {   $mail=$input["customerEmail"];

        Mail::send('Page.mail', array('product_mail'=> $product_mail,'email'=>$input["customerEmail"],'order_mail'=>$order_mail), function($message)use($mail){
            $message->to($mail, 'Thông tin đặt hàng')->subject('Chào bạn! Dưới đây là thông tin đặt hàng của bạn');
        });
        Session::flash('flash_message', 'Send message successfully\!');

    }
    public  function xacnhanthanhtoan(Request $rq){


        $id=$rq->order_id;
        $order=Order::findorfail($id);
        $order->Payment_Status = 'Đã thanh toán';
        return redirect('/')->with(['flash_level'=>'result_msg','flash_massage'=>' Đã thanh toán thành công đơn hàng ' ]);



    }
}
