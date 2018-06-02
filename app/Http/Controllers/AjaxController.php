<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubCategory;
use vendor\GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
require_once url('vendor/autoload.php');



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
       $data=json_decode($res->getBody());
//       dd($data);
       foreach ($data as $vl){


          echo $vl['ID'];
       }

   }
   public  function  nexmo(){

       $nexmoClient = new Nexmo\Client(new Nexmo\Client\Credentials\Basic('key', 'secret'));
   }


}
