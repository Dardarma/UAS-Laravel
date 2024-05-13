<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\Barang;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;

class BarangController extends Controller
{
    public function index ()
    {  
        $barangs = Barang::all();
        return view('admin.Barang_list',compact('barangs'));
        
    }

    public function Tambah_barang(Request $request):RedirectResponse
    {
            $request->validate([
                'nama_barang' => 'required|string|max:255',
                'foto_barang' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'deskripsi_barang' => 'required|string',
                'harga_barang' => 'required|integer',
                'stok_barang' => 'required|integer',
            ]);

            $barangs = Barang::create([
                'nama_barang' => $request->nama_barang,
                'foto_barang' => $request->foto_barang,
                'deskripsi_barang' => $request->deskripsi_barang,
                'harga_barang' => $request->harga_barang,
                'stok_barang' => $request->stok_barang,
            ]);

            if ($request->hasFile('foto_barang')) {
                $request->file('foto_barang')->move('foto_barang/', $request->file('foto_barang')->getClientOriginalName());
                $barangs->foto_barang = $request->file('foto_barang')->getClientOriginalName();
                $barangs->save();
            }

            return redirect()->route('Barang_list')->with('success', 'Barang berhasil ditambahkan');
    }

    public function tEdit_barang($id)
    {
        $barangs = Barang::find($id);
        return view('admin.edit_barang',compact('barangs'));
    }

    public function Edit_barang(Request $request, $id):RedirectResponse
    {
        $request->validate([
        'nama_barang' => 'required|string|max:255',
        'foto_barang' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg:max:2048',
        'deskripsi_barang' => 'required|string',
        'harga_barang' => 'required|integer',
        ]);

        $barangs = Barang::find($id);
        $barangs->nama_barang = $request->nama_barang;
        $barangs->deskripsi_barang = $request->deskripsi_barang;
        $barangs->harga_barang = $request->harga_barang;

        if ($request->hasFile('foto_barang')) {
            $file = $request->file('foto_barang');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('foto_barang'), $filename);
            $barangs->foto_barang = $filename;
        }

        $barangs->save();

        return redirect()->route('Barang_list')->with('success', 'Barang berhasil diupdate');
    }

    public function Delete_barang($id)
    {
        $barangs = Barang::find($id);
        $barangs->delete();
        return redirect()->route('Barang_list')->with('success', 'Barang berhasil dihapus');
    }
}
