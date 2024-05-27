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
    public function user()
    {
        return $this->belongsTo(Users::class, 'id_user', 'id');
    }
    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_barang', 'id');
    }
}
