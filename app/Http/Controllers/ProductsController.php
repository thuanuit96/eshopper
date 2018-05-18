<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Categories;
use App\SubCategory;
use DateTime,File,Input,DB;


class ProductsController extends Controller
{

    public function getlist($id)
    {
        if ($id!='all') {
            $pro = Products::where('CategoryId',$id)->paginate(10);
            $cat= Categories::all();
            return view('Admin.products.list',['pro'=>$pro,'cat'=>$cat,'cat_id'=>$id]);
        } else {
            $pro = Products::paginate(10);
            $cat= Categories::all();
            return view('Admin.products.list',['pro'=>$pro,'cat'=>$cat,'loai'=>0]);
        }

    }
    public function getadd()
    {

         return view('Admin.products.add');
    }
    public function postadd(Request $rq)
    {
        $pro = new Products();
        $pro->slug = str_slug($rq->txtname,'-');
        $pro->Price = $rq->txtprice;
        $pro->Size = $rq->txtsize;
        $pro->Color = $rq->txtcolor;
        $pro->Description = $rq->txtdescription;
        $pro->Discount = $rq->txtdiscount;
        $pro->Status = $rq->txtstatus;
        $pro->SubCategoryId= $rq->sltsubcate;
        $file_path = public_path('images/product/').$pro->Image1;
        if ($rq->hasFile('txtimg1')) {
            if($pro->Image1){
                if (file_exists($file_path))
                {
                    unlink($file_path);
                }}


            $f = $rq->file('txtimg1')->getClientOriginalName();
            $filename = time().'_'.$f;
            $pro->Image1 = $filename;
            $rq->file('txtimg1')->move('images/product/',$filename);
        }

        $file_path = public_path('images/product/').$pro->Image2;

        if ($rq->hasFile('txtimg2')) {
            if($pro->Image2){
                if (file_exists($file_path))
                {
                    unlink($file_path);
                }
            }

            $f = $rq->file('txtimg2')->getClientOriginalName();
            $filename = time().'_'.$f;
            $pro->Image2 = $filename;
            $rq->file('txtimg2')->move('images/product/',$filename);
        }
        $file_path = public_path('images/product/').$pro->Image3;

        if ($rq->hasFile('txtimg3')) {
            if($pro->Image3){
                if (file_exists($file_path))
                {
                    unlink($file_path);
                }
            }

            $f = $rq->file('txtimg3')->getClientOriginalName();
            $filename = time().'_'.$f;
            $pro->Image3 = $filename;
            $rq->file('txtimg3')->move('images/product/',$filename);
        }

        $pro->save();
        return redirect('admin/sanpham/all')
            ->with(['flash_level'=>'result_msg','flash_massage'=>' Đã thêm thành công !']);

    }
    public function getdel($id)
    {


        $pro = Products::find($id);
        if($pro->Image3){
            $file_path = public_path('images/product/').$pro->Image3;
            unlink($file_path);
        }

        if($pro->Image2) {
            $file_path = public_path('images/product/') . $pro->Image2;
            unlink($file_path);
        }
        if($pro->Image1) {
            $file_path = public_path('images/product/') . $pro->Image1;
            unlink($file_path);
        }
        $pro->delete();
        return redirect('admin/sanpham/all')
            ->with(['flash_level'=>'result_msg','flash_massage'=>'Xóa thành công']);
    }
    public function getedit($id)
    {
        $pro = Products::where('Id',$id)->first();
        $cat=Categories::all();
        $subcat=SubCategory::all();
        return view('Admin.products.edit',['pro'=>$pro,'cat'=>$cat,'subcat'=>$subcat]);
//        $subcat_id=  $pro->SubCategoryId!=null?$pro->SubCategoryId:null;
//        $subcategory= SubCategory::where('Id',$subcat_id)->first();
//        $cat_id=$subcategory->CategoryId!=null?$subcategory->CategoryId:null;
//        $category=Categories::where('Id',$cat_id)->first();
//



//        }

    }
    public function postedit(Request $rq,$id)

    {

        $pro = Products::find($rq->txtid);
        $pro->Name=$rq->txtname;
        $pro->slug = str_slug($rq->txtname,'-');
        $pro->Price = $rq->txtprice;
        $pro->Size = $rq->txtsize;
        $pro->Color = $rq->txtcolor;
        $pro->Description = $rq->txtdescription;
        $pro->Discount = $rq->txtdiscount;
        $pro->Status = $rq->txtstatus;
        $pro->SubCategoryId= $rq->sltsubcate;
        $file_path = public_path('images/product/').$pro->Image1;
        if ($rq->hasFile('txtimg1')) {
            if($pro->Image1){
                    if (file_exists($file_path))
            {
                unlink($file_path);
            }}


            $f = $rq->file('txtimg1')->getClientOriginalName();
            $filename = time().'_'.$f;
            $pro->Image1 = $filename;
            $rq->file('txtimg1')->move('images/product/',$filename);
        }

        $file_path = public_path('images/product/').$pro->Image2;

        if ($rq->hasFile('txtimg2')) {
            if($pro->Image2){
                if (file_exists($file_path))
                {
                    unlink($file_path);
                }
            }

            $f = $rq->file('txtimg2')->getClientOriginalName();
            $filename = time().'_'.$f;
            $pro->Image2 = $filename;
            $rq->file('txtimg2')->move('images/product/',$filename);
        }
        $file_path = public_path('images/product/').$pro->Image3;

        if ($rq->hasFile('txtimg3')) {
            if($pro->Image3){
                if (file_exists($file_path))
                {
                    unlink($file_path);
                }
            }

            $f = $rq->file('txtimg3')->getClientOriginalName();
            $filename = time().'_'.$f;
            $pro->Image3 = $filename;
            $rq->file('txtimg3')->move('images/product/',$filename);
        }

        $pro->save();


        return redirect('admin/sanpham/all')
            ->with(['flash_level'=>'result_msg','flash_massage'=>' Đã lưu !']);
    }
}
