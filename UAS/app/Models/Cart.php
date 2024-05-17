<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{

    use HasFactory;
    protected $table = 'cart';
    protected $fillable = ['id_user','id_barang'];

    public function barang()
    {
        return $this->hasOne(Barang::class, 'id_barang', 'id'); 
    }

    public function user()
    {
        return $this->hasOne(Users::class, 'id_user', 'id');
    }

}
