<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_pembayaran extends Model
{
    use HasFactory;
    protected $table='detail_pembayarans';
    protected $fillable = [
        'id_user',
        'jumlah_barang',
        'total_harga',
        'status',
        
    ];

    public function user()
    {
        return $this->belongsTo(Users::class, 'id_user', 'id');
    }   
}
