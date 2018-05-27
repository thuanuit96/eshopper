<?php

namespace App\Http\Controllers;
use Session;

use Illuminate\Http\Request;
use Socialite;
use App\User;
use Auth;
use App\Services\SocialAccountService;

class SocialAuthController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleProviderCallback()
    {
        $provider='facebook';

        // Sau khi xác thực Facebook chuyển hướng về đây cùng với một token
        // Các xử lý liên quan đến đăng nhập bằng mạng xã hội cũng đưa vào đây.
//
        $user = Socialite::driver('facebook')->stateless()->user();

        $authUser = $this->findOrCreateUser($user, $provider);
        Auth::login($authUser, true);
        Session::put('account',Auth::user()->name);

        return redirect('/');


    }
    public function findOrCreateUser($user, $provider)
    {
        $authUser = User::where('provider_id', $user->id)->first();

        if ($authUser) {
            return $authUser;
        }
        return User::create([
            'name'     => $user->name,
            'email'    => $user->email,
            'password'=>$user->name,
            'provider' =>'facebook',
            'provider_id' => $user->id
        ]);
    }
}
