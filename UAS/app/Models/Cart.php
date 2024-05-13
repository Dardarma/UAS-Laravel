<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{

    use HasFactory;
    protected $table = 'carts';
    protected $fillable = ['idUsers','idBarang','jumlah_barang','harga_barang','nama_barang','nama_user'];

    public function barang(){
        return $this->belongsTo(Barang::class,'id_barang','id');
    }

    public function user(){
        return $this->belongsTo(User::class,'id_user','id');
    }

}
