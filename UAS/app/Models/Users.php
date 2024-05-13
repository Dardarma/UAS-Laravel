<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model implements AuthenticatableContract
{
    use HasFactory, Authenticatable;
    protected $table = 'users';
    protected $fillable = ['nama','email','password','role','Hp'];
    protected $hidden = ['password'];

    protected function casts()
    {
        return [
            'email_verified_at' => 'datetime',
            'password'=>'hased'
        ];
    }

    public function pembayaran(){
        return $this->hasMany(Pembayaran::class);
    }

    public function cart(){
        return $this->hasMany(Cart::class);
    }   
}
