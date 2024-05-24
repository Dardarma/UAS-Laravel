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

        if(Auth::check()){
            $user = Auth::user();
            $user_id = $user->id;
            $count = Cart::where('id_user', $user_id)->count();
            $cart = Cart::where('id_user', $user_id)->with('barang')->get();
            
            $total = $cart->sum(function($cart){
                return $cart->barang->harga_barang ;
            });



        }

    
          
       return view('user.cart',(compact('cart','count','user','total')),
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

    public function delete_cart($id)
    {
        $cart = Cart::find($id);
        $cart->delete();
        return redirect()->back();
    }

    public function update_cart(Request $request)
    {
        $cart = Cart::find($request->id);
        $cart->jumlah_item = $request->jumlah_item;
        $cart->subtotal_harga = $cart->jumlah_item * $cart->barang->harga_barang;
        $cart->save();
        
        return redirect()->back();
    }



    

}
