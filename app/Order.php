<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "Order";
    protected $primaryKey = "Id";
    public function  order_detail(){
        return $this->hasOne('App\Orderdetail', 'OrderId', 'Id');

    }

}
