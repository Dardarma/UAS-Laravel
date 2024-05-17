<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detai_pembayaran extends Model
{
    use HasFactory;
    protected $table = 'detail_pembayaran';
    protected $fillable = ['id_pembayaran','id_barang','status'];

    public function barang()
    {
        return $this->hasOne(Barang::class, 'id_barang', 'id');
    }

    public function pembayaran()
    {
        return $this->hasOne(Pembayaran::class, 'id_pembayaran', 'id');
    }

}
