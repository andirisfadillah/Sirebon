<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;


class LoginController extends Controller
{
    public function halamanlogin()
    {
        return view('Login.Login-aplikasi');
    }

    public function postlogin(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {

            if(auth()->user()->level == 'admin'){
                return redirect('/home');
            }else{
                return redirect('/prf');
            }
        }
        return redirect('/login')->with('error', 'Username atau password salah!');
    }
    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
