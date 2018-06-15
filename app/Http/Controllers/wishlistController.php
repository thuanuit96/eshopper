<?php

namespace App\Http\Controllers;

use App\Wishlists;
use Illuminate\Http\Request;
use Wishlist;
use Illuminate\Support\Facades\Auth;
use App\Products;


class wishlistController extends Controller
{
public function index(){



    if (Auth::check()) {
   $user_id=Auth::id();
       $wishlist=Wishlists::where('user_id','=',$user_id)->get();
        $data=array();
        $i=1;
       foreach ($wishlist as $value){
           $data[$i]=$value->products;
           $i++;
        }
//        Wishlist::add(2, Auth::id());

//        Wishlist::removeByProduct(2, 1);

//       $    wishlist= Wishlist::getWishlistItem($id,$user_id);
        return view('Page.wishlist',['data'=>$data]);

    }
    else{
      return back();
    }
}

public  function create(Request $rq){
    if (Auth::check()) {
        $user_id=Auth::id();
        $id_pro = $rq->id_pro;
        $qty=Wishlist::count($user_id);
        $result= Wishlist::add( $id_pro, $user_id);
      if($qty!=Wishlist::count($user_id)){
        echo 'thanh cong';
       }
      else
       {
           echo 'that bai';

       }

    }
    else
        echo 'chua dang nhap';
}
public  function delete($id_product){
    if (Auth::check()) {
        $user_id=Auth::id();
        Wishlist::removeByProduct($id_product,  $user_id);
        return back()->with(['flash_level'=>'result_msg','flash_massage'=>' Xóa thành công ' ]);
    }




}
}
