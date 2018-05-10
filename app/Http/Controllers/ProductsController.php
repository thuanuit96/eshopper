<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function getlist($id)
    {
//        if ($id!='all') {
//            $pro = Products::where('cat_id',$id)->paginate(10);
//            $cat= Category::all();
//            return view('back-end.products.list',['data'=>$pro,'cat'=>$cat,'loai'=>$id]);
//        } else {
//            $pro = Products::paginate(10);
//            $cat= Category::all();
            return view('back-end.products.list');
//        }
    }
    }
