<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class logbarang extends Model
{
    use HasFactory;
    protected $table = 'logbarang';
    protected $fillable = [
        'id_barang',
        'idUsers',
        'nama_barang',
        'namauser',
        'jumlah_barang',
        'expired',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'idUsers', 'id');
    }

    public function barang()
    {
        return $this->belongsTo(barang::class, 'id_barang', 'id');
    }
}
