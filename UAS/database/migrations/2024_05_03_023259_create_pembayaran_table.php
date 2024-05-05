<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_barang');
            $table->unsignedBigInteger('idUsers');
            $table->unsignedBigInteger('idlogbarang');
            $table->string('nama_barang');
            $table->string('namauser');
            $table->string('jumlah_barang');
            $table->string('harga_barang');
            $table->string('total_harga');
            $table->string('validasi');
            $table->string('bukti_pembayaran');
            $table->timestamps();

            $table->foreign('id_barang')->references('id')->on('barangs');
            $table->foreign('idUsers')->references('id')->on('users');
            $table->foreign('idlogbarang')->references('id')->on('logbarang');

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran');
    }
};
