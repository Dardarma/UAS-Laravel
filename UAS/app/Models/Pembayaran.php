<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    use HasFactory;
    protected $table='pembayaran';
    protected $fillable = [
        'nama_user',
        'alamat',
        'no_telp',
        'status',
        'ekspedisi',
        'harga',
        'subtotal_harga',
        'jumlah_barang',
        'id_user',
        'id_barang',
        'id_detail_pembayaran',
        
    ];
}
