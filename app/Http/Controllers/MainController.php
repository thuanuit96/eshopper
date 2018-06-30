<?php

namespace App\Http\Controllers;
use App\Orderdetail;
use App\product_colors;
use App\Product_detail;
use App\product_sizes;
use App\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

use Illuminate\Support\Facades\Validator;
use App\Categories;
use App\SubCategory;
use App\Customer;
use Session;
use Cart;
use App\Order;
use App\News;

use Mail;
use DB;


use Hash;


class MainController extends Controller
{
    public function login(Request $request)
    {

        $data = [
            'username' => $request->username,
            'password' => $request->password,
        ];
        if (Auth::attempt($data)) {
            Session::put('account', Auth::user()->username);
            return redirect()->back();

        } else {
            return redirect()->back()->with('alert', 'Đăng nhập thất bại! Sai tài khoản hoặc mật khẩu');
        }


    }

    public function logout()
    {

        Auth::logout();
        Session::forget('account');
        Cart::destroy();
        return redirect()->back();


    }

    protected function validator(array $data)

    {
        return Validator::make($data, [
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|',
        ]);
    }

    public function register(Request $request)

    {
        $this->validate($request, [
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|',
        ],
            ['min' => 'Mật khẩu ít nhất 6 ký tự']);

        $data = $request->all();

//        $validator = $this->validator($data)->validate();
//        var_dump($validator);
//        if ($validator && $validator->fails()) {
//            $this->throwValidationException(
//                $request, $validator
//            );
//        }
        $password = $data['password'];
        $user = new User();
        $user->username = $data['username'];
        $user->email = $data['email'];
        $user->fullname = $data['fullname'];
        $user->phone = $data['phone'];
        $user->provider = 'null';
        $user->provider_id = 'null';


        $user->password = bcrypt($password);
        $user->remember_token = $data['_token'];
        $user->save();
//
//        Session::flash('message', 'User registered, please check your email!');
        return redirect()->back()->with(['flash_level'=>'result_msg','flash_massage'=>' Đăng ký thành công' ]);

    }

    public function getproducts()
    {
        $products = Products::paginate(4);
        $products_new = Products::orderBy('updated_at', 'DESC')->paginate(4);

        $men_pro = DB::table('categories')
            ->join('subcategory', 'categories.Id', '=', 'subcategory.CategoryId')
            ->join('products', 'subcategory.Id', '=', 'products.subcategoryId')
            ->where('categories.Id', '=', 1)
            ->paginate(3);
        $women_pro = DB::table('categories')
            ->join('subcategory', 'categories.Id', '=', 'subcategory.CategoryId')
            ->join('products', 'subcategory.Id', '=', 'products.SubCategoryId')
            ->where('categories.Id', '=', 2)
            ->paginate(3);
        $pk = DB::table('categories')
            ->join('subcategory', 'categories.Id', '=', 'subcategory.CategoryId')
            ->join('products', 'subcategory.Id', '=', 'products.SubCategoryId')
            ->where('categories.id', '=', 3)
            ->paginate(3);
        //Tin tức
        $news = News::paginate(4);
        $data = ['Products' => $products, 'men_pro' => $men_pro, 'women_pro' => $women_pro, 'pk' => $pk, 'news' => $news,'products_new'=>$products_new];

        return view('Page.home', $data);
    }

    public function getproduct_detail(Request $rq)
    {
        $id = $rq->id;
        $product = Products::find($id);
        $subcate_id = $product->SubCategoryId;
        $pro_detail= $product->pro_detail;
        $relate_pro = SubCategory::find($subcate_id)->products;
//        dd($relate_pro);
        return view('Page.product_detail', ['pro'=>$product,'product_detail' => $pro_detail, 'relate_pro' => $relate_pro]);
    }

    public function addcart(Request $rq)
    {


        $product_detail = Product_detail::find($rq->id);
        $product=$product_detail->product;

        $cartInfo = [
            'id' => $rq->id,
            'name' => $product->Name,
            'price' => $product->Price,
            'qty' => $rq->qty,
            'options' => ['color'=>$rq->color,'size' => $rq->size]
        ];
        Cart::add($cartInfo);
        $cart = Cart::content();
        echo Cart::count();


    }

    public function listcart()
    {


               $cart = Cart::content();

               return view('Page.cart', ['cart' => $cart]);



    }

    public function cart_delete(Request $request)
    {


            $id = $request->product_id;
            $cart = Cart::content(); //Lấy nội dung của giỏ hàng
            $item = Cart::search(function ($cart) use ($id) { // Lấy nội dung có id=$id
                return $cart->id == $id;
            })->first();
            $rowId = $item->rowId;
            Cart::remove($rowId);
            return back();


    }

    public function update(Request $request, $id)
    {

        $cart = Cart::content(); //Lấy nội dung của giỏ hàng
        $item = Cart::search(function ($cart) use ($id) { // Lấy  object có id=$id
            return $cart->id == $id;
        })->first();
//        Cart::update($item->rowId, $item->qty + $request->qty);
        Cart::update($item->rowId, $request->qty);
        $result = array('price' => $item->subtotal, 'total_price' => Cart::subtotal());
        echo(json_encode($result));

    }


    public function danhmuc(Request $rq)
    {
        $id = $rq->id;
        $dm = SubCategory::findorfail($id);
        $pro = Products::where('SubcategoryId', '=', $id)->get();
//    die (json_encode($pro));

        return view('Page.pro_subcategory', ['dm' => $dm, 'pro' => $pro]);

    }
    public function color(Request $rq)
    {

        $id = $rq->id;
        $color1=product_colors::findorfail($id);

        $pro=Products::where('id_color','=',$id)->get();
//        $pro = Products::where('SubcategoryId', '=', $id)->get();
////    die (json_encode($pro));
//
        return view('Page.fiter-pro', ['pro' => $pro,'color1'=>$color1]);
//        return back()->with('pro_color',$pro_color);

    }
    public function size(Request $rq)
    {
        $dm = SubCategory::findorfail($rq->sub_id);
        $sizes=product_sizes::where('name','=',$rq->size)->get();
        $data=array();
        $i=0;
        foreach ($sizes as $vl){
            $pro_id=$vl->product_id;
           $pro=Products::where('Id','=',$pro_id)->get();
             $data[$i]=$pro;
             $i++;

        }
        return view('Page.fiter-pro-size', ['data' => $data,'dm' => $dm]);

    }
    public  function  news_detail(Request $rq){
       $news=News::findorfail($rq->id);
       $tinmoi=News::where('Id','<>',$rq->id)->get();
       $tinlienquan=News::where('Id','<>',$rq->id)->orderby('created_at', 'asc')->paginate(3);

        return view('Page.news_detail',['news'=>$news,'tinmoi'=>$tinmoi,'tinlienquan'=>$tinlienquan]);
    }
 public  function  filter(Request $rq){
    $id_sucategory=$rq->id_subcategory;
    $key=$rq->name;
    switch ($key) {
        case 'un-filter':
            $pro = Products::where('SubcategoryId','=',$id_sucategory)->get();
            return view('Page.box-pro',['pro'=>$pro]);

            break;
        case 'price-up':
            $pro = Products::where('SubcategoryId','=',$id_sucategory)->orderBy('Price', 'asc')->get();
            return view('Page.box-pro',['pro'=>$pro]);
            break;
        case 'price-down':
            $pro = Products::where('SubcategoryId','=',$id_sucategory)->orderByDesc('Price')->get();
            return view('Page.box-pro',['pro'=>$pro]);
            break;
        case 'sale':
            $pro = Products::where('SubcategoryId','=',$id_sucategory)->where('Discount','!=','Null')->get();
            return view('Page.box-pro',['pro'=>$pro]);
            break;
    }

}
    public  function  filter_2(Request $rq){
        $id_color=$rq->id_color;
        $key=$rq->name;
        switch ($key) {
            case 'un-filter':
                $pro = Products::where('id_color','=',$id_color)->get();
                return view('Page.box-pro',['pro'=>$pro]);

                break;
            case 'price-up':
                $pro = Products::where('id_color','=',$id_color)->orderBy('Price', 'asc')->get();
                return view('Page.box-pro',['pro'=>$pro]);
                break;
            case 'price-down':
                $pro = Products::where('id_color','=',$id_color)->orderByDesc('Price')->get();
                return view('Page.box-pro',['pro'=>$pro]);
                break;
            case 'sale':
                break;
        }

    }
    public  function  filter_search(Request $rq){
        $key=$rq->key;
        $case=$rq->name;
        switch ($case) {
            case 'un-filter':
                $pro = Products::where('Name', 'like', '%' . $key . '%')->orwhere('Code','like','%'.$key.'%')->get();
                return view('Page.box-pro',['pro'=>$pro]);

                break;
            case 'price-up':
                $pro = Products::where('Name', 'like', '%' . $key . '%')->orwhere('Code','like','%'.$key.'%')->orderBy('Price', 'asc')->get();
                return view('Page.box-pro',['pro'=>$pro]);
                break;
            case 'price-down':
                $pro = Products::where('Name', 'like', '%' . $key . '%')->orwhere('Code','like','%'.$key.'%')->orderByDesc('Price')->get();
                return view('Page.box-pro',['pro'=>$pro]);
                break;
            case 'sale':
                break;
        }

    }
 public  function  changepassword()
 {
     return view('Page.account.changepassword');
 }

    public  function  contact()
    {
        return view('Page.contact');
    }
}

