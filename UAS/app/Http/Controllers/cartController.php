<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Cart;
use App\Models\Pembayaran;
use Illuminate\Support\Facades\Auth;


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

    public function store_login()
    {
        {
            $barangs = Barang::all();
    
            $user = Auth::user()->id;
    
            $userid = auth()?->user()?->id;
    
            $count = Cart::where('id_user', $userid)->count();
    
            return view('user.storepage',compact('barangs','count'),
            [ 'judul' => 'store_login']);
        }
    }
    


    

}
