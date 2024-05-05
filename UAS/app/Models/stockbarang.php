<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stockbarang extends Model
{
    use HasFactory;
    protected $table = 'stockbarang';
    protected $filable =[
        'id_barang',
        'idlogbarang',
        'nama_barang',
        'jumlah_barang',
    ];

    public function barang()
    {
        return $this->belongsTo(barang::class, 'id_barang', 'id');
    }

    public function logbarang()
    {
        return $this->belongsTo(logbarang::class, 'idlogbarang', 'id');
    }
}
