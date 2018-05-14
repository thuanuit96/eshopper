<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubCategory;

class AjaxController extends Controller
{
   public  function getsubcategory(Request $rq){
       $cat_id=$rq->id;
      $subcategory=SubCategory::where('CategoryId',$cat_id)->get();
      foreach ($subcategory as $row) {
          echo "<option value='$row->Id'>$row->Name</option>";
      }


   }
}
