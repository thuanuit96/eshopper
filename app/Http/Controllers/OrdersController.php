<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function getlist()
    {
//        if ($id!='all') {
//            $pro = Products::where('cat_id',$id)->paginate(10);
//            $cat= Category::all();
//            return view('back-end.products.list',['data'=>$pro,'cat'=>$cat,'loai'=>$id]);
//        } else {
//            $pro = Products::paginate(10);
//            $cat= Category::all();
//            return view('back-end.products.list',['data'=>$pro,'cat'=>$cat,'loai'=>0]);
//        }
        return view('back-end.oders.list');
    }
}
