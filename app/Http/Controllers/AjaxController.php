<?php

namespace App\Http\Controllers;
use Cart;

use Illuminate\Http\Request;
use App\SubCategory;
use DB;
use App\promotion;
use vendor\GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;



class AjaxController extends Controller
{
   public  function getsubcategory(Request $rq){
       $cat_id=$rq->id;
      $subcategory=SubCategory::where('CategoryId',$cat_id)->get();
      foreach ($subcategory as $row) {
          echo "<option value='$row->Id'>$row->Name</option>";
      }


   }
   public  function address(){

$client = new \GuzzleHttp\Client();
$res = $client->get('https://thongtindoanhnghiep.co/api/city');
//       'application/json; charset=utf8';
       $data=json_decode($res->getBody(),true);

 foreach ($data as $vl){

     foreach ((array)$vl as $vl1)
     {
     }

 }



   }

public  function getdistrict(Request $rq){
    $id=$rq->id;
    $client = new \GuzzleHttp\Client();
    $res = $client->get('https://thongtindoanhnghiep.co/api/city/'.$id.'/district');
//  'application/json; charset=utf8';
    $data=json_decode($res->getBody());
    foreach ($data as $vl){

             echo "<option value='$vl->Title'>$vl->Title</option>";

//            echo "<option". value=".$vl['Title']>".$vl['Title']."</option>";



    }

}
public  function getcoupon(Request $rq){
   $promo= DB::table('promotion')->where('Code',$rq->name)->get();
    $string_number = Cart::subtotal();
//    var_dump($string_number);
// NOTE: You don't really have to use floatval() here, it's just to prove that it's a legitimate float value.
    $number = floatval(str_replace(',', '', str_replace('.', '.',  Cart::subtotal())));

// At this point, $number is a "natural" float.

//  var_dump($number);
//  $number=$number-50000;

//

    if(count($promo)>0){
        foreach ($promo as $vl){
           $tongtien=$number-(float)$vl->Value;
                $promotion=promotion::findorfail($vl->Id);
                $promotion->delete();

        }
         echo number_format($tongtien);
    }
    else
    {
        echo 'thatbai';
    }



}
public  function loaisanpham(Request $rq){
    $cat_id=$rq->id;
    $subcategory=SubCategory::where('CategoryId',$cat_id)->get();
       return view('Admin.category.loaisanpham',['data'=>$subcategory]);
}

}
