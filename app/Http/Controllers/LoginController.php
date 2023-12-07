<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('admin.login',[
            "title" => "admin"
        ]);
    }
    public function autenticate( Request $request ){

        $credensials = $request->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);

        if(Auth::attempt($credensials)){
            $request->session()->regenerate();
            return redirect()->intended('/dasboard');
        }

        return back()->with('loginError','Login Gagal bos');

    }

}
