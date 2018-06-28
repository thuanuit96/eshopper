<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class statisticalcontroller extends Controller
{
   public  function getlist(){

       return view('Admin.statistical.list');
   }
}
