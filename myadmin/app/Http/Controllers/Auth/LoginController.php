<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLogin(){
        return view('auth.pages.login');
    }
    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        $remember = !is_null($request->request) ? true : false;

        if (Auth::attempt($credentials, $remember)) {
            return redirect()->route('admin.home');
        }

        return redirect()->back()->withInput()->withErrors(['email' => 'Email yada şifrəniz yalnışdır !']);
    }
    public function logout(Request $request){
        if ((Auth::check()))
        {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
        };
    }

    public function showRegister(){
        return view('auth.pages.register');
    }

}
