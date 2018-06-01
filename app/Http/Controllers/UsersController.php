<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UsersController extends Controller
{
   public function getlist()
   {
   		$data = User::paginate(10);
    	return view('Admin.users.list',['data'=>$data]);
   }
   public function getedit($id)
   {
   		$data = User::where('id',$id)->first();
   		return view('Admin.users.edit',['data'=>$data]);
   }
}
