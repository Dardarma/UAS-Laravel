<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{

    use HasFactory;
    protected $table = 'barangs';
    protected $fillable = ['nama_barang','foto_barang','deskripsi_barang','harga_barang','stok_barang'];

    public function cart(){
        return $this->hasMany(Cart::class);
    }

    public function pembayaran(){
        return $this->hasMany(Pembayaran::class);
    }
}
