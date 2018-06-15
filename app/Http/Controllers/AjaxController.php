<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubCategory;
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
    $res = $client->get('https://thongtindoanhnghiep.co/api/city/2/district');
//  'application/json; charset=utf8';
    $data=json_decode($res->getBody());
    foreach ($data as $vl){

             echo "<option value='$vl->Title'>$vl->Title</option>";

//            echo "<option". value=".$vl['Title']>".$vl['Title']."</option>";



    }

}

}
