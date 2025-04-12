<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthenticateUserController extends Controller
{
    public function showLoginForm(){
        return view('user.login-user');
    }

    public function loginUser(Request $request){
        $login_data = $request->validate([
            'login_email' => 'required',
            'login_password' => 'required',
        ]);

        if(auth()->attempt(['email' => $login_data['login_email'], 'password' => $login_data['login_password']])){
            $request->session()->regenerate();
            return redirect()->intended(route('admin.dashboard'));
        }else{
            return "Login Failed";
        }
    }

    public function logoutUser(){
        auth()->logout();
        return redirect('/login');
    }
}
