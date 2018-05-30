<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Auth;
use App\Staff;

class AdminLoginController extends Controller
{
    public function getLogin()
    {
        if (Auth::check()) {
            // nếu đăng nhập thàng công thì
            return redirect('admin/home');
        } else {
            return view('admin.auth.login');
        }

    }
    public function postLogin(LoginRequest $request)
    {
        $login = [
            'email' => $request->email,
            'password' => $request->password,
            'level' => 1,
        ];
        if (Auth::attempt($login)) {
            return redirect('admin/home');
        } else {
            return redirect()->back()->with('status', 'Email hoặc Password không chính xác');
        }
    }
    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('getLogin');
    }
}
