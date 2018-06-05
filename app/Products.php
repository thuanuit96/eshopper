<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
 protected  $table='Products';
    protected $guarded =[];
    protected $primaryKey = "Id";


    public function category()
    {
        return $this->belongsTo('App\Categories','cat_id');
    }
    public function Order_detail()
    {
        return $this->hasOne('App\Oderdetail','ProductId');
    }
    public function subcategory()
    {
        return $this->belongsTo('App\SubCategory','SubCategoryId');

    }

    public function color()
    {
        return $this->hasOne('App\product_colors','product_id','Id');
    }

    public function size(){
        return $this->hasMany('App\product_sizes','product_id','Id');

    }

}
