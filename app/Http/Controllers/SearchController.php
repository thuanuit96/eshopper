<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class SearchController extends Controller
{
    public  function  index(){
        return view('Page.search');
    }
    public function find(Request $request) {
        header("Content-type: application/json; charset=utf-8");


        $product = Products::where('Name', 'like', '%' . $request->get('q') . '%')->get();


        return response()->json($product,200,['Content-type'=> 'application/json; charset=utf-8'], JSON_UNESCAPED_UNICODE);
    }
    public  function  search(Request $rq){



        $key=$rq->keyword;
        $product = Products::where('Name', 'like', '%' . $key . '%')->orwhere('Code','like','%'.$key.'%')->get();
        $num=count($product);

        return view("Page.search",['pro'=>$product,'num'=>$num]);

    }
}
