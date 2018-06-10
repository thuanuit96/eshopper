<?php

namespace App\Http\Controllers;
use App\Categories;
use App\product_colors;
use App\SubCategory;
use Cart;
use App\product_sizes;
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

        $subcategory=SubCategory::all();
        $cart=Cart::content();
        $color=product_colors::all();
        $sizes=product_sizes::select('name')->distinct()->get();

        view()->share(['category'=>$category,'cart'=>$cart,'subcategory'=>$subcategory,'colors'=>$color,'sizes'=>$sizes]);


    }
}
