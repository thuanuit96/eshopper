<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use DB;
class OrdersController extends Controller
{
    public function getlist()
    {

            $order = Order::paginate(10);

        return view('Admin.orders.list',['order'=>$order]);
    }
    public function getdetail($id)
    {
//        $order = Order::where('Id',$id)->first();
        $order=Order::find($id);
        if (isset($order->order_detail->OrderId)) {
            $order_id=$order->order_detail->OrderId;
            $order_detail = DB::table('Order_detail')
                ->join('Products', 'Products.id', '=', 'order_detail.ProductId')
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
        $oder->save();
        return redirect('admin/donhang')
            ->with(['flash_level'=>'result_msg','flash_massage'=>' Đã xác nhận đơn hàng thành công !']);

    }
    public function getdel($id)
    {
        $oder = Order::where('Id',$id)->first();
        if ($oder->status =='Đã xác nhận') {
            return redirect()->back()
                ->with(['flash_level'=>'result_msg','flash_massage'=>'Không thể hủy đơn hàng số: '.$id.' vì đã được xác nhận!']);
        } else {
            $oder = Order::find($id);
            $oder->delete();
            return redirect('admin/donhang')
                ->with(['flash_level'=>'result_msg','flash_massage'=>'Đã hủy bỏ đơn hàng số:  '.$id.' !']);
        }
    }
}
