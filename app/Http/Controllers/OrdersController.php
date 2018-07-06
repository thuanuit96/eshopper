<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use DB;
use Nexmo;
class OrdersController extends Controller
{
    public function getlist()
    {

            $order = Order::orderBy('created_at', 'DESC')->paginate(10);

        return view('Admin.orders.list',['order'=>$order]);
    }
    public function getdetail($id)
    {
//        $order = Order::where('Id',$id)->first();
        $order=Order::find($id);
        if (isset($order->order_detail->OrderId)) {
            $order_id=$order->order_detail->OrderId;
            $order_detail = DB::table('Order_detail')
                ->join('Product_detail', 'Product_detail.id', '=', 'order_detail.pro_id')
                ->join('Products','Products.Id','=','Product_detail.product_id')
                ->where('OrderId',$order_id)
                ->get();
            return view('Admin.orders.detail',['order_detail'=>$order_detail,'order'=>$order]);

        }
        else return back();


    }
    public function postdetail($id)
    {
        $oder = Order::find($id);
        if($oder->Confirm=='Đã xác nhận' )
        {
            return redirect('admin/donhang')
                ->with(['flash_level'=>'result_msg','flash_massage'=>' Đơn hàng này đã được xác nhân rồi!']);
        }
        $oder->Confirm = 'Đã xác nhận';
        $oder->Status='Đang giao hàng';
        $oder->save();
        $this->sendsms();

        return redirect('admin/donhang')
            ->with(['flash_level'=>'result_msg','flash_massage'=>' Đã xác nhận đơn hàng thành công !']);

    }
    public function getdel($id)
    {
        $oder = Order::where('Id',$id)->first();
        if ($oder->Status=='Đã giao hàng') {
            $oder = Order::find($id);
            $oder->delete();
            return redirect('admin/donhang')
                ->with(['flash_level'=>'result_msg','flash_massage'=>'Đã xóa đơn hàng số:  '.$id.' !']);
        }
        if ($oder->Confirm =='Đã xác nhận') {
            return redirect()->back()
                ->with(['flash_level'=>'result_msg','flash_massage'=>'Không thể hủy đơn hàng số: '.$id.' vì đã được xác nhận !']);
        } else {
            $oder = Order::find($id);
            $oder->delete();
            return redirect('admin/donhang')
                ->with(['flash_level'=>'result_msg','flash_massage'=>'Đã hủy bỏ đơn hàng số:  '.$id.' !']);
        }
    }
    public function postedit(Request $rq){

        $oder = Order::find($rq->id);
        $oder->Name = $rq->txtname;
        $oder->PhoneNumber = $rq->txtphone;
        $oder->Address = $rq->txtaddress;

        $oder->Email = $rq->txtemail;
        $oder->Status=$rq->sltstatus;
        $oder->save();
        return redirect('admin/donhang')
            ->with(['flash_level'=>'result_msg','flash_massage'=>'Đã cập nhật đơn hàng']);

    }
    public  function sendsms (){
        $text="Da xac nhan  thanh cong don hang cua ban!!! ";
        $nexmoClient = new Nexmo\Client(new Nexmo\Client\Credentials\Basic('206f4f31', 'U4uT0rNbInTOK3ym'));
        $message = $nexmoClient->message()->send([
            'from' => '@leggetter',
            'to' => 84973962984,
            'text' => $text
        ]);
    }

}
