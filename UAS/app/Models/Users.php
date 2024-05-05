<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
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
}       
