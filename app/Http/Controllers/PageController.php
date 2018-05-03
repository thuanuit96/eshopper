<?php

namespace App\Http\Controllers;
use App\Categories;
use App\SubCategory;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function get_menu(){
        $menu=Categories::all();
        var_dump($menu);

    }
}
