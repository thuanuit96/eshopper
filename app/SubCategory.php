<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $table = "SubCategory";
    public function get_category(){
        return $this->belongsTo('App\Categories','id_type','id');
    }
}
