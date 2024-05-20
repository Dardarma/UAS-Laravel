<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        return view('user.landingpage',[
            'judul' => 'Beranda'
        ]);
    }

    public function store()
    {
        return view('user.storepage',[
            'judul' => 'store'
        ]);
    }

    



       
    public function User_list()
    {
        return view('admin.User_list',[
            'judul' => 'User_list'
        ]);
    }

    public function Barang_list()
    {
        return view('admin.Barang_list',[
            'judul' => 'Barang_list'
        ]);
    }

    public function Login_admin()
    {
        return view('admin.login',[
            'judul' => 'Login_admin'
        ]);
    }

    public function Register_admin()
    {
        return view('admin.User_add',[
            'judul' => 'Register_admin'
        ]);
    }

    public function Register_barang()
    {
        return view('admin.add_barang',[
            'judul' => 'Register_barang'
        ]);
    }

    

}
