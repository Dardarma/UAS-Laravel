<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alamat extends Model
{
    use HasFactory;
    protected $table = 'alamats';
    protected $fillable = [
        'idUsers',
        'provinsi',
        'kota',
        'Kecamatan',
        'kelurahan',
        'RT',
        'RW',
        'detail_alamat',
        'kode_pos',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'idUsers', 'id');
    }
}
