<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{

    use HasFactory;
    protected $table = 'pembayarans';
    protected $fillable = ['id_user','id_barang','id_cart','nama_user','total_harga','validasi','bukti_pembayaran'];   
    
    public function barang(){
        return $this->belongsTo(Barang::class,'id_barang','id');
    }
    
    public function user(){
        return $this->belongsTo(User::class,'id_user','id');
    }

    public function cart(){
        return $this->belongsTo(Cart::class,'id_cart','id');
    }
 
}
