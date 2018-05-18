<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrdersController extends Controller
{
    public function getlist()
    {

            $order = Order::paginate(10);

        return view('Admin.orders.list',['order'=>$order]);
    }
}
