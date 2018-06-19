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


class CheckoutController extends Controller
{
    public function  checkout(){
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
            $order->Name = $data['customerName'];
            $order->Address = $data['customerAddress'].'-'.$data['customerDistrictId'].'-Tỉnh '.$data['customerCityId'];
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
                $order_detail->pro_id = $item->id;
                $order_detail->Quantity = $item->qty;
                $order_detail->Unit_Price = $item->price;
                $order_detail->save();

            }
          if(!empty($data["customerEmail"]))
            {$this->sendmail($data);
            }

            Cart::destroy();
            $this->sendsms();
            return back()->with('alert','Đặt hàng thành công !Vui lòng kiêm tra thông tin đặt hàng của bạn qua email');
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
    public function sendmail($input)
    {   $mail=$input["customerEmail"];

        Mail::send('Page.mail', array('name'=>$input['customerName'],'email'=>$input["customerEmail"]), function($message)use($mail){
            $message->to($mail, 'Thông tin đặt hàng')->subject('Chào bạn! Dưới đây là thông tin đặt hàng của bạn');
        });
        Session::flash('flash_message', 'Send message successfully\!');

    }
}
