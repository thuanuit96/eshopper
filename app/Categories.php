<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = "categories";


    public function get_subcategory(){
        return $this->hasMany('App\SubCategory','CategoryId','Id');
    }

}
