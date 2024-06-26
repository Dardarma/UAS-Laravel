<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

        $user = \App\Models\Users::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            if ($user->role == 'admin') {
                return redirect()->route('admin');
            } else {
                return redirect('/');
            }
        } else {
            return redirect()->route('tlogin')->with('error', 'Email atau Password salah');
        }
        
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

}
