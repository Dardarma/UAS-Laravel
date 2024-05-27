<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Cart;
use App\Models\Pembayaran;
use App\Models\Users;
use App\Models\detail_pembayaran;
use Carbon\Carbon;

use Illuminate\Support\Facades\Auth;

class Pembayaran_controller extends Controller
{
    public function addTocart($id)
{
    $product_id = $id;
    $user = Auth::user();
    $user_id = $user->id;

    // Cek apakah produk sudah ada di keranjang
    $existingCartItem = Cart::where('id_user', $user_id)
                            ->where('id_barang', $product_id)
                            ->first();

    if ($existingCartItem) {
        // Jika produk sudah ada, tambahkan jumlah item
        $existingCartItem->jumlah_item += 1;
        $existingCartItem->save();
    } else {
        // Jika produk belum ada, tambahkan produk baru ke keranjang
        $data = new Cart;
        $data->id_user = $user_id;
        $data->id_barang = $product_id;
        $data->jumlah_item = 1; // Set jumlah item menjadi 1 untuk produk baru
        $data->subtotal_harga = Barang::find($product_id)->harga_barang; // Set subtotal harga
        $data->save();
    }

    return redirect()->back();
}

    public function checkout(Request $request)
    {
        $nama = $request->nama_user;
        $alamat = $request->alamat;
        $no_telp = $request->no_telp;
        $userid = Auth::user()->id;
        $cart = Cart::where('id_user', $userid)->get();
    
        // Buat detail_pembayaran baru setiap kali checkout dengan timestamp unik hingga detik
        $detail_pembayaran = new detail_pembayaran;
        $detail_pembayaran->id_user = $userid;
        $detail_pembayaran->jumlah_barang = 0;
        $detail_pembayaran->total_harga = 0;
        $detail_pembayaran->created_at = Carbon::now(); // Timestamp unik hingga detik
        $detail_pembayaran->save();
    
        foreach($cart as $c) {
            $checkout = new Pembayaran;
            $checkout->id_user = $userid;
            $checkout->id_barang = $c->id_barang;
            $checkout->nama_user = $nama;
            $checkout->alamat = $alamat;
            $checkout->ekspedisi = $request->ekspedisi;
            $checkout->no_telp = $no_telp;
            $checkout->harga = $c->barang->harga_barang;
            $checkout->jumlah_barang = $c->jumlah_item;
            $checkout->subtotal_harga = $c->subtotal_harga;
            $checkout->id_detail_pembayaran = $detail_pembayaran->id; // Set detail_pembayaran_id
            $checkout->save();
    
            $detail_pembayaran->jumlah_barang += 1;
            $detail_pembayaran->total_harga += $c->barang->harga_barang;
        }
    
        $detail_pembayaran->save();
    
        // Hapus item dari cart
        Cart::where('id_user', $userid)->delete();
    
        return redirect()->route('store_login');
    }

    public function detail_checkout()
    {



    // Ambil semua detail_pembayaran untuk user ini
    $detail_pembayarans = detail_pembayaran::all();

    // Array untuk menyimpan data yang dikelompokkan
    $grouped_checkouts = [];

    
    foreach ($detail_pembayarans as $detail_pembayaran) {

        $checkouts = Pembayaran::where('id_detail_pembayaran', $detail_pembayaran->id)->get();
        $grouped_checkouts[] = [
            'detail_pembayaran' => $detail_pembayaran,
            'checkouts' => $checkouts,
        ];}

      
        return view('admin.home_admin', [
            'grouped_checkouts' => $grouped_checkouts,
            'judul' => 'admin'
        ]);
    }


   public function updateStatusPembayaran(Request $request, $id)
{
    $pembayaran = Pembayaran::find($id);

    if ($pembayaran->detailPembayaran && $pembayaran->detailPembayaran->status) {
        return redirect()->back()->with('error', 'Status tidak bisa diubah karena detail pembayaran sudah disimpan.');
    }

    $pembayaran->status= $request->status;
    $pembayaran->save();

    return redirect()->back()->with('success', 'Status pembayaran berhasil diubah.');
}

public function updateStatusdetailPembayaran(Request $request, $id)
{
    $detail_pembayaran = detail_pembayaran::find($id);
    
    if ($detail_pembayaran->status == true) {
        return redirect()->back()->with('error', 'Detail pembayaran sudah disimpan.');
    }

    $checkouts = Pembayaran::where('id_detail_pembayaran', $id)->get();
    
    $totalHargaBaru = 0;
    $jumlahBarangBaru = 0;

    foreach ($checkouts as $c) {
        $barang = Barang::find($c->id_barang);
        
        if ($c->status === 'terima') {
            if ($barang->stok_barang >= $c->jumlah_barang) {
                $barang->stok_barang -= $c->jumlah_barang;
                $barang->save();

                // Tambahkan subtotal harga dan jumlah barang yang diterima
                $totalHargaBaru += $c->subtotal_harga;
                $jumlahBarangBaru += $c->jumlah_barang;
            } else {
                return redirect()->back()->with('error', 'Stok barang tidak mencukupi untuk barang ' . $barang->nama_barang);
            }
        }
    }

    // Set total harga dan jumlah barang pada detail_pembayaran berdasarkan pembayaran yang diterima
    $detail_pembayaran->total_harga = $totalHargaBaru;
    $detail_pembayaran->jumlah_barang = $jumlahBarangBaru;
    $detail_pembayaran->status = true;
    $detail_pembayaran->save();

    return redirect()->back()->with('success', 'Status detail pembayaran berhasil diubah.');
}


public function cleardetailpembayaran($id)
{
    $detail_pembayaran = detail_pembayaran::find($id);
    $detail_pembayaran->delete();

    return redirect()->back()->with('success', 'Detail pembayaran berhasil dihapus.');
}


public function cetak_struk($id)
{
    $detail_pembayaran = detail_pembayaran::find($id);
    if($detail_pembayaran->status==true){
        $checkouts = Pembayaran::where('id_detail_pembayaran', $id)->get();
    }

    return view('user.profil', [
        'detail_pembayaran' => $detail_pembayaran,
        'checkouts' => $checkouts,
        'judul' => 'Cetak Struk'
    ]);


}

}