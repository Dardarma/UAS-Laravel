<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Barang;

class cartController extends Controller
{
    public function index()
    {
       return view('user.cart',
       [ 'judul' => 'cart']);
    }

    public function store()
    {
        $barangs = Barang::all();
        return view('user.storepage',compact('barangs'),
        [ 'judul' => 'store']);
    }


    

}
