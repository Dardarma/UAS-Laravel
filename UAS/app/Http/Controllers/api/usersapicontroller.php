<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Api\Controller;
use App\Http\Resources\usersresouce;
use Illuminate\Http\Request;
use App\Models\users;
use App\Http\Requests\usersrequest;
use App\Http\Requests\userrequestedit;
class usersapicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return usersresouce::collection(users::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(usersrequest $request)
    {
        $data = $request->validated();

        $users = users::create(
            [
                'nama' => $request->nama,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'role' => $request->role,
                'Hp' => $request->Hp,
            ]
        );

        return usersresouce::make($users);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return usersresouce::make(Users:: FindOrFail($id));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(userrequestedit $request, string $id)
    {
        try {
            // Validasi data yang diterima dari request
            $data = $request->validated();
    
            // Cari pengguna berdasarkan ID
            $users = users::findOrFail($id);
    
            // Perbarui data pengguna dengan data yang diterima
            $users->update($data);
    
            // Mengembalikan resource pengguna yang diperbarui
            return usersresouce::make($users);
        } catch (\Exception $e) {
            // Tangani pengecualian
            return response()->json(['error' => 'Gagal memperbarui pengguna. Terjadi kesalahan: ' . $e->getMessage()], 500);
        }
    }
    
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            // Cari pengguna berdasarkan ID
            $users = users::findOrFail($id);
    
            // Hapus pengguna
            $users->delete();
    
            // Mengembalikan pesan sukses
            return response()->json(['message' => 'Pengguna berhasil dihapus'], 200);
        } catch (\Exception $e) {
            // Tangani pengecualian
            return response()->json(['error' => 'Gagal menghapus pengguna. Terjadi kesalahan: ' . $e->getMessage()], 500);
        }
    }

    
}
