<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usercart extends Model
{
    use HasFactory;
    protected $table = 'usercart';
    protected $fillable = [
        'id_barang',
        'idUsers',
        'idlogbarang',
        'nama_barang',
        'namauser',
        'jumlah_barang',
        'harga_barang',
        'total_harga',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'idUsers', 'id');
    }
    public function barang()
    {
        return $this->belongsTo(barang::class, 'id_barang', 'id');
    }
    public function logbarang()
    {
        return $this->belongsTo(logbarang::class, 'idlogbarang', 'id');
    }
    
}
