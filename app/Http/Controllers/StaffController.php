<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;

class StaffController extends Controller
{ public function getlist()
{
    $data = Staff::paginate(10);
    return view('Admin.staff.list',['data'=>$data]);
}
}
