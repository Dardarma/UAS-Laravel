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
        Schema::create('logbarang', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_barang');
            $table->unsignedBigInteger('idUsers');
            $table->string('nama_barang');
            $table->string('namauser');
            $table->string('jumlah_barang');
            $table->string('expired');
            $table->timestamps();

            $table->foreign('id_barang')->references('id')->on('barangs');
            $table->foreign('idUsers')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logbarang');
    }
};
