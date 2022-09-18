<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Http\Request;
use App\Models\User;

class lgController extends Controller
{
    public function index(){
       
        return view('login.login');
    }

    public function _construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function halamanLogin(){
        return view('login.login');
    }
    
    public function Login(Request $request){

        $credentials = $request->only([
            'name',
            'email',
            'password',
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect('/dashboard');
        }

       return redirect('/')->with('message','Masuk gagal ! Email dan kata sandi tidak ditemukan');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }

}