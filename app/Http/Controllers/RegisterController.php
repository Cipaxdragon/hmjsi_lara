<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('admin.register', [
            "title" => "admin"
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate(([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email:dns', 'min:3', 'max:255', 'unique:users'],
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'password' => ['required', 'min:5', 'max:255', 'unique:users'],
        ]));
        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        // $request->session()->flash('success','Registrasi Berhasil Silahkan Login');

        return redirect('/login')->with('success','Registrasi Berhasil Silahkan Login');
    }
}
