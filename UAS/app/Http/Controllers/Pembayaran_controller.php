<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Cart;
use App\Models\Pembayaran;
use App\Models\Users;

use Illuminate\Support\Facades\Auth;

class Pembayaran_controller extends Controller
{
    public function addTocart($id)
    {
        $product_id = $id;
        $user = Auth::user();
        $user_id = $user->id;
        
        $data = new Cart;

        $data->id_user = $user_id;
        $data->id_barang = $product_id;
        $data->save();

        return redirect()->back();
    }
    
}
