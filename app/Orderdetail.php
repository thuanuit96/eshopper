<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orderdetail extends Model
{
    protected  $table='Order_Detail';
    public  function product_order(){
        return $this->belongsToMany('App\Products','ProductId','Id');
    }
}
