<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class session extends Controller
{
    //

    public function login(){
        return view('admin.login');
    }

    public function login_pros(Request $request){

 
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'

        ]);

        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {
            return redirect()->route('admin');
        } else {
            return redirect()->route('tlogin')->with('error', 'Email atau Password salah');
        }
        
    }

}
