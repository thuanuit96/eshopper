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
            return view('back-end.products.list',['pro'=>$pro,'cat'=>$cat,'cat_id'=>$id]);
        } else {
            $pro = Products::paginate(10);
            $cat= Categories::all();
            return view('back-end.products.list',['pro'=>$pro,'cat'=>$cat,'loai'=>0]);
        }

    }
    public function getadd($id)
    {
        $loai = Category::where('id',$id)->first();
        $p_id = $loai->parent_id;
        $p_name = Category::where('id',$p_id)->first();
        $cat= Category::where('parent_id',$p_id)->get();
        $pro = Products::all();
        if ($p_id >=19) {
            return view('back-end.products.pc-add',['data'=>$pro,'cat'=>$cat,'loai'=>$p_name->name]);
        }
        else {
            return view('back-end.products.add',['data'=>$pro,'cat'=>$cat,'loai'=>$p_name->name]);
        }


    }
    public function postadd(AddProductsRequest $rq)
    {
        $pro = new Products();

        $pro->Name = $rq->txtname;
//        $pro->slug = str_slug($rq->txtname,'-');
        $pro->Price = $rq->txtprice;
        $pro->Size = $rq->txtsize;
        $pro->Color = $rq->txtcolor;
        $pro->Description = $rq->txtdescription;
        $pro->Discount = $rq->txtdiscount;
        $pro->Status = $rq->txtstatus;
        $pro->Image1= $rq->txtimg1;
        $pro->Image2= $rq->txtimg2;
        $pro->Image3= $rq->txtimg3;
        $pro->Image4= $rq->txtimg4;
        $pro->SubCategoryId= $rq->sltsubcate;

        $pro->user_id = Auth::guard('admin')->user()->id;
        $pro->created_at = new datetime;
        $pro->status = '1';
        $f = $rq->file('txtimg')->getClientOriginalName();
        $filename = time().'_'.$f;
        $pro->images = $filename;
        $rq->file('txtimg')->move('uploads/products/',$filename);
        $pro->save();
        $pro_id =$pro->id;

        $detail = new Pro_details();

        $detail->cpu = $rq->txtCpu;
        $detail->ram = $rq->txtRam;
        $detail->screen = $rq->txtScreen;
        $detail->vga = $rq->txtVga;
        $detail->storage = $rq->txtStorage;
        $detail->exten_memmory =$rq->txtExtend;
        $detail->cam1 = $rq->txtCam1;
        $detail->cam2 = $rq->txtCam2;
        $detail->sim = $rq->txtSIM;
        $detail->connect = $rq->txtConnect;
        $detail->pin = $rq->txtPin;
        $detail->os = $rq->txtOs;
        $detail->note = $rq->txtNote;
        $detail->pro_id = $pro_id;

        if ($rq->txtCam1=='') {
            $detail->cam1='không có';
        }
        if ($rq->txtCam2=='') {
            $detail->cam2='không có';
        }
        if ($rq->exten_memmory =='') {
            $detail->exten_memmory= $rq->txtCase;
        }
        if ($rq->pin =='') {
            $detail->pin= 'Không có';
        }
        if ($rq->sim =='') {
            $detail->sim= 'Không có';
        }
        if ($rq->note =='') {
            $detail->note= 'Không có';
        }

        $detail->created_at = new datetime;
        $detail->save();

        if ($rq->hasFile('txtdetail_img')) {
            $df = $rq->file('txtdetail_img');
            foreach ($df as $row) {
                $img_detail = new Detail_img();
                if (isset($row)) {
                    $name_img= time().'_'.$row->getClientOriginalName();
                    $img_detail->images_url = $name_img;
                    $img_detail->pro_id = $pro_id;
                    $img_detail->created_at = new datetime;
                    $row->move('uploads/products/details/',$name_img);
                    $img_detail->save();
                }
            }
        }
        return redirect('admin/sanpham/all')
            ->with(['flash_level'=>'result_msg','flash_massage'=>' Đã thêm thành công !']);

    }
    public function getdel($id)
    {
        $detail = Detail_img::where('pro_id',$id)->get();
        foreach ($detail as $row) {
            $dt = Detail_img::find($row->id);
            $pt = public_path('uploads/products/details/').$dt->images_url;
            // dd($pt);
            if (file_exists($pt))
            {
                unlink($pt);
            }
            $dt->delete();
        }
        $pro = Products::find($id);
        $pro->delete();
        return redirect('admin/sanpham/all')
            ->with(['flash_level'=>'result_msg','flash_massage'=>'Đã xóa !']);
    }
    public function getedit($id)
    {
        $pro = Products::where('Id',$id)->first();
        $cat=Categories::all();
        $subcat=SubCategory::all();
        return view('back-end.products.edit-mobile',['pro'=>$pro,'cat'=>$cat,'subcat'=>$subcat]);
//        $subcat_id=  $pro->SubCategoryId!=null?$pro->SubCategoryId:null;
//        $subcategory= SubCategory::where('Id',$subcat_id)->first();
//        $cat_id=$subcategory->CategoryId!=null?$subcategory->CategoryId:null;
//        $category=Categories::where('Id',$cat_id)->first();
//



//        }

    }
    public function postedit(Request $rq,$id)

    {
         $data=$rq->all();
        $pro = Products::find($rq->txtid);
//        dd($pro);

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
