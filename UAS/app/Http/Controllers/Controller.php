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

    
    public function admin()
    {
        return view('admin.home_admin',[
            'judul' => 'store'
        ]);
    }

       
    public function User_list()
    {
        return view('admin.User_list',[
            'judul' => 'User_list'
        ]);
    }


}
