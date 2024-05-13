<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Barang;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Barang::create([
            'nama_barang' => 'Sepatu',
            'foto_barang' => 'sepatu.jpg',
            'deskripsi_barang' => 'Sepatu Nike',
            'harga_barang' => 1000000,
            'stok_barang' => 10
        ]);
        Barang::create([
            'nama_barang' => 'Baju',
            'foto_barang' => 'baju.jpg',
            'deskripsi_barang' => 'Baju Adidas',
            'harga_barang' => 500000,
            'stok_barang' => 20
        ]);
        Barang::create([
            'nama_barang' => 'Celana',
            'foto_barang' => 'celana.jpg',
            'deskripsi_barang' => 'Celana Levis',
            'harga_barang' => 700000,
            'stok_barang' => 15
        ]);
    }
}
