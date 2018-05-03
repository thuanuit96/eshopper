<?php

namespace App\Http\Controllers;
use App\Categories;
use App\SubCategory;
use Cart;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function __construct()
    {
        $category=Categories::all();
        $cart=Cart::content();
        var_dump($cart);
        view()->share(['category'=>$category,'cart'=>$cart]);


    }
}
