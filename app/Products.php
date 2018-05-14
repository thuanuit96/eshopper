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

}
