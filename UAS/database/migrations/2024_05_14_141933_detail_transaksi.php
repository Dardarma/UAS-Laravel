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
        Schema::create('detail_pembayaran', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pembayaran');
            $table->unsignedBigInteger('id_barang');
            $table->timestamps();

            $table->foreign('id_pembayaran')->references('id')->on('pembayaran');
            $table->foreign('id_barang')->references('id')->on('barangs');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_pembayaran');
    }
};
